<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\weather;


class createWeatherController extends Controller
{
    public function showWeather()
    {
        return view('weather');
    }
     public static function createWeather(Request $req) 
   {
    $wea = new weather();     
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
    return view('weather');

        
    }

    public function validWeather(Request $request)
    {
         $request->validate([
            'id_weather'=>'required',
            'temperature'=>'required',
            'date'=>'required',
        ]);   
                   
        createWeatherController::createWeather($request);
        return view('weather');
    }
   
}
