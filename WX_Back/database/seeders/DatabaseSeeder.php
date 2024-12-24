<?php

namespace Database\Seeders;

use App\Models\Cour;
use App\Models\Lesson;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\This;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            CourSeeder::class,
            ModuleSeeder::class,
            LessonSeeder::class,
            VideoSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Edem Claude',
            'email' => 'edemClaude@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);

        User::factory(10)->create();

    }
}
