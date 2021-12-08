<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class region extends Model
{
    protected $table = 'region';
    public $timestamps = false;
    public $flyStatus;

    public function flyWeather($avia,$windLevel)
    {
        if(($avia=="Есть") and ($windLevel=="Сильный"))
        {
             $flyStatus = "Погода нелётная";
        }
        elseif(($avia=="Есть") and (($windLevel=="Штиль") or ($windLevel=="Умеренный") or ($windLevel=="Слабый")))
        {
            $flyStatus = "Самолёты вылетают";
        }
        elseif(($avia=="Есть") and ($windLevel=="Порывистый"))
        {
            $flyStatus = "Возможны задержки рейсов";
        }
        elseif($avia=="Нет")
        {
            $flyStatus = "Полёты недоступны";
        }
        return $flyStatus;
    }
    

    

    // public function colorType()
    // {
    //     $request = new Request();
    //     $name = $request->input('region');
    //     $type = region::where('name',$name);
    //     $type->get('type_of_region');
    //     $type_of_region = "";
    //     if($type)
    //     {
    //         $type_of_region = "<td style='background-color: #86e20c'>".$type_of_region."</td>";
    //         return $type_of_region;
    //     }
        
    // }

}
