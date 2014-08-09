<?php

use HelpRoy\Storage\AnimalTypes\AnimalType;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

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
