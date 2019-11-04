<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnimalsReptiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Central Bearded Dragon
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Central Bearded Dragon', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Central Bearded Dragon', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Central Bearded Dragon', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Central Bearded Dragon', 'size' => 'Adult'],
        ]);

        //Carpet Python
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Carpet Python', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Carpet Python', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Carpet Python', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Carpet Python', 'size' => 'Adult'],
        ]);

        //British ShortHair
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Blue Tounge Skink', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Blue Tounge Skink', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Blue Tounge Skink', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Blue Tounge Skink', 'size' => 'Adult'],
        ]);

        //Lace Monitor
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Lace Monitor', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Lace Monitor', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Lace Monitor', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Lace Monitor', 'size' => 'Adult'],
        ]);

        //Murray River Turtle
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Murray River Turtle', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Murray River Turtle', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Murray River Turtle', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Murray River Turtle', 'size' => 'Adult'],
        ]);

        //Shingleback Skink
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Shingleback Skink', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Shingleback Skink', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Shingleback Skink', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Shingleback Skink', 'size' => 'Adult'],
        ]);

        //Eastern Water Dragon
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Eastern Water Dragon', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Eastern Water Dragon', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Eastern Water Dragon', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Eastern Water Dragon', 'size' => 'Adult'],
        ]);

        //Woma Python
        DB::table('animals')->insert([
            ['group' => 'Reptiles' , 'species' => 'Woma Python', 'size' => 'Hatchling'],
            ['group' => 'Reptiles' , 'species' => 'Woma Python', 'size' => 'Juvenile'],
            ['group' => 'Reptiles' , 'species' => 'Woma Python', 'size' => 'Sub-Adult'],
            ['group' => 'Reptiles' , 'species' => 'Woma Python', 'size' => 'Adult'],
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
