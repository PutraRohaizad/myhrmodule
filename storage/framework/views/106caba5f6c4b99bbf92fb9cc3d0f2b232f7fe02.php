<?php $__env->startSection('content'); ?>

<!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">CRUD Builder</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">CRUD</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->
<div class="row">
    <div class="card card-table flex-fill">
        <div class="card-header">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-module-tab" data-toggle="pill" href="#pills-module" role="tab"
                        aria-controls="pills-module" aria-selected="true">Module</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-moduleChild-tab" data-toggle="pill" href="#pills-moduleChild"
                        role="tab" aria-controls="pills-moduleChild" aria-selected="false">Module Child</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-importModule-tab" data-toggle="pill" href="#pills-importModule"
                        role="tab" aria-controls="pills-moduleChild" aria-selected="false">Import Module</a>
                </li>
            </ul>
        </div>
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
            <div class="alert alert-dismissable alert danger" style="background: rgb(199, 42, 42);">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    <?php echo session()->get('error'); ?>

                </strong>
            </div>
            <?php endif; ?>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-module" role="tabpanel"
                    aria-labelledby="pills-module-tab">
                    <form action="<?php echo e(route('crud.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-header">
                            <h3 class="card-title mb-0">Create New Module</h3>
                        </div>
                        <div class="col-8 my-4">
                            <label class="">Module Name</label>
                            <input type="text" name="nameModule[]" class="form-control" required>
                            <label class="">Module Icon</label>
                            <select class="form-control" name="icon">
                                <option value="la-dashboard">Dashboard</option>
                                <option value="la-cube">Cube</option>
                            </select>
                        </div>
                        <div class="form-check m-4">
                            <label for="myCheck">Sub Module</label>
                            <input type="checkbox" id="myCheck" onclick="checkModule()">
                            <div class="col-6 mb-2" id="text" style="display:none">
                                <label class="">Parent Module</label>
                                <select class="form-select form-control" aria-label="Default select example"
                                    name="parentModule">
                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="">Please Select</option>
                                    <option value="<?php echo e($menu->id); ?>"><?php echo e($menu->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success m-2">ADD CRUD</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-moduleChild" role="tabpanel"
                    aria-labelledby="pills-moduleChild-tab">
                    <form action="<?php echo e(route('crud.addChild')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-header">
                            <h3 class="card-title mb-0">Create New Module with Child</h3>
                        </div>
                        <div class="col-8 my-4">
                            <label class="">Parent Module Name</label>
                            <input type="text" name="nameModule" class="form-control" required>
                            <label class="">Parent Module Icon</label>
                            <select class="form-control" name="icon">
                                <option value="la-dashboard">Dashboard</option>
                                <option value="la-cube">Cube</option>
                            </select>
                        </div>
                        <div class="form-check m-4">
                            <button class="btn btn-primary mb-3" type="button" onclick="addSubModule()">Add Sub
                                Module</button>
                            <button class="btn btn-danger mb-3" type="button"
                                onclick="removeSubModule()">Remove</button>
                            <div class="col-6 mb-2" id="textchild">
                                <label class="">Sub Module Name</label>
                                <input type="text" name="subname[]" class="form-control" required>
                                <label class="">Sub Module Icon</label>
                                <select class="form-control" name="subicon[]">
                                    <option value="la-dashboard">Dashboard</option>
                                    <option value="la-cube">Cube</option>
                                </select>
                                <div id="child"></div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success m-2">ADD CRUD</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-importModule" role="tabpanel"
                    aria-labelledby="pills-importModule-tab">
                    <form action="<?php echo e(route('crud.upload')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="col-6 my-4">
                            <div class="mb-3">
                                <label for="file" class="form-label">Module Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Module Icon</label>
                                
                                <select class="form-control" name="icon">
                                    <option value="la-dashboard">Dashboard</option>
                                    <option value="la-cube">Cube</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Upload Module File</label>
                                <input class="form-control" type="file" id="file" name="file" accept=".zip,.rar,.7zip">
                            </div>
                        </div>
                        <div class="col-6 my-4">
                            <button class="btn btn-primary m-2">Upload Module</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<script>
    function checkModule() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true){
        text.style.display = "block";
        } else {
        text.style.display = "none";
        }
        }
</script>
<script>
    function addSubModule() {
       $('#child').append(`
        <div id="childModule">
            <hr>
            <br>
            <label class="">Sub Module Name</label>
            <input type="text" name="subname[]" class="form-control">
            <label class="">Sub Module Icon</label>
            <select class="form-control" name="subicon[]">
                <option value="la-dashboard">Dashboard</option>
                <option value="la-cube">Cube</option>
            </select>
        </div>
       `)
    }
</script>
<script>
    function removeSubModule(){
        $('#childModule').remove();
    }
</script>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/putrarohaizad/Desktop/Project/myhrmodule/Modules/Crud/Resources/views/index.blade.php ENDPATH**/ ?>