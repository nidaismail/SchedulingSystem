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
            'department' => 'IT',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('admin');

        User::create([
            
            'userID' => '188',
            'name' => 'Zeeshan Mubeen',
            'email' => 'zeeshan.mubeen@imdcollege.com',
            'email_verified_at' => now(),
            'designation' => 'IT Manager',
            'department' => 'IT',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('supervisor');
        
    }
}
