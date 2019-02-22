@extends('layout')

@section('contenido')
    <div class="row  d-flex justify-content-center">
        @foreach ($miembros as $miembro)
            @if($miembro->jefe_dept)
                <div class="d-flex justify-content-center
                                    order-1
                                    order-md-0">    
                    <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xl-9 mb-2 mt-3">
                        <a href="/miembros/{{$miembro->id}}" class="custom-card">
                            <div class="card h-100">
                                <img class="card-img-top w-50 mx-auto d-block" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-center">{{$miembro->nombre}}</h5>
                                    <h5 class="card-title d-flex justify-content-center"> {{$miembro->apellidos}}</h5>
                                </div>
                            </div>
                        </a>
                     </div> 
                </div>
                <div class="col-12 col-md-3
                 d-flex
                 justify-content-center
                 jusfity-content-sm-start
                 align-items-md-center
                 order-0
                 order-md-1">
                        <span class="jefe_dpto">Jefe Departamento</span>
                </div>
            @endif
        @endforeach
        </div>


        <div class="row d-flex justify-content-center">
        @foreach ($miembros as $miembro)
            @if(!$miembro->jefe_dept)
                <div class="d-flex justify-content-center col-8 col-sm-6 col-md-4 col-lg-4 col-xl-2 mb-2 mt-3">    
                        <a href="/miembros/{{$miembro->id}}" class="custom-card">
                            <div class="h-100">
                                <img class="card-img-top w-75 mx-auto d-block" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-center">{{$miembro->nombre}}</h5>
                                    <h5 class="card-title d-flex justify-content-center"> {{$miembro->apellidos}}</h5>
                                    <p class="card-text "></p>
                                </div>
                            </div>
                        </a>
                </div>
            @endif
    
        @endforeach
    </div>
@endsection
