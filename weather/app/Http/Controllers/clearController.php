<?php

namespace App\Http\Controllers;

use App\Models\weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class clearController extends Controller
{
    public function showWeather()
    {
        
        return view('delete');
    }

     
    public function deleteWeather(Request $request)
    {
        $weaId=$request->input('weaId');
        weather::where('PK',$weaId)->delete();
        return view('delete');
      
    }
}
