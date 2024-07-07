<!-- Default box -->
<div class="card">
	<div class="card-header">
		<h3 class="card-title">
            <?php echo $__env->yieldContent('judul'); ?>
        </h3>

		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i>
			</button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i>
			</button>
		</div>
	</div>
	<div class="card-body">
        <?php echo $__env->yieldContent('konten'); ?>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">

	</div>
	<!-- /.card-footer-->
</div>
<!-- /.card -->
<?php /**PATH C:\cart_22.02.0803_Afifah\resources\views/template/page_konten.blade.php ENDPATH**/ ?>