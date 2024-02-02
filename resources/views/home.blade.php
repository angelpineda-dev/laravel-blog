@extends('layouts.index') 

@section('pageTitle', 'Inicio')

@section('content')
    <h1>Bienvenido al HOME</h1>
    <a href="{{ route('cursos.index') }}" class="nav-link">Cursos</a>
@endsection