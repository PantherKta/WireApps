<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'role' => 'owner',
            ],
            [
                'name' => 'Manager',
                'username' => 'manager',
                'password' => Hash::make('manager123'),
                'role' => 'manager',
            ],
            [
                'name' => 'Cashier',
                'username' => 'cashier',
                'password' => Hash::make('cashier123'),
                'role' => 'cashier',
            ],
        ]);
    }
}
