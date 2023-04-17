<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <?php echo $__env->yieldContent('meta_tags'); ?>

    
    <title>
        <?php echo $__env->yieldContent('title_prefix', config('adminlte.title_prefix', '')); ?>
        <?php echo $__env->yieldContent('title', config('adminlte.title', 'AdminLTE 3')); ?>
        <?php echo $__env->yieldContent('title_postfix', config('adminlte.title_postfix', '')); ?>
    </title>

    
    <?php echo $__env->yieldContent('adminlte_css_pre'); ?>

    
    <?php if(!config('adminlte.enabled_laravel_mix')): ?>
        <link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">

        
    <?php else: ?>
    <?php endif; ?>

    
    <?php if(config('adminlte.livewire')): ?>
        <?php if(app()->version() >= 7): ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php else: ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php endif; ?>
    <?php endif; ?>

    
    <?php echo $__env->yieldContent('adminlte_css'); ?>

    
    <?php if(config('adminlte.use_ico_only')): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('favicons/favicon.ico')); ?>" />
    <?php elseif(config('adminlte.use_full_favicon')): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('favicons/favicon.ico')); ?>" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('favicons/apple-icon-57x57.png')); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('favicons/apple-icon-60x60.png')); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('favicons/apple-icon-72x72.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('favicons/apple-icon-76x76.png')); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('favicons/apple-icon-114x114.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('favicons/apple-icon-120x120.png')); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('favicons/apple-icon-144x144.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('favicons/apple-icon-152x152.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('favicons/apple-icon-180x180.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicons/favicon-16x16.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicons/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('favicons/favicon-96x96.png')); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('favicons/android-icon-192x192.png')); ?>">
        <link rel="manifest" crossorigin="use-credentials" href="<?php echo e(asset('favicons/manifest.json')); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo e(asset('favicon/ms-icon-144x144.png')); ?>">
    <?php endif; ?>
    <style>
        body {
            height: 100vh !important;
            max-height: 100vh !important;
        }

        @font-face {
            font-family: 'Varela Rounded';
            src: url('fonts/VarelaRound-Regular.ttf');
        }

        @font-face {
            font-family: 'UbuntuMono';
            src: url('fonts/UbuntuMono-Regular.ttf');
        }

        @font-face {
            font-family: 'RobotoMono';
            src: url('fonts/RobotoMono-Regular.ttf');
        }
    </style>
</head>

<body>

    
    <?php echo $__env->yieldContent('body'); ?>

    
    <?php if(!config('adminlte.enabled_laravel_mix')): ?>
        
    <?php else: ?>
        < <?php endif; ?>

            
            <?php if(config('adminlte.livewire')): ?>
                <?php if(app()->version() >= 7): ?>
                    <?php echo \Livewire\Livewire::scripts(); ?>

                <?php else: ?>
                    <?php echo \Livewire\Livewire::scripts(); ?>

                <?php endif; ?>
            <?php endif; ?>

            
            <?php echo $__env->yieldContent('adminlte_js'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\subliya\vendor\jeroennoten\laravel-adminlte\src/../resources/views/mastersubliya.blade.php ENDPATH**/ ?>