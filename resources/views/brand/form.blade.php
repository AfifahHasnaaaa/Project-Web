@extends('template/admin/layout_admin')

@section('konten')

<div style="margin: 15%;">
	<form id="formData" enctype="multipart/form-data" method="POST" action="{{ url('brand') }}">
		@csrf
		<table>
			<tr>
				<td>Kode Brand</td>
				<td>
					<input class="form-control form-user-input" type="text" name="kode_brand" required="">
				</td>
			</tr>
			<tr>
				<td>Nama Brand</td>
				<td>
					<input class="form-control form-user-input" type="text" name="nama_brand"  required="">
				</td>
			</tr>
			<tr>
				<td>Jumlah_Produk</td>
				<td>
					<input class="form-control form-user-input" type="number" name="jumlah_produk" min="0"  required="">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input class="btn btn-primary" type="submit" name="submit" value="Simpan Data">
					<a href="{{ url('brand') }}" class="btn btn-danger">Kembali Ke Daftar Prouk</a>
				</td>
			</tr>
		</table>
	</form>
</div>

@endsection

@section('script_custom')
<script>
    $(document).ready(function(){


        function sendData() {
            var url_post = '{{ url("api/brand/input") }}';

            var dataForm = {};
            var allInput = $(".form-user-input");

            $.each (allInput, function (i, val) {
                dataForm[val['nama_brand']] = val['value'];
            });

            $.ajax(url_post, {
                type: 'POST',
                data: dataForm,
                contentType: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
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


<script type="text/javascript">
	$("html").on("drop", function (e) {
		e.preventDefault();
		e.stopPropagation();
	});

</script>

@endsection
