<?php

namespace Tests\Feature\api;

use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class apiControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_book_car()
    {

        $response = $this->json('POST' , 'api/book_car',[
            'car_id' => 1 ,
            'package_id' => 3 ,
        ]);

        $response->assertStatus(200);
    }

    public function test_can_book_house()
    {

        $response = $this->json('POST' , 'api/book_house',[
            'house_id' => 4 ,
            'package_id' => 1 ,
        ]);

        $response->assertStatus(200);
    }

    public function test_add_car()
    {

        $response = $this->json('POST' , 'api/add_car',[
            'type'  => 'Hatchback' ,
            'model' => 'Ford Focus',
            'year'  => '2016',
            'color' => 'Black',
            'num_of_passengers' => 4
        ]);

        $response->assertStatus(200);
    }
}
