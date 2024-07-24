@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('keranjang') }}">Keranjang</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div>
    </div>
</div>

    <div class="panel-body" style="margin-top:1%;margin-bottom:1%;margin-left:12%;margin-right:12%;">
        <div class="row">					
            <div class="col-md-12">
                <h4 class="checkout-subtitle">Checkout Here</h4>
                <form class="register-form" role="form" action="{{ url('checkout') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="info-title">Nama</label>
                        <input class="form-control" type="text" name="nama" required="">
                    </div>
                    <div class="form-group">
                        <label class="info-title">Alamat Jalan</label>
                        <textarea type="textarea" class="form-control" name="alamat_jalan" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label class="info-title">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control" required="" onchange="ambil_kota()">
                            <option value="">--Pilih Salah Satu--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="info-title">Kota</label>
                        <select name="kota" id="kota" class="form-control" required="" onchange="ambil_kecamatan()">
                            <option value="">--Pilih Salah Satu--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="info-title">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control " required="">
                            <option value="">--Pilih Salah Satu--</option>
                        </select>
                    </div>
                    <input class="btn-upper btn btn-primary checkout-page-button" type="submit" name="submit" value="Checkout">
                </form>
            </div>	
        </div>			
    </div>

@endsection

@section('script_custom')
<script>
function ambil_prov() {
    var link = '{{ url("api/provinsi") }}';

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
    var link = '{{ url("api/kota/") }}' + '/' + prov[0];

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
    var link = '{{ url("api/kecamatan/") }}' + '/' + kota[0];

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
@endsection
