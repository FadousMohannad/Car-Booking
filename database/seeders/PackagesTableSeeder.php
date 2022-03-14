<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
               'package_name' => 'Two Days'
            ],
            [
                'package_name' => 'One Week'
            ],
            [
                'package_name' => 'One Month'
            ],
        ]);
    }
}
