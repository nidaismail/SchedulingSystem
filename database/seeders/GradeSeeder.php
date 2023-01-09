<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade')->insert(
            [
            ['class_name' => "None"],
            ['class_name' => "MBBS-1"],
            ['class_name' => "MBBS-2"],
            ['class_name' => "MBBS-3"],
            ['class_name' => "MBBS-4"],
            ['class_name' => "MBBS-5"],
            ['class_name' => "BDS-1"],
            ['class_name' => "BDS-2"],
            ['class_name' => "BDS-3"],
            ['class_name' => "BDS-4"],
            ['class_name' => "Nursing-1"],
            ['class_name' => "Nursing-2"],
            ['class_name' => "Nursing-3"],
            ['class_name' => "Nursing-4"]],
        );
    }
}
