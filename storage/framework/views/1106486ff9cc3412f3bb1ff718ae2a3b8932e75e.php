<?php $__env->startSection('content'); ?>
    <h1>Hello World <?php echo e($name); ?> page</h1>

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/myhrmodule/Modules/Test/Resources/views/list.blade.php ENDPATH**/ ?>