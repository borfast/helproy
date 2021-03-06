<?php

Route::get('/', function () {
    return View::make('hello');
});

Route::group(['prefix' => 'contacts'], function () {
    Route::model('contact', 'HelpRoy\Storage\Contacts\Contact');
    Route::get('show/{contact}', ['uses' => 'ContactsController@show']);
});

Route::group(['prefix' => 'animals'], function () {
    Route::model('animal', 'HelpRoy\Storage\Animals\Animal');
    Route::get('show/{animal}', ['uses' => 'AnimalsController@show']);
});

Route::group(['prefix' => 'animaltypes'], function () {
//    Route::model('animaltype', 'HelpRoy\Storage\AnimalTypes\AnimalType');
//    Route::get('show/{animaltype}', ['uses' => 'AnimalTypesController@show']);
//    Route::get('list', ['uses' => 'AnimalTypesController@list']);

});
Route::resource('animaltypes', 'AnimalTypesController');

Route::group(['prefix' => 'users'], function () {
    Route::model('user', 'HelpRoy\Storage\Users\User');
    Route::get('show/{user}', ['uses' => 'UsersController@show']);
});

Route::group(['prefix' => 'lostads'], function () {
    Route::model('lostad', 'HelpRoy\Storage\Ads\LostAd');
    Route::get('show/{lostad}', ['uses' => 'LostAdsController@show']);
});

Route::group(['prefix' => 'foundads'], function () {
    Route::model('foundad', 'HelpRoy\Storage\Ads\FoundAd');
    Route::get('show/{foundad}', ['uses' => 'FoundAdsController@show']);
});

Route::group(['prefix' => 'adoptionads'], function () {
    Route::model('adoptionad', 'HelpRoy\Storage\Ads\AdoptionAd');
    Route::get('show/{adoptionad}', ['uses' => 'AdoptionAdsController@show']);
});
