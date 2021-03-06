<?php

namespace sisVent;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table='detalle_ingreso';
    protected $primaryKey='ididetalle_ingreso';

    public $timestamps=false;

    protected $fillable = ['idingreso','idarticulo','cantidad','precio_compra','precio_venta'];

    protected $guarded=[];
}
