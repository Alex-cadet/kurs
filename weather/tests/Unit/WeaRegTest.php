<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\region;


class WeaRegTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    
    public function testFly_1_Example()
    {
        $reg = new region();
        $avia = "Есть";
        $windLevel = "Сильный";
        $flyStatus = $reg->flyWeather($avia,$windLevel);
        $this->assertSame('Погода нелётная',$flyStatus);
    }

    public function testFly_2_Example()
    {
        $reg = new region();
        $avia = "Есть";
        $windLevel = "Порывистый";
        $flyStatus = $reg->flyWeather($avia,$windLevel);
        $this->assertSame('Возможны задержки рейсов',$flyStatus);
    }

    public function testFly_3_Example()
    {
        $reg = new region();
        $avia = "Нет";
        $windLevel = "Порывистый";
        $flyStatus = $reg->flyWeather($avia,$windLevel);
        $this->assertSame('Полёты недоступны',$flyStatus);
    }

    public function testFly_4_Example()
    {
        $reg = new region();
        $avia = "Есть";
        $windLevel = "Умеренный";
        $flyStatus = $reg->flyWeather($avia,$windLevel);
        $this->assertSame('Самолёты вылетают',$flyStatus);
    }
}
