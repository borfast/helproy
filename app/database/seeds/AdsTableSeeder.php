<?php

use HelpRoy\Storage\Ads\Ad;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Ad::create([
                "animal_id" => $faker->numberBetween($min = 1, $max = 2),
                "user_id" => 1,
                "contact_id" => $faker->numberBetween($min = 1, $max = 10),
                "ad_type" => "lost",
            ]);
        }
    }
}
