<?php $__env->startSection('body'); ?>

    <?php echo $__env->yieldContent('content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TechToTravel\techtotravel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>