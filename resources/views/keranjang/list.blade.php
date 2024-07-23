@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('homeuser') }}">Home</a></li>
				<li class='active'>Keranjang</li>
			</ul>
		</div>
    </div>
</div>
<div style="margin-left: 15%;margin-right:15%;margin-top:1%;margin-bottom:1%;">
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
    <a href="{{ url('checkout') }}" class="btn btn-primary">Checkout Pesanan</a>
</div>

@endsection

@section('script_custom')
<script>
        function ambil_data() {
            var link = '{{ url("api/keranjang/all") }}';


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
@endsection
