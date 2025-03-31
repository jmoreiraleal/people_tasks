<?php

namespace Database\Seeders;

use App\Models\People;
use App\Models\Tasks;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $people = People::factory()->count(10)->create();
        $tasks = Tasks::factory()->count(15)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        foreach ($people as $person) {
            $person->tasks()->attach(
                $tasks->random(rand(1, 5))->pluck('id')->toArray()
            );
        }
    }
}
