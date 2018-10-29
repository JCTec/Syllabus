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

                                if(val == 0){
                                    $(this).css('background-color', '#1dd261');
                                    inp.val(1);

                                }else if (val == 1){
                                    $(this).css('background-color', '#1aa04d');
                                    inp.val(2);

                                }else if(val == 2){
                                    $(this).css('background-color', '#106631');
                                    inp.val(3);

                                }else{
                                    $(this).css('background-color', 'white');
                                    inp.val(0);

                                }
                            });
                        });
                    </script>

                    <div class="row">
                        <div class="col">
                            <h6>Nombre de la carrera</h6>
                        </div>
                        <div class="col">
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
                            <td>Hola</td>
                            <td>Hola</td>
                            <td>C1</td>
                            <td>C2</td>
                            <td>C3</td>
                            <td>C4</td>
                            <td>C5</td>
                            <td>C6</td>
                            <td>C7</td>
                            <td>C8</td>
                            <td>C9</td>
                            <td>C10</td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                        <tr>
                            <td>34567</td>
                            <td>Bases de datos</td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                            <td><div class="competenceS"><input value=0 type="hidden"></div></td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>