@extends('layout')

@section('contenido')
    <div class="container">
        <h1 class="display-4 mt-3">Enseñanzas</h1>

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
