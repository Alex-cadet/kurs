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

        
      
      return view('read',[
        'minus'=>$minus->all(),
        'adReg'=>$adReg->all(),
        'flySt'=>$flySt,
    ]);
    }
    public static function showPar(Request $req)
    {
      $square = $req->input('square');
      $symbol = $req->input('symbol');
      
      if ($symbol=="больше") {
        $symbol = '>';
        $regSquare = region::where('square',$symbol,$square)
        ->get(['name','square']);
        return view('square',[
          'regSquare'=>$regSquare->all(), 
        ]);
      
      }
      elseif ($symbol=='меньше') {
        $symbol = '<';
        $regSquare = region::where('square',$symbol,$square)
        ->get(['name','square']);
        return view('square',[
          'regSquare'=>$regSquare->all(), 
        ]);
      
      }
      elseif ($symbol=='равно') {
        $symbol = '=';
        $regSquare = region::where('square',$symbol,$square)
        ->get(['name','square']);
        return view('square',[
          'regSquare'=>$regSquare->all(), 
        ]);
      
      }
      elseif ($symbol=='не равно') {
        $symbol = '!=';
        $regSquare = region::where('square',$symbol,$square)
        ->get(['name','square']);
        return view('square',[
          'regSquare'=>$regSquare->all(), 
        ]);
      
      }
      
      
      
      
    }

    
}
