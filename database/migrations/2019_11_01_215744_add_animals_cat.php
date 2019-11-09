<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnimalsCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Abyssinian
        DB::table('animals')->insert([
            ['group' => 'Cat' , 'species' => 'Abyssinian', 'size' => 'Kitten'],
            ['group' => 'Cat' , 'species' => 'Abyssinian', 'size' => 'adolescence'],
            ['group' => 'Cat' , 'species' => 'Abyssinian', 'size' => 'Adult'],
            ['group' => 'Cat' , 'species' => 'Abyssinian', 'size' => 'Senior'],
        ]);

        //Munchkin
        DB::table('animals')->insert([
            ['group' => 'Cat' , 'species' => 'Munchkin', 'size' => 'Kitten'],
            ['group' => 'Cat' , 'species' => 'Munchkin', 'size' => 'adolescence'],
            ['group' => 'Cat' , 'species' => 'Munchkin', 'size' => 'Adult'],
            ['group' => 'Cat' , 'species' => 'Munchkin', 'size' => 'Senior'],
        ]);

        //British ShortHair
        DB::table('animals')->insert([
            ['group' => 'Cat' , 'species' => 'British Shorthair', 'size' => 'Kitten'],
            ['group' => 'Cat' , 'species' => 'British Shorthair', 'size' => 'adolescence'],
            ['group' => 'Cat' , 'species' => 'British Shorthair', 'size' => 'Adult'],
            ['group' => 'Cat' , 'species' => 'British Shorthair', 'size' => 'Senior'],
        ]);

        //Ragdoll
        DB::table('animals')->insert([
            ['group' => 'Cat' , 'species' => 'Ragdoll', 'size' => 'Kitten'],
            ['group' => 'Cat' , 'species' => 'Ragdoll', 'size' => 'adolescence'],
            ['group' => 'Cat' , 'species' => 'Ragdoll', 'size' => 'Adult'],
            ['group' => 'Cat' , 'species' => 'Ragdoll', 'size' => 'Senior'],
        ]);

        //Savannah
        DB::table('animals')->insert([
            ['group' => 'Cat' , 'species' => 'Savannah', 'size' => 'Kitten'],
            ['group' => 'Cat' , 'species' => 'Savannah', 'size' => 'adolescence'],
            ['group' => 'Cat' , 'species' => 'Savannah', 'size' => 'Adult'],
            ['group' => 'Cat' , 'species' => 'Savannah', 'size' => 'Senior'],
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
