<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\weather;
use App\Models\region;

class readcontroller extends Controller
{
   public function fullVar()
    {
        $minus = weather::join('region','region_id','=','region.id')
        ->where('temperature','<',0)
        ->get(['region.name','weather.temperature']);

        $adReg = weather::join('region','region_id','=','region.id')
        ->join('population','population.id','=','region.population_id')
        ->join('composition_of_population','composition_of_population.ID','=','population.composition_of_population')
        ->where('adults','>','30')
        ->where('type_of_region','=','Промышленный')
        ->distinct()->get(['region.name','composition_of_population.adults','weather.*','region.avia_connection']);

        

         $flySt = new region();
        // foreach($adReg->all() as $ad)
        // {
        //    return $flySt->flyWeather($ad->avia_connection,$ad->wind);
        // }

      return view('read',[
        'minus'=>$minus->all(),
        'adReg'=>$adReg->all(),
        'flySt'=>$flySt,
    ]);

    }
}
