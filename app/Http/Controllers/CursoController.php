<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo para mostrar la pagina principal de los cursos
    public function index(){

        //llamar a todos los registros de la tabla cursos
        $cursos = Curso::paginate();
        //return $cursos;

        return view('cursos.index', compact('cursos'));
     } 
     
     //metodo para mostrar la informacion de un curso en especifico
    public function show($id){

        //metodo para recuperar un registro por su ID
        $curso = Curso::find($id);
        
        return view('cursos.show', compact('curso'));
     } 




     public function create() {
        return view('cursos.create');
    }

    
    //metodo para registrar lo enviado por el formulario de nuevo curso 
    public function store(Request $request) {
        //crear un nuevo objeto de la clase CURSO
        $curso = new Curso();

        //asignar los valores del formulario
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        //guardar los valores
        $curso->save();

        //redireccionar a una vista en especifico
        return redirect()->route('cursos.show', $curso);
        
    }

    //metodo para mostrar el formulario de edicion
    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
        
    }

    //metodo para mostrar lo modificado por el formulario de edicion
    public function update(Request $request, Curso $curso) {
        //asignar los valores del formulario
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        //guardar los valores
        $curso->save();

        //redireccionar a una vista en especifico
        return redirect()->route('cursos.show', $curso);
        
    }


}

