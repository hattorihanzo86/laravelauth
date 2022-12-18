<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'is_admin'=>'1',
                'password'=> bcrypt('password'),
        ]);

        User::create([
            'name'=>'User',
            'email'=>'user@user.com',
            'is_admin'=>'0',
            'password'=> bcrypt('password'),
        ]);

       
    }
}
