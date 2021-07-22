<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('tribe')->insert([
            'name' => $faker->name,
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('tribe')->insert([
            'name' => $faker->name,
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('tribe')->insert([
            'name' => $faker->name,
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
