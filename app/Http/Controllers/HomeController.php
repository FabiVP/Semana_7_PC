<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Crear el metodo principal del aplicativo
    public function __invoke()
    {
        // return ('Bienvenido a la pagina principal');
        return ('Bienvenido a la pagina principal');
    }
}
