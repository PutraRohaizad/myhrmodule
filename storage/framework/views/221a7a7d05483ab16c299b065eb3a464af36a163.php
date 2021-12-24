<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

  <?php echo $__env->make('layout.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

  <div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
      <?php echo $__env->yieldContent('content'); ?>
      
    </div>
  </div>
  <?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/myhrmodule/resources/views/layout/mainlayout.blade.php ENDPATH**/ ?>