<?php $__env->startSection('content'); ?>
<main role="main" class="container">
<div class="jumbotron">
    <div class="container">
        <h1><?php echo e($title); ?> </h1>
        <p>This is the Blog website developed in laravel framework</p>
        <span><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a></span>
        <span><a class="btn btn-primary btn-lg" href="/register" role="button">Register &raquo;</a></span>
      </div>
    </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>