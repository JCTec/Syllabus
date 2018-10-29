<?php $__env->startSection('content'); ?>
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

                                var route = "<?php echo e(route('setCState')); ?>?id="+ $(this).parent().attr('id') + "&competencias=" + inp.attr('id') + "&value=" + inp.val();


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

                    <table id="syllabusTable" cellspacing="0" cellpadding="0">
                        <tr class="mainRow">
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;width:7%;height:7%;">Código</td>
                            <td style="border-right:1px solid #757575;border-bottom:1px solid #757575;width:15%;height:25%;">Matería</td>
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

                        <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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
                            <tr id="<?php echo e($materia->id); ?>">
                                <td><?php echo e($materia->codigo); ?></td>
                                <td><?php echo e($materia->nombre); ?></td>
                                <td style="background-color: <?php echo e($c1); ?>;"><div class="competenceS"><input id="1" value=<?php echo e($materia->c1); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c2); ?>;"><div class="competenceS"><input id="2" value=<?php echo e($materia->c2); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c3); ?>;"><div class="competenceS"><input id="3" value=<?php echo e($materia->c3); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c4); ?>;"><div class="competenceS"><input id="4" value=<?php echo e($materia->c4); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c5); ?>;"><div class="competenceS"><input id="5" value=<?php echo e($materia->c5); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c6); ?>;"><div class="competenceS"><input id="6" value=<?php echo e($materia->c6); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c7); ?>;"><div class="competenceS"><input id="7" value=<?php echo e($materia->c7); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c8); ?>;"><div class="competenceS"><input id="8" value=<?php echo e($materia->c8); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c9); ?>;"><div class="competenceS"><input id="9" value=<?php echo e($materia->c9); ?> type="hidden"></div></td>
                                <td style="background-color: <?php echo e($c10); ?>;"><div class="competenceS"><input id="10" value=<?php echo e($materia->c10); ?> type="hidden"></div></td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>