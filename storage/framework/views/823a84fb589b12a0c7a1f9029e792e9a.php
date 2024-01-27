

<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h3'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('system.categories.update', $category)); ?>" method="POST" class="m-2">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="" class="form-label"><?php echo e(__('Name')); ?></label>
            <input type="text"class="form-control" name="name" id="name" aria-describedby="helpId"
                placeholder="Name" value="<?php echo e(old('name', $category->name)); ?>" required />


            <a class="btn btn-warning btn-sm mt-2" href="<?php echo e(route('system.categories.index')); ?>"><?php echo e(__('Back')); ?></a>
            <button class="btn btn-success btn-sm mt-2" type="submit"><?php echo e(__('Save')); ?></button>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php\laravel\NeoCoders\EloquentUsage\resources\views/system/categories/edit.blade.php ENDPATH**/ ?>