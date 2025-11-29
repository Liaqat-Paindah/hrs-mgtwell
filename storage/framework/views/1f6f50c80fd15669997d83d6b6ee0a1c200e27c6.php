<?php
    use Carbon\Carbon;
?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('sidebar.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-wrapper">

        <div class="content container-fluid">

            
            <?php echo Toastr::message(); ?>

            <!-- Statistics Widget -->
        </div>
        <!-- /Page Content -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HRS\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>