<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        echo '<marques>usuario conectado</marques>';
    }

    function desconectar(){
        echo '<strong>usuario conectado</strong>';
    }

}
