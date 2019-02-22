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
            <img class="img-top" src="https://www.qualiscare.com/wp-content/uploads/2017/08/default-user.png"
                alt="photo" width="200">
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
            <h4>{{$curso->tutor->apellidos}} {{$curso->tutor->nombre}}</h4>
        </div>
        <div class="col offset-lg-3">
            <h4>Links</h4>
            <ul>
                @foreach ($curso->links as $link)
                    <li><a href="{{ $link->link }}">{{ $link->texto_visible }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                @for($i = 0; $i <= 4; $i++)
                    <th scope="col">{{ucfirst($tramoshorarios[$i]->dia)}}</th>
                @endfor
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($tramoshorarios as $tramohorario)
                    <td scope="row">{{$tramohorario->inicio}} - {{$tramohorario->fin}}
                        @foreach($curso->modulos as $modulo)
                            @foreach($modulo->tramos_horarios as $tramo)
                                @if ($tramo->id == $tramohorario->id)
                                    <p>{{$modulo->nombre}}</p>
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
</div>

@endsection
