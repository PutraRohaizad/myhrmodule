<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

  <?php echo $__env->make('layout.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class=" mt-6">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hrms_v2/resources/views/layout/mainlayout.blade.php ENDPATH**/ ?>