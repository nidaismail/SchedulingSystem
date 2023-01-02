<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert(
            [
            ['id' => "1",'Employee_name' => "None",'Employee_email' => "",'Employee_department' => "","Employee_designation"=>""],
            ['id' => "0187",'Employee_name' => "Muhammad Asif",'Employee_email' => "muhammad.asif@imdcollege.edu.pk",'Employee_department' => "IT","Employee_designation"=>"Head of IT"],
            ['id' => "0188",'Employee_name' => "Muhammad Zeeshan",'Employee_email' => "zeeshan.mubeen@imdcollege.edu.pk",'Employee_department' => "IT","Employee_designation"=>"Manager IT & Technical Operations"],
            ['id' => "0189",'Employee_name' => "Wajih UL Hussan", 'Enployee_email' => "wajih.hussan@imdcollege.edu.pk", 'Employee_department' => "IT","Employee_designation"=>"IT Assitant"],
            ['id' => "2558",'Employee_name' => "Nida Ismail",'Employee_email' => "nida.ismail@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
            ['id' => "2370",'Employee_name' => "Sadaf Rana",'Employee_email' => "sadaf.rana@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
            ['id' => "2541",'Employee_name' => "Harmeen Amjad",'Employee_email' => "harmeen.amjad@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
            ['id' => "1837",'Employee_name' => "Saira Safdar",'Employee_email' => "saira.safdar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            ['id' => "0191",'Employee_name' => "Liaqat Ali",'Employee_email' => "liaqat.ali@imdcollege.edu.pk",'Employee_department' => "IT","Employee_designation"=>"IT Assitant"],
            ['id' => "1415",'Employee_name' => "Alia Sarfaraz",'Employee_email' => "alia.sarfarz@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            ['id' => "2254",'Employee_name' => "Muhammad Ahsan Hussain", 'Enployee_email' => " ", 'Employee_department' => "IT","Employee_designation"=>"Chief Information Officer"],
            ['id' => "0078",'Employee_name' => "Hina Aslam",'Employee_email' => "hina.aslam@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "]]
            // ['id' => "",'Employee_name' => "Sadaf Jafar",'Employee_email' => "sadaf.jafar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            // ['id' => "",'Employee_name' => "Naghmi Asif",'Employee_email' => "naghmi.asif@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "]],
            
            
        );
    }
}
