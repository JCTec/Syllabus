@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">

                        @foreach($bloques as $bloque)

                            <div class="col-3 my-2 py-3 border-left border-right border-bottom border-top">
                                <div class="container">
                                    <p class="h4">{{$bloque[0]->division}}</p>
                                    <hr color="#e58a00" width="100%" style="height:3px">
                                    <ul>
                                        @foreach((array) $bloque as $materia)
                                            @php
                                                $mat = json_decode($materia, true);
                                            @endphp
                                            <li><a href="{{route('mapaDeEstudios', ['id'=>$mat['_id']])}}">
                                            {{$mat['CARRERA']}}
                                            </a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
