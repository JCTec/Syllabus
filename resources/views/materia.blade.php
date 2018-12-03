@extends('layouts.app')

@section('content')
    <div style="padding-right: 20px;padding-left: 20px">
        <div class="row justify-content-sm-center">
            <h1>{{$materia["ASIGNATURA"]}}</h1>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Bloque: {{$materia["BLOQUE"]}}</h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Semestres: {{$materia["SEMESTRE"]}}</h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>{{$materia["CARRERA"]}}</h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Clave: {{$materia["CLAVE"]}}</h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Creditos: {{$materia["CRÉDITOS"]}}</h2>
        </div>
    </div>
@endsection
