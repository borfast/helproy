<?php

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('AnimalTypesTableSeeder');
        $this->call('AnimalsTableSeeder');
        $this->call('ContactsTableSeeder');
        $this->call('AdsTableSeeder');
        $this->call('LostAdsTableSeeder');
        $this->call('FoundAdsTableSeeder');
        $this->call('AdoptionAdsTableSeeder');
    }
}
