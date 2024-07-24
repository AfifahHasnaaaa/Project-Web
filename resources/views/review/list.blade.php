@extends('template/admin/layout_admin')

@section('konten')
    <link rel="stylesheet" type="text/css" href="{{ url('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}">

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('produk') }}">Home</a></li>
                    <li class='active'>Data Review</li>
                </ul>
            </div>
        </div>
    </div>
    <div style="margin-left:15%;margin-right:10%;margin-bottom:2%;">
        <form
            style="padding: 4%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:2%;margin-top:2%;">
            <div class="row">
                <div class="col-md-6">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" id="nama">
                </div>
                <div class="col">
                    <input type="submit" value="Cari" class="btn btn-primary" style="margin-top:33px" id="">
                </div>
            </div>
        </form>

        <table border="1" id="data-list" class="table"
            style="padding: 2%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:5%;margin-top:2%;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Review</th>
                    <th>Asal</th>
                    <th>Foto</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection

@section('script_custom')
    <script type="text/javascript" src="{{ url('DataTables/datatables.min.js') }}"></script>

    <script type="text/javascript">
        var url = '{{ url('api/review/dataTable') }}';

        var tabel = $("#data-list").DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: url,
                data: function(d) {
                    d.nama = $("#nama").val();
                }
            },

        });

        $("form").on('submit', function(e) {
            e.preventDefault();
            tabel.ajax.reload();
        })
    </script>
@endsection
