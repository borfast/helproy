<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $colors = array(
            'white',
            'black',
            'grey',
            'brown',
            'orange',
            'yellow',
            'blue',
            'green',
            'red',
        );

        Schema::create('animal_types', function ($table) {
            $table->increments('id');
            $table->string('name', 20);
        });

        Schema::create('animals', function ($table) use ($colors) {
            $table->increments('id');
            $table->integer('animal_type_id')->unsigned();
            $table->foreign('animal_type_id')->references('id')->on('animal_types');
            $table->enum('age', array('baby', 'young', 'adult', 'senior'));
            $table->enum('color_1', $colors);
            $table->enum('color_2', $colors);
            $table->enum('size', array('S', 'M', 'L', 'XL'));
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->string('remember_token')->nullable();
            $table->timestamps();
        });

        Schema::create('contacts', function ($table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address');
            $table->string('phone', 20);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('ads', function ($table) {
            $table->increments('id');
            $table->integer('animal_id')->unsigned();
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->enum('ad_type', array('lost', 'found', 'adoption'));
            $table->timestamps();
        });

        Schema::create('adoption_ads', function ($table) {
            $table->integer('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads');
            $table->timestamps();
        });

        Schema::create('lost_ads', function ($table) {
            $table->integer('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads');
            $table->text('place');
            $table->datetime('lost_date');
            $table->string('coordinates');
            $table->timestamps();
        });

        Schema::create('found_ads', function ($table) {
            $table->integer('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads');
            $table->text('place');
            $table->datetime('found_date');
            $table->string('coordinates');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adoption_ads');
        Schema::drop('lost_ads');
        Schema::drop('found_ads');
        Schema::drop('ads');
        Schema::drop('animals');
        Schema::drop('animal_types');
        Schema::drop('contacts');
        Schema::drop('users');
    }
}
