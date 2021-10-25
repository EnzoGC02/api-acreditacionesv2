<?php
namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;
class EventoController extends Controller{

    
    public function index(){
        $eventos=Evento::get();
        return response()->json(['eventos'=>$eventos]);
    }
    public function store(Request $request){
        $evento=new Evento();
        $evento->nombre=$request->nombre;
        $evento->fecha_inicio=$request->fecha_inicio;
        $evento->descripcion=$request->descripcion;
        $evento->fecha_fin=$request->fecha_fin;
        $evento->activo=$request->activo;
        if($evento->save()){
            return response()->json(['evento' => $evento]);
        }
    }
    

}