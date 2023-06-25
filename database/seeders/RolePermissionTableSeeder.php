<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create role
        $roleSuperAdmin = [
            [
                'name' => 'SuperAdmin',
                
            ],
            [
                'name' => 'Central Store',
            ],
            [
                'name' => 'Requisition',
            ],
            [
                'name' => 'Data Entry',
            ],
            [
                'name' => 'Report generator',
            ],
        ];
        foreach($roleSuperAdmin as $roleSuperAdmin){
            $roleSuperAdmin = Role::create([
                'name' => $roleSuperAdmin['name']
            ]
            );
        }
       
        // $role = Role::create(['name' => 'Admin']);
        // $role = Role::create(['name' => 'Marketer']);

        //permimssion list array



        $permissions=[
            [
                'group_name'=>'dashboard',
                'permission'=>[
                    'dashboard.view',
                ],
            ],
            [
                'group_name'=>'dataentry',
                'permission'=>[
                    'data.view',
                    'data.edit',
                    'data.create',
                    'data.delete',
                ],
            ],
            [
                'group_name'=>'report',
                'permission'=>[
                    'report.view',
                    'report.edit',
                    'report.create',
                    'report.delete',
                ],
            ],
            [
                'group_name'=>'user',
                'permission'=>[
                    'user.view',
                    'user.edit',
                    'user.create',
                    'user.delete',
                ],
            ]
        ];

        //create and assign permission

        for ($i=0; $i < count($permissions) ; $i++) {
            $permissionGroup=$permissions[$i]['group_name'];
            for ($j=0; $j < count($permissions[$i]['permission']); $j++) {
                $permission=Permission::create(['name'=>$permissions[$i]['permission'][$j],'group_name'=>$permissionGroup]);
                $roleSuperAdmin->givePermissionTo([$permission]);
                $permission->assignRole([$roleSuperAdmin]);
            }
        }
        DB::table('model_has_roles')->insert([
            'role_id'=>1,
            'model_type'=>'App\Models\User',
            'model_id'=>1
        ]);
        DB::table('model_has_roles')->insert([
            'role_id'=>2,
            'model_type'=>'App\Models\User',
            'model_id'=>2
        ]);        DB::table('model_has_roles')->insert([
            'role_id'=>3,
            'model_type'=>'App\Models\User',
            'model_id'=>3
        ]);        DB::table('model_has_roles')->insert([
            'role_id'=>4,
            'model_type'=>'App\Models\User',
            'model_id'=>4
        ]);        DB::table('model_has_roles')->insert([
            'role_id'=>5,
            'model_type'=>'App\Models\User',
            'model_id'=>5
        ]);
        // $roles = [
        //     [
        //         'name' => 'SuperAdmin',
        //         'permissions' => [
        //             'dashboard.view',
        //             'data.view',
        //             'data.edit',
        //             'data.create',
        //             'data.delete',
        //             'report.view',
        //             'report.edit',
        //             'report.create',
        //             'report.delete',
        //             'user.view',
        //             'user.edit',
        //             'user.create',
        //             'user.delete',
        //         ],
        //     ],
        //     [
        //         'name' => 'Central Store',
        //         'permissions' => [
        //             'dashboard.view',
        //             'data.view',
        //             'data.edit',
        //             'data.create',
        //             'data.delete',
        //             'report.view',
        //             'report.edit',
        //             'report.create',
        //             'report.delete',
        //             'user.view',
        //             'user.edit',
        //             'user.create',
        //             'user.delete',
        //         ],
        //     ],
        //     [
        //         'name' => 'Requisition',
        //         'permissions' => [
        //             'dashboard.view',
        //             'data.view',
        //             'data.edit',
        //             'data.create',
        //             'data.delete',
        //             'report.view',
        //             'report.edit',
        //             'report.create',
        //             'report.delete',
        //             'user.view',
        //             'user.edit',
        //             'user.create',
        //             'user.delete',
        //         ],
        //     ],
        //     [
        //         'name' => 'Data Entry',
        //         'permissions' => [
        //             'dashboard.view',
        //             'data.view',
        //             'data.edit',
        //             'data.create',
        //             'data.delete',
        //             'report.view',
        //             'report.edit',
        //             'report.create',
        //             'report.delete',
        //             'user.view',
        //             'user.edit',
        //             'user.create',
        //             'user.delete',
        //         ],
        //     ],
        //     [
        //         'name' => 'Report generator',
        //         'permissions' => [
        //             'dashboard.view',
        //             'data.view',
        //             'data.edit',
        //             'data.create',
        //             'data.delete',
        //             'report.view',
        //             'report.edit',
        //             'report.create',
        //             'report.delete',
        //             'user.view',
        //             'user.edit',
        //             'user.create',
        //             'user.delete',
        //         ],
        //     ],
            
        //     // Add more roles here
        // ];

        // foreach ($roles as $roleData) {
        //     $role = Role::create(['name' => $roleData['name']]);
        //     $permissions = $roleData['permissions'];

        //     foreach ($permissions as $permission) {
        //         $existingPermission = Permission::where('name', $permission)
        //             ->where('guard_name', 'web')
        //             ->first();

        //         if (!$existingPermission) {
        //             $permission = Permission::create([
        //                 'name' => $permission,
        //                 'group_name' => 'default', // Provide a default group name here

        //                 'guard_name' => 'web',
        //             ]);

        //             $role->givePermissionTo($permission);
        //         }
        //     }
        // }
        // $users = [
        //     [
        //         'full_name' => 'Sajjad Hossain',
        //         'email' => 'superadmin@gmail.com',
        //         'image' => 'sajjad.jpg',
        //         'phone_number' => 1796234234,
        //         'gender' => 'male',
        //         'street_address' => 'Home# 30, Road# 3, Mirpur-12, Dhaka-1216, Bangladesh',
        //         'about' => 'Designing and implementing applications that are written in PHP',
        //         'dob' => Carbon::parse('1999-06-01'),
        //         'password' => 'password',
        //         'role' => 'SuperAdmin',
        //     ],
        //     [
        //         'full_name' => 'Mynul Islam',
        //         'email' => 'mynul@dhl.com',
        //         'image' => 'mynul.jpg',
        //         'phone_number' => 1766715657,
        //         'gender' => 'male',
        //         'street_address' => 'Home# 143, Road# 1,Avenue# 1, Mirpur-DOHS, Dhaka-1216, Bangladesh',
        //         'about' => 'Designing and implementing applications that are written in PHP',
        //         'dob' => Carbon::parse('1999-10-30'),
        //         'password' => 'password',
        //         'role' => 'Central Store',
        //     ],
        //     [
        //         'full_name' => 'Shahadat Hossain',
        //         'email' => 'shahadat@dhl.com',
        //         'image' => 'sajjad.jpg',
        //         'phone_number' => 1796234299,
        //         'gender' => 'male',
        //         'street_address' => 'Home# 77, Road# 2, Mirpur-12, Dhaka-1216, Bangladesh',
        //         'about' => 'Designing and implementing applications that are written in PHP',
        //         'dob' => Carbon::parse('2000-03-03'),
        //         'password' => 'password',
        //         'role' => 'Requisition',
        //     ],
        //     [
        //         'full_name' => 'Kanon Ahmed',
        //         'email' => 'kanon@dhl.com',
        //         'image' => 'kanon.jpg',
        //         'phone_number' => 1996204233,
        //         'gender' => 'male',
        //         'street_address' => 'Home# 99, Road# 4, Mirpur-12, Dhaka-1216, Bangladesh',
        //         'about' => 'Designing and implementing applications that are written in PHP',
        //         'dob' => Carbon::parse('1993-04-23'),
        //         'password' => 'password',
        //         'role' => 'Data Entry',
        //     ],
        //     [
        //         'full_name' => 'Ali Hossain',
        //         'email' => 'ali@dhl.com',
        //         'image' => 'sajjad.jpg',
        //         'phone_number' => 1796234299,
        //         'gender' => 'male',
        //         'street_address' => 'Home# 77, Road# 2, Mirpur-12, Dhaka-1216, Bangladesh',
        //         'about' => 'Designing and implementing applications that are written in PHP',
        //         'dob' => Carbon::parse('2000-03-03'),
        //         'password' => 'password',
        //         'role' => 'Report generator',
        //     ],
        //     // Add more users here
        // ];

        // foreach ($users as $userData) {
        //     $user = User::create([
        //         'full_name' => $userData['full_name'],
        //         'email' => $userData['email'],
        //         'image' => $userData['image'],
        //         'phone_number' => $userData['phone_number'],
        //         'gender' => $userData['gender'],
        //         'street_address' => $userData['street_address'],
        //         'about' => $userData['about'],
        //         'dob' => $userData['dob'],
        //         'password' => Hash::make($userData['password']),
        //     ]);
        //     $role = Role::findByName($userData['role']);


        //     // $role = Role::where('name', $userData['role'])->first();
        //     // $user->assignRole($role);
        //      // DB::table('model_has_roles')->insert([
        // //     'role_id'=>1,
        // //     'model_type'=>'App\Models\User',
        // //     'model_id'=>1
        // // ]);
        // }


    }
}