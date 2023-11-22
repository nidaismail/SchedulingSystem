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
        User::create([
            
            'userID' => '0',
            'name' => 'TBD',
            'email' => 'unknown@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'unknown',
            'dep_id' => '11',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

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
        //new
        User::create([
            'userID' => '5',
            'name' => 'Saffia Shaukat',
            'email' => 'Saffia.shaukat@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor & HOD',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '6',
            'name' => 'Irum Iqbal',
            'email' => 'iram.iqbal@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2208',
            'name' => 'Ayesha Sohail',
            'email' => 'ayesha.sohail@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2291',
            'name' => 'Ramsha Akbar',
            'email' => 'ramsha.akbar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2543',
            'name' => 'Kunza Sarwar',
            'email' => 'kunza.sarwar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2594',
            'name' => 'Muhammad Hassaan Hafeez',
            'email' => 'hassan.hafeez@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2788',
            'name' => 'Qurrat Ul Ain Ghani',
            'email' => 'qurratulain.ghani@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2790',
            'name' => 'Tanzeela Ashraf',
            'email' => 'tanzeela.ashraf@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '2913',
            'name' => 'Komal Safdar',
            'email' => 'komal.safdar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '3048',
            'name' => 'Salama Sajid',
            'email' => 'salama.sajid@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '3088',
            'name' => 'Ayesha Ali',
            'email' => 'ayesha.ali@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '3113',
            'name' => 'Faiza Shafqat Umair',
            'email' => 'faiza.shafqat@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '23',
            'name' => 'Sumera Sarwar Khan',
            'email' => 'sumera.sarwar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');

        User::create([
            
            'userID' => '24',
            'name' => 'Sadaf Asif',
            'email' => 'sadaf.jafar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '25',
            'name' => 'Qurat Ul Ain Zia',
            'email' => 'qurat-ul-ain.zia@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1204',
            'name' => 'Maryam Shakeel',
            'email' => 'maryam.shakeel@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1625',
            'name' => 'Bilal Karim',
            'email' => 'bilal.karim@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2697',
            'name' => 'Utban Abdullah Cheema',
            'email' => 'utban.abdullah@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3046',
            'name' => 'Muhammad Tahir Aziz',
            'email' => 'tahir.aziz@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3107',
            'name' => 'Hamza Chauhdry',
            'email' => 'hamza.chauhdry@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //Physiology
        User::create([
            
            'userID' => '37',
            'name' => 'Asma Irfan',
            'email' => 'asma.irfan@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '3',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '40',
            'name' => 'Sadia Mubarak',
            'email' => 'sadia.mubarak@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '3',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '43',
            'name' => 'Saima Latif Qureshi',
            'email' => 'saima.latif@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '3',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2550',
            'name' => 'Sahar Gul',
            'email' => 'sahar.gul@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '3',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2895',
            'name' => 'Rubab Rameez',
            'email' => 'rubab.rameez@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '3',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //pathology
        User::create([
            
            'userID' => '56',
            'name' => 'Saeed Alam',
            'email' => 'saeed.alam@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '57',
            'name' => 'Naheed Naghmi',
            'email' => 'naheed.naghmi@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2385',
            'name' => 'Shehla Ambreen Alizai',
            'email' => 'shehla.ambreen@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2764',
            'name' => 'Hamas Ahzam Ali',
            'email' => 'hamas.ahzam@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2829',
            'name' => 'Iqra Jalil',
            'email' => 'iqra.jalil@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2915',
            'name' => 'Rehana Ramzan',
            'email' => 'rehana.ramzan@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3034',
            'name' => 'Nida Nasir',
            'email' => 'nida.nasir@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3041',
            'name' => 'Ameer Sikander Ahmed',
            'email' => 'ameer.sikander@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3098',
            'name' => 'Humaira Rehman',
            'email' => 'humaira.rehman@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3103',
            'name' => 'Jawad Akhtar',
            'email' => 'jawad.akhtar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //pharmacology
        User::create([
            
            'userID' => '955',
            'name' => 'Sarah Zahid',
            'email' => 'sarah.zahid@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '5',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '969',
            'name' => 'Aamna Khokhar',
            'email' => 'aamna.khokhar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '5',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3047',
            'name' => 'Zahra Iqbal',
            'email' => 'zahra.iqbal@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '5',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3092',
            'name' => 'Nusrat Jafery',
            'email' => 'nusrat.jafery@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor & HOD',
            'dep_id' => '5',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //community &medicine
        User::create([
            
            'userID' => '28',
            'name' => 'Sadia Zafar',
            'email' => 'sadia.zafar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '6',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '91',
            'name' => 'Nadia Tariq',
            'email' => 'nadia.tariq@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '6',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '93',
            'name' => 'Shehla Farhin',
            'email' => 'shehla.farhin@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '6',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '95',
            'name' => 'Sadaf Khalid',
            'email' => 'sadaf.khalid@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '6',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2102',
            'name' => 'Zahid Naeem',
            'email' => 'zahid.naeem@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor & HOD',
            'dep_id' => '6',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //foren
        User::create([
            
            'userID' => '2596',
            'name' => 'Amber Jamil Siddiqi',
            'email' => 'amber.jamil@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '7',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2901',
            'name' => 'Anam Zia',
            'email' => 'anam.zia@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '7',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '102',
            'name' => 'Muhammad Arif',
            'email' => 'muhammad.arif@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '7',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1415',
            'name' => 'Alia Sarfraz',
            'email' => 'alia.sarfaraz@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '7',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //dme
        User::create([
            
            'userID' => '115',
            'name' => 'Rehmah Sarfraz',
            'email' => 'rehma.sarfraz@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '8',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '116',
            'name' => 'Memoona Mansoor',
            'email' => 'memoona.mansoor@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '8',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        //
        User::create([
            
            'userID' => '110',
            'name' => 'Hamid Ali',
            'email' => 'hamid.ali@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '119',
            'name' => 'Naveed Arshad',
            'email' => 'naveed.arshad@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '121',
            'name' => 'Qurat ul Ain',
            'email' => 'quratulain@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '2',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '988',
            'name' => 'Hadiqa Adnan',
            'email' => 'hadiqa.adnan@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        
        User::create([
            
            'userID' => '1413',
            'name' => 'Hira Tariq',
            'email' => 'hira.tariq@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2231',
            'name' => 'Hafiza Mahnoor Shabbir',
            'email' => 'mahnoor.shabbir@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2250',
            'name' => 'Muhammad Kamran',
            'email' => 'muhammad.kamran@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2255',
            'name' => 'Asma Balqees',
            'email' => 'asma.balqees@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2345',
            'name' => 'Amber Shabbir',
            'email' => 'amber.shabbir@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2849',
            'name' => 'Usman Waheed',
            'email' => 'usman.waheed@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3116',
            'name' => 'Abdul Ghafoor Sajjad',
            'email' => 'abdul.ghafoor@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Principal',
            'dep_id' => '9',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        // User::create([
            
        //     'userID' => '211',
        //     'name' => 'Syed Irfan Ahmed',
        //     'email' => 'irfan.ahmed@imdcollege.edu.pk',
        //     'email_verified_at' => now(),
        //     'designation' => 'Principal',
        //     'dep_id' => '9',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        // ])->assignRole('user');
        User::create([
            
            'userID' => '122',
            'name' => 'Umer Farooq',
            'email' => 'umer.farooq@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Head of Student Affairs',
            'dep_id' => '14',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '123',
            'name' => 'Imran Ahmed',
            'email' => 'imran.ahmed@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Manager student Affairs',
            'dep_id' => '14',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '124',
            'name' => 'Amna Batool',
            'email' => 'amna.batool@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Manager student Affairs',
            'dep_id' => '14',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '125',
            'name' => 'Raazia Shaheen',
            'email' => 'raazia.shaheen@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Manager student Affairs',
            'dep_id' => '14',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '179',
            'name' => 'Muhammad Sabir Tabbussam',
            'email' => 'sabir.tabbussum@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Deputy Controller of Examination',
            'dep_id' => '15',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '193',
            'name' => 'Mazhar Hussain',
            'email' => 'mazhar.hussain@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Librarian',
            'dep_id' => '16',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '485',
            'name' => 'Robina Yaqoob',
            'email' => 'robina.yaqoob@imdcollge.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer/Skill Lab Coordinator',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '487',
            'name' => 'Rubina Nathaniel',
            'email' => 'rubina.nathaniel@incollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2204',
            'name' => 'Nagina Bibi',
            'email' => 'nagina.bibi@incollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2783',
            'name' => 'Nadir Ali Hassni',
            'email' => 'nadir.ali@incollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2850',
            'name' => 'Ahsan Nazar',
            'email' => 'ahsan.nazar@incollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Lecturer',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2949',
            'name' => 'Khaliq Jan',
            'email' => 'khaliq.jan@incollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3031',
            'name' => 'Amarah Tahir',
            'email' => 'amarah.tahir@incollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Lecturer',
            'dep_id' => '17',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2743',
            'name' => 'Farheen Rasheed',
            'email' => 'farheen.rasheed@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'People & Culture Officer',
            'dep_id' => '19',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1263',
            'name' => 'Syed Shoaib Haider Jaffery',
            'email' => 'shoaib.haider@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '21',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1780',
            'name' => 'Tayyab Ali',
            'email' => 'alitayyab@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '21',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1821',
            'name' => 'Muhammad Irfan Mahmood',
            'email' => 'muhammad.irfan@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '21',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '300',
            'name' => 'Sumaira Abdullah',
            'email' => 'sumaira.abdullah@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '22',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1398',
            'name' => 'Farhat Rehman',
            'email' => 'farhat.rehman@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '22',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '852',
            'name' => 'Mumtaz Ahmad Umar',
            'email' => 'mumtaz.umar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '23',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1803',
            'name' => 'Mohibullah',
            'email' => 'mohibullah@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '23',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '209',
            'name' => 'Qamar Rabbani',
            'email' => 'qamar.rabbani@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '24',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3085',
            'name' => 'Syed Naafay Tariq Farooq',
            'email' => 'naafay.tariq@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '24',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3086',
            'name' => 'Moneem Iqbal',
            'email' => 'moneem.iqbal@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '24',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '84',
            'name' => 'Nausheen Hashsham',
            'email' => 'nausheen.hashsham@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '303',
            'name' => 'Ahmed Raza',
            'email' => 'ahmed.raza@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1180',
            'name' => 'Sohaib Haider',
            'email' => 'sohaib.haider@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1626',
            'name' => 'Sabah Ali Chaudhary',
            'email' => 'sabah.ali@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Registrar',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1840',
            'name' => 'Munazzah Aziz',
            'email' => 'munazzah.aziz@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1896',
            'name' => 'Maham Farooq',
            'email' => 'maham.farooq@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1921',
            'name' => 'Rizwan Aziz',
            'email' => 'rizwan.aziz@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2164',
            'name' => 'Ibad Ur Rahman',
            'email' => 'dr.ibadurrehman@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3035',
            'name' => 'Adnan Ahmad',
            'email' => 'adnan.ahmad@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3120',
            'name' => 'Hira Saleem',
            'email' => 'hira.saleem@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '25',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '212',
            'name' => 'Rizwan Aziz Qazi',
            'email' => 'aziz.rizwan@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Professor',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '213',
            'name' => 'Jais Kumar',
            'email' => 'jais.kumar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            'userID' => '215',
            'name' => 'Usman Zafar',
            'email' => 'usman.zafar@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Associate Professor',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('user');
        User::create([
            'userID' => '1544',
            'name' => 'Ambreen Naz',
            'email' => 'ambreen.naz@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('user');
        //109
        User::create([
            
            'userID' => '1596',
            'name' => 'Asim Hassan',
            'email' => 'asim.hassan@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1762',
            'name' => 'Ehtsham Hafeez',
            'email' => 'ehtsham.hafeez@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2193',
            'name' => 'Shafaq Gul',
            'email' => 'shafaq.gul@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2194',
            'name' => 'Sana Salah',
            'email' => 'sana.salah@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2500',
            'name' => 'Hina Tariq Awan',
            'email' => 'hina.tariq@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2501',
            'name' => 'Hina Siddiqui',
            'email' => 'hina.siddiqui@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2502',
            'name' => 'Khawaja Muhammad Yaqoob Koreja',
            'email' => 'khwaja.yaqoob@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2789',
            'name' => 'Qurat ul Ain IMDC',
            'email' => 'quratulain1@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2799',
            'name' => 'Zaigham Hashir Janjua',
            'email' => 'zaigham.janjua@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3032',
            'name' => 'Rabia Abrar Paracha',
            'email' => 'rabia.abrar@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3033',
            'name' => 'Amin Hooda',
            'email' => 'amin.hooda@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'PG Trainee',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '3100',
            'name' => 'Hafiz Armaghan Saeed',
            'email' => 'armaghan.saeed@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '26',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1472',
            'name' => 'Uzma Nayyer',
            'email' => 'uzma.nayyer@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '27',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1822',
            'name' => 'Maria Tariq',
            'email' => 'maria.tariq@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Assistant Professor',
            'dep_id' => '27',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '1850',
            'name' => 'Muneeba Sadaf',
            'email' => 'muneeba.sadaf@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '27',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        // User::create([
            
        //     'userID' => '1850',
        //     'name' => 'Muneeba Sadaf',
        //     'email' => 'muneeba.sadaf@imdcollege.edu.pk',
        //     'email_verified_at' => now(),
        //     'designation' => 'Senior Registrar',
        //     'dep_id' => '27',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        // ])->assignRole('user');
        User::create([
            
            'userID' => '1853',
            'name' => 'Gul Amber Benish',
            'email' => 'gul.amber@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '27',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        User::create([
            
            'userID' => '2143',
            'name' => 'Maria Shaikh',
            'email' => 'maria.shaikh@danthospital.com',
            'email_verified_at' => now(),
            'designation' => 'Senior Registrar',
            'dep_id' => '27',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ])->assignRole('user');
        
       //sir
       User::create([
            
        'userID' => '1119',
        'name' => 'Rohail Amir Baber',
        'email' => 'rohail.baber@danthospital.com',
        'email_verified_at' => now(),
        'designation' => 'Senior Lecturer',
        'dep_id' => '9',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        
    ])->assignRole('user');
    User::create([
            
        'userID' => '1837',
        'name' => 'Saira Safdar',
        'email' => 'sairasafdar@imdcollege.edu.pk',
        'email_verified_at' => now(),
        'designation' => 'Assitant Professor',
        'dep_id' => '3',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        
    ])->assignRole('user');
    User::create([
            
        'userID' => '111',
        'name' => 'Afshan Fayyaz',
        'email' => 'afshan.fayyaz@imdcollege.edu.pk',
        'email_verified_at' => now(),
        'designation' => 'Visiting Lecturer',
        'dep_id' => '3',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        
    ])->assignRole('user');
    User::create([
            
        'userID' => '2499',
        'name' => 'Qurat ul Ain INC',
        'email' => 'quratulain@incollege.edu.pk',
        'email_verified_at' => now(),
        'designation' => 'Visiting Lecturer',
        'dep_id' => '17',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        
    ])->assignRole('user');
    User::create([
            
        'userID' => '975',
        'name' => 'Sehar Mahmood',
        'email' => 'sehar.mahmood@incollege.edu.pk',
        'email_verified_at' => now(),
        'designation' => 'Visiting Lecturer',
        'dep_id' => '17',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        
    ])->assignRole('user');


    }
}
