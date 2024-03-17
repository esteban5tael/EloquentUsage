<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
    <style>
        .role-card {
            margin-bottom: 20px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h3'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Roles</h1>
    <div class="row">
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card role-card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($role->name); ?></h5>
                        <p class="card-text"><?php echo e($role->description); ?></p>
                        <ul class="list-group">
                            <li class="list-group-item">Users:</li>
                            <?php $__currentLoopData = $role->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item"><?php echo e($user->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\EloquentUsage\resources\views/Relationship/index.blade.php ENDPATH**/ ?>