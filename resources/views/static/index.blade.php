@extends('layout')

@section('contenido')
    <div class="container">
        @if ( Auth::check() && auth()->user()->admin)
            <div class="editable" data-tabla="interfazs" data-id="mensaje_bienvenida" data-atributo="texto">
                <p class="mt-3">{{$interfaz::find('mensaje_bienvenida')->texto}}</p>
            </div>
        @else
            <p class="mt-3">{{$interfaz::find('mensaje_bienvenida')->texto}}</p>
        @endif

        @if ( Auth::check() && auth()->user()->admin)
            <div class="editable" data-tabla="interfazs" data-id="header_ensenianzas" data-atributo="texto">
                <h1 class="display-4 mt-3">{{$interfaz::find('header_ensenianzas')->texto}}</h1>
            </div>
        @else
            <h1 class="display-4 mt-3">{{$interfaz::find('header_ensenianzas')->texto}}</h1>
        @endif

        @foreach ($ciclos as $ciclo)
            <div class="container my-5">
                <h2 class="display-5">{{ $ciclo->nombre }}</h2>

                <div class="list-group">
                    @foreach ($ciclo->cursos as $curso)
                        <a href="{{ url('/cursos/'.$curso->id) }}"
                           class="list-group-item list-group-item-action"
                           >{{ $curso->nombre }}</a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
