<?php $__env->startSection('content'); ?>
    <div class="row DRow" style="margin-left: 20px; margin-right: 20px;">
        <?php $__currentLoopData = $bloques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bloque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Ciencias jurídicas y sociales</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='Ciencias Jurídicas y Sociales'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Ingeniería y ciencias exactas</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='Ingeniería y ciencias Exacta'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Ciencias de la salud</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='Ciencias de la salud'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='NEGOCIOS'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Diseño</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='DISEÑO'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Arquitectura</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='ARQUITECTURA'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col my-2 py-3">
                <div class="myPlan">
                    <div class="container">
                        <p class="h4">Comunicación</p>
                        <hr color="#e58a00" width="100%" style="height:3px">
                        <ul>
                            <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $mat = json_decode($materia, true);
                                    if($mat['DIVISION']=='COMUNICACIÓN'){
                                        echo "<li>";
                                        echo "<a class=\"SyllabusLink\" href=\"",url("mapaDeEstudios/{$mat['_id']}"),"\">";
                                        echo $mat['CARRERA'];
                                        echo "</a>";
                                        echo "</li>";
                                    }
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>