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
   
    public static function createMainPopulation(Request $request)
    {          
    $id = $request->input('id');
    $count_people = $request->input('count_people');
    $citizen_count = $request->input('citizen_count');
    $composition_of_populations = $request->input('composition_of_population');
    DB::insert('insert into population
     (ID,count_people,citizen_count,composition_of_population)values(?,?,?,?)',
    [$id,$count_people,$citizen_count,$composition_of_populations]);   
    return view('main_population');    
    }

    public function validMainPn(Request $request)
    {
         $request->validate([
            'id'=>'required|unique:population,id',
            'count_people'=>'required|numeric|gt:0',
            'citizen_count'=>'required|numeric|gt:0',
        ]);   
                   
        createMainPopulController::createMainPopulation($request);
        return view('main_population');
    }
}
