@extends('template/admin/layout_admin')

@section('konten')
<div style="margin-left:15%;margin-right:10%">
    <form style="padding: 4%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:2%;margin-top:2%;">
        <div class="row">
            <div class="col-6">
                <label>Nama Aplikasi</label>
                <input class="form-control" type="text" name="nama_aplikasi" id="nama_aplikasi" value="HoddiesZone">
            </div>
            <div class="col-6">
                <label>Pemilik</label>
                <input class="form-control" type="text" name="pemilik" id="pemilik" value="Yudhistira">
            </div>
            <div class="col-6">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" id="alamat" value="Kalimantan Selatan">
            </div>
            <div class="col">
                <input type="submit" value="Simpan" class="btn btn-primary" style="margin-top:33px" id="" href="{{ url('aplikasi') }}">
            </div>
        </div>
    </form>

</div>
@endsection

@section('script_custom')
<script type="text/javascript">

	var tabel = $("#data-list").({
		"processing": true,
		"serverSide": true,
		"ajax": {
			url: url,
			data: function (d) {
                d.nama_aplikasi = $("#nama_apikasi").val();
                d.pemilik = $("#pemilik").val();
                d.alamat = $("#alamat").val();
       		}
		},

	});

    $("form").on('submit', function(e){
        e.preventDefault();
        tabel.ajax.reload();
    })
</script>
@endsection
