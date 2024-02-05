<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos['cursos'] = Curso::paginate(10);
        return view('cursos.index', $cursos);
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->category = $request->category;
        $curso->description = $request->description;

        $curso->save();

        return redirect()->route('cursos.index');

    }

    public function show(Curso $curso){
        
        return view('cursos.show', ['curso'=>$curso]);
    }

    public function edit(Curso $curso){

        return view('cursos.edit', ['curso'=>$curso]);
    }

    public function update(Request $request, Curso $curso){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);
        
        $curso->name = $request->name;
        $curso->category = $request->category;
        $curso->description = $request->description;

        $curso->save();

        return redirect()->route('cursos.index');
    }
}
