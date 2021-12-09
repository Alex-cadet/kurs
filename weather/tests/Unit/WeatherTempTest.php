<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\weather;;


class WeatherTempTest extends TestCase
{
    
    public function test_Temperature_1_Status()
    {
        $wea = new weather();
        $col = 40;
        $this->assertSame('40&#176'.'C'.' '.'(Очень жарко)',$wea->AddDegree($col));
    }

    public function test_Temperature_2_Status()
    {
        $wea = new weather();
        $col = 31;
        $this->assertSame('31&#176'.'C'.' '.'(Жарко)',$wea->AddDegree($col));
    }

    public function test_Temperature_3_Status()
    {
        $wea = new weather();
        $col = 25;
        $this->assertSame('25&#176'.'C'.' '.'(Тепло)',$wea->AddDegree($col));
    }

    public function test_Temperature_4_Status()
    {
        $wea = new weather();
        $col = 10;
        $this->assertSame('10&#176'.'C'.' '.'(Прохладно)',$wea->AddDegree($col));
    }

    public function test_Temperature_5_Status()
    {
        $wea = new weather();
        $col = 3;
        $this->assertSame('3&#176'.'C'.' '.'(Зябко)',$wea->AddDegree($col));
    }

    public function test_Temperature_6_Status()
    {
        $wea = new weather();
        $col = -7;
        $this->assertSame('-7&#176'.'C'.' '.'(Холодно)',$wea->AddDegree($col));
    }

    public function test_Temperature_7_Status()
    {
        $wea = new weather();
        $col = -23;
        $this->assertSame('-23&#176'.'C'.' '.'(Очень холодно)',$wea->AddDegree($col));
    }
}
