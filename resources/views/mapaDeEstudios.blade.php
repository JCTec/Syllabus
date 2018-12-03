@extends('layouts.app')

@section('content')
    <div style="padding-right: 20px;padding-left: 20px">

        <div>
            <div class="float-right">
                <img class="editB" src="{{asset('img/pencil.png')}}" width="30px" height="30px">
            </div>

            <div class="float-right" style="padding-right: 30px">
                <img class="exportB" src="{{asset('img/export.png')}}" width="30px" height="30px">
            </div>
        </div>

        <div class="row justify-content-center">

            <div id="mainCol" class="col">
                <form>

                    <script>

                        function downloadURI(uri, name) {
                            var link = document.createElement("a");
                            link.download = name;
                            link.href = uri;
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                            delete link;
                        }

                        function toBottom(){
                            var objDiv = document.getElementById("chatContent");
                            objDiv.scrollTop = objDiv.scrollHeight;
                        }

                        function sortTable(n) {
                            if(n < 2){
                                var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                                table = document.getElementById("syllabusTable");
                                switching = true;
                                // Set the sorting direction to ascending:
                                dir = "asc";
                                /* Make a loop that will continue until
                                no switching has been done: */
                                while (switching) {
                                    // Start by saying: no switching is done:
                                    switching = false;
                                    rows = table.rows;
                                    /* Loop through all table rows (except the
                                    first, which contains table headers): */
                                    for (i = 1; i < (rows.length - 1); i++) {
                                        // Start by saying there should be no switching:
                                        shouldSwitch = false;
                                        /* Get the two elements you want to compare,
                                        one from current row and one from the next: */
                                        x = rows[i].getElementsByTagName("TD")[n];
                                        y = rows[i + 1].getElementsByTagName("TD")[n];
                                        /* Check if the two rows should switch place,
                                        based on the direction, asc or desc: */
                                        if (dir == "asc") {
                                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                                // If so, mark as a switch and break the loop:
                                                shouldSwitch = true;
                                                break;
                                            }
                                        } else if (dir == "desc") {
                                            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                                // If so, mark as a switch and break the loop:
                                                shouldSwitch = true;
                                                break;
                                            }
                                        }
                                    }
                                    if (shouldSwitch) {
                                        /* If a switch has been marked, make the switch
                                        and mark that a switch has been done: */
                                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                        switching = true;
                                        // Each time a switch is done, increase this count by 1:
                                        switchcount ++;
                                    } else {
                                        /* If no switching has been done AND the direction is "asc",
                                        set the direction to "desc" and run the while loop again. */
                                        if (switchcount == 0 && dir == "asc") {
                                            dir = "desc";
                                            switching = true;
                                        }
                                    }
                                }
                            }else {
                                hideC(n);
                            }
                        }

                        function showAll() {
                            $('#syllabusTable').find('tr').each(function (index) {
                                $(this).show();
                            });

                            $('#mainRowID').find('th').each(function () {
                                $(this).css('background-color', '#ed7d31');
                            });
                        }

                        function cleanAll() {
                            $('#chatContent').find('.mainResponser').each(function () {
                                $(this).css('background-color', 'white');
                            });
                        }

                        var hidden = false;
                        var lastN = -1;

                        function hideC(n){
                            if(hidden && lastN == n){
                                showAll();
                                hidden = false;
                            }else{
                                showAll();
                                $('#TH'+n.toString()).css('background-color', '#cb6531');
                                lastN = n;
                                $('#syllabusTable').find('tr').each(function (index) {
                                    if(index != 0){
                                        if($(this).find("td:eq("+n+")").find("input:first").val() == 0){
                                            $(this).hide();
                                            hidden=true;
                                        }
                                    }
                                });
                            }
                        }
                    </script>

                    <script>

                        function sendMessage(text) {
                            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                            var plan = '{{ $plan["_id"] }}';
                            var url = '{{route('chatMessage')}}';

                            if(selected.trim() != ""){
                                $.ajax({
                                    /* the route pointing to the post function */
                                    url: url,
                                    type: 'POST',
                                    /* send the csrf-token and the input to the controller */
                                    data: {_token: CSRF_TOKEN, text: text, planDeEstudio: plan, origin: selected},
                                    dataType: 'JSON',
                                    /* remind that 'data' is the response of the AjaxController */
                                    success: function (data) {
                                        console.log(data);
                                        window.location.href = "{{Request::url()}}?open=true";
                                    },
                                    error: function (data) {
                                        console.log(data);
                                    }
                                });
                            }else{
                                $.ajax({
                                    /* the route pointing to the post function */
                                    url: url,
                                    type: 'POST',
                                    /* send the csrf-token and the input to the controller */
                                    data: {_token: CSRF_TOKEN, text: text, planDeEstudio: plan},
                                    dataType: 'JSON',
                                    /* remind that 'data' is the response of the AjaxController */
                                    success: function (data) {
                                        console.log(data);
                                        window.location.href = "{{Request::url()}}?open=true";
                                    },
                                    error: function (data) {
                                        console.log(data);
                                    }
                                });
                            }
                        }

                        var editEnable = false;
                        var selected = "";

                        $(document).ready(function () {

                            $('.mainResponser').on('click', function () {
                                cleanAll();
                                $(this).css('background-color', '#c9c9c9');
                                selected = $(this).find('.talktext').attr('id');
                            });

                            $('.exportB').on('click', function () {

                                html2canvas(document.querySelector("#mainCol")).then(canvas => {
                                    var info = $('#info');

                                    info.empty();
                                    info.append(canvas);

                                    $('#savePicture').on('click', function () {
                                        // Open the image in a new window
                                        var date = new Date();
                                        downloadURI(canvas.toDataURL("image/png"), "{{$nameMapa}}"+ "_" + date.getDate() + "_" + date.getFullYear() + ".png");
                                    });
                                });

                                document.getElementById('modal-wrapper-C').style.display='block';
                            });

                            $('#sendAction').on('click', function () {
                                if($('#messageToSend').val().trim() != ""){
                                    sendMessage($('#messageToSend').val());
                                }
                            });

                            $('#textSend').on('keyup keypress', function(e) {
                                var keyCode = e.keyCode || e.which;
                                if (keyCode === 13) {
                                    e.preventDefault();

                                    if($('#messageToSend').val().trim() != ""){
                                        sendMessage($('#messageToSend').val());

                                        $('#messageToSend').val("");
                                    }
                                }
                            });

                            $('.exit').on('click', function () {
                                $(this).parent().hide(300);
                                $('#space').hide();
                            });

                            $('#chat-show').on('click', function () {
                                $('.chat').show(300);
                                $('#space').show();
                                toBottom();
                            });

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

                                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                                    $.ajax({
                                        type: "GET",
                                        url: route,
                                        data: { _token: CSRF_TOKEN },
                                        dataType: 'JSON',
                                        success: function (data) {
                                            console.log(data);
                                        }
                                    }).fail(function(resp){
                                        console.log(resp);
                                    });
                                }

                            });

                            @if(isset($_GET["open"]))
                                toBottom();
                            @endif

                        });
                    </script>

                    <table id="syllabusTable" cellspacing="0" cellpadding="0">
                        <tr id="mainRowID" class="mainRow">
                            <th id="TH0" class="clickable" style="border-bottom:1px solid #757575;width:10%;height:7%;" onclick="sortTable(0)">Código</th>
                            <th id="TH1" class="clickable" style="border-bottom:1px solid #757575;width:30%;height:25%;" onclick="sortTable(1)">Matería</th>
                            <th id="TH2" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(2)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C1'])}}">C1</a></th>
                            <th id="TH3" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(3)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C2'])}}">C2</a></th>
                            <th id="TH4" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(4)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C3'])}}">C3</a></th>
                            <th id="TH5" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(5)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C4'])}}">C4</a></th>
                            <th id="TH6" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(6)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C5'])}}">C5</a></th>
                            <th id="TH7" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(7)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C6'])}}">C6</a></th>
                            <th id="TH8" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(8)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C7'])}}">C7</a></th>
                            <th id="TH9" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(9)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C8'])}}">C8</a></th>
                            <th id="TH10" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(10)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C9'])}}">C9</a></th>
                            <th id="TH11" class="clickable" style="border-bottom:1px solid #757575;" onclick="sortTable(11)"><a class="noA-white" href="{{route('competencia', ['CARRERA' => $plan["CODIGO_PLAN"], 'COMPETENCIA' => 'C10'])}}">C10</a></th>
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
                                <td><a class="noA" href="{{route('materia', ['CARRERA' => $materia["CARRERA"], 'CLAVE' => $materia["CLAVE"]])}}">{{$materia["ASIGNATURA"]}}</a></td>
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

            <div id="space" class="col-2" style="margin-right: 35px"></div>

            <div id="chat-show">
                <img src="{{asset('img/cha.png')}}" width="100%" height="100%">
            </div>

            <div class="chat" style="margin-top: 50px">
                <img class="exit" src="{{asset('img/clear-button.png')}}" width="100%" height="100%">
                <div class="row chat-header justify-content-center">
                    {{$plan["CODIGO_PLAN"]}}
                </div>

                <div id="chatContent" class="row chat-content">

                    @foreach($messages as $message)

                        <div class="talk-bubble btm-left noMargin mainResponser">
                            @if($message["userID"] == Auth::user()->id)
                                <div class="imgcontainer">
                                    <span onclick="window.location.href = '{{route('remove', ['id' => $message["_id"]])}}'" class="close" title="Close PopUp">&times;</span>
                                </div>
                            @endif

                            <h6>{{$message["USER"]}}</h6>
                            <div id="{{$message["_id"]}}" class="talktext">
                                <p>{{$message["text"]}}</p>
                            </div>
                        </div>

                        @foreach($message["SUB"] as $item)
                            <?php
                                $subMessage = json_decode($item, true);
                            ?>

                            <div class="talk-bubbleSubMessage noMargin btm-left">
                                @if($subMessage["userID"] == Auth::user()->id)
                                    <div class="imgcontainer">
                                        <span onclick="window.location.href = '{{route('remove', ['id' => $subMessage["_id"]])}}'" class="close" title="Close PopUp">&times;</span>
                                    </div>
                                @endif

                                <h6>{{$subMessage["USER"]}}</h6>
                                <div class="talktext">
                                    <p>{{ $subMessage["text"] }}</p>
                                </div>
                            </div>
                        @endforeach

                    @endforeach

                </div>

                <div class="row chat-toolbar">
                    <form id="textSend" class="form-inline">
                        <input id="messageToSend" class="toolbar" type="text" name="message" style="text-align: left;">
                        <img id="sendAction" class="form-inline" src="{{asset('img/send.png')}}" width="30px" height="30px" style="margin-left: 5px">
                    </form>
                </div>
            </div>

        </div>

        @if(!isset($_GET["open"]))
            <script>
                $('.chat').hide();
                $('#space').hide();
            </script>
        @endif


        <div id="modal-wrapper-C" class="modal">

            <div id="modal-content-C" class="modal-content animate">

                <div class="imgcontainer">
                    <span onclick="document.getElementById('modal-wrapper-C').style.display='none'" class="close" title="Close PopUp">&times;</span>
                </div>

                <div class="container">
                    <div id="info" class="row col" style="margin-top: 30px">

                    </div>

                    <div class="row" style="padding-top: 50px; padding-right: 20px">
                        <div class="col">

                        </div>

                        <div class="col" style="text-align: right">
                            <button id="savePicture" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
