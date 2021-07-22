<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('employee')->insert([
            'name' => $faker->name,
            'description' => $faker->text(50),
            'standard' => $faker->boolean(50),
            'office_id' => 1,
            'employee_status_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('employee')->insert([
            'name' => $faker->name,
            'description' => $faker->text(50),
            'standard' => $faker->boolean(50),
            'office_id' => 1,
            'employee_status_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('employee')->insert([
            'name' => $faker->name,
            'description' => $faker->text(50),
            'standard' => $faker->boolean(50),
            'office_id' => 1,
            'employee_status_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
