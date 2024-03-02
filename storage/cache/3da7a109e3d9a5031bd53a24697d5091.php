

<?php $__env->startSection('title', 'Dashboard page'); ?>

<?php $__env->startSection('content'); ?>
    <p>Hello <?php echo e($name); ?> <?php echo e($id); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\purephp\views/pages/dashboard.blade.php ENDPATH**/ ?>