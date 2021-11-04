<?php

namespace App\Http\Controllers;
use App\Services\Implementations\PersonaServiceImpl;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    /**
     * @var PersonaServiceImpl
    */

    private $personaService;

    /**
     * @var Request 
    */
    private $request;

    public function __construct(PersonaServiceImpl $personaService, Request $request)
    {
        $this->personaService=$personaService;
        $this->request=$request;
    }

    public function store(){
        $response=response("",201);
        $this->personaService->storePersona($this->request->all());

        return $response;
    }

    public function delete($id){
        $response=response("",204);
        $this->personaService->deletePersona($id);

        return $response;
    }
}
