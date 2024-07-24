@extends('template/admin/layout_admin')

@section('konten')
<form id="formData">
    <input type="hidden" class="form-user-input" name="id_review" value="{{ $data_view->id_review }}">
	<table>
		<tr>
			<td>Kode review</td>
			<td>
				<input class="form-control form-user-input" type="text" name="kode_review" required="" value="{{ $data_view->kode_review }}">
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>
				<input class="form-control form-user-input" type="text" name="nama"  required="" value="{{ $data_view->nama}}">
			</td>
		</tr>
		<tr>
			<td>Review</td>
			<td>
				<textarea class="form-control form-user-input" name="review" required="">{{ $data_view->review }}</textarea>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>
				<input class="form-control form-user-input" type="number" name="asal" min="0"  required="" value="{{ $data_view->asal }}">
			</td>
		</tr>
		<tr>
			<td>Foto </td>
			<td>
				<input class="form-control form-user-input" type="file" name="file" id="file">
				<h2 style="font-size: 10px">Jatuhkan Foto Disini</h2>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="btn btn-primary" type="submit" name="submit" value="Simpan Data">
				<a href="{{ url('review') }}" class="btn btn-danger">Kembali Ke Daftar Prouk</a>
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
            var url_post = '{{ url("api/review/input") }}';

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
	$("html").on("drop", function (e) {
		e.preventDefault();
		e.stopPropagation();
	});

	$("html").on("dragover", function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(".upload-area > h2").text("Arahkan Kesini");
	});

	$(".upload-area").on("dragenter", function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(".upload-area > h2").text("Jatuhkan File !!");
	});

	$(".upload-area").on("dragover", function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(".upload-area > h2").text("Jatuhkan File !!");
	});

	$(".upload-area").on("drop", function (e) {
		e.preventDefault();
		e.stopPropagation();

		var file = e.originalEvent.dataTransfer.files;
		console.log(file);

		$("#file")[0].files = file;
		$(".upload-area > h2").text("File yang dipilih : " + file[0].name);
	});

	$(".upload-area > h2").on("click", function (e) {
		$("#file").click();
	});

	$("#file").on("change", function (e) {
		var file = $("#file")[0].files[0];
		console.log(file);

		$(".upload-area > h2").text("File yang dipilih : " + file.name);
	});
</script>
@endsection
