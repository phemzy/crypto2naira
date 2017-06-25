<?php $__env->startSection('content'); ?>
    <div class="push-30-t push-50 animated fadeIn">
        <!-- Login Title -->
        <div class="text-center">
            <img src="img/logo1.png" alt="">
            <p class="text-muted push-15-t">Don't have an account? <a href="register">Register</a></p>
        </div>
        <!-- END Login Title -->
        
        <!-- Login Form -->
        <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <login token="<?php echo e(csrf_token()); ?>"></login>
        <!-- END Login Form -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>