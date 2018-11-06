@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="float-right">
            <img class="editB" src="{{asset('img/pencil.png')}}" width="30px" height="30px">
        </div>

        <div class="row justify-content-center">

            <div class="col-8">
                <form>

                    <script>

                        var editEnable = false;

                        $(document).ready(function () {

                            $('#sidebarCollapse').click();

                            $('.editB').bind('click',function () {
                                if(editEnable == true){
                                    $(this).css('filter', 'contrast(100%)');
                                    editEnable = false;
                                }else{
                                    $(this).css('filter', 'contrast(0%)');
                                    editEnable = true;
                                }
                            });

                            $('td').on('click', function () {

                                if(editEnable){
                                    var inp = $(this).find('input');
                                    var val = inp.val();

                                    if(val){
                                        if(val == 0){
                                            $(this).css('background-color', '#ffd99c');
                                            inp.val(1);

                                        }else if (val == 1){
                                            $(this).css('background-color', '#ffb34c');
                                            inp.val(2);

                                        }else if(val == 2){
                                            $(this).css('background-color', '#ff8300');
                                            inp.val(3);

                                        }else{
                                            $(this).css('background-color', 'white');
                                            inp.val(0);

                                        }
                                    }

                                    var route = "{{route('setCState')}}?id="+ $(this).parent().attr('id') + "&competencia=" + inp.attr('id') + "&value=" + inp.val();

                                    $.ajax({
                                        type: "GET",
                                        url: route,
                                        data: null,
                                        success: function (data) {
                                            console.log(data);
                                        }
                                    }).fail(function(resp){
                                        console.log(resp);
                                    });
                                }

                            });
                        });
                    </script>

                    <table id="syllabusTable" cellspacing="0" cellpadding="0">
                        <tr class="mainRow">
                            <td style="border-bottom:1px solid #757575;width:10%;height:7%;">Código</td>
                            <td style="border-bottom:1px solid #757575;width:30%;height:25%;">Matería</td>
                            <td style="border-bottom:1px solid #757575;">C1</td>
                            <td style="border-bottom:1px solid #757575;">C2</td>
                            <td style="border-bottom:1px solid #757575;">C3</td>
                            <td style="border-bottom:1px solid #757575;">C4</td>
                            <td style="border-bottom:1px solid #757575;">C5</td>
                            <td style="border-bottom:1px solid #757575;">C6</td>
                            <td style="border-bottom:1px solid #757575;">C7</td>
                            <td style="border-bottom:1px solid #757575;">C8</td>
                            <td style="border-bottom:1px solid #757575;">C9</td>
                            <td style="border-bottom:1px solid #757575;">C10</td>
                        </tr>

                        <?php
                        class ColorHelper {

                            function getColor($val) {
                                if($val == 1){
                                    return '#ffd99c';

                                }else if ($val == 2){
                                    return '#ffb34c';

                                }else if($val == 3){
                                    return '#ff8300';

                                }else{
                                    return 'white';

                                }
                            }
                        }
                        ?>

                        @foreach($materias as $materiaX)

                            <?php

                            $materia = json_decode($materiaX, true);

                            $com = $materia["COMPETENCIAS"];

                            $colorHelper = new ColorHelper();

                            $c1 = 'white';
                            $c2 = 'white';
                            $c3 = 'white';
                            $c4 = 'white';
                            $c5 = 'white';
                            $c6 = 'white';
                            $c7 = 'white';
                            $c8 = 'white';
                            $c9 = 'white';
                            $c10 = 'white';
                            $C1V = 0;
                            $C2V = 0;
                            $C3V = 0;
                            $C4V = 0;
                            $C5V = 0;
                            $C6V = 0;
                            $C7V = 0;
                            $C8V = 0;
                            $C9V = 0;
                            $C10V = 0;

                            foreach ($com as $competencia){

                                if($competencia["Competencia"] == "C1"){
                                    $c1 = $colorHelper->getColor($competencia["Value"]);
                                    $C1V = $competencia["Value"];
                                }else if($competencia["Competencia"] == "C2"){
                                    $c2 = $colorHelper->getColor($competencia["Value"]);
                                    $C2V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C3"){
                                    $c3 = $colorHelper->getColor($competencia["Value"]);
                                    $C3V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C4"){
                                    $c4 = $colorHelper->getColor($competencia["Value"]);
                                    $C4V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C5"){
                                    $c5 = $colorHelper->getColor($competencia["Value"]);
                                    $C5V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C6"){
                                    $c6 = $colorHelper->getColor($competencia["Value"]);
                                    $C6V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C7"){
                                    $c7 = $colorHelper->getColor($competencia["Value"]);
                                    $C7V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C8"){
                                    $c8 = $colorHelper->getColor($competencia["Value"]);
                                    $C8V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C9"){
                                    $c9 = $colorHelper->getColor($competencia["Value"]);
                                    $C9V = $competencia["Value"];

                                }else if($competencia["Competencia"] == "C10"){
                                    $c10 = $colorHelper->getColor($competencia["Value"]);
                                    $C10V = $competencia["Value"];

                                }
                            }

                            ?>

                            <tr id="{{$materia["_id"]}}">
                                <td>{{$materia["CLAVE"]}}</td>
                                <td>{{$materia["ASIGNATURA"]}}</td>
                                <td style="background-color: {{$c1}};"><div class="competenceS"><input id="1" value={{$C1V}} type="hidden"></div></td>
                                <td style="background-color: {{$c2}};"><div class="competenceS"><input id="2" value={{$C2V}} type="hidden"></div></td>
                                <td style="background-color: {{$c3}};"><div class="competenceS"><input id="3" value={{$C3V}} type="hidden"></div></td>
                                <td style="background-color: {{$c4}};"><div class="competenceS"><input id="4" value={{$C4V}} type="hidden"></div></td>
                                <td style="background-color: {{$c5}};"><div class="competenceS"><input id="5" value={{$C5V}} type="hidden"></div></td>
                                <td style="background-color: {{$c6}};"><div class="competenceS"><input id="6" value={{$C6V}} type="hidden"></div></td>
                                <td style="background-color: {{$c7}};"><div class="competenceS"><input id="7" value={{$C7V}} type="hidden"></div></td>
                                <td style="background-color: {{$c8}};"><div class="competenceS"><input id="8" value={{$C8V}} type="hidden"></div></td>
                                <td style="background-color: {{$c9}};"><div class="competenceS"><input id="9" value={{$C9V}} type="hidden"></div></td>
                                <td style="background-color: {{$c10}};"><div class="competenceS"><input id="10" value={{$C10V}} type="hidden"></div></td>
                            </tr>

                        @endforeach
                    </table>

                </form>
            </div>

            <div class="col-4">
                {{ _('Aqui va el Chat')  }}
            </div>

        </div>
    </div>
@endsection
