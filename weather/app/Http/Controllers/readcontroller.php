<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\weather;

class readcontroller extends Controller
{
    public function selMinus()
    {
        $minus = weather::join('region','region_id','=','region.id')->where('temperature','<',0)
        ->get(['region.name','weather.temperature']);
        //$minus->all();
        return view('read',['minus'=>$minus->all()]);
    }
}
