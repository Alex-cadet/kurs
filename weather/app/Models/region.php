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
}
