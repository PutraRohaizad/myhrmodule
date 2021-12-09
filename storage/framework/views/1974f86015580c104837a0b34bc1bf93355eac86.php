<?php $__env->startSection('content'); ?>

<div class="content"> 
   
    <label class="col-form-label col-lg-16"><h1> Module 1- Log In/ Log Out </h1></label>
   <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <table class="table table-report -mt-2" id="table">
        <thead>
            <tr>
                
                <th>Test Case</th>
                <th>Test Step</th>
                <th>Expected Result</th>
                <th>Pass</th>
                <th>Fail</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <form action="<?php echo e(route('module1.store')); ?>"  method="post">
                <?php echo csrf_field(); ?>
                    <?php $__currentLoopData = $m1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testquestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $testcase = explode (",", $testquestion->testcase);
                    $teststep = explode (",", $testquestion->teststep);
                    $expectedresult = explode (",", $testquestion->expectedresult);

                    ?>
                        
                    <tr>
                    
                    <input type="text" class="form-control" id="module" value="<?php echo e($testquestion->module); ?>"  name="module['<?php echo e($key); ?>']" hidden >
                    <input type="text" class="form-control" id="testId" value="<?php echo e($testquestion->testId); ?>"  name="testId['<?php echo e($key); ?>']" hidden  >
                    
                    <td><textarea type="text" class="form-control textarea" id="testcase" name="testcase['<?php echo e($key); ?>']"readonly><?php echo implode("\n",$testcase);?></textarea></td>
                    <td><textarea type="text" class="form-control textarea" id="teststep" name="teststep['<?php echo e($key); ?>']"readonly><?php echo implode("\n",$teststep);?></textarea></td>
                    <td><textarea type="text" class="form-control textarea" id="expectedresult" name="expectedresult['<?php echo e($key); ?>']"readonly><?php echo implode("\n",$expectedresult);?></textarea></td>
                    <td>
                        <div class="form-check">
                            
                            <input type="checkbox" id="status" value="Pass"  name="status['<?php echo e($key); ?>']" > Pass
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            
                            <input type="checkbox" id="status" value="Fail"  name="status['<?php echo e($key); ?>']" > Fail
                        </div>
                    </td>
                    <td> <input type="text" class="form-control" name="remarks['<?php echo e($key); ?>']"/></td>
                    </tr>                  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  
        </tbody>
    </table>   
    <div class="col-span-12">
        <button type="submit" class="btn btn-primary float-right" style="margin-right:15px!important">Submit</button>
    </div>
</form>

    
    
</div>

<?php $__env->stopSection(); ?>  


<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/cara_module/resources/views/lpktn-admin/admintest.blade.php ENDPATH**/ ?>