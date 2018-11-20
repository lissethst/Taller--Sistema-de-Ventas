<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class PdfIngController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
        	$ingresos=DB::table('ingreso as i')
        	->join('persona as p','i.idproveedor','=','p.idpersona')
        	->join('detalle_ingreso as di','i.idingreso','=','di.idingreso')
			->select('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante','i.num_comprobante','i.impuesto','i.estado', DB::raw('sum(di.cantidad*precio_compra) as total'))
			->groupBy('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante','i.num_comprobante','i.impuesto','i.estado')
        	->get();
        	return view('reporteIngresos',["ingresos"=>$ingresos]);
        }
    }
  
}