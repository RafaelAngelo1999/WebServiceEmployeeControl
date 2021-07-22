<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('product')->insert([
            'name' => $faker->name,
            'leader_id' => 1,
            'squad_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('product')->insert([
            'name' => $faker->name,
            'leader_id' => 1,
            'squad_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('product')->insert([
            'name' => $faker->name,
            'leader_id' => 2,
            'squad_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
