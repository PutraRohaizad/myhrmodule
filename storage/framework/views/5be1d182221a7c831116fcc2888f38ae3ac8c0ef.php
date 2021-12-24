<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">






    	<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(env('APP_URL')); ?>/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/bootstrap.min.css"> 
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/line-awesome.min.css">
		
        	<!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/bootstrap-datetimepicker.min.css">
		
		<!-- Calendar CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/fullcalendar.min.css">

        <!-- Tagsinput CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/dataTables.bootstrap4.min.css">
        
		<!-- Chart CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/plugins/morris/morris.css">

		<!-- Summernote CSS -->
		<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?>/plugins/summernote/dist/summernote-bs4.css">
		
		<!-- Main CSS -->

		
        <link rel="stylesheet" id="stylesheet" href="<?php echo e(env('APP_URL')); ?>/css/style.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /Users/putrarohaizad/Desktop/Project/myhrmodule/resources/views/layouts/app.blade.php ENDPATH**/ ?>