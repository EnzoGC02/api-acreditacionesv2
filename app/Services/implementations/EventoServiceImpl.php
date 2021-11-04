<?php
namespace App\Services\Implementations;
use App\Services\Interfaces\IEventoServiceInterface;
use App\Models\Evento;

class EventoServiceImpl implements IEventoServiceInterface{
    private $model;
    public function __construct(){
        $this->model= new Evento();
    }

    /**
     * Retorna todos los eventos disponibles
     */
    public function getEventos()
    {
        return $this->model->get();
    }

    /**
     * Busca y retorna un evento si existe
     */
    public function getEvento($id){
        $evento=$this->model->find($id);
        if(!is_null($evento)){
            return $evento;
        }
    }

    /**
     * Almacena un nuevo evento en la BD
     */
    public function storeEvento(array $evento){
        $this->model->create($evento);
    }

}