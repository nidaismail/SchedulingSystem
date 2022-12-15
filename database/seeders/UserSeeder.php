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
            ['id' => "1",'Employee_name' => " ",'Employee_email' => "",'Employee_department' => "","Employee_designation"=>""],
            ['id' => "2558",'Employee_name' => "Nida Ismail",'Employee_email' => "nida.ismail@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
            ['id' => "2370",'Employee_name' => "Sadaf Rana",'Employee_email' => "sadaf.rana@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
            ['id' => "2541",'Employee_name' => "Harmeen Amjad",'Employee_email' => "harmeen.amjad@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
            ['id' => "1837",'Employee_name' => "Saira Safdar",'Employee_email' => "saira.safdar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            // ['id' => "",'Employee_name' => "Sadaf Jafar",'Employee_email' => "sadaf.jafar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            ['id' => "1415",'Employee_name' => "Alia Sarfaraz",'Employee_email' => "alia.sarfarz@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            ['id' => "0078",'Employee_name' => "Hina Aslam",'Employee_email' => "hina.aslam@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "]]
            // ['id' => "",'Employee_name' => "Sadaf Jafar",'Employee_email' => "sadaf.jafar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            // ['id' => "",'Employee_name' => "Naghmi Asif",'Employee_email' => "naghmi.asif@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "]],
            // ['id' => "",'Employee_name' => "",'Employee_department' => "","Employee_designation"=>""],
            // ['id' => "",'Employee_name' => "",'Employee_department' => "","Employee_designation"=>""],
            // ['id' => "",'Employee_name' => "",'Employee_department' => "","Employee_designation"=>""],
            // ['id' => "",'Employee_name' => "",'Employee_department' => "","Employee_designation"=>""],
            // ['id' => "",'Employee_name' => "",'Employee_department' => "","Employee_designation"=>""],
            // ['id' => "",'Employee_name' => "",'Employee_department' => "","Employee_designation"=>""]],
        );
    }
}
