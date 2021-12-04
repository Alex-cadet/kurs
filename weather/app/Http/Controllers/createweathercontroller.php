<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class createWeatherController extends Controller
{
    public function showWeather()
    {
        return view('weather');
    }
     public function createWeather(Request $req) 
   {
       if($req->hasAny('wind'))
       {       
    $id_weather = $req->input('id_weather');
    $temperature = $req->input('temperature');
    $wind = $req->input('wind');
    $precipitation = $req->input('precipitation');
    $atmospheric_pressure = $req->input('atmospheric_pressure');
    $region = $req->input('region');
    $cloudiness = $req->input('cloudiness');
    $date = $req->input('date');
    DB::insert('insert into weather (PK,temperature,wind,precipitation,atmospheric_pressure,region_id,
    cloudiness,date)values(?,?,?,?,?,?,?,?)',
    [$id_weather,$temperature,$wind,$precipitation,$atmospheric_pressure,$region,$cloudiness,$date]);
    $valid = $req->validate([
        'temperature'=>'required|numeric',
        'date'=>'required', 
    ]);
    return view('weather');

        }
    }
   
}
