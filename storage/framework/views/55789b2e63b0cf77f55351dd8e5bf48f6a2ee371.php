<?php $__env->startSection('content'); ?>
<h1>create your Advertisement</h1>

<nav id=adView>
        <button class="button buttonAdSelect" onclick="window.location='<?php echo e(url('createAd')); ?>'">View Advertisement</button>
        <button class="button buttonAdSelect" onclick="window.location='<?php echo e(url('showAd')); ?>'">Create Advertisement</button>

        </nav>

<p>create your Advertisement
    </p>
<?php echo $__env->make('messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo Form::open(['action'=>'PagesController@store','method'=>'POST']); ?>

<div>
<?php echo e(Form::label('title','Title')); ?>

<?php echo e(Form::text('title','',['class'=>'form-control'])); ?>

<br>
<?php echo e(Form::label('Username','username')); ?>

<?php echo e(Form::text('username','')); ?>

<br>
<?php echo e(Form::label('body','Body')); ?>

<?php echo e(Form::textarea('body','')); ?>

<br>
<?php echo e(Form::submit('SUBMIT')); ?>


</div>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>