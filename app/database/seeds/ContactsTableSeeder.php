<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Contact::create([
                "name" => $faker->name,
                "address" => $faker->address,
                "phone" => $faker->phoneNumber,
                "user_id" => 1
            ]);
        }
    }
}
