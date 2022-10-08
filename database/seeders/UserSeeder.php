<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
          [
              'name' => 'Director',
              'email' => 'director@utas.com',
              'password' => Hash::make('123456789'),
              'role'   => 'director'
          ],
          [
              'name' => 'Manager',
              'email' => 'manager@utas.com',
              'password' => Hash::make('123456789'),
              'role'   => 'manager'
          ],
          [
              'name' => 'Shop Staff',
              'email' => 'staff@utas.com',
              'password' => Hash::make('123456789'),
              'role'   => 'shop staff'
          ],
        ]);

    }
}
