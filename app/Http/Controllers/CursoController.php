<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo para mostrar la pagina principal de los cursos
    public function index(){
    
    }


        //metodo para mostrar el formulario para crear un nuevo curso
        public function create(){

        }
        

            //metodo para mostrar la informacion de un curso en especifico
            public function show($curso){
                return ('Bienvenido a la pagina del curso: ' . $curso);
            }
                                     
 }

