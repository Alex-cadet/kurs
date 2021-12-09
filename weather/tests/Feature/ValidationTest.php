<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ValidationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     //          Тест на сумму полей (должна быть равна 100%)
    public function test_Age_Category_Population()
    {
        $response =  $this->post('population',[
            'id'=>99,
            'child'=>40,
            'adults'=>60,
            'pensioners'=>30,
        ]);
        $this->assertEquals(302,$response->status()) ;
    }
                    //   Тест на поле авиасообщение(Есть/Нет)
    public function testAviaconnection()
    {
        $response =  $this->post('region',[
            'id'=>99,
            'name'=>'Москва',
            'square'=>600,
            'avia_connection'=>'Присутствует',
        ]);
        $this->assertEquals(302,$response->status()) ;
    }

}
