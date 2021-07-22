<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('office')->insert([
            'name' => "Não definida",
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('office')->insert([
            'name' => "Desenvolvedor Jr.",
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('office')->insert([
            'name' => "Product Owner",
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('office')->insert([
            'name' => "Agile Master",
            'description' => $faker->text(50),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
