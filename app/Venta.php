<?php

namespace sisVent;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $primaryKey='idventa';

    public $timestamps=false;

    protected $fillable = ['idcliente','serie_comprobante','num_comprobante','fecha_hora','impuesto','total_venta','estado'];

    protected $guarded=[];
}
