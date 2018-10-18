@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form>

                    <script>

                        $(document).ready(function () {

                            $('#sidebarCollapse').click();

                            $('td').on('click', function () {
                                var inp = $(this).find('input');
                                var val = inp.val();

                                if(val){
                                    if(val == 0){
                                        $(this).css('background-color', '#00afff');
                                        inp.val(1);

                                    }else if (val == 1){
                                        $(this).css('background-color', '#35e300');
                                        inp.val(2);

                                    }else if(val == 2){
                                        $(this).css('background-color', '#ff8700');
                                        inp.val(3);

                                    }else{
                                        $(this).css('background-color', 'white');
                                        inp.val(0);

                                    }
                                }

                                var route = "{{route('setCState')}}?id="+ $(this).parent().attr('id') + "&competencias=" + inp.attr('id') + "&value=" + inp.val();


                                $.ajax({
                                    type: "GET",
                                    url: route,
                                    data: null,
                                    success: null
                                }).fail(function(resp){
                                    console.log(resp);
                                });

                            });
                        });
                    </script>

                    <div class="row">

                        <div class="col">
                            <h6>Carrera</h6>
                            <select id='carrera' name='carrera' class="form-control" required>
                                <option value='1'>Ingenieria en Informatica y ND</option>
                                <option value='1'>Ingenieria Civil</option>
                                <option value='1'>Diseño</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6>ID de carrera: ######</h6>
                        </div>
                        <div class="col">
                            <h6>Campus: Universidad Anahuac Mayab</h6>
                        </div>
                        <div class="col">
                            <h6>Semestres: 0</h6>
                        </div>
                    </div>

                    <table id="syllabusTable">
                        <tr class="mainRow">
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">Hola</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">Hola</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C1</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C2</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C3</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C4</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C5</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C6</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C7</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C8</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C9</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;">C10</td>
                        </tr>

                        <?php
                            class ColorHelper {

                                function getColor($val) {
                                    if($val == 1){
                                        return '#00afff';

                                    }else if ($val == 2){
                                        return '#35e300';

                                    }else if($val == 3){
                                        return '#ff8700';

                                    }else{
                                        return 'white';

                                    }
                                }
                            }
                        ?>

                        @foreach($materias as $materia)

                            <?php

                                $colorHelper = new ColorHelper();
                                $c1 = $colorHelper->getColor($materia->c1);
                                $c2 = $colorHelper->getColor($materia->c2);
                                $c3 = $colorHelper->getColor($materia->c3);
                                $c4 = $colorHelper->getColor($materia->c4);
                                $c5 = $colorHelper->getColor($materia->c5);
                                $c6 = $colorHelper->getColor($materia->c6);
                                $c7 = $colorHelper->getColor($materia->c7);
                                $c8 = $colorHelper->getColor($materia->c8);
                                $c9 = $colorHelper->getColor($materia->c9);
                                $c10 = $colorHelper->getColor($materia->c10);

                            ?>
                            <tr id="{{$materia->id}}">
                                <td>{{$materia->codigo}}</td>
                                <td>{{$materia->nombre}}</td>
                                <td style="background-color: {{$c1}};"><div class="competenceS"><input id="1" value={{$materia->c1}} type="hidden"></div></td>
                                <td style="background-color: {{$c2}};"><div class="competenceS"><input id="2" value={{$materia->c2}} type="hidden"></div></td>
                                <td style="background-color: {{$c3}};"><div class="competenceS"><input id="3" value={{$materia->c3}} type="hidden"></div></td>
                                <td style="background-color: {{$c4}};"><div class="competenceS"><input id="4" value={{$materia->c4}} type="hidden"></div></td>
                                <td style="background-color: {{$c5}};"><div class="competenceS"><input id="5" value={{$materia->c5}} type="hidden"></div></td>
                                <td style="background-color: {{$c6}};"><div class="competenceS"><input id="6" value={{$materia->c6}} type="hidden"></div></td>
                                <td style="background-color: {{$c7}};"><div class="competenceS"><input id="7" value={{$materia->c7}} type="hidden"></div></td>
                                <td style="background-color: {{$c8}};"><div class="competenceS"><input id="8" value={{$materia->c8}} type="hidden"></div></td>
                                <td style="background-color: {{$c9}};"><div class="competenceS"><input id="9" value={{$materia->c9}} type="hidden"></div></td>
                                <td style="background-color: {{$c10}};"><div class="competenceS"><input id="10" value={{$materia->c10}} type="hidden"></div></td>
                            </tr>

                        @endforeach
                    </table>

                </form>
            </div>
        </div>
    </div>
@endsection
