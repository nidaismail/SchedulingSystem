<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        User::create([
            
            'userID' => '2558',
            'name' => 'Nida Ismail',
            'email' => 'nida.ismail@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Web developer',
            'dep_id' => '11',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('admin');

        User::create([
            
            'userID' => '188',
            'name' => 'Zeeshan Mobin',
            'email' => 'zeeshan.mobin@imdcollege.com',
            'email_verified_at' => now(),
            'designation' => 'IT Manager',
            'dep_id' => '11',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('supervisor');
        
        User::create([
            
            'userID' => '2000',
            'name' => 'Sadaf Rana',
            'email' => 'sadaf.rana@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Web developer',
            'dep_id' => '11',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2001',
            'name' => 'Amna Ali',
            'email' => 'amna.ali@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Web developer',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2254',
            'name' => 'Muhammad Ahsan Hussain',
            'email' => 'ahsan.hussain@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Chief Information Officer',
            'dep_id' => '11',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('admin');
    }
}
