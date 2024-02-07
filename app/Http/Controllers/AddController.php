<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Video;

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
        $perem = $output['v'];

        $client = new Client();
        $response = $client->get('https://youtube.googleapis.com/youtube/v3/videos?id='.$perem.'&part=snippet,contentDetails,statistics,status&key=AIzaSyBZtu12_Tw0uGlktqYeo3RF8mI0Ztus1Bo');
        echo '<pre>';
        print_r($response);
        echo '<pre>';
        
        die();

        $data = json_decode($response->getBody(), true);

       // $videoId = $data['items'][0]['video-id'];
        $duration = $data['items'][0]['contentDetails']['duration'];
        $images = $data['items'][0]['snippet']['thumbnails'];
        $channelName = $data['items'][0]['snippet']['channelTitle'];

        Video::create([
            'video_id' => $videoId,
            'duration' => $duration,
            'images' => json_encode($images),
            'channel_name' => $channelName
        ]);
    }
}
