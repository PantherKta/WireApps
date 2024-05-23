<?php

use Illuminate\Database\Seeder;
use App\Models\Medication;

class MedicationSeeder extends Seeder
{
    public function run()
    {
        Medication::create([
            'name' => 'Paracetamol',
            'description' => 'Pain reliever and fever reducer',
            'quantity' => 100,
        ]);

        Medication::create([
            'name' => 'Ibuprofen',
            'description' => 'Nonsteroidal anti-inflammatory drug (NSAID)',
            'quantity' => 50,
        ]);
    }
}
