<?php $__env->startSection('judul'); ?>
    Keranjang Belanja
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
<table border="1" id="data-list" class="table">
    <tr>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah Beli</th>
        <th>Subtotal</th>
    </tr>
</table>

<h3 style="text-align: right">Total Belanja : Rp <span id="totalBelanja">0</span> </h3>
<a href="<?php echo e(url('checkout')); ?>" class="btn btn-primary">Checkout Pesanan</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_custom'); ?>
<script>
        function ambil_data() {
            var link = '<?php echo e(url("api/keranjang/all")); ?>';


            $.ajax(link, {
                type: 'GET',
                success : function (data, status, xhr) {
                    resetTable();
                    var objData = JSON.parse(data);
                    var dataTable = '';
                    var total = 0;
                    $.each( objData, function( key, value ) {

                        var subtotal = value.harga*value.jumlah_beli;
                        total = total + subtotal;

                        dataTable += '<tr>';
                        dataTable += '<td>'+(key+1)+'</td>';
                        dataTable += '<td>'+value.nama_produk+'</td>';
                        dataTable += '<td>Rp '+value.harga+'</td>';
                        dataTable += '<td>'+value.jumlah_beli+'</td>';
                        dataTable += '<td>Rp '+subtotal+'</td>';
                        dataTable += '</tr>';
                    });

                    $( "#data-list" ).append( dataTable );
                    $("#totalBelanja").html(total);
                },
                error : function (jqXHR, textStatus, errorMsg) {
                    alert('Error Pengambilan Data : ' + errorMsg);
                }
            })
        }

        ambil_data();

        function resetTable() {
        	$( "#data-list" ).html( "<tr><th>No.</th><th>Nama Produk</th><th>Harga</th><th>Jumlah Beli</th>  <th>Subtotal</th></tr>" );
        }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\22.02.0803\Responsi\cart_22.02.0803_Afifah\resources\views/keranjang/list.blade.php ENDPATH**/ ?>