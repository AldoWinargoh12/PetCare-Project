<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnimalsDog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Dalmatian
        DB::table('animals')->insert([
            ['group' => 'Dog' , 'species' => 'Dalmatian', 'size' => 'Puppy'],
            ['group' => 'Dog' , 'species' => 'Dalmatian', 'size' => 'adolescence'],
            ['group' => 'Dog' , 'species' => 'Dalmatian', 'size' => 'Adult'],
            ['group' => 'Dog' , 'species' => 'Dalmatian', 'size' => 'Senior'],
        ]);

        //Labrador Retreiver
        DB::table('animals')->insert([
            ['group' => 'Dog' , 'species' => 'Labrador Retreiver', 'size' => 'Puppy'],
            ['group' => 'Dog' , 'species' => 'Labrador Retreiver', 'size' => 'adolescence'],
            ['group' => 'Dog' , 'species' => 'Labrador Retreiver', 'size' => 'Adult'],
            ['group' => 'Dog' , 'species' => 'Labrador Retreiver', 'size' => 'Senior'],
        ]);

        //Corgi
        DB::table('animals')->insert([
            ['group' => 'Dog' , 'species' => 'Corgi', 'size' => 'Puppy'],
            ['group' => 'Dog' , 'species' => 'Corgi', 'size' => 'adolescence'],
            ['group' => 'Dog' , 'species' => 'Corgi', 'size' => 'Adult'],
            ['group' => 'Dog' , 'species' => 'Corgi', 'size' => 'Senior'],
        ]);

        //Pug
        DB::table('animals')->insert([
            ['group' => 'Dog' , 'species' => 'Pug', 'size' => 'Puppy'],
            ['group' => 'Dog' , 'species' => 'Pug', 'size' => 'adolescence'],
            ['group' => 'Dog' , 'species' => 'Pug', 'size' => 'Adult'],
            ['group' => 'Dog' , 'species' => 'Pug', 'size' => 'Senior'],
        ]);

        //Pomeranian
        DB::table('animals')->insert([
            ['group' => 'Dog' , 'species' => 'Pomeranian', 'size' => 'Puppy'],
            ['group' => 'Dog' , 'species' => 'Pomeranian', 'size' => 'adolescence'],
            ['group' => 'Dog' , 'species' => 'Pomeranian', 'size' => 'Adult'],
            ['group' => 'Dog' , 'species' => 'Pomeranian', 'size' => 'Senior'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
