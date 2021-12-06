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

use App\Http\Controllers\creatpopulationcontroller;
use App\Http\Controllers\readcontroller;
use App\Http\Controllers\clearController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\createWeatherController;
use App\Http\Controllers\createRegionController;
use App\Http\Controllers\createMainPopulController;
use App\Http\Controllers\createEcoController;
Route::get('/', function () {
    return view('main');
});

Route::get('create', function () {
    return view('create');
});
Route::get('read', [readcontroller::class,'fullVar']);

Route::get('read/ad', [readcontroller::class,'regAdults']);

Route::get('delete', [clearController::class,'showWeather']);

Route::post('delete', [clearController::class,'deleteWeather']);

Route::get('update', [updateController::class,'showRegion']);

Route::post('update', [updateController::class,'updateRegion']);

Route::post('population', [creatpopulationcontroller::class,'createPopulationCateg']);

Route::get('population', [creatpopulationcontroller::class,'showPoulation']);

Route::post('population', [creatpopulationcontroller::class,'validAge']);

Route::post('weather', [createWeatherController::class,'createWeather']);

Route::get('weather', [createWeatherController::class,'showWeather']);

Route::get('region', [createRegionController::class,'showRegion']);

Route::post('region', [createRegionController::class,'createRegion']);

Route::get('main_population', [createMainPopulController::class,'showMainPoulation']);

Route::post('main_population', [createMainPopulController::class,'createMainPopulation']);

Route::get('eco_status', [createEcoController::class,'showEco']);

Route::post('eco_status', [createEcoController::class,'createEco']);

Route::post('eco_status', [createEcoController::class,'validEco']);






