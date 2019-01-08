<?php $__env->startSection('content'); ?>
<h1>Edit  Posts</h1>

<?php echo Form::open(['action' => ['postcontroller@update',$post->id], 'method' => 'POST', 'class' => 'form']); ?>

    <div class="form-group">
      <?php echo e(Form::label('title','Title')); ?>

      <?php echo e(Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('body','Body')); ?>

      <?php echo e(Form::textarea('body',$post->body,['id'=>'hello','class'=>'form-control','placeholder'=>'write the message!!'])); ?>

    </div>

    <?php echo e(Form::hidden('_method','PUT')); ?>

    <?php echo e(Form::submit('submit',['class'=>'btn btn-primary'])); ?>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>