<?php $__env->startSection('content'); ?>
<a href="/posts" class="btn btn-default">Go back </a>
<h1><?php echo e($post->title); ?></h1>
<small>created on <?php echo e($post->created_at); ?></small>
<hr>
<div class="card">
 <?php echo $post->body; ?>

</div>



<?php if(auth()->guard()->check()): ?>
<?php if(Auth::user()->id == $post->user_id): ?>
 <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>
<?php echo Form::open(['action' => ['postcontroller@destroy',$post->id ],'method' => 'POST', 'class' => 'float-right']); ?>

<?php echo e(Form::hidden('_method','DELETE')); ?>

<?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

<?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>