<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('main');
});
Route::get('/sel', function () {
    return view('sel');
});
//Состав
Route::post('create', function (Request $req) {
    $br = $req->input('id');
    $child = $req->input('child');
    $adults = $req->input('adults');
    $pensioners = $req->input('pensioners');
    DB::insert('insert into composition_of_population (ID,child,adults,pensioners)values(?,?,?,?)',
    [$br,$child,$adults,$pensioners]);
    return view('create');
});
//Погода 
Route::post('create', function (Request $req) {
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
    return view('create');
});

Route::get('create', function () {
    return view('create');
});
Route::get('raed', function () {
    return view('raed');
});
