<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rifky',
            'email' => 'rifky@gmail.com',
            'phone_number' => '0896162611',
            'password' => bcrypt('12345678'),
            'role' => 'Owner'
        ]);

        User::create([
            'name' => 'Billy',
            'email' => 'billyjonathan@gamil.com',
            'phone_number' => '0819291921',
            'password' => bcrypt('12345678'),
            'role' => 'Staff'
        ]);
    }
}
