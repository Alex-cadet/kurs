<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\region;

class updateController extends Controller
{
    public function showRegion()
    {
        return view('update');

    }

    public function updateRegion(Request $request)
    {
        $region = $request->input('region');
        $type_of_region = $request->input('type_of_region');
        region::where('name',$region)
        ->update(['type_of_region'=>$type_of_region]);
        return view('update');
    }

    
}
