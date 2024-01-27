<form action="<?php echo e(route('system.categories.store')); ?>" method="POST" class="m-2">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label for="" class="form-label"><?php echo e(__('Name')); ?></label>
        <input type="text"class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Name"
            required value="<?php echo e(old('name')); ?>"/>


        <button class="btn btn-success btn-sm mt-2" type="submit"><?php echo e(__('Save')); ?></button>
    </div>

</form><?php /**PATH D:\xampp\htdocs\php\laravel\NeoCoders\EloquentUsage\resources\views/system/categories/create.blade.php ENDPATH**/ ?>