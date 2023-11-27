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
            ['location' => "TBD",'capacity' => "0", 'projector' => "0",'soundSystem' => "0"],
            ['location' => "Professor Room",'capacity' => "15", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Reporting Room",'capacity' => "25", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Surgery Tutorial Room",'capacity' => "25", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Medicine Tutorial Room",'capacity' => "30", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Dissection Hall",'capacity' => "88", 'projector' => "Yes",'soundSystem' => "Yes"],
            ['location' => "histology",'capacity' => "50", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Meseum",'capacity' => "50", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Pathology",'capacity' => "40", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Biochemistry",'capacity' => "40", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Pharmacy",'capacity' => "50", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Physiology Lab",'capacity' => "25", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Others",'capacity' => "0", 'projector' => "0",'soundSystem' => "0"],
            ['location' => "Lecture Hall-1 (IMDC)",'capacity' => "100", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Lecture Hall-2 (IMDC)",'capacity' => "100", 'projector' => "Yes",'soundSystem' => "Yes"],
            ['location' => "Lecture Hall-3 (IMDC)",'capacity' => "100", 'projector' => "Yes",'soundSystem' => "Yes"],
            ['location' => "Lecture Hall-4 (IMDC)",'capacity' => "100", 'projector' => "Yes",'soundSystem' => "Yes"],
            ['location' => "Auditorium IMDC Lecture Hall-5",'capacity' => "150", 'projector' => "Yes",'soundSystem' => "No"],
            // ['location' => "Auditorium ANTH",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            ['location' => "Tutorial Room-1(Next to Examination Hall)",'capacity' => "50", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Tutorial Room-2 (Front to SA)",'capacity' => "30", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Tutorial Room-3 (Infront of Disection Hall)",'capacity' => "50", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Tutorial Room-2 Lecture Hall-9",'capacity' => "80", 'projector' => "Yes",'soundSystem' => "Yes"],
            ['location' => "Tutorial Room-6 Lecture Hall-10",'capacity' => "70", 'projector' => "Yes",'soundSystem' => "Yes"],
            ['location' => "Common Room-1",'capacity' => "70", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Common Room-2",'capacity' => "80", 'projector' => "Yes",'soundSystem' => "No"],
            // ['location' => "DPT GYM ANTH Ground Floor",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            ['location' => "Lecture Hall-1 (INC)",'capacity' => "50", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Lecture Hall-2 (INC)",'capacity' => "50", 'projector' => "Yes",'soundSystem' => "No"],
            ['location' => "Lecture Hall-3 (INC)",'capacity' => "70", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Lecture Hall-4 (INC)",'capacity' => "60", 'projector' => "No",'soundSystem' => "No"],
            ['location' => "Lecture Hall-5 (INC)",'capacity' => "36", 'projector' => "No",'soundSystem' => "No"],
            // ['location' => "CME EYE",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            ['location' => "Lecture Hall-6 (Conference Room)",'capacity' => "30", 'projector' => "No",'soundSystem' => "No"],
            // ['location' => "General Medicine Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Cardiology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Pulmonology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Gastroenterology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Nephrology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Dermatology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "General Surgery Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Urology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Orthopaedic Surgery Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Neurosurgery Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Plastic Surgery Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Oncology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Psychology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Dental Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Paediatric Surgery Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Paediatrics Clinic l",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Paediatrics Clinic ll",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Obstetrics & Gynaecology Clinic l",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Obstetrics & Gynaecology Clinic ll",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Obstetrics & Gynaecology CME Room",'capacity' => "35", 'projector' => "No",'soundSystem' => "No"],
            // ['location' => "Haematology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Ophthalmology Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Optometry Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Ophthalmic Diagnostic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "ENT Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "ENT CME Room",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            ['location' => "Paeds CME Romm",'capacity' => "25", 'projector' => "Yes",'soundSystem' => "No"],
            // ['location' => "Breast Clinic",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Eye CME Room (MLT)",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Office",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Outside Organization",'capacity' => "", 'projector' => "",'soundSystem' => ""],
            // ['location' => "Room # 110"],
            // ['location' => "Room # 111"],
            // ['location' => "Room # 117"],
            ],
        );
        
    }
}
