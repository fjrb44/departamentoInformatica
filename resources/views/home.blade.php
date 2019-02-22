@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <form action="/crear" method="post" enctype="multipart/form-data">
                        @csrf

                        <div data-id="{{ $interfaz->find('prueba1')->id }}">
                            {{ $interfaz->find('prueba1')->texto }}
                        </div>

                        <input type="file" name="csv">
                        <input type="submit" value="Subir">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
