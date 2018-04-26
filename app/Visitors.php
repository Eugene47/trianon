<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    protected $fillable = [
        'ip_address', 'country', 'device', 'browser', 'typing speed'
    ];

    public function getClientIP()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function getClientGeoData()
    {
        $ch = file_get_contents('https://api.ipdata.co');
        $data  = json_decode($ch);

        return $data;
    }
}
