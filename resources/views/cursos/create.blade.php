@extends('layouts.index')

@section('pageTitles', 'Crear curso')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form method="POST" action="{{route('cursos.store')}}" class="flex flex-col w-1/2 border border-neutral-500 p-1 rounded mx-auto">
        @csrf
        @include('templates.cursos_form')
    </form>
@endsection