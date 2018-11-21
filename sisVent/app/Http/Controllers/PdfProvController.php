<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class PdfProvController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
        	$proveedores=DB::table('persona')->where('tipo_persona','=','Proveedor')->get();
            return view('reporteProveedor',["proveedores"=>$proveedores]);
        }
    }
  
}