<?php
namespace App\Http\Controllers;
use App\Services\Implementations\EventoServiceImpl;
use Illuminate\Http\Request;

class EventoController extends Controller{

    /**
     *@var EventoServiceImpl
    */
    private $eventoService;

    /**
     * @var Request
     */
    private $request;

    public function __construct(
        EventoServiceImpl $eventoService,
        Request $request
    ) {
        $this->eventoService=$eventoService;
        $this->request=$request;
    }

    public function index(){
        return response($this->eventoService->getEventos());
    }

    public function store(){
        $response=response("",201);
        $this->eventoService->storeEvento($this->request->all());
        return $response;
    }
    public function show($id){
        return response($this->eventoService->getEvento($id));
     }

//     public function acreditarPersona(Request $request,$id){
//         // return response()->json(['params'=>$id]);
//         $evento=Evento::find($id);
//         if(!$evento){
//             throw new Exception('No existe el evento');
//         }
//         $persona=null;
//         $data=[];
//         if($request->has('persona')){
//             $persona=Persona::firstOrCreate(
//                 ['dni'=>$request->input('dni')],
//                 $data
//             );
//             // // return response()->json(['msg'=>$persona],200);
//             // $persona=Persona::findByDni($request->input('persona.dni'));
//             // return response()->json(['msg'=>$persona],200);
//             // //crea o edita Persona
//             // if(!$persona){
//             //     // $persona=new Persona();
//             //     // $persona->save($request->input('persona'));
//             //     //crear persona
//             // }else{
//             //      //editar persona
//             //     $persona->update($request->input('persona'));
               
//             // }
//         }
//         if(!is_null($persona)){
//             $evento->acreditados()->attach($persona->id); //crea registro en tabla intermedia eventos_personas
//             return response()->json(['msg'=>'EXIT'],200);
//         }
//         return response()->json(['msg'=>'ERROR'],400);
//     }
 }