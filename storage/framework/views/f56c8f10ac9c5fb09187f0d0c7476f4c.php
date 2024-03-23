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
        <h1>Users</h1>
        <div class="row">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title text-center">
                                <h3><?php echo e($user->name); ?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text text-center">
                                <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><?php echo e($role->name); ?> | <strong>Status: </strong><b><?php echo e($role->pivot->status?'Active':'Inactive'); ?></b></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-text text-center">
<?php echo e($user->created_at); ?>

                            </div>
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