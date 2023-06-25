<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'full_name' => 'Sajjad Hossain',
        //     'email' => 'superadmin@gmail.com',
        //     'image' =>  'sajjad.jpg',
        //     'phone_number'=>1796234234,
        //     'gender'=>'male',
        //     'street_address'=>'Home# 30,Road# 3, Mirpur-12,Dhaka-1216,Bangladesh',
        //     'about'=>'Designing and implementing applications that are written in PHP',
        //     'dob'=>Carbon::parse('1999-10-30'),
        //     'password' => Hash::make('password'),
        // ]);
        $users = [
            [
                'full_name' => 'Sajjad Hossain',
                'email' => 'superadmin@gmail.com',
                'image' => 'sajjad.jpg',
                'phone_number' => 1796234234,
                'gender' => 'male',
                'street_address' => 'Home# 30, Road# 3, Mirpur-12, Dhaka-1216, Bangladesh',
                'about' => 'Designing and implementing applications that are written in PHP',
                'dob' => Carbon::parse('1999-06-01'),
                'password' => 'password',
                'role' => 'SuperAdmin',
            ],
            [
                'full_name' => 'Mynul Islam',
                'email' => 'mynul@dhl.com',
                'image' => 'mynul.jpg',
                'phone_number' => 1766715657,
                'gender' => 'male',
                'street_address' => 'Home# 143, Road# 1,Avenue# 1, Mirpur-DOHS, Dhaka-1216, Bangladesh',
                'about' => 'Designing and implementing applications that are written in PHP',
                'dob' => Carbon::parse('1999-10-30'),
                'password' => 'password',
                'role' => 'Central Store',
            ],
            [
                'full_name' => 'Shahadat Hossain',
                'email' => 'shahadat@dhl.com',
                'image' => 'sajjad.jpg',
                'phone_number' => 1796234299,
                'gender' => 'male',
                'street_address' => 'Home# 77, Road# 2, Mirpur-12, Dhaka-1216, Bangladesh',
                'about' => 'Designing and implementing applications that are written in PHP',
                'dob' => Carbon::parse('2000-03-03'),
                'password' => 'password',
                'role' => 'Requisition',
            ],
            [
                'full_name' => 'Kanon Ahmed',
                'email' => 'kanon@dhl.com',
                'image' => 'kanon.jpg',
                'phone_number' => 1996204233,
                'gender' => 'male',
                'street_address' => 'Home# 99, Road# 4, Mirpur-12, Dhaka-1216, Bangladesh',
                'about' => 'Designing and implementing applications that are written in PHP',
                'dob' => Carbon::parse('1993-04-23'),
                'password' => 'password',
                'role' => 'Data Entry',
            ],
            [
                'full_name' => 'Ali Hossain',
                'email' => 'ali@dhl.com',
                'image' => 'sajjad.jpg',
                'phone_number' => 1796234299,
                'gender' => 'male',
                'street_address' => 'Home# 77, Road# 2, Mirpur-12, Dhaka-1216, Bangladesh',
                'about' => 'Designing and implementing applications that are written in PHP',
                'dob' => Carbon::parse('2000-03-03'),
                'password' => 'password',
                'role' => 'Report generator',
            ],
        ];
            // Add more users here
             foreach ($users as $userData) {
            $user = User::create([
                'full_name' => $userData['full_name'],
                'email' => $userData['email'],
                'image' => $userData['image'],
                'phone_number' => $userData['phone_number'],
                'gender' => $userData['gender'],
                'street_address' => $userData['street_address'],
                'about' => $userData['about'],
                'dob' => $userData['dob'],
                'password' => Hash::make($userData['password']),
            ]);
        }
        
    }
}
