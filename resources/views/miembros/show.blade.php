@extends('layout')

@section('contenido')

<div class="container d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col-6">
            <img class="img-top" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png" alt="photo" width="200" >
        </div>
        <div class="col-6">
            <div class="card-body">
                <h4 class="card-title">{{$miembro->apellidos}} {{$miembro->nombre}}</h4>
                @if($miembro->jefe_dept)
                <h5 class="card-subtitle mb-2 text-muted">Jefe Departamento</h5>
                @endif
                <p class="card-text">
                    @if($miembro->mostrar_telefono)
                    <h6><i class="fa fa-phone" aria-hidden="true"></i>
                    956952653 {{$miembro->telefono}}
                    @endif
                    </h6> 
                </p>
                <p class="card-text">
                     @if($miembro->mostrar_email)
                     <h6><i class="fa fa-envelope" aria-hidden="true"></i>
                     {{$miembro->email}}
                     @endif
                     </h6>
                </p>
             </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center mt-5">
    <div class="row">
            <div class="col-12">
                <h4>Descripción</h4>
                @if($miembro->descripcion)
                    <p>{{$miembro->descripcion}}</p>
                @else
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, corrupti in, ipsam aspernatur perferendis culpa ducimus provident magnam, deserunt nemo cumque. Ullam neque dolores eos obcaecati in. Eos, eum fuga!
                    </p>
                @endif
            </div>
    </div>
</div>    
@endsection
