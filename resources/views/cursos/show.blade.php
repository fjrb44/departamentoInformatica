@extends('layout')

@section('contenido')
<div class="container pt-4">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pb-4">
            <h2>{{$curso->nombre}}</h2>
        </div>      
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-4">
            <img class="img-top" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png" alt="photo" width="200" >
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <h4>{{$curso->tutor->apellidos}} {{$curso->tutor->nombre}}</h4>
        </div>
        <div class="col offset-lg-4">
        <h4>Links</h4>
            <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            </ul>
        </div>
    </div>
    
    <div class="row">
      
    </div>
</div>

@endsection
