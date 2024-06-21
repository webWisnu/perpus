<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
               
        schema::enableForeignKeyConstraints();
       
        Schema::disableForeignKeyConstraints();


       $users = [
            [
                'username' => 'admin',
                'slug' => 'admin',
                'email' => 'admin@example.com',
                'phone' =>  '098112347788',
                'addres' => 'yogyakarta',
                'role_id' =>  1,
                'password' => Hash::make('Admin123'),
                'status' => 'active',
                 'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];


        foreach ($users as $user) {
            User::create($user);
        }
        
    }
}
