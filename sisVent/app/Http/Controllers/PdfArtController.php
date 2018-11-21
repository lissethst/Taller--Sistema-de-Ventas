<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class PdfArtController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
        	$articulos=DB::table('articulo')->get();
            return view('reporteArticulo',["articulos"=>$articulos]);
        }
    }
  
}

