<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->type =   'Admin';
        $user->name =   'Mr. Admin';
        $user->email    =   'admin@gmail.com';
        $user->password =   bcrypt('password');
        $user->save();

        $user = new User();
        $user->type =   'Doctor';
        $user->name =   'Mr. Doctor';
        $user->email    =   'doctor@gmail.com';
        $user->password =   bcrypt('password');
        $user->save();
    }
}
