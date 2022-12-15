<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert(
            [
            ['location' => " "],
            ['location' => "Lecture Hall-1"],
            ['location' => "Lecture Hall-2"],
            ['location' => "Lecture Hall-3"],
            ['location' => "Lecture Hall-4"],
            ['location' => "Tutorial Room-1"],
            ['location' => "Tutorial Room-2"],
            ['location' => "Tutorial Room-3"]],
        );
    }
}
