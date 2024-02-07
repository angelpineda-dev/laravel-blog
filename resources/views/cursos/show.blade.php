@extends('layouts.index')

@section('pageTitle', 'Curso: '. $curso->name)

@section('content')
    <div class="flex justify-between items-center w-1/2 mx-auto my-2">
        <h1 class="title-1">Bienvenido al curso: {{$curso->name}}</h1>
        <a href=" {{ route('cursos.edit', $curso)}}" class="border border-slate-500 p-1 rounded hover:bg-slate-100">Editar</a>

        <form action="{{route('cursos.destroy', $curso)}}" method="POST">
            @csrf
            @method('delete')

            <input type="submit" class="border border-red-600 bg-red-400 p-1 rounded hover:bg-red-300" value="Eliminar" onclick="return confirm('Eliminar este elemento?')" />
        </form>
    </div>

    <p><strong>Categoria:</strong> {{$curso->category}}</p>

    <p>{{$curso->description}}</p>

    <a href="{{route('cursos.index')}}" class="nav-link" >Regresar</a>
@endsection