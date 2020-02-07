<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamista extends Model
{
    //
    protected $table = 'prestamistas';
    protected $primaryKey = 'id_usuario';

    // public $timestamps = false;
    public $fillable=[

    	'nombre',
    	'apellido_p',
    	'apellido_m',
    	'fecha_nacimiento',
    	'direccion',
    	'telefono',
    	'correo',
    	
    ];
}
