<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-topbar="light" data-sidebar-image="none">

    <head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | Coastal Zone Mining Association</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Transforming Small-Scale Mining" name="description" />
    <meta content="Prince Ben-Smith" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>">
        <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>

    <?php echo $__env->yieldContent('body'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\laragon\www\coastalapp\resources\views/layouts/master-without-nav.blade.php ENDPATH**/ ?>