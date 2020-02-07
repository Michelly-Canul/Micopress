<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    //
    protected $table = 'prestamos';
    protected $primaryKey= 'id_prestamo';
    protected $with=['prestamistas', 'abonos','empleados','periodos'];
    public $timestamps = false;
    public $fillable=[

    	'prestamo',
    	'interes',
    	'id_usuario',
        'id_pago',
        'id_empleado',
        'id_periodo'
    ];

    public function prestamistas(){
    	return $this->belongsTo(Prestamista::class,'id_usuario','id_usuario');
    }

    public function abonos(){
        return $this->belongsTo(Abono::class,'id_pago','id_pago');
    }

    public function empleados(){
        return $this->belongsTo(Empleado::class,'id_empleado','id_empleado');
    }

    public function periodos(){
        return $this->belongsTo(Periodo::class,'id_periodo','id_periodo');
    }


}
