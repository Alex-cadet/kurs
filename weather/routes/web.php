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
Route::post('create', function (Request $req) {
    $br = $req->input('id');
    $child = $req->input('child');
    $adults = $req->input('adults');
    $pensioners = $req->input('pensioners');
    DB::insert('insert into composition_of_population (ID,child,adults,pensioners)values(?,?,?,?)',
    [$br,$child,$adults,$pensioners]);
    $users = DB::table('composition_of_population')
            ->get();
            foreach ($users as $user) {
                echo'<table border="1">';
                echo "<tr>".$user->ID.' '.$user->child.' '.$user->adults.' '.$user->pensioners."</tr>";
                echo "</table>";
            }
    return view('create');
});
Route::get('create', function () {
    return view('create');
});
Route::get('raed', function () {
    return view('raed');
});