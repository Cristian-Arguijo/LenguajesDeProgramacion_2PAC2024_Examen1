<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    function paginaInicio(){
        return view('directorio');
    }

    function crearDirectorio(){
        return view ('crearEntrada');
    }

    function buscarDirectorio(){
        return view ('buscar');

    }

    function verEntrada(){
        return view ('vercontactos');

    }

    function eliminarEntrada(){
        return view ('eliminar');

    }
      
}
