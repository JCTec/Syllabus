<?php $__env->startSection('content'); ?>
    <div style="padding-right: 20px;padding-left: 20px">
        <div class="row justify-content-sm-center">
            <h1><?php echo e($materia["ASIGNATURA"]); ?></h1>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Bloque: <?php echo e($materia["BLOQUE"]); ?></h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Semestres: <?php echo e($materia["SEMESTRE"]); ?></h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2><?php echo e($materia["CARRERA"]); ?></h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Clave: <?php echo e($materia["CLAVE"]); ?></h2>
        </div>

        <div class="row justify-content-sm-center">
            <h2>Creditos: <?php echo e($materia["CRÉDITOS"]); ?></h2>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>