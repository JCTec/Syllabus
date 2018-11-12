@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row DRow">
            @foreach($bloques as $bloque)
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Ciencias jurídicas y sociales</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='Ciencias Jurídicas y Sociales'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Ingeniería y ciencias exactas</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='Ingeniería y ciencias Exacta'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Ciencias de la salud</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='Ciencias de la salud'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Negocios</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='NEGOCIOS'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Diseño</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='DISEÑO'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Arquitectura</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='ARQUITECTURA'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-2 py-3">
                    <div class="myPlan">
                        <div class="container">
                            <p class="h4">Comunicación</p>
                            <hr color="#e58a00" width="100%" style="height:3px">
                            <ul>
                                @foreach((array) $bloque as $materia)
                                    @php
                                        $mat = json_decode($materia, true);
                                        if($mat['DIVISION']=='COMUNICACIÓN'){
                                            echo "<li>";
                                            echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                            echo $mat['CARRERA'];
                                            echo "</a>";
                                            echo "</li>";
                                        }
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
