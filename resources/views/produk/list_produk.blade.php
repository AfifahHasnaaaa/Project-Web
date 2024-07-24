@extends('template/admin/layout_admin')

@section('konten')
<link rel="stylesheet" type="text/css" href="{{ url('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}">

<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{ url('produk') }}">Home</a></li>
          <li class='active'>Data Produk</li>
        </ul>
      </div>
    </div>
  </div>

<div class="body-content outer-top-xs" id="top-banner-and-menu" style="margin-bottom:2%;">
    <div style="margin-left: 10%;margin-right: 10%;">
        <form style="padding: 5%;border-style: double;border-radius: 5px;margin-bottom:5%;margin-top:2%;">
            <div class="row">
                <div class="col">
                    <label>Masukkan Batas Maksimal Stok</label>
                    <input class="form-control" type="text" name="cari" id="cari">
                </div>
                <div class="col">
                    <input type="submit" value="Cari Produk" class="btn btn-primary" style="margin-top:33px" id="">
                    <button class="btn btn-primary" style="margin-top:33px"><a href={{ url('produk/form') }}
                        style="color: white">Tambah Produk</a></button>
                </div>
                
            </div>
        </form>
        
        <table border="1" id="data-list" class="table" style="padding: 2%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:3%;margin-top:5px;">
            <thead border="1">
                <tr>
                    <th border="1">No.</th>
                    <th border="1">Kode</th>
                    <th border="1">Nama</th>
                    <th border="1">Stok</th>
                    <th border="1">Harga</th>
                    <th border="1">Deskripsi</th>
                    <th border="1">Gambar</th>
                    <th border="1">OPSI</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('script_custom')
<script>
        function hapusData(idProduk) {
            var url_post = '{{ url("api/produk/hapus") }}';

            $.ajax(url_post, {
                type: 'DELETE',
                data: {'id' : idProduk},
                success: function (data, status, xhr) {
                    var data_str = JSON.parse(data);

                    alert(data_str['pesan']);
                    ambil_data();
                },
                error: function (jqXHR, textStatus, errorMessage) {
                    alert('Error : ' + jqXHR.responseJSON.message);
                }
            })
        }

        function add_to_cart(idProduk) {
            var url_post = '{{ url("api/keranjang") }}';

            $.ajax(url_post, {
                type: 'POST',
                data: {'id_produk' : idProduk},
                success: function (data, status, xhr) {
                    var data_str = JSON.parse(data);

                    alert(data_str['pesan']);
                },
                error: function (jqXHR, textStatus, errorMessage) {
                    alert('Error : ' + jqXHR.responseJSON.message);
                }
            })
        }

        function ambil_data(kode = '') {
            if (kode == '') {
                var link = '{{ url("api/produk/all") }}';
            } else {
                var link = '{{ url("api/produk/kode/") }}' + '/' + kode;
            }


            $.ajax(link, {
                type: 'GET',
                success : function (data, status, xhr) {
                    resetTable();
                    var objData = JSON.parse(data);
                    var dataTable = '';
                    $.each( objData, function( key, value ) {
                        var url_edit = '{{ url("produk/form") }}' + '/' + value.id_produk;
                        var eventHapus = 'onclick="hapusData('+value.id_produk+')"';

                        dataTable += '<tr>';
                        dataTable += '<td>'+(key+1)+'</td>';
                        dataTable += '<td>'+value.kode_produk+'</td>';
                        dataTable += '<td>'+value.nama_produk+'</td>';
                        dataTable += '<td>'+value.stok+'</td>';
                        dataTable += '<td>Rp '+value.harga+'</td>';
                        dataTable += '<td>'+value.deskripsi+'</td>';
                        dataTable += '<td><img src="'+value.foto_produk+'"></td>';
                        dataTable += '<td><a href="'+url_edit+'" class="btn btn-info">Ubah</a> <a href="#" '+eventHapus+' class="btn btn-danger">Hapus</a></td>';
                        dataTable += '</tr>';
                    });

                    $( "#data-list" ).append( dataTable );
                },
                error : function (jqXHR, textStatus, errorMsg) {
                    alert('Error Pengambilan Data : ' + errorMsg);
                }
            })
        }

        // ambil_data();

        $("form").on('submit', function(e){
            e.preventDefault();
            var kode = $("input[name=cari]").val();
            // ambil_data(kode);
        })

        function resetTable() {
        	$( "#data-list" ).html( "<thead> <tr> <th>No.</th> <th>Kode</th> <th>Nama</th> <th>Stok</th> <th>Harga</th> <th>Deskripsi</th> <th>Gambar</th> <th>OPSI</th> </tr> </thead>" );
        }
</script>


<script type="text/javascript" src="{{ url('DataTables/datatables.min.js') }}"></script>

<script type="text/javascript">
	var url = '{{ url("api/produk/dataTable") }}';

	var tabel = $("#data-list").DataTable({
		"processing": true,
		"serverSide": true,
		"ajax": {
			url: url,
			data: function (d) {
                d.stok = $("#cari").val();
       		}
		},

	});

    $("form").on('submit', function(e){
        e.preventDefault();
        tabel.ajax.reload();
    })
</script>
@endsection