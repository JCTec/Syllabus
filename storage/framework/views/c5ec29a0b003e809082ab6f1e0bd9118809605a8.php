<?php $__env->startSection('content'); ?>
    <div style="padding-right: 20px;padding-left: 20px">
        <div class="row justify-content-sm-center">
            <h1><?php echo e($competencia->﻿COMPETENCIA); ?></h1>
        </div>

        <div class="row justify-content-center">
            <h2><?php echo e($competencia->ALIAS); ?></h2>
        </div>

        <div class="row justify-content-center">
            <h2><?php echo e($competencia->CARRERA); ?></h2>
        </div>

        <div class="row justify-content-center">
            <h2><?php echo e($competencia->DESCRIPCION); ?></h2>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>