<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_View_1_Example()
    {
        $response_create= $this->get('create');
        $response_create->assertStatus(200);
    }

    public function test_View_2_Example()
    {

        $response_read= $this->get('read');
        $response_read->assertStatus(200);
    }

    public function test_View_3_Example()
    {
        $response_update= $this->get('update');
        $response_update->assertStatus(200);
    }

    public function test_View_4_Example()
    {
        $response_delete= $this->get('delete');
        $response_delete->assertStatus(200);
    }

    public function test_View_5_Example()
    {
        $response_square= $this->get('square');
        $response_square->assertStatus(405);
    }

    public function test_View_6_Example()
    {
        $response_weather= $this->get('weather');
        $response_weather->assertStatus(200);
    }

    public function test_View_7_Example()
    {
        $response_region= $this->get('region');
        $response_region->assertStatus(200);
    }

    public function test_View_8_Example()
    {
        $response_eco_status= $this->get('eco_status');
        $response_eco_status->assertStatus(200);

    }

    public function test_View_9_Example()
    {
        $response_main_population= $this->get('main_population');
        $response_main_population->assertStatus(200);
    }
    public function test_View_10_Example()
    {
        $response_main= $this->get('/');
        $response_main->assertStatus(200);
    }
    public function test_View_11_Example()
    {
        $response_population= $this->get('population');
        $response_population->assertStatus(200);
    }
    
}
