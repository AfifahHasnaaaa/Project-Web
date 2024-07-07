<html>

<?php echo $__env->make('template/call_head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="sidebar-mini" style="height: auto;">
	<div class="wrapper">
        <?php echo $__env->make('template/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 1592px;">

            <?php echo $__env->make('template/page_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<!-- Main content -->
		    <section class="content">

                <?php echo $__env->make('template/page_konten', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		    </section>
		    <!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php echo $__env->make('template/call_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

    <?php echo $__env->make('template/call_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('script_custom'); ?>
</body>
</html>
<?php /**PATH E:\22.02.0803\Responsi\cart_22.02.0803_Afifah\resources\views/template/layout.blade.php ENDPATH**/ ?>