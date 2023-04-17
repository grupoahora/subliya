

<?php ($dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home')); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ($dashboard_url = $dashboard_url ? route($dashboard_url) : ''); ?>
<?php else: ?>
    <?php ($dashboard_url = $dashboard_url ? url($dashboard_url) : ''); ?>
<?php endif; ?>

<?php $__env->startSection('adminlte_css'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('body'); ?>
    <div class="container-fluid  px-0 mx-0">
        <header class="mx-0 px-0 w-100 d-flex align-items-start">
            <div class="position-relative opacity-subliya-15 w-100">
                <div class=" bg-subliya-one"></div>
                <div class=" bg-subliya-two"></div>
                <div class=" bg-subliya-three"></div>
                <div class=" bg-subliya-four"></div>
            </div>
        </header>
        
    </div>
    <main class="container">
            
                <div class="row h-subliya-login text-center">
                    <div class=" col center-subliya-login ">

                        
                        <div class="login-logo">
                            <a href="<?php echo e($dashboard_url); ?>">
                                <img src="<?php echo e(asset(config('adminlte.logo_img'))); ?>">
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-7 center-subliya-login " style="width: 721px;">
                        <div
                            class=" bg-subliya-transparent-login <?php echo e(config('adminlte.classes_auth_card', 'card-outline card-primary')); ?>">

                            
                            <?php if (! empty(trim($__env->yieldContent('auth_header')))): ?>
                                <div
                                    class="card-header bg-subliya-transparent-login <?php echo e(config('adminlte.classes_auth_header', '')); ?>">
                                    <div class="d-flex ">
                                        <div class="my-auto">

                                            <img class="mr-2 my-1 " src="svg/circle-user-regular.svg"
                                                style="width: 30px; height: 30px; background-color: #0c005200; " alt="">
                                        </div>
                                        <h2 class=" my-auto me-1 ms-1 font-subliya-login text-bold text-center ">
                                            <?php echo $__env->yieldContent('auth_header'); ?>
                                        </h2>
                                        <h5 class=" ms-1 my-auto fonttwo-subliya-login text-center ">

                                            <?php echo $__env->yieldContent('auth_header_dos'); ?>
                                        </h5>
                                    </div>
                                </div>
                            <?php endif; ?>

                            
                            <div
                                class="card-body <?php echo e($auth_type ?? 'login'); ?>-card-body rounded-subluya-bodyform <?php echo e(config('adminlte.classes_auth_body', '')); ?>">
                                <?php echo $__env->yieldContent('auth_body'); ?>
                            </div>

                            
                            <?php if (! empty(trim($__env->yieldContent('auth_footer')))): ?>
                                <div class="card-footer <?php echo e(config('adminlte.classes_auth_footer', '')); ?>">
                                    <?php echo $__env->yieldContent('auth_footer'); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            
        </main>
        <footer class="">

            <div class=" mx-0 px-0 w-100 d-flex align-items-end">
                <div class="position-relative opacity-subliya-15 w-100">
                    <div class=" bg-subliya-four-b"></div>
                    <div class=" bg-subliya-three-b"></div>
                    <div class=" bg-subliya-two-b"></div>
                    <img class="bg-subliya-one-b" src="img/azul.png" alt="">
                    
                    
                    
                </div>
            </div>
        </footer>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::mastersubliya', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\subliya\vendor\jeroennoten\laravel-adminlte\src/../resources/views/auth/auth-page.blade.php ENDPATH**/ ?>