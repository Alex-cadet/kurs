<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class createEcoController extends Controller
{
    public function showEco()
    {
        return view('eco_status');
    }
   
    public static function createEco(Request $request)
    {          
    $id = $request->input('id');
    $count_vehicles = $request->input('count_vehicles');
    $count_plants = $request->input('count_plants');
    $air_pollution_class = $request->input('air_pollution_class');
    $soil_erosion_indicator = $request->input('soil_erosion_indicator');
    DB::insert('insert into ecology_state 
    (id,count_vehicles,count_plants,air_pollution_class,soil_erosion_indicator)values(?,?,?,?,?)',
    [$id,$count_vehicles,$count_plants,$air_pollution_class,$soil_erosion_indicator]);
    
    return view('eco_status');    
    }

    public function validEco(Request $request)
    {
         $request->validate([
            'id'=>'required|unique:ecology_state,id',
            'count_vehicles'=>'required|numeric|gt:0',
            'count_plants'=>'required|numeric|gt:0',
        ]);   
                   
        createEcoController::createEco($request);
        return view('eco_status');
    }

    
}
