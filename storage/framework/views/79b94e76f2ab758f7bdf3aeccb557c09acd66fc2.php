<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top:5%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                   <?php if(session()->has('success')): ?>
                    <div class="alert alert-dismissable alert success" style="background: rgb(120, 221, 79);">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>
                            <?php echo session()->get('success'); ?>

                        </strong>
                    </div>
                    <?php endif; ?>
                </div>
                <form action="<?php echo e(route('crud.add')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                        <label class="">Module Name</label>
                        <input type="text" name="nameModule[]" value="" class="form-control">
                        <button class="btn btn-primary m-2">ADD CRUD</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hrms_v2/Modules/Crud/Resources/views/index.blade.php ENDPATH**/ ?>