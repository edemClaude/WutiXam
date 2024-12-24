<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Cour::factory()->create(
            [
                'image' => 'assets/logo/logo_php.png',
                'title' => 'Cours PHP',
                'description' => 'Cours PHP',
                'price' => 0.00
            ]
        );

        \App\Models\Cour::factory()->create(
            [
                'image' => 'assets/logo/logo_python.png',
                'title' => 'Cours Python',
                'description' => 'Cours Python',
                'price' => 0.00
            ]
        );

        \App\Models\Cour::factory()->create(
            [
                'image' => 'assets/logo/logo_java.png',
                'title' => 'Cours Java',
                'description' => 'Cours Java',
                'price' => 0.00
            ]
        );
    }
}
