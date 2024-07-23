@extends('template/admin/layout_admin')

@section('konten')

<div style="margin: 15%;">
	<form id="formData" enctype="multipart/form-data" method="POST" action="{{ url('review') }}">
		@csrf
		<table>
			<tr>
				<td>Kode Review</td>
				<td>
					<input class="form-control form-user-input" type="text" name="kode_review" required="">
				</td>
			</tr>
			<tr>
				<td>Nama </td>
				<td>
					<input class="form-control form-user-input" type="text" name="nama"  required="">
				</td>
			</tr>
			<tr>
				<td>Review</td>
				<td>
					<textarea class="form-control form-user-input" name="review" required=""></textarea>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>
					<input class="form-control form-user-input" type="text" name="asal" min="0"  required="">
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>
					<div class="row" id="dropPhoto">
						<div class="col upload-area">
						  <input type="file" class="form-user-input" name="file" id="file">
						  <h2 style="font-size: 10px">Jatuhkan Foto Disini</h2>
						</div>
					</div>
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
</div>

@endsection

@section('script_custom')
<script>
    $(document).ready(function(){

        // $('#formData').on('submit', function (e) {
        //     e.preventDefault();
        //     sendData();
        // })

        function sendData() {
            var url_post = '{{ url("api/review/input") }}';

            var dataForm = {};
            var allInput = $(".form-user-input");

            $.each (allInput, function (i, val) {
                dataForm[val['name']] = val['value'];
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
