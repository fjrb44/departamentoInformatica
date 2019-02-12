@extends('layout')

@section('contenido')
    <div class="row d-flex justify-content-center">
    @foreach ($miembros as $miembro)
    
        <div class="col-8 col-sm-5 col-md-4 col-lg-2 mb-2 mt-2">
        <a href="perfil/{{$miembro->id}}" class="custom-card">
            <div class="card h-100">
                <img class="card-img-top w-50 mx-auto d-block" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png">
                <div class="card-body">
                <h5 class="card-title">{{$miembro->nombre}} {{$miembro->apellidos}}</h5>
                <p class="card-text">{{$miembro->email}}</p>
                </div>
            </div>
            </a>
        </div>
    
    @endforeach
    </div>
@endsection
