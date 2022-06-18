<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();

        Equipment::factory(10)
            ->create()
            ->each(function ($equipment) use ($users) {
                Record::factory(5)
                    ->create([
                        'user_id' => $users[rand(0, count($users) - 1)]->id,
                        'equipment_id' => $equipment->id
                    ]);
            });
    }
}
