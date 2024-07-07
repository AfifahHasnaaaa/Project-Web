<?php $__env->startSection('judul'); ?>
    Form Ubah Produk
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
<form id="formData">
    <input type="hidden" class="form-user-input" name="id_produk" value="<?php echo e($data_view->id_produk); ?>">
	<table>
		<tr>
			<td>Kode Produk</td>
			<td>
				<input class="form-control form-user-input" type="text" name="kode_produk" required="" value="<?php echo e($data_view->kode_produk); ?>">
			</td>
		</tr>
		<tr>
			<td>Nama Produk</td>
			<td>
				<input class="form-control form-user-input" type="text" name="nama_produk"  required="" value="<?php echo e($data_view->nama_produk); ?>">
			</td>
		</tr>
		<tr>
			<td>Deskripsi Produk</td>
			<td>
				<textarea class="form-control form-user-input" name="deskripsi" required=""><?php echo e($data_view->deskripsi); ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>
				<input class="form-control form-user-input" type="number" name="stok_produk" min="0"  required="" value="<?php echo e($data_view->stok); ?>">
			</td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td>
				<input class="form-control form-user-input" type="number" name="harga_jual" min="0" max="100000"  required="" value="<?php echo e($data_view->harga); ?>">
			</td>
		</tr>
		<tr>
			<td>Foto Produk</td>
			<td>
				<input class="form-control form-user-input" type="file" name="foto_produk">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="btn btn-primary" type="submit" name="submit" value="Simpan Data">
				<a href="<?php echo e(url('produk')); ?>" class="btn btn-danger">Kembali Ke Daftar Prouk</a>
			</td>
		</tr>
	</table>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_custom'); ?>
<script>
    $(document).ready(function(){

        $('#formData').on('submit', function (e) {
            e.preventDefault();
            sendData();
        })

        function sendData() {
            var url_post = '<?php echo e(url("api/produk/input")); ?>';

            var dataForm = {};
            var allInput = $(".form-user-input");

            $.each (allInput, function (i, val) {
                dataForm[val['name']] = val['value'];
            });

            $.ajax(url_post, {
                type: 'PUT',
                data: dataForm,
                success: function (data, status, xhr) {
                    var data_str = JSON.parse(data);

                    alert(data_str['pesan']);
                },
                error: function (jqXHR, textStatus, errorMessage) {
                    alert('Error : ' + jqXHR.responseJSON.message);
                }
            })
        }
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\22.02.0803\Responsi\cart_22.02.0803_Afifah\resources\views/produk/formUbah.blade.php ENDPATH**/ ?>