

<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h3'); ?>
    My Profiles
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo e($ads); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php\laravel\NeoCoders\EloquentUsage\resources\views/system/profiles/index.blade.php ENDPATH**/ ?>