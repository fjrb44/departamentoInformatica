@extends('layout')

@section('contenido')

<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-6">
            <img class="card-img-top" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png" alt="photo">
        </div>
        <div class="col-6">
            <div class="card-body">
                <h4 class="card-title">{{$miembro->apellidos}} {{$miembro->nombre}}</h4>
                <h5 class="card-subtitle mb-2 text-muted">Cargo </h5>
                <p class="card-text">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    956952653 {{$miembro->telefono}} 
                </p>
                <p class="card-text">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                    {{$miembro->email}} 
                </p>
             </div>
        </div>
    </div>
</div>
@endsection
