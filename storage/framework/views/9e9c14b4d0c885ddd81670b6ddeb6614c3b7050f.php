<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">

                        <?php $__currentLoopData = $bloques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bloque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-3 my-2 py-3 border-left border-right border-bottom border-top">
                                <div class="container">
                                    <p class="h4"><?php echo e($bloque[0]->division); ?></p>
                                    <hr color="#e58a00" width="100%" style="height:3px">
                                    <ul>
                                        <?php $__currentLoopData = (array) $bloque; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $mat = json_decode($materia, true);
                                            ?>
                                            <li><a href="<?php echo e(route('mapaDeEstudios', ['id'=>$mat['_id']])); ?>">
                                            <?php echo e($mat['carrera']); ?>

                                            </a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>