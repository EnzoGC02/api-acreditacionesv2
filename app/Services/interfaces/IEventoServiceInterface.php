<?php
namespace App\Services\Interfaces;

interface IEventoServiceInterface{

    /**
     * @return array $eventos
     */
    function getEventos();

    /**
     * @param array $evento
     * @return void
     */
    function storeEvento(array $evento);
}