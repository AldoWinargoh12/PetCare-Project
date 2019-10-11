<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petregisters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('pet_name');
            $table->string('species');
            $table->string('breed');
            $table ->string('gender');
            $table->string('size');
            $table->integer('microchip_number');
            $table->integer('rabies_number');
            $table->string('additional_notes');       
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petregisters');
    }
}
