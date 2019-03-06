@extends('layout')

@section('contenido')
<div class="container pt-4">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pb-4">
            <h2>{{$curso->nombre}}</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-3 col-4">
            <img class="img-top" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png"
                alt="photo" width="120">
        </div>

        <div class="col-xl-6 col-lg-4 col-md-7 col-sm-7 col-7 d-flex align-items-center">
                <h4>{{$curso->tutor->apellidos}} {{$curso->tutor->nombre}}</h4>
           </div>
       
    </div>

    <div class="row">
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col"></th>
                @for($i = 0; $i <= 4; $i++)
                    <th scope="col">{{ucfirst($tramoshorarios[$i]->dia)}}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($tramoshorarios as $tramohorario)
                    @if (($loop->iteration) % 6 == 1)
                        <td scope="row">{{$tramohorario->inicio}} - {{$tramohorario->fin}}</td>
                    @else
                    <td scope="row">
                        @foreach($curso->modulos as $modulo)
                            @foreach($modulo->tramos_horarios as $tramo)
                                @if ($tramo->id == $tramohorario->id)
                                    <p><abbr title="{{$modulo->nombre}}">{{substr($modulo->siglas, strpos($modulo->siglas, "_") + 1)}}</abbr></p>
                                @endif
                            @endforeach
                        @endforeach
                    </td>
                    @endif
                    @if (($loop->iteration) % 6 == 0)
                        </tr>
                        <tr>
                    @endif
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="list-group list-group-flush">
        <h4>Módulos del Curso</h4>
        @foreach($curso->modulos as $modulo)
            <li class="list-group-item">{{$modulo->nombre}}</li> 
        @endforeach
    </div>
    <br>
    @if(count($curso->links)!=0)
    <div class="list-group list-group-flush">
        <h4>Enlaces</h4>
        
            @foreach($curso->links as $link)
                <li class="list-group-item"><a href="{{ $link->link }}">{{ $link->texto_visible }}</a></li>
            @endforeach
        
    </div>
    @endif
</div>
@endsection
