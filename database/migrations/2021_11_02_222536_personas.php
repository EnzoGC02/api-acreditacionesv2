<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas',function (Blueprint $table){
            $table->engine="InnoDB";
            $table->integer('id',true)->unsigned();
            $table->string('dni',9)->unique();
            $table->string('nombre_apellido',150);
            $table->string('medio',150);
            $table->string('ISO2_pais',2);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email',255)->unique();
            $table->string('numero_telefono',20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
