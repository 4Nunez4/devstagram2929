@extends('layouts.app')

@section('titulo')
    Hola desde el dashboard
@endsection

@section('contenido')
    <div class="flex justify-center md:flex items-center text-center">
        <div class="md:w-1/12">
            <img class="md:w-6/12" src="{{ asset('img/user.svg') }}" alt="Aca va mi imagen de usuario">
        </div>
        <div class="md:w-1/12">
            aca va el user name
        </div>
    </div>
@endsection
