<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
               [                
                'username'=>'admin',                
                'role_id'=>3,
                'email'=>'admin@admin.com',
                'password'=>bcrypt('admin'),                
               ],
               [                
                'username'=>'staff',                
                'role_id'=>2,
                'email'=>'staff@staff.com',
                'password'=>bcrypt('staff'),
               ],
               [                
                'username'=>'student',                
                'role_id'=>1,
                'email'=>'student@student.com',
                'password'=>bcrypt('student'),
               ]
            ]
        );        
    }
}
