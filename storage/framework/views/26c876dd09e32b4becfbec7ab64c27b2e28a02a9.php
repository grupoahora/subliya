

<?php $__env->startSection('css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php $__env->stopSection(); ?>

<?php ($login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login')); ?>
<?php ($register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register')); ?>
<?php ($password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset')); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ($login_url = $login_url ? route($login_url) : ''); ?>
    <?php ($register_url = $register_url ? route($register_url) : ''); ?>
    <?php ($password_reset_url = $password_reset_url ? route($password_reset_url) : ''); ?>
<?php else: ?>
    <?php ($login_url = $login_url ? url($login_url) : ''); ?>
    <?php ($register_url = $register_url ? url($register_url) : ''); ?>
    <?php ($password_reset_url = $password_reset_url ? url($password_reset_url) : ''); ?>
<?php endif; ?>

<?php $__env->startSection('auth_header', __('adminlte::adminlte.login_message')); ?>
<?php $__env->startSection('auth_header_dos', __('adminlte::adminlte.login_message_dos')); ?>
<?php $__env->startSection('auth_body'); ?>
    <form action="<?php echo e($login_url); ?>" class="mx-lg-5 mx-0" method="post">
        <?php echo csrf_field(); ?>

        
        <div class="input-group mb-5 mt-4">
            
            <img class="mr-2 my-1" src="svg/email.svg" style="width: 25px; height: 30px; background-color: #0c005200; "
                alt="">

            <input type="email" name="email"
                class="form-control input-form-login me-lg-4  ms-lg-3 mx-1 placeholderinput-subliya <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('adminlte::adminlte.email')); ?>" autofocus>

            

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="input-group mb-5 ">
            
            <img class="mr-2 my-1" src="svg/padlock.svg" style="width: 25px; height: 30px; background-color: #0c005200; "
                alt="">

            <input type="password" name="password"
                class="form-control me-lg-4  ms-lg-3 mx-1 input-form-login placeholderinput-subliya <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="<?php echo e(__('adminlte::adminlte.password')); ?>">

            

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="input-group">
            <div class="col-5 text-start ">
                <div class="icheck-primary" title="<?php echo e(__('adminlte::adminlte.remember_me_hint')); ?>">
                    <input class="inputcheckbox-subliya" type="checkbox" name="remember" id="remember"
                        <?php echo e(old('remember') ? 'checked' : ''); ?>>

                    <label for="remember" class="text-link-subliya ">
                        <?php echo e(__('adminlte::adminlte.remember_me')); ?>

                    </label>
                </div>
            </div>
            
            <?php if($password_reset_url): ?>
                <div class="col-3 text-start fontsubliya">
                    <a href="<?php echo e($password_reset_url); ?>" class=""
                        style="color: #170090; ">
                        <?php echo e(__('adminlte::adminlte.i_forgot_my_password')); ?>

                    </a>
                </div>
                <div class="col-4 text-start fontsubliya px-0">
                    <a href="<?php echo e($register_url); ?>" class="" style="color: #170090; ">
                        <?php echo e(__('adminlte::adminlte.register_a_new_membership')); ?>

                    </a>
                </div>
            <?php endif; ?>



        </div>

   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('auth_footer'); ?>

        <button type=submit
            class=" p-subliya-button-form float-end me-4 ">
            
            <?php echo e(__('adminlte::adminlte.sign_in')); ?>

        </button>
     </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::auth.auth-page', ['auth_type' => 'login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\subliya\vendor\jeroennoten\laravel-adminlte\src/../resources/views/auth/login.blade.php ENDPATH**/ ?>