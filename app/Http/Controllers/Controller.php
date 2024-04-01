<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client as GuzzleClient;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {
        if (!$request->search) {
            $data = DB::table('videos')->get()->all();

            return view('index')->with(['data' => $data]);
        }

        $data =  DB::table('videos')->where('name', 'LIKE', "%{$request->search}%")->get()->all();

        return view('index')->with(['data' => $data]);
    }

    public function add() {

    }

    public function createVideo(Request $req)
    {

    }
}
