<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\region;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class createRegionController extends Controller
{
    public function showRegion()
    {
        return view('region');
    }
     public static function createRegion(Request $req) 
   {

    $reg = new region();     
    $id = $req->input('id');
    $name = $req->input('name');
    $square = $req->input('square');
    $avia_connection = $req->input('avia_connection');
    $type_of_region = $req->input('type_of_region');
    $ecology_state = $req->input('ecology_state');
    $population = $req->input('population');
    DB::insert('insert into region (id,name,square,avia_connection,type_of_region,ecology_state_id,population_id)
    values(?,?,?,?,?,?,?)',
    [$id,$name,$square,$avia_connection,$type_of_region,$ecology_state,$population]);
    
    return view('region');
   }

   public function validRegion(Request $request)
    {
         $request->validate([
            'id'=>'required|unique:region,id',
            'name'=>'required',
            'square'=>'required|numeric|gt:0',
            'avia_connection'=>[
                'required',
                Rule::in(["Есть","Нет"])
            ]
        ]);                      
        createRegionController::createRegion($request);
        return view('weather');
    }   
}
