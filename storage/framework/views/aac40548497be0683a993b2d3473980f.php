<html>

<?php echo $__env->make('template/call_head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="assets/css/logindaftar.php">

<body class="sidebar-mini">
	<section class="content">

        <?php echo $__env->make('template/login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </section>
 
    <?php echo $__env->yieldContent('script_custom'); ?>
</body>
</html>
<?php /**PATH C:\DATAKU\Hodieku\resources\views/template/login.blade.php ENDPATH**/ ?>