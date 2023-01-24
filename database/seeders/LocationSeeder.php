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
            ['location' => "Others"],
            ['location' => "Lecture Hall-1 (IMDC)"],
            ['location' => "Lecture Hall-2 (IMDC)"],
            ['location' => "Lecture Hall-3 (IMDC)"],
            ['location' => "Lecture Hall-4 (IMDC)"],
            ['location' => "Tutorial Room-1"],
            ['location' => "Tutorial Room-2"],
            ['location' => "Tutorial Room-3"],
            ['location' => "Conference Room"],
            ['location' => "General Medicine Clinic"],
            ['location' => "Cardiology Clinic"],
            ['location' => "Pulmonology Clinic"],
            ['location' => "Gastroenterology Clinic"],
            ['location' => "Nephrology Clinic"],
            ['location' => "Dermatology Clinic"],
            ['location' => "General Surgery Clinic"],
            ['location' => "Urology Clinic"],
            ['location' => "Orthopaedic Surgery Clinic"],
            ['location' => "Neurosurgery Clinic"],
            ['location' => "Plastic Surgery Clinic"],
            ['location' => "Oncology Clinic"],
            ['location' => "Psychology Clinic"],
            ['location' => "Dental Clinic"],
            ['location' => "Paediatric Surgery Clinic"],
            ['location' => "Paediatrics Clinic l"],
            ['location' => "Paediatrics Clinic ll"],
            ['location' => "Obstetrics & Gynaecology Clinic l"],
            ['location' => "Obstetrics & Gynaecology Clinic ll"],
            ['location' => "Obstetrics & Gynaecology CME Room"],
            ['location' => "Haematology Clinic"],
            ['location' => "Ophthalmology Clinic"],
            ['location' => "Optometry Clinic"],
            ['location' => "Ophthalmic Diagnostic"],
            ['location' => "ENT Clinic"],
            ['location' => "ENT CME Room"],
            ['location' => "Paeds CME Romm"],
            ['location' => "Breast Clinic"],
            ['location' => "Eye CME Room (MLT)"],
            ['location' => "Office"],
            ['location' => "Outside Organization"],
            // ['location' => "Room # 110"],
            // ['location' => "Room # 111"],
            // ['location' => "Room # 117"],
            ],
        );
        
    }
}
