<?php

namespace HelpRoy\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{

   // Triggered automatically by Laravel
   public function register()
   {
       $this->app->bind(
           'HelpRoy\Storage\Contacts\ContactsRepositoryInterface',
           'HelpRoy\Storage\Contacts\EloquentContactsRepository'
       );
   }
}