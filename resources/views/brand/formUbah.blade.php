@extends('template/admin/layout_admin')

@section('konten')
<form id="formData">
    <input type="hidden" class="form-user-input" name="id_brand" value="{{ $brand_view->id_brand }}">
	<table>
		<tr>
			<td>Kode Brand</td>
			<td>
				<input class="form-control form-user-input" type="text" name="kode_brand" required="" value="{{ $brand_view->kode_brand }}">
			</td>
		</tr>
		<tr>
			<td>Nama Brand</td>
			<td>
				<input class="form-control form-user-input" type="text" name="nama_brand"  required="" value="{{ $brand_view->nama_brand }}">
			</td>
		</tr>
		<tr>
			<td>Jumlah_Produk</td>
			<td>
				<input class="form-control form-user-input" type="number" name="jumlah_produk" min="0"  required="" value="{{ $brand_view->stok }}">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="btn btn-primary" type="submit" name="submit" value="Simpan Data">
				<a href="{{ url('brand') }}" class="btn btn-danger">Kembali Ke Data Brand</a>
			</td>
		</tr>
	</table>
</form>
@endsection

@section('script_custom')
<script>
    $(document).ready(function(){

        $('#formData').on('submit', function (e) {
            e.preventDefault();
            sendData();
        })

        function sendData() {
            var url_post = '{{ url("api/brand/input") }}';

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
@endsection
