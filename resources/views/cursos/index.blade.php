@extends('layouts.index')

@section('pageTitle', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina de cursos</h1>
    <a href="{{ route('cursos.create') }}" class="nav-link">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
        <li>
            <a href="{{ route('cursos.show', $curso) }}" class="link"> {{$curso->id}} {{$curso->name}}</a>
        </li>
    @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
