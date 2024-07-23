@extends('template/admin/layout_admin')

@section('konten_admin')
<link rel="stylesheet" type="text/css" href="{{ url('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}">

<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{ url('produk') }}">Home</a></li>
          <li class='active'>Data Brand</li>
        </ul>
      </div>
    </div>
  </div>
<div style="margin-left:15%;margin-right:15%">
    <form style="padding: 2%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:2%;margin-top:2%;">
        <div class="row">
            <div class="col-md-6">
                <label>Nama Brand</label>
                <input class="form-control" type="text" name="nama_brand" id="nama_brand">
            </div>
            <div class="col">
                <input type="submit" value="Cari" class="btn btn-primary" style="margin-top:33px" id="">
            </div>
        </div>
    </form>
    
    <table border="1" id="data-list" class="table" style="padding: 2%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:5%;margin-top:2%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Brand</th>
                <th>Nama Brand</th>
                <th>Jumlah Produk</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('script_custom')

<script>

    function ambil_data(kode = '') {
        if (kode == '') {
            var link = '{{ url("api/produk/all") }}';
        } else {
            var link = '{{ url("api/produk/kode/") }}' + '/' + kode;
        }

    }

    // ambil_data();

    $("form").on('submit', function(e){
        e.preventDefault();
        var kode = $("input[name=cari]").val();
        // ambil_data(kode);
    })

</script>

<script type="text/javascript" src="{{ url('DataTables/datatables.min.js') }}"></script>

<script type="text/javascript">
	var url = '{{ url("api/brand/dataTable") }}';

	var tabel = $("#data-list").DataTable({
		"processing": true,
		"serverSide": true,
		"ajax": {
			url: url,
			data: function (d) {
                d.kode_brand = $("#kode_brand").val();
                d.nama_brand = $("#nama_brand").val();
                d.jumlah_produk = $("#jumlah_produk").val();
       		}
		},

	});

    $("form").on('submit', function(e){
        e.preventDefault();
        tabel.ajax.reload();
    })
</script>
@endsection

