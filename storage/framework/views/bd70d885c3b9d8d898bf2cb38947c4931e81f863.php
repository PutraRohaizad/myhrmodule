<?php $__env->startSection('content'); ?>

<!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">MENU LISTS</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">Menu</li>
            </ul>
        </div>
    </div>
</div>



<div id="showMessage"></div>

<!-- /Page Header -->
<div class="row">
    <div class="card card-table flex-fill">
        <div class="card-header">
            <h3 class="card-title mb-0">Menus</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Menu Title</th>
                            
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index+1); ?></td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="#" class="avatar"><img alt="" src="img/profiles/avatar-19.jpg"></a>
                                    <a href="client-profile"><?php echo e($menu->title); ?> </a>
                                </h2>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    
                                    <select class="select floating" name="updateStatus" id="updateStatus-<?php echo e($menu->id); ?>"
                                        onchange="statusUpdate(<?php echo e($menu->id); ?>)">
                                        <option value="1" <?php if($menu->active == 1): ?> selected <?php endif; ?>>
                                            Active
                                        </option>
                                        <option value="0" <?php if($menu->active == 0): ?> selected <?php endif; ?>>
                                            Inactive
                                        </option>

                                    </select>
                                    
                                </div>
                            </td>
                                    
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>
</div>
<?php $__env->stopSection(); ?>

<script>
    function statusUpdate(id){
         const status = document.querySelector(`#updateStatus-${id}`);

         fetch(`/menu/status/${id}`, {
             method: 'PUT',
             body: JSON.stringify({
                 'status': status.value
             }),
             headers: {
                 "Content-type": "application/json; charset=UTF-8",
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         })
         .then(response => response.json())
         .then(json => {
             if(json.success){
                var displayMessage = document.querySelector('#success');
                var showMessage = document.querySelector('#showMessage');

                $('#showMessage').append(`
                <div class="alert alert-dismissable alert success" style="background: rgb(120, 221, 79);" id="success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>
                        <span id="message"></span>
                    </strong>
                </div>
                `)
                 $('#message').text(json.success);
               
             }
         })
         .catch(error => console.error(error));
     }
</script>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/myhrmodule/Modules/Menu/Resources/views/index.blade.php ENDPATH**/ ?>