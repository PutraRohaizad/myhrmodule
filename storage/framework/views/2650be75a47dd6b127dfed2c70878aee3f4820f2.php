<?php $__env->startSection('content'); ?>

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title text-center">User Acceptance Testing </h3>
                        <p class="float-left"><a href="http://lpktn.demo.cara.com.my/" target="_blank"><i class="la la-ship mr-1"></i>Go To LPKtn</a></p>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0 text-center">Choose Your Type</h4>
                        </div>
                        <div class="card-body">

 
                            <label class="col-form-label col-lg-12 text-center">Type of Choice</label>
                            <div class="col-lg-12 text-center">
								<a href="<?php echo e(Route('testmodule')); ?>" class="btn btn-primary mb-3" type="button">Admin</a>
								<a href="<?php echo e(Route('testmodule')); ?>" class="btn btn-primary mb-3" type="button">User</a>
                                
							
                                
                                

                            </div>
                        </div>
                    </div>


                </div>
            </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/cara_module/resources/views/layout/main.blade.php ENDPATH**/ ?>