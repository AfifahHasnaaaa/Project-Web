@extends('template/admin/layout_admin')

@section('konten')
<link rel="stylesheet" type="text/css" href="{{ url('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}">

<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{ url('produk') }}">Home</a></li>
          <li class='active'>Data Transaksi</li>
        </ul>
      </div>
    </div>
  </div>
<div style="margin-left:15%;margin-right:10%;margin-bottom:2%;">
    <form style="padding: 4%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:2%;margin-top:2%;">
        <div class="row">
            <div class="col-md-6">
                <label>Tanggal Awal</label>
                <input class="form-control" type="date" name="tgl_awal" id="tgl_awal">
            </div>
            <div class="col-md-6">
                <label>Tanggal Akhir</label>
                <input class="form-control" type="date" name="tgl_akhir" id="tgl_akhir">
            </div>
            <div class="col-md-6">
                <label>Provinsi</label>
                <input class="form-control" type="text" name="prov" id="prov">
            </div>
            <div class="col-md-6">
                <label>Min. Nominal</label>
                <input class="form-control" type="number" name="min_total" id="min_total">
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
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nominal</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('script_custom')
<script type="text/javascript" src="{{ url('DataTables/datatables.min.js') }}"></script>

<script type="text/javascript">
	var url = '{{ url("api/transaksi/dataTable") }}';

	var tabel = $("#data-list").DataTable({
		"processing": true,
		"serverSide": true,
		"ajax": {
			url: url,
			data: function (d) {
                d.tgl_awal = $("#tgl_awal").val();
                d.tgl_akhir = $("#tgl_akhir").val();
                d.prov = $("#prov").val();
                d.min_total = $("#min_total").val();
       		}
		},

	});

    $("form").on('submit', function(e){
        e.preventDefault();
        tabel.ajax.reload();
    })
</script>
@endsection
