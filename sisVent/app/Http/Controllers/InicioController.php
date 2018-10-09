<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
//use sisVent\Articulo;
use Illuminate\Support\Facades\Redirect;
//use sisVent\Http\Requests\ArticuloFormRequest;
use DB;

class InicioController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
            
            
            return view('inicio');
        }

    }
  
}
