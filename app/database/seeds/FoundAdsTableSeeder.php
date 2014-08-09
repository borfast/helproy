<?php

use HelpRoy\Storage\Ads\FoundAd;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FoundAdsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            FoundAd::create([
                "place" => $faker->address,
                "found_date" => $faker->dateTime,
                "coordinates" => "N ".$faker->latitude.", W ".$faker->longitude,
            ]);
        }
    }
}
