<?php

namespace App\Http\Controllers;

use App\Visitors;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $visitor = new Visitors();
        $ip = $visitor->getClientGeoData()->ip;
        $country_name = $visitor->getClientGeoData()->country_name;
        $flag = $visitor->getClientGeoData()->flag;
        if (!Visitors::where(['ip_address' => $ip])->first()){
            $visitor->ip_address = $ip;
            $visitor->country = $country_name;
            $visitor->flag = $flag;
            $visitor->save();
        }

        return view('welcome')->with(['ip' => $ip]);
    }
}
