<?php

use HelpRoy\Storage\Ads\LostAd;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LostAdsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            LostAd::create([
                "place" => $faker->address,
                "lost_date" => $faker->dateTime,
                "coordinates" => "N ".$faker->latitude.", W ".$faker->longitude,
            ]);
        }
    }
}
