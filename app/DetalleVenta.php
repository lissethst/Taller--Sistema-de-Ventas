<?php

namespace sisVent;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalleventa';

    protected $primaryKey='iddetalleventa';
    public $timestamps=false;

    protected $fillable =[
     'idventa',
     'idarticulo',
     'cantidad',
     'precio_venta',
     'descuento'
    ];
    protected $guarded =[
    ];
}
