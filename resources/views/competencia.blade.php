@extends('layouts.app')

@section('content')
    <div style="padding-right: 20px;padding-left: 20px">
        <div class="row justify-content-sm-center">
            <h1>{{$competencia->﻿COMPETENCIA}}</h1>
        </div>

        <div class="row justify-content-center">
            <h2>{{$competencia->ALIAS}}</h2>
        </div>

        <div class="row justify-content-center">
            <h2>{{$competencia->CARRERA}}</h2>
        </div>

        <div class="row justify-content-center">
            <h2>{{$competencia->DESCRIPCION}}</h2>
        </div>
    </div>
@endsection
