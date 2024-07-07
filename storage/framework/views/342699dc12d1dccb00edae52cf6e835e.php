<html>

<?php echo $__env->make('template/call_head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="sidebar-mini" style="height: auto;">
	<div class="wrapper">
		<div class="content-wrapper">

            <?php echo $__env->make('template/admin/page_header_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		    <section class="content">

                <?php echo $__env->make('template/admin/page_konten_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		    </section>
		</div>
		<?php echo $__env->make('template/admin/call_footer_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

    <?php echo $__env->make('template/admin/call_js_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('script_custom'); ?>
</body>
</html>
<?php /**PATH C:\DATAKU\Hodieku\resources\views/template/admin/layout_admin.blade.php ENDPATH**/ ?>