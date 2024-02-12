<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Video;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
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

        $images = $data['items'][0]['snippet']['thumbnails']['standard']['url'];
        $contents = file_get_contents($images);
        $MainPhotoFile = time() . '.jpg';
        file_put_contents(public_path('images/' . $MainPhotoFile), $contents);

        $duration = $data['items'][0]['contentDetails']['duration'];
        $duration = new DateInterval($duration);
        $hours = floor($duration->h + $duration->i / 60);
        $minutes = $duration->i % 60;
        $seconds = $duration->s;
        $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

        $viewsCount = $data['items'][0]['statistics']['viewCount'];
        $realiseData = $data['items'][0]['snippet']['publishedAt'];
        $videoId = $data['items'][0]['id'];

        Video::create([
            'name' => $name,
            'channel_name' => $channelName,
            'photo_url' => $MainPhotoFile,
            'duration' => $formattedDuration,
            'views_count' => $viewsCount,
            'realise_date' => $realiseData,
            'channel_photo_url' => $channelPhotoFile,
            'url' => $videoId
        ]);
    }
}
