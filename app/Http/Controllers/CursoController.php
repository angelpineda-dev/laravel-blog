<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos['cursos'] = Curso::orderBy('id', 'desc')->paginate(15);
        return view('cursos.index', $cursos);
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        Curso::create($request->all());

        return redirect()->route('cursos.index');

    }

    public function show(Curso $curso){
        
        return view('cursos.show', ['curso'=>$curso]);
    }

    public function edit(Curso $curso){

        return view('cursos.edit', ['curso'=>$curso]);
    }

    public function update(StoreCurso $request, Curso $curso){
        
        $curso->update($request->all());

        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso){
        
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
