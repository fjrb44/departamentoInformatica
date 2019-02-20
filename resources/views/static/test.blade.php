@extends('layout')

@section('titulo', 'Página de pruebas')

@section('contenido')
    <div class="container">
        <h1>Laravel 5.5 Ajax Request example</h1>

        <p>{{ $datos }}</p>

        <form >
            <div class="form-group">
                <strong>Texto:</strong>
                <input type="text" name="texto" class="form-control" placeholder="text" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
        <div class="editable" data-tabla="interfazs" data-id="{{ $datos->id }}" data-atributo="texto">
            <span>Localizacion: {{ $datos->localizacion }}</span><br>
            <p>{{ $datos->texto }}</p>
        </div>

    </div>
@endsection

@section('js_extra')
    <script src={{ url("./js/ajax.js") }}></script>
@endsection
