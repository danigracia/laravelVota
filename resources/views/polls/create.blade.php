@extends('layouts.master')

@section('content')

    <h3 class="text-center">Crear consulta</h3>
    <form>
        <div class="form-group">
            <label>Consulta</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Fecha de inicio</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Fecha final</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Respuesta 1</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Respuesta 2</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Respuesta 3</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Crear consulta</button>
    </form>

@stop