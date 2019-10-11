<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registerpet extends Model
{
    //
    protected $fillable= [
        'pet_name','species','breed','gender','size','microchip_number','rabies_number','additional_notes'
    ];
}
