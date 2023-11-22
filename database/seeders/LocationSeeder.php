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
            ['location' => "TBD"],
            ['location' => "Others"],
            ['location' => "Lecture Hall-1 (IMDC)"],
            ['location' => "Lecture Hall-2 (IMDC)"],
            ['location' => "Lecture Hall-3 (IMDC)"],
            ['location' => "Lecture Hall-4 (IMDC)"],
            ['location' => "Auditorium IMDC Lecture Hall-5"],
            ['location' => "Auditorium ANTH"],
            ['location' => "Tutorial Room-1(Next to Examination Hall)"],
            ['location' => "Tutorial Room-2 (Front to SA)"],
            ['location' => "Tutorial Room-3 (Infront of Disection Hall)"],
            ['location' => "Tutorial Room-2 Lecture Hall-9"],
            ['location' => "Tutorial Room-6 Lecture Hall-10"],
            ['location' => "Common Room-1"],
            ['location' => "Common Room-2"],
            ['location' => "DPT GYM ANTH Ground Floor"],
            ['location' => "Lecture Hall-1 (INC)"],
            ['location' => "Lecture Hall-2 (INC)"],
            ['location' => "Lecture Hall-3 (INC)"],
            ['location' => "Lecture Hall-4 (INC)"],
            ['location' => "Lecture Hall-5 (INC)"],
            ['location' => "CME EYE"],
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
