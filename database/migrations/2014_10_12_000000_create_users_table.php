<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//integer, sin signo y auto increment
            $table->string('name');//varchar y se le puede indicar el numero de caracteres
            $table->string('email')->unique();//unique para indicar que lo que se almacene sera unico
            $table->timestamp('email_verified_at')->nullable();//se utilizar para guardar fecha y verifica la fecha que se registro el correo y nullable porque a la hora de verificar el campo quedara vacio
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken();//crea una columna de tamaño 100 se almacena un token se utiliza para cuando el usuario mantenga la sesion inciada
            $table->timestamps();//crea dos columnas una; fecha y hora en que se creo un registro y otra donde almacena f y h en la que se edito el registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //elimina la tabla users
        Schema::dropIfExists('users');
    }
}
