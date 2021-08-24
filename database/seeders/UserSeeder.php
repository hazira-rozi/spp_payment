<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Hash;
use DB;
 
class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        
    }
}