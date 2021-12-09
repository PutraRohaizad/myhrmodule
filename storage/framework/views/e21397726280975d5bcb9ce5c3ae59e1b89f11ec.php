<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo e(config('dz.name')); ?> | <?php echo $__env->yieldContent('title', $page_title ?? ''); ?></title>

    <meta name="description" content="<?php echo $__env->yieldContent('page_description', $page_description ?? ''); ?>" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/WarCouncil2.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/stylan.css')); ?>">



    <?php if(!empty(config('dz.public.pagelevel.css.'.$action))): ?>
    <?php $__currentLoopData = config('dz.public.pagelevel.css.'.$action); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link href="<?php echo e(asset($style)); ?>" rel="stylesheet" type="text/css" />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
    <?php if(!empty(config('dz.public.global.css'))): ?>
    <?php $__currentLoopData = config('dz.public.global.css'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link href="<?php echo e(asset($style)); ?>" rel="stylesheet" type="text/css" />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php echo url('/index');; ?>" class="brand-logo">
                <?php if(!empty($logo)): ?>
                <img class="logo-abbr" src="<?php echo e(asset('images/WarCouncil2.png')); ?>" alt="">
                <?php else: ?>
                <img class="logo-abbr" src="<?php echo e(asset('images/WarCouncil2.png')); ?>" alt="">
                <?php endif; ?>
                <?php if(!empty($logoText)): ?>
                <img class="logo-compact" src="<?php echo e(asset('images/WarCouncil2.png')); ?>" alt="">
                <img class="brand-title ml-5" src="<?php echo e(asset('images/WarCouncilText2.png')); ?>" alt="">
                <?php else: ?>
                <img class="logo-compact" src="<?php echo e(asset('images/WarCouncil2.png')); ?>" alt="">
                <img class="brand-title ml-5" src="<?php echo e(asset('images/WarCouncilText2.png')); ?>" alt="">
                <?php endif; ?>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <?php echo $__env->make('elements.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php echo $__env->make('elements.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        <?php echo $__env->make('elements.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php echo $__env->make('elements.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/cara_module/resources/views/layout/default.blade.php ENDPATH**/ ?>