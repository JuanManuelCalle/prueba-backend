<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeIdentificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeDocument::create([
            'name' => 'RUT',
            'description' => 'Identificación RUT',
        ]);

        TypeDocument::create([
            'name' => 'NIT',
            'description' => 'Identificación NIT',
        ]);

        TypeDocument::create([
            'name' => 'PASAPORTE',
            'description' => 'Identificación Pasaporte',
        ]);
    }
}
