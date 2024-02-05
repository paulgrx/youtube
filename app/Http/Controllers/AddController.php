<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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



//        return view($response, ['data' => $data]);
    }
}
