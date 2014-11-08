<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use HelpRoy\Storage\Contacts\Contact;

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
