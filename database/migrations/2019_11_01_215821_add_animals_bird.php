<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnimalsBird extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Galah
        DB::table('animals')->insert([
            ['group' => 'Bird' , 'species' => 'Galah', 'size' => 'Hatchling'],
            ['group' => 'Bird' , 'species' => 'Galah', 'size' => 'Fledgeling'],
            ['group' => 'Bird' , 'species' => 'Galah', 'size' => 'Adult']
        ]);

        //Rainbow Lorikeet
        DB::table('animals')->insert([
            ['group' => 'Bird' , 'species' => 'Rainbow Lorikeet', 'size' => 'Hatchling'],
            ['group' => 'Bird' , 'species' => 'Rainbow Lorikeet', 'size' => 'Fledgeling'],
            ['group' => 'Bird' , 'species' => 'Rainbow Lorikeet', 'size' => 'Adult']
        ]);

        //Cockatiel
        DB::table('animals')->insert([
            ['group' => 'Bird' , 'species' => 'Cockatiel', 'size' => 'Hatchling'],
            ['group' => 'Bird' , 'species' => 'Cockatiel', 'size' => 'Fledgeling'],
            ['group' => 'Bird' , 'species' => 'Cockatiel', 'size' => 'Adult']
        ]);

        //Blue and gold macaw
        DB::table('animals')->insert([
            ['group' => 'Bird' , 'species' => 'Blue and Gold Macaw', 'size' => 'Hatchling'],
            ['group' => 'Bird' , 'species' => 'Blue and Gold Macaw', 'size' => 'Fledgeling'],
            ['group' => 'Bird' , 'species' => 'Blue and Gold Macaw', 'size' => 'Adult']
        ]);

        //Javanese Sparrow
        DB::table('animals')->insert([
            ['group' => 'Bird' , 'species' => 'Javanese Sparrow', 'size' => 'Hatchling'],
            ['group' => 'Bird' , 'species' => 'Javanese Sparrow', 'size' => 'Fledgeling'],
            ['group' => 'Bird' , 'species' => 'Javanese Sparrow', 'size' => 'Adult']
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
