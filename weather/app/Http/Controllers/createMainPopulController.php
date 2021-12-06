<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class createMainPopulController extends Controller
{
    public function showMainPoulation()
    {
        return view('main_population');
    }
   
    public function createMainPopulation(Request $request)
    {          
    $id = $request->input('id');
    $count_people = $request->input('count_people');
    $citizen_count = $request->input('citizen_count');
    $composition_of_populations = $request->input('composition_of_populations');
    DB::insert('insert into composition_of_population (ID,count_people,citizen_count,composition_of_populations)values(?,?,?,?)',
    [$id,$count_people,$citizen_count,$composition_of_populations]);
   
    return view('main_population');
    
    }
}
