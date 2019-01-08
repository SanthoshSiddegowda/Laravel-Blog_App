<?php $__env->startSection('content'); ?>
<h1>Posts</h1>
<?php if(count($posts)>0): ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card card-body bg-light">
<h4><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h4>
<small>Written on <?php echo e($post->created_at); ?> </small> 
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($posts->links()); ?>

<?php else: ?>
<p>No Posts Found</p>
<?php endif; ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>