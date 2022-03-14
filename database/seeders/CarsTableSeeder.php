<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                "type" => "Sedan",
                "model" => "Bmw 530e",
                "year" => "2021",
                "color" => "red",
                "num_of_passengers" => 5
            ],
            [
                "type" => "Sedan",
                "model" => "Mercedes e200",
                "year" => "2021",
                "color" => "black",
                "num_of_passengers" => 5
            ],
            [
                "type" => "Sport",
                "model" => "Ford Mustang",
                "year" => "2017",
                "color" => "white",
                "num_of_passengers" => 2
            ],
        ]);
    }
}
