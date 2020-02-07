<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleados';
    protected $primaryKey ='id_empleado';

    public $timestamps = false;

    public $fillable= [
    	'password',
    	'nombre',
    	'apellido_p',
    	'apellido_m',
    	'direccion',
    	'RFC',
    	'fecha_ingreso',
    	'categoria',
    	'fecha_nacimiento',
    	'sexo'
    ];
}
