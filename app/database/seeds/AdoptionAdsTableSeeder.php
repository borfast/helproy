<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use HelpRoy\Storage\Ads\AdoptionAd;

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
