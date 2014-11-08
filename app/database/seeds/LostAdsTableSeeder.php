<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use HelpRoy\Storage\Ads\LostAd;

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
