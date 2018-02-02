@extends('layouts.master')

@section('content')

    Pantalla de votación!
    <?php
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $values= explode('/',$actual_link);
    ?>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
            <div class="card text-center">
                <form action="">
                    <div class="card-header">
                        <h2>{{$arrayConsultas['consulta']}}</h2>
                    </div>
                    <p class="form-control"> Fecha de Inicio: {{$arrayConsultas['fechaIni']}} <br>Fecha de Final: {{$arrayConsultas['fechaFin']}}</p>
                    <input type="radio" name="respuesta" value="{{$arrayConsultas['respuesta1']}}">
                    <label>{{$arrayConsultas['respuesta1']}}</label><br>
                    <input type="radio" name="respuesta" value="{{$arrayConsultas['respuesta2']}}">
                    <label>{{$arrayConsultas['respuesta2']}}</label><br>
                    <input type="radio" name="respuesta" value="{{$arrayConsultas['respuesta3']}}">
                    <label>{{$arrayConsultas['respuesta3']}}</label><br>
                    <button type="submit" class="btn btn-default">Votar</button>
                </form>
            </div>
        </div>
    </div>

@stop