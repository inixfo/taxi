<?php $__env->startComponent('mail::message'); ?>
    <h1><?php echo new \Illuminate\Support\EncodedHtmlString(__('Verify Email')); ?></h1>
    <?php echo new \Illuminate\Support\EncodedHtmlString(__('OTP')); ?>

    <h2><?php echo new \Illuminate\Support\EncodedHtmlString($token); ?></h2>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/taxido/Taxido_laravel/Modules/Taxido/resources/views/emails/verify-email.blade.php ENDPATH**/ ?>