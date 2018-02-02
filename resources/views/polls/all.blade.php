@extends('layouts.master')

@section('content')

    <h3 class="text-center">Todas las consultas</h3>
    <div class="row">
        @foreach( $arrayConsultas as $key => $consulta )
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <div class="card text-center">
                    <div class="card-header">
                        <a href="{{url('/polls/vote/'.$key)}}"><h2>{{$consulta['consulta']}}</h2></a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@stop