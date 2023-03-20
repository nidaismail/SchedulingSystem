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
    public function run(){}
    // {
    //     DB::table('persons')->insert(
    //         [
    //        // ['id' => "3",'userID' => "2200",'name' => "Liaqat Hussain",]
    //         //['id' => "0187",'Employee_name' => "Muhammad Asif",'Employee_email' => "muhammad.asif@imdcollege.edu.pk",'Employee_department' => "IT","Employee_designation"=>"Head of IT"],
    //         //['id' => "0188",'Employee_name' => "Muhammad Zeeshan",'Employee_email' => "zeeshan.mobin@imdcollege.com",'Employee_department' => "IT","Employee_designation"=>"Manager IT & Technical Operations"],
    //         ['id' => "0189",'Employee_name' => "Wajih UL Hussan", 'Employee_email' => "wajih.hussan@imdcollege.edu.pk", 'Employee_department' => "IT","Employee_designation"=>"IT Assitant"],
    //         ['id' => "0318",'Employee_name' => "Azmat Shaheen",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Psychiatry","Employee_designation"=>"Senior Lecturer"],
    //         ['id' => "0215",'Employee_name' => "Dr Usman Zafar",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Medicine","Employee_designation"=>"Associate Professor"],
    //         //['id' => "2558",'Employee_name' => "Nida Ismail",'Employee_email' => "nida.ismail@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
    //         ['id' => "2328",'Employee_name' => "Mahnoor Arif",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' =>  "Medicine","Employee_designation"=>"Medical Officer"],
    //         ['id' => "0216",'Employee_name' => "Dr Bilal Mustafa",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Medicine","Employee_designation"=>"Associate Professor"],
    //         ['id' => "2370",'Employee_name' => "Sadaf Rana",'Employee_email' => "sadaf.rana@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
    //         ['id' => "2541",'Employee_name' => "Harmeen Amjad",'Employee_email' => "harmeen.amjad@imdcollege.edu.pk",'Employee_department' => "IT Department","Employee_designation" => "Web Developer"],
    //         ['id' => "1837",'Employee_name' => "Saira Safdar",'Employee_email' => "saira.safdar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
    //         ['id' => "0191",'Employee_name' => "Liaqat Ali",'Employee_email' => "liaqat.ali@imdcollege.edu.pk",'Employee_department' => "IT","Employee_designation"=>"IT Assitant"],
    //         ['id' => "1415",'Employee_name' => "Alia Sarfaraz",'Employee_email' => "alia.sarfarz@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
    //         ['id' => "2254",'Employee_name' => "Muhammad Ahsan Hussain", 'Employee_email' => "ahsan.hussain@imdcollege.edu.pk ", 'Employee_department' => "IT","Employee_designation"=>"Chief Information Officer"],
    //         ['id' => "2292",'Employee_name' => "Dr Zaid Umar",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Medicine","Employee_designation"=>"Senior Registrar"],
    //         // ['id' => "",'Employee_name' => "Sadaf Jafar",'Employee_email' => "sadaf.jafar@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
    //         ['id' => "1596",'Employee_name' => "Dr Asim Hussan",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Registrar","Employee_designation"=>"Medicine"],
    //         ['id' => "0213",'Employee_name' => "Dr Jais Kumar",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Associate Professor","Employee_designation"=>"Medicine"],
    //         ['id' => "1762",'Employee_name' => "Dr Ehtsham Hafeez",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Associate Professor","Employee_designation"=>"Medicine"],
    //         ['id' => "0300",'Employee_name' => "Dr Sumaira Adbullah",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Dermatology","Employee_designation"=>"Associate Professor"],
    //         ['id' => "1180",'Employee_name' => "Dr Sohaib Haider",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "General Surgery","Employee_designation"=>"Assitant Professor"],
    //         ['id' => "1255",'Employee_name' => "Muhammad Usman Akram",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "General Surgery","Employee_designation"=>"Assitant Professor"],
    //         ['id' => "0316",'Employee_name' => "Dr Hasham Khan",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Urology","Employee_designation"=>"Assitant Professor"],
    //         ['id' => "0789",'Employee_name' => "Muhammad Hanif",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Orthopedic Surgery","Employee_designation"=>"Assitant Professor"],
    //         ['id' => "2293",'Employee_name' => "Dr Tabish Samuel",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Genearl Surgery","Employee_designation"=>"Senior Registrar"],
    //         ['id' => "1761",'Employee_name' => "Abdul Ali Wajid",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Oncology","Employee_designation"=>"Assistant Consultant"],
    //         ['id' => "0317",'Employee_name' => "Beenish Gull",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Psychiatry","Employee_designation"=>"Senior Registrar"],
    //         // ['id' => "0318",'Employee_name' => "Azmat Shaheen",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => "Psychiatry","Employee_designation"=>"Senior Registrar"],
    //         ['id' => "0078",'Employee_name' => "Hina Aslam",'Employee_email' => "hina.aslam@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "]]
            
    //         // ['id' => "",'Employee_name' => "Naghmi Asif",'Employee_email' => "naghmi.asif@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "]],
    //         //['id' => "",'Employee_name' => "",'Employee_email' => "@imdcollege.edu.pk",'Employee_department' => " ","Employee_designation"=>" "],
            
            
        // );

}
