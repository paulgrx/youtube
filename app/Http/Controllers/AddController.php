<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Video;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use DateInterval;

class AddController extends Controller
{
    public function add() {
        return view('add');
    }

    public function submitForm(Request $request)
    {
        $url = $request->url;
        $urlPars = parse_url($url);
        parse_str($urlPars['query'], $output);
        $videoId = $output['v'];

        $client = new Client();
        $response = $client->get('https://youtube.googleapis.com/youtube/v3/videos?id='.$videoId.'&part=snippet,contentDetails,statistics,status&key='.$apiKey = env('YOUTUBE_API_KEY'));

        $data = json_decode($response->getBody(), true);

//        echo '<pre>';
//        print_r($data);
//        echo '<pre>';
//
//        die;
//

        // Получаем channelId из данных о видео
        $channelId = $data['items'][0]['snippet']['channelId'];

        // Запрос к API для получения данных о канале
        $channelResponse = $client->get('https://www.googleapis.com/youtube/v3/channels?id='.$channelId.'&part=snippet&key='.$apiKey = env('YOUTUBE_API_KEY'));

        $channelData = json_decode($channelResponse->getBody(), true);

        // Получаем данные о канале
        $channelPhoto = $channelData['items'][0]['snippet']['thumbnails']['default']['url'];

        // Сохраняем фото канала
        $channelPhotoContents = file_get_contents($channelPhoto);
        $channelPhotoFile = time() . '_channel.jpg';
        file_put_contents(public_path('images/' . $channelPhotoFile), $channelPhotoContents);


        $name = $data['items'][0]['snippet']['title'];
        $channelName = $data['items'][0]['snippet']['channelTitle'];
        $images = $data['items'][0]['snippet']['thumbnails']['medium']['url'];
        $contents = file_get_contents($images);
        $MainPhotoFile = time() . '.jpg';
        file_put_contents(public_path('images/' . $MainPhotoFile), $contents);

        $duration = $data['items'][0]['contentDetails']['duration'];
        $duration = new DateInterval($duration);
        $hours = floor($duration->h + $duration->i / 60);
        $minutes = $duration->i % 60;
        $seconds = $duration->s;
        $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

        function thousandsCurrencyFormat($num) {
            if ($num > 1000) {
                $x = round($num);
                $x_number_format = number_format($x);
                $x_array = explode(',', $x_number_format);
                $x_parts = array('K', 'M', 'b', 't');
                $x_count_parts = count($x_array) - 1;
                $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
                $x_display .= $x_parts[$x_count_parts - 1];

                return $x_display . " views";
            }

            return $num . " views";
        }
        $viewsCount = $data['items'][0]['statistics']['viewCount'];
        $formattedViews = thousandsCurrencyFormat($viewsCount);

        $realiseData = $data['items'][0]['snippet']['publishedAt'];
        $date = new \DateTime($realiseData);
        $now = new \DateTime();
        $interval = $date->diff($now);
        if ($interval->y > 0) {
                $formatted_realiseData = $interval->y . " year(s) ago";
            } elseif ($interval->m > 0) {
                $formatted_realiseData = $interval->m . " month(s) ago";
            } elseif ($interval->d > 0) {
                $formatted_realiseData = $interval->d . " day(s) ago";
            } elseif ($interval->h > 0) {
                $formatted_realiseData = $interval->h . " hour(s) ago";
            } else {
                $formatted_realiseData = $interval->i . " minute(s) ago";
        }
        $videoId = $data['items'][0]['id'];

        Video::create([
            'name' => $name,
            'channel_name' => $channelName,
            'photo_url' => $MainPhotoFile,
            'duration' => $formattedDuration,
            'views_count' => $formattedViews,
            'realise_date' => $formatted_realiseData,
            'channel_photo_url' => $channelPhotoFile,
            'url' => "https://www.youtube.com/watch?v=".$videoId,
            'channelId' =>"https://www.youtube.com/channel/".$channelId
        ]);

        return redirect('/');
    }
}
