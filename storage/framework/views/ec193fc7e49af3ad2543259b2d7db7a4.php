<?php $__env->startSection('judul'); ?>
    Form Konfirmasi Transaksi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
<form action="<?php echo e(url('checkout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <table>
		<tr>
			<td>Nama</td>
			<td>
				<input class="form-control form-user-input" type="text" name="nama" required="">
			</td>
		</tr>
		<tr>
			<td>Alamat Jalan</td>
			<td>
				<textarea class="form-control" name="alamat_jalan" required=""></textarea>
			</td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>
                <select name="provinsi" id="provinsi" class="form-control" required="" onchange="ambil_kota()">
                    <option value="">--Pilih Salah Satu--</option>
                </select>
			</td>
		</tr>
		<tr>
			<td>Kota</td>
			<td>
                <select name="kota" id="kota" class="form-control" required="" onchange="ambil_kecamatan()">
                    <option value="">--Pilih Salah Satu--</option>
                </select>
			</td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>
				<select name="kecamatan" id="kecamatan" class="form-control" required="">
                    <option value="">--Pilih Salah Satu--</option>
                </select>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="btn btn-primary" type="submit" name="submit" value="Tambahkan ke Transaksi">
				<a href="<?php echo e(url('keranjang')); ?>" class="btn btn-danger">Kembali Ke Keranjang</a>
			</td>
		</tr>
	</table>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_custom'); ?>
<script>
function ambil_prov() {
    var link = '<?php echo e(url("api/provinsi")); ?>';

    $.ajax(link, {
        type: 'GET',
        success : function (data, status, xhr) {
            $('#provinsi').html(data);
        },
        error : function (jqXHR, textStatus, errorMsg) {
            alert('Error Pengambilan Data Provinsi : ' + errorMsg);
        }
    })
}

ambil_prov();

function ambil_kota() {
    var prov = $('#provinsi').val().split("||");
    var link = '<?php echo e(url("api/kota/")); ?>' + '/' + prov[0];

    $.ajax(link, {
        type: 'GET',
        success : function (data, status, xhr) {
            $('#kota').html(data);
        },
        error : function (jqXHR, textStatus, errorMsg) {
            alert('Error Pengambilan Data Kota : ' + errorMsg);
        }
    })
}

function ambil_kecamatan() {
    var kota = $('#kota').val().split("||");
    var link = '<?php echo e(url("api/kecamatan/")); ?>' + '/' + kota[0];

    $.ajax(link, {
        type: 'GET',
        success : function (data, status, xhr) {
            $('#kecamatan').html(data);

        },
        error : function (jqXHR, textStatus, errorMsg) {
            alert('Error Pengambilan Data Kecamatan : ' + errorMsg);
        }
    })
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\22.02.0803\Responsi\cart_22.02.0803_Afifah\resources\views/transaksi/checkout.blade.php ENDPATH**/ ?>