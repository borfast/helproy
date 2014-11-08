<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use HelpRoy\Storage\AnimalTypes\AnimalType;

class AnimalTypesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            AnimalType::create([
                "name" => $faker->name,
            ]);
        }
    }
}
