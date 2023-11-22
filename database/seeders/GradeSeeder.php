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
            ['class_name' => "Others"],
            ['class_name' => "MBBS-1"],
            ['class_name' => "MBBS-2"],
            ['class_name' => "MBBS-3"],
            ['class_name' => "MBBS-4"],
            ['class_name' => "MBBS-5"],
            ['class_name' => "BDS-1"],
            ['class_name' => "BDS-2"],
            ['class_name' => "BDS-3"],
            ['class_name' => "BDS-4"],
            ['class_name' => "MLT-1"],
            ['class_name' => "MLT-2"],
            ['class_name' => "MLT-3"],
            ['class_name' => "MLT-4"],
            ['class_name' => "MLT-5"],
            ['class_name' => "MLT-6"],
            ['class_name' => "MLT-7"],
            ['class_name' => "MLT-8"],
            ['class_name' => "DPT-1"],
            ['class_name' => "DPT-2"],
            ['class_name' => "DPT-3"],
            ['class_name' => "DPT-4"],
            ['class_name' => "DPT-5"],
            ['class_name' => "DPT-6"],
            ['class_name' => "DPT-7"],
            ['class_name' => "DPT-8"],
            ['class_name' => "DPT-9"],
            ['class_name' => "DPT-10"],
            ['class_name' => "Post RN-1"],
            ['class_name' => "Post RN-2"],
            ['class_name' => "Post RN-3"],
            ['class_name' => "Post RN-4"],
            ['class_name' => "Nursing-1"],
            ['class_name' => "Nursing-2"],
            ['class_name' => "Nursing-3"],
            ['class_name' => "Nursing-4"]],
        );
    }
}
