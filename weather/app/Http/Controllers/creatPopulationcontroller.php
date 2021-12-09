<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class creatpopulationcontroller extends Controller
{
    public function showPoulation()
    {
        return view('population');
    }
   
    public static function createPopulationCateg(Request $request)
    {          
    $br = $request->input('id');
    $child = $request->input('child');
    $adults = $request->input('adults');
    $pensioners = $request->input('pensioners');
    DB::insert('insert into composition_of_population (ID,child,adults,pensioners)values(?,?,?,?)',
    [$br,$child,$adults,$pensioners]);
    
    return view('population');
    
    }

    public function validAge(Request $request)
    {
        $child = $request->input('child');
        $adults = $request->input('adults');
        $pensioners = $request->input('pensioners');
        $sumAd = 100-($child+$pensioners);
        $sumCh = 100-($adults+$pensioners);
        $sumPn = 100-($child+$adults);
        $request->validate([
            'id'=>'required|unique:composition_of_population,ID',
            'child'=>"required|integer|size:$sumCh",
            'adults'=>"required|integer|size:$sumAd",
            'pensioners'=>"required|integer|size:$sumPn",
        ]);   
        creatpopulationcontroller::createPopulationCateg($request);
        return view('population');
    }
}
