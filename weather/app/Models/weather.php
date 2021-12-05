<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class weather extends Model
{
    protected $table = 'weather';
    public $status;

    public function AddDegree($col)
    {
        
        if(($col>=18) and ($col<29))
        {
            $status = "Тепло";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        elseif(($col<18) and ($col>=7))
        {
            $status = "Прохладно";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        elseif(($col<7) and ($col>=0))
        {
            $status = "Зябко";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        elseif(($col<0) and ($col>=-10))
        {
            $status = "Холодно";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        elseif(($col<-10) and ($col>=-25))
        {
            $status = "Очень холодно";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        elseif(($col<33) and ($col>=29))
        {
            $status = "Жарко";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        elseif(($col>=33))
        {
            $status = "Очень жарко";
        
        $col = (string)$col;
        $col = $col."&#176"."C"." "."(".$status.")";
        }
        return $col;
    }

    
}
