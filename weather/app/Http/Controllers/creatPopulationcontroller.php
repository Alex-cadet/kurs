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
   
    public function createPopulationCateg(Request $request)
    {          
    $br = $request->input('id');
    $child = $request->input('child');
    $adults = $request->input('adults');
    $pensioners = $request->input('pensioners');
    DB::insert('insert into composition_of_population (ID,child,adults,pensioners)values(?,?,?,?)',
    [$br,$child,$adults,$pensioners]);
    $valid = $request->validate([
        'child'=>'gte:0'
    ]);
    return view('population');
    
    }
}
