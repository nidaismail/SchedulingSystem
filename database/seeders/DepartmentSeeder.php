<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department')->insert(
            [
            ['name' => "IT"],
            ['name' => "DPT"],
            ['name' => "MLT"],
           
            ]);
    }
}
?>