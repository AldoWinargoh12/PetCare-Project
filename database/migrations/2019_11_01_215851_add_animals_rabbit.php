<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnimalsRabbit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Dutch
        DB::table('animals')->insert([
            ['group' => 'Rabbit' , 'species' => 'Dutch', 'size' => 'Baby'],
            ['group' => 'Rabbit' , 'species' => 'Dutch', 'size' => 'adolescence'],
            ['group' => 'Rabbit' , 'species' => 'Dutch', 'size' => 'Adult']
        ]);

        //Belgian hare
        DB::table('animals')->insert([
            ['group' => 'Rabbit' , 'species' => 'Belgian Hare', 'size' => 'Baby'],
            ['group' => 'Rabbit' , 'species' => 'Belgian Hare', 'size' => 'adolescence'],
            ['group' => 'Rabbit' , 'species' => 'Belgian Hare', 'size' => 'Adult']
        ]);

        //British ShortHair
        DB::table('animals')->insert([
            ['group' => 'Rabbit' , 'species' => 'English Lop', 'size' => 'Baby'],
            ['group' => 'Rabbit' , 'species' => 'English Lop', 'size' => 'adolescence'],
            ['group' => 'Rabbit' , 'species' => 'English Lop', 'size' => 'Adult']
        ]);

        //Flemish Giant
        DB::table('animals')->insert([
            ['group' => 'Rabbit' , 'species' => 'Flemish Giant', 'size' => 'Baby'],
            ['group' => 'Rabbit' , 'species' => 'Flemish Giant', 'size' => 'adolescence'],
            ['group' => 'Rabbit' , 'species' => 'Flemish Giant', 'size' => 'Adult']
        ]);

        //Harlequin
        DB::table('animals')->insert([
            ['group' => 'Rabbit' , 'species' => 'Harlequin', 'size' => 'Baby'],
            ['group' => 'Rabbit' , 'species' => 'Harlequin', 'size' => 'adolescence'],
            ['group' => 'Rabbit' , 'species' => 'Harlequin', 'size' => 'Adult']
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
