<?php $__env->startSection('content'); ?>

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

        <?php if(session()->has('error')): ?>
        <div class="alert alert-dismissable alert danger" style="background: rgb(199, 31, 19);">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                <?php echo session()->get('error'); ?>

            </strong>
        </div>
        <?php endif; ?>

        <button type="button" class="btn btn-primary" onclick="addColumn()">Add</button>

        <form action="<?php echo e(route('table.create_table')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row my-3">
                <div class="col-md-2">
                    <label for="title" class="form-label">Table Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="tablename" name="tablename">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="title" class="form-label">Column Name</label>
                    <input type="text" class="form-control" id="columnname" name="columnname[]">

                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Type</label>
                    <select class="form-control" name="columntype[]" id="columntype">
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type); ?>"><?php echo e($type); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Length</label>
                    <input type="text" class="form-control" id="length" name="length[]">
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Default</label>
                    <select class="form-control" name="columndefault[]" id="column_default">
                        
                        <option value="null">null</option>
                        <option value="defined">as defined</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Nullable</label>
                    <select class="form-control" name="columnnull[]" id="columnnull">
                        
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Primary Key</label>
                    <select class="form-control" name="columnprimary[]" id="columnprimary">
                        
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                </div>
                <input type="hidden" name="arrayCount" value="1">
            </div>

            <div id="column"></div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
        </form>
    </div>
    

</div>



<?php $__env->stopSection(); ?>

<script>
    function addColumn(){
     
        let newDokumen_no = parseInt($(`input[name="arrayCount"]`).val()) + 1;
        $(`input[name="arrayCount"]`).val(newDokumen_no);

        $('#column').append(`
            <div class="row">
                <div class="col-md-2">
                    <label for="title" class="form-label">Column Name</label>
                    <input type="text" class="form-control" id="columnname" name="columnname[]">
            
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Type</label>
                    <select class="form-control" name="columntype[]" id="columntype">
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type); ?>"><?php echo e($type); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Length</label>
                    <input type="text" class="form-control" id="length" name="length[]">
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Default</label>
                    <select class="form-control" name="columndefault[]" id="column_default">
                        
                        <option value="null">null</option>
                        <option value="123">as defined</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Nullable</label>
                    <select class="form-control" name="columnnull[]" id="columnnull">
                        
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-label">Primary Key</label>
                    <select class="form-control" name="columnprimary[]" id="columnprimary">
                        
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                    </select>
                </div>
            </div>
        `);

    }
</script>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/cara_module/Modules/Table/Resources/views/index.blade.php ENDPATH**/ ?>