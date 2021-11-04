<?php
namespace App\Services\Interfaces;

interface IPersonaServiceInterface{
    // /**
    //  * @return array user
    //  */
    // function getPersonas();
   
    // /**
    //  * @param int $id
    //  * @return Persona;
    //  */
    //  function getPersona(int $id);

    // /**
    //  * @param int $id
    //  * @return void
    //  */
     function storePersona(array $user);

    // /**
    //  * @param array $persona
    //  * @param int $id
    //  * @return void
    //  */
    // function updatePersona(array $persona, int $id);
    
    /**
     * @param int $id
     * @return boolean
     */
    function deletePersona(int $id);

    // /**
    //  * @param int $id
    //  * @return boolean
    //  */
    // function restorePersona(int $id);
}