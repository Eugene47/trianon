<?php

namespace App\Http\Controllers;

use App\Visitors;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $visitor = new Visitors();

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://freegeoip.net/json/");

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        var_dump($output);die;
        //$ip = $visitor->getClientIP();
        if (!Visitors::where(['ip_address' => $ip])->first()){
            $visitor->ip_address = $ip;
            $visitor->save();
        }

        return view('welcome')->with(['ip' => $ip]);
    }
}
