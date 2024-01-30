<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client as GuzzleClient;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
//        $headers = [
//            'Content-Type' => 'application/json'
//        ];
//
//        $client = new GuzzleClient([
//            'headers' => $headers
//        ]);
//
//
//        $r = $client->request('GET', 'https://youtube.googleapis.com/youtube/v3/videos?id='.$req->url.'&part=snippet,contentDetails,statistics,status&key=AIzaSyBZtu12_Tw0uGlktqYeo3RF8mI0Ztus1Bo');
//        $response = $r->getBody()->getContents();
//
//        echo '<pre>';
//        print_r($response);
//        echo '<pre>';
//
//        die;
        
        $data = DB::table('videos')->get()->all();

        return view('index')->with(['data' => $data]);
    }

    public function add() {

    }

    public function createVideo(Request $req)
    {

    }
}
