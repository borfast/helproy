<?php

use HelpRoy\Storage\Ads\AdoptionAd;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdoptionAdsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            AdoptionAd::create([
                "ad_id" => $faker->numberBetween($min = 1, $max = 10)
            ]);
        }
    }
}
