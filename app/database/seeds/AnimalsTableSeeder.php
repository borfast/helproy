<?php

use HelpRoy\Storage\Animals\Animal;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AnimalsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        print($faker->name);

        Animal::create([
            "animal_type_id" => 1,
            "age" => "baby",
            "color_1" => "white",
            "color_2" => "brown",
            "size" => "S",
            "description" => $faker->text,
        ]);

        Animal::create([
            "animal_type_id" => 2,
            "age" => "baby",
            "color_1" => "grey",
            "color_2" => "black",
            "size" => "L",
            "description" => $faker->text,
        ]);
    }
}
