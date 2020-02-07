<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    //
    protected $table = 'abonos';
    protected $primaryKey = 'id_pago';

    public $timestamps = false;


    public $fillable=[

    	'pago',
    	'fecha_pago',
    	'saldo'
    ];

   
}
