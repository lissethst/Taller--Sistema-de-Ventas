<?php

namespace sisVent;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table='articulo';
    protected $primaryKey='idarticulo';

    public $timestamps=false;

    protected $fillable = ['idcategoria','codigo','nombre','stock','descripcion','estado','color','gramaje'];

    protected $guarded=[];
}
