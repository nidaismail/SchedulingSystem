<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity')->insert(
            [
            
            ['activity_name' => "Ward Round","activity_description"=>""],
            ['activity_name' => "Ward Duty","activity_description"=>""],
            ['activity_name' => "Academic Activity","activity_description"=>""],
            ['activity_name' => "OPD Clinic","activity_description"=>""],
            ['activity_name' => "Executive Clinic","activity_description"=>""],
            ['activity_name' => "OT Day","activity_description"=>""],
            ['activity_name' => "Meeting","activity_description"=>""],
            ['activity_name' => "On call Duty","activity_description"=>""],
            ['activity_name' => "24-H Call Duty","activity_description"=>""],
            ['activity_name' => "32-H Call Duty","activity_description"=>""],
            ['activity_name' => "Workshop/Training","activity_description"=>""],
            ['activity_name' => "Office","activity_description"=>""],
            ['activity_name' => "ICU/ER","activity_description"=>""],
            ['activity_name' => "Others","activity_description"=>""]],
        );
    }
}