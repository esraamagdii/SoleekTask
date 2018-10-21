<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class guzzlehttpController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://www.geognos.com/api/en/countries/info/all.json');
        $data = $res->getBody();
        $data = json_decode($data,true);

        $data = $data['Results'];

        
        $countries =array();
        foreach($data as $key => $value){
          array_push($countries,$value['Name']);
        }
        return $countries;

    }
}
