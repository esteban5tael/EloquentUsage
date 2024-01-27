

<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h3'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container m-1 p-1 text-center">
        <div class="row">
            <div class="col">

                <div class="table-responsive">
                    <table class="table table-secondary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td scope="row"><?php echo e($key + 1); ?></td>

                                    <td scope="col"><?php echo e($profile->name); ?> </td>
                                    <td scope="col"><?php echo e($profile->lastname); ?> </td>
                                    <td scope="col"><?php echo e($profile->address); ?> </td>
                                    <td scope="col"><?php echo e($profile->phone); ?> </td>
                                    <td scope="col"><?php echo e($profile->email); ?> </td>
                                    <td scope="col"><?php echo e($profile->status == 1 ? 'Active' : 'Inactive'); ?> </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <?php echo e($profiles->links()); ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php\laravel\NeoCoders\EloquentUsage\resources\views/system/index.blade.php ENDPATH**/ ?>