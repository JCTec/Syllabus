@extends('layouts.app')

@section('content')
    <div class="row DRow" style="margin-left: 20px; margin-right: 20px;">
        @foreach($bloques as $bloque)
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Ciencias jurídicas y Sociales</p>
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
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Ingeniería y Ciencias Exacta</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            @foreach((array) $bloque as $materia)
                                @php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='Ingeniería y Ciencias Exacta'){
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
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Ciencias de la Salud</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            @foreach((array) $bloque as $materia)
                                @php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='Ciencias de la Salud'){
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
            <div class="col my-2 py-3">
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
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">CAD</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            @foreach((array) $bloque as $materia)
                                @php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='CAD'){
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
@endsection
