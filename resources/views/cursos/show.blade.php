@extends('layout')

@section('contenido')
<div class="container pt-4">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pb-4 mt-4">
            <h2>{{$curso->nombre}}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-3 col-4">
            <img class="img-top" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png"
                alt="photo" width="120">
        </div>
    
        <div class="col-xl-6 col-lg-4 col-md-7 col-sm-7 col-7 d-flex align-items-center">
                <div class="row">
              
                <h4 class="col-12">{{$curso->tutor->apellidos}}, {{$curso->tutor->nombre}}</h4>
                <h5 class="col-12">Tutor </h5>
                </div>
           </div>
       
    </div>

    <div class="row">
        <table class="table mt-5 table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col" class="table-info"> Horas</th>
                @for($i = 0; $i <= 4; $i++)
                    <th scope="col" class="table-info">{{ucfirst($tramoshorarios[$i]->dia)}}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($tramoshorarios as $tramohorario)
                    @if (($loop->iteration) % 5 == 1)
                        <td scope="row">{{$tramohorario->inicio}} - {{$tramohorario->fin}}</td>
                    @endif
                    <td scope="row">
                        @foreach($curso->modulos as $modulo)
                            @foreach($modulo->tramos_horarios as $tramo)
                                @if ($tramo->id == $tramohorario->id)
                                    <p><abbr title="{{$modulo->nombre}}">{{substr($modulo->siglas, strpos($modulo->siglas, "_") + 1)}}</abbr></p>
                                @endif
                            @endforeach
                        @endforeach
                    </td>
                    @if (($loop->iteration) % 5 == 0)
                        </tr>
                        <tr>
                    @endif
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="">
        <h4  class="list-group-item list-group-item-info">Módulos del Curso</h4>
        @foreach($curso->modulos as $modulo)
            <li class="list-group-item">{{$modulo->nombre}}</li> 
        @endforeach
    </div>
    <br>
    @if(count($curso->links)!=0)
    <div class=" mb-3">
        <h4 class="list-group-item list-group-item-info">Enlaces</h4>
        
            @foreach($curso->links as $link)
                <li class="list-group-item"><a href="{{ $link->link }}">{{ $link->texto_visible }}</a></li>
            @endforeach
        
    </div>
    @endif
</div>
@endsection
