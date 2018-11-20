<?php

namespace sisVent\Http\Controllers;


use Illuminate\Http\Request;
use sisVent\Http\Requests;
use sisVent\Articulo;
use Illuminate\Support\Facades\Redirect;
use sisVent\Http\Requests\ArticuloFormRequest;
use DB;

class ArticuloController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $articulos=DB::table('articulo as a')
            ->join('categoria as c','a.idcategoria','=','c.idcategoria')
            ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.estado','a.color','a.gramaje')
            ->where('a.nombre','LIKE','%'.$query.'%')
            ->orwhere('c.nombre','LIKE','%'.$query.'%')
            ->orwhere('a.gramaje','LIKE','%'.$query.'%')
            ->orwhere('a.color','LIKE','%'.$query.'%')
            ->orderBy('a.idarticulo','desc')
            ->paginate(7);
            return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
        }
                       

    }

    public function create(){

        $categorias=DB::table('categoria')->where('condicion','=','1')->get();

        return view("almacen.articulo.create",["categorias"=>$categorias]);

    }

    public function store(ArticuloFormRequest $request){
        $articulo=new Articulo;
        $articulo->idcategoria=$request->get('idcategoria');
        $articulo->codigo=$request->get('codigo');
        $articulo->nombre=$request->get('nombre');
        $articulo->stock=$request->get('stock');
        $articulo->descripcion=$request->get('descripcion');   
        $articulo->estado='Activo';
        $articulo->color=$request->get('color');  
        $articulo->gramaje=$request->get('gramaje');  
        $articulo->save();

        return Redirect::to('almacen/articulo');
        
    }

    public function show($id){
        return view("almacen.articulo.show",["articulo"=>Articulo::findOrFail($id)]);
  
    }

    public function edit($id){
        $articulo=Articulo::findOrFail($id);
        $categorias=DB::table('categoria')->where('condicion','=','1')->get();
        return view("almacen.articulo.edit",["articulo"=>$articulo,"categorias"=>$categorias]);
    }

    public function update(ArticuloFormRequest $request,$id){
        $articulo=Articulo::findOrFail($id);

        $articulo->idcategoria=$request->get('idcategoria');
        $articulo->codigo=$request->get('codigo');
        $articulo->nombre=$request->get('nombre');
        $articulo->stock=$request->get('stock');
        $articulo->descripcion=$request->get('descripcion');   
        $articulo->color=$request->get('color');  
        $articulo->gramaje=$request->get('gramaje');
        $articulo->update();

        return Redirect::to('almacen/articulo');
    }

    public function destroy($id){
        $articulo=Articulo::findOrFail($id);
        $articulo->estado='Inactivo';
        $articulo->update();

        return Redirect::to('almacen/articulo');
    }


    public function filtro(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            if(get('tipoFiltro') == "color"){
                $articulos=DB::table('articulo as a')
                ->join('categoria as c','a.idcategoria','=','c.idcategoria')
                ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.estado','a.color','a.gramaje')
                ->where('a.color','LIKE','%'.$query.'%')
                ->orderBy('a.idarticulo','desc')
                ->paginate(7);
                return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
            }elseif (get('tipoFiltro' == "gramaje")) {
                 $articulos=DB::table('articulo as a')
                ->join('categoria as c','a.idcategoria','=','c.idcategoria')
                ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.estado','a.color','a.gramaje')
                ->where('a.gramaje','LIKE','%'.$query.'%')
                ->orderBy('a.idarticulo','desc')
                ->paginate(7);
                return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);
            
            }elseif (get('tipoFiltro' == "categoria")) {
                $articulos=DB::table('articulo as a')
                ->join('categoria as c','a.idcategoria','=','c.idcategoria')
                ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.estado','a.color','a.gramaje')
                ->where('c.nombre','LIKE','%'.$query.'%')
                ->orderBy('a.idarticulo','desc')
                ->paginate(7);
                return view('almacen.articulo.index',["articulos"=>$articulos,"searchText"=>$query]);

            }
            
        }

    } 
}
