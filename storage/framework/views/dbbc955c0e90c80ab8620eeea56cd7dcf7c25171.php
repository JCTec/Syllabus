<?php $__env->startSection('content'); ?>
    <div style="padding-right: 20px;padding-left: 20px">

        <div class="float-right">
            <img class="editB" src="<?php echo e(asset('img/pencil.png')); ?>" width="30px" height="30px">
        </div>

        <div class="row justify-content-center">

            <div id="mainCol" class="col">
                <form>

                    <script>
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
                        }

                        var hidden = false;
                        var lastN = -1;

                        function hideC(n){
                            if(hidden && lastN == n){
                                showAll();
                                hidden = false;
                            }else{
                                showAll();
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
                            var plan = '<?php echo e($plan["_id"]); ?>';
                            var url = '<?php echo e(route('chatMessage')); ?>';

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
                                    window.location.reload(false);
                                },
                                error: function (data) {
                                    console.log(data);
                                }
                            });
                        }

                        var editEnable = false;

                        $(document).ready(function () {

                            $('#sendAction').on('click', function () {
                                if($('#messageToSend').val().trim() != ""){
                                    sendMessage($('#messageToSend').val());
                                }
                            });

                            $('.exit').on('click', function () {
                                $(this).parent().hide(300);
                                $('#space').hide();
                            });

                            $('#chat-show').on('click', function () {
                                $('.chat').show(300);
                                $('#space').show();
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

                                    var route = "<?php echo e(route('setCState')); ?>?id="+ $(this).parent().attr('id') + "&competencia=" + inp.attr('id') + "&value=" + inp.val();

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


                            toBottom();
                        });
                    </script>

                    <table id="syllabusTable" cellspacing="0" cellpadding="0">
                        <tr class="mainRow">
                            <th style="border-bottom:1px solid #757575;width:10%;height:7%;" onclick="sortTable(0)">Código</th>
                            <th style="border-bottom:1px solid #757575;width:30%;height:25%;" onclick="sortTable(1)">Matería</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(2)">C1</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(3)">C2</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(4)">C3</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(5)">C4</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(6)">C5</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(7)">C6</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(8)">C7</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(9)">C8</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(10)">C9</th>
                            <th style="border-bottom:1px solid #757575;" onclick="sortTable(11)">C10</th>
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

                        <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materiaX): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

                            <tr id="<?php echo e($materia["_id"]); ?>">
                                <td><?php echo e($materia["CLAVE"]); ?></td>
                                <td><?php echo e($materia["ASIGNATURA"]); ?></td>
                                <td style="background-color: <?php echo e($c1); ?>;"><div class="competenceS"><input id="1" value=<?php echo e($C1V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c2); ?>;"><div class="competenceS"><input id="2" value=<?php echo e($C2V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c3); ?>;"><div class="competenceS"><input id="3" value=<?php echo e($C3V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c4); ?>;"><div class="competenceS"><input id="4" value=<?php echo e($C4V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c5); ?>;"><div class="competenceS"><input id="5" value=<?php echo e($C5V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c6); ?>;"><div class="competenceS"><input id="6" value=<?php echo e($C6V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c7); ?>;"><div class="competenceS"><input id="7" value=<?php echo e($C7V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c8); ?>;"><div class="competenceS"><input id="8" value=<?php echo e($C8V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c9); ?>;"><div class="competenceS"><input id="9" value=<?php echo e($C9V); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c10); ?>;"><div class="competenceS"><input id="10" value=<?php echo e($C10V); ?> type="hidden"></div></td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                </form>
            </div>

            <div id="space" class="col-4"></div>

            <div id="chat-show">
                <img src="<?php echo e(asset('img/cha.png')); ?>" width="100%" height="100%">
            </div>

            <div class="chat" style="margin-top: 50px">
                <img class="exit" src="<?php echo e(asset('img/clear-button.png')); ?>" width="100%" height="100%">
                <div class="row chat-header justify-content-center">
                    <?php echo e($plan["CODIGO_PLAN"]); ?>

                </div>

                <div id="chatContent" class="row chat-content">

                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="talk-bubble btm-left noMargin">
                            <h6><?php echo e($message["USER"]); ?></h6>
                            <div class="talktext">
                                <p><?php echo e($message["text"]); ?></p>
                            </div>
                        </div>

                        <?php $__currentLoopData = $message["SUB"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="talk-bubbleSubMessage noMargin btm-left">
                                <h6><?php echo e($message["USER"]); ?></h6>
                                <div class="talktext">
                                    <p><?php echo e(json_decode($item, true)["text"]); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="row chat-toolbar">
                    <form id="textSend" class="form-inline">
                        <input id="messageToSend" class="toolbar" type="text" name="message">
                        <img id="sendAction" class="form-inline" src="<?php echo e(asset('img/send.png')); ?>" width="30px" height="30px" style="margin-left: 5px">
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>