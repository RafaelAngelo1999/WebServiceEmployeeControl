<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            SuperUserSeeder::class,
            SquadSeeder::class,
            EmployeeStatusSeeder::class,
            OfficeSeeder::class,
            TribeSeeder::class,
            EmployeeSeeder::class,
            EmployeeSquadSeeder::class,
            SquadTribeSeeder::class,
            ProductSeeder::class,
            EmployeeProductSeeder::class,
            // SchedulingSeeder::class,
            // RealtySeeder::class,
        ]);
    }
}
