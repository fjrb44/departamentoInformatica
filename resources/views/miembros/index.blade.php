@extends('layout')

@section('contenido')
    <div class="row justify-content-center">
        @foreach ($miembros as $miembro)
            @if($miembro->jefe_dept)
                <div class="d-flex justify-content-center">    
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 mb-2 mt-3">
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
            @endif
        @endforeach
        </div>



        
        <div class="row">
        @foreach ($miembros as $miembro)
            @if(!$miembro->jefe_dept)
                <div class="d-flex justify-content-center">    
                    <div class="col-8 col-sm-5 col-md-5 col-lg-4 col-xl-3 mb-2 mt-3">
                        <a href="/miembros/{{$miembro->id}}" class="custom-card">
                            <div class="card h-100">
                                <img class="card-img-top w-50 mx-auto d-block" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-center">{{$miembro->nombre}}</h5>
                                    <h5 class="card-title d-flex justify-content-center"> {{$miembro->apellidos}}</h5>
                                    <p class="card-text "></p>
                                </div>
                            
                            </div>
                        </a>
                    </div>   
                </div>
            @endif
    
        @endforeach
    </div>
@endsection
