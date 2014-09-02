<?php

namespace HelpRoy\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{
    // Triggered automatically by Laravel
    public function register()
    {
        // Contacts
        $this->app->bind(
            'HelpRoy\Storage\Contacts\ContactsRepositoryInterface',
            'HelpRoy\Storage\Contacts\EloquentContactsRepository'
        );

        // Users
        $this->app->bind(
            'HelpRoy\Storage\Users\UsersRepositoryInterface',
            'HelpRoy\Storage\Users\EloquentUsersRepository'
        );

        // Animals
        $this->app->bind(
            'HelpRoy\Storage\Animals\AnimalsRepositoryInterface',
            'HelpRoy\Storage\Animals\EloquentAnimalsRepository'
        );

        // AnimalTypes
        $this->app->bind(
            'HelpRoy\Storage\AnimalTypes\AnimalTypesRepositoryInterface',
            'HelpRoy\Storage\AnimalTypes\EloquentAnimalTypesRepository'
        );

        // AdoptionAds
        $this->app->bind(
            'HelpRoy\Storage\Ads\AdoptionAdsRepositoryInterface',
            'HelpRoy\Storage\Ads\EloquentAdoptionAdsRepository'
        );

        // LostAds
        $this->app->bind(
            'HelpRoy\Storage\Ads\LostAdsRepositoryInterface',
            'HelpRoy\Storage\Ads\EloquentLostAdsRepository'
        );

        // FoundAds
        $this->app->bind(
            'HelpRoy\Storage\Ads\FoundAdsRepositoryInterface',
            'HelpRoy\Storage\Ads\EloquentFoundAdsRepository'
        );
    }
}
