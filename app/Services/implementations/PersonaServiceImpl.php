<?php
namespace App\Services\Implementations;
use App\Services\Interfaces\IPersonaServiceInterface;
use App\Models\Persona;

class PersonaServiceImpl implements IPersonaServiceInterface{

    private $model;
    public function __construct()
    {
        $this->model=new Persona();
    }

    /**
     * Crea una nueva persona 
     */
     function storePersona(array $persona){
         $this->model->create($persona);
     }

    /**
     * @param int $id
     * @return void
     */
    function deletePersona(int $id){
        $persona=$this->model->find($id);
        if(!is_null($persona)){
            $persona->delete();
        }
    }
}