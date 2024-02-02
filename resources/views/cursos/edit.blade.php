@extends('layouts.index')

@section('pageTitle', 'Editar: ' . $curso->name)

@section('content')
    <div class="mx-auto p-2">
        <h1 class="title-1">Editar curso</strong></h1>

        <form action="{{ route('cursos.update', $curso)}}" method="post">
        @csrf
        @method('PUT')

        @include('templates.cursos_form')
        </form>
    </div>
@endsection