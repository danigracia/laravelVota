@extends('layouts.master')

@section('content')

    <h3 class="text-center">Invitar a consulta</h3>
    <form>
        <div class="form-group">
            <label>Consulta</label>
            <select class="form-control" required>
                @foreach( $arrayConsultas as $key => $consulta )
                    <option>{{$consulta['consulta']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-default">Invitar consulta</button>
    </form>

@stop