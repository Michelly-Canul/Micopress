<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $table = 'mascotas';
    protected $primaryKey = 'id_mascotas';

    public $fillable= [

    	'nombre',
    	'genero',
    	'id_propietario'
    ]

}
