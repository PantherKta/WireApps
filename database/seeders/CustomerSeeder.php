<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'name' => 'John Doe',
            'contact_info' => 'john.doe@example.com',
        ]);

        Customer::create([
            'name' => 'Jane Smith',
            'contact_info' => 'jane.smith@example.com',
        ]);
    }
}
