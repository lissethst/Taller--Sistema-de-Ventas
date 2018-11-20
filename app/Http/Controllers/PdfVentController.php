<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class PdfVentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
        	$ventas=DB::table('venta as v')
            ->join('persona as p','v.idcliente','=','p.idpersona')
            ->join('detalleventa as dv','v.idventa','=','dv.idventa')
            ->select('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante','v.num_comprobante','v.impuesto','v.estado','v.total_venta')
			->groupBy('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante','v.num_comprobante','v.impuesto','v.estado')
        	->get();
        	return view('reporteVentas',["ventas"=>$ventas]);
        }
    }
  
}