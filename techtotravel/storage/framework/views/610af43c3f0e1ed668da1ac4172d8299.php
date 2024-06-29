<?php $__env->startSection('header-resources'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    

    
    
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->yieldContent('main_content'); ?>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-script'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TechToTravel\techtotravel\resources\views/dashboard.blade.php ENDPATH**/ ?>