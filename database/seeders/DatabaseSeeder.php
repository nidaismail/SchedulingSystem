<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    
        {
            $this->call([
              ActivitySeeder::class,
              GradeSeeder::class,
              UserSeeder::class,
              LocationSeeder::class,
              RoleSeeder::class,
              AdminSeeder::class,
              DepartmentSeeder::class,
            ]);
        }
    
    }

    ?>
