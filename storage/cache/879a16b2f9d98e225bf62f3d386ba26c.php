

<?php $__env->startSection('title', 'Home page'); ?>

<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($user->id); ?> <br>
        <?php echo e($user->fullname); ?> <br>
        <?php echo e($user->email); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\purephp\views/pages/home.blade.php ENDPATH**/ ?>