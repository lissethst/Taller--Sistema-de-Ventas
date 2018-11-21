<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class PdfClieController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
        	$clientes=DB::table('persona')->where('tipo_persona','=','Cliente')->get();
            return view('reporteCliente',["clientes"=>$clientes]);
        }
    }
  
}