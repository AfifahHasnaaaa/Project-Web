@extends('template/admin/layout_admin')

@section('konten')
<link rel="stylesheet" type="text/css" href="{{ url('Chartist/chartist.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}">

<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{ url('produk') }}">Home</a></li>
          <li class='active'>Laporan</li>
        </ul>
      </div>
    </div>
  </div>
<div style="margin-left: 15%;margin-right:10%;">
    <form >
        <div class="row">
            <div class="col-md-6">
                <label>Tanggal Awal</label>
                <input class="form-control" type="date" name="tgl_awal" id="tgl_awal" onchange="cekLaporan()">
            </div>
            <div class="col-md-6">
                <label>Tanggal Akhir</label>
                <input class="form-control" type="date" name="tgl_akhir" id="tgl_akhir" onchange="cekLaporan()">
            </div>
        </div>
    </form>

    <div id="chartHours" class="ct-chart" style="padding: 2%;border-style: double;border-radius: 5px;background-color:white; margin-bottom:2%;"></div>

    <table border="1" id="data-list" class="table" style="padding: 1%;border-style: double;border-radius: 5px;background-color:white;margin:2%">
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

    <div class="footer" style="padding: 2%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:2%;margin-top:2%;">
        <div class="legend">
            <i class="fa fa-circle text-info"></i> Total Nominal Transaksi : Rp <span id="total_data"></span>
        </div>
        <hr>
        <div class="stats">
            <i class="fa fa-history"></i> Per Tanggal <span id="tgl_data"></span>
        </div>
    </div>
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
                }
            },

        });
    </script>

    <script src="{{ url('Chartist/chartist.min.js') }}"></script>
    <script type="text/javascript">
        var dataSales = {
            labels: [],
            series: []
        };

        function initChartist() {
            var optionsSales = {
                lineSmooth: false,
                low: 0,
                showArea: true,
                height: "250px",
                axisX: {
                    showGrid: false,
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 3
                }),
                showLine: true,
                showPoint: false,
            };
            var responsiveSales = [
                ['screen and (max-width: 640px)', {
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];
            Chartist.Line('#chartHours', dataSales, optionsSales, responsiveSales);
        }

        function cekLaporan() {
            var link = '{{ url("api/transaksi/laporan") }}' + '?tanggal_awal=' + $('#tgl_awal').val()+ '&tanggal_akhir=' + $('#tgl_akhir').val();
            $.ajax(link, {
                type: 'GET',
                success: function(data, status, xhr) {
                    var objData = JSON.parse(data);
                    dataSales.labels = objData['label'];
                    dataSales.series = objData['data'];
                    $("#total_data").text(objData['total']);
                    $("#tgl_data").text(objData['tgl_update']);
                    initChartist();
                    tabel.ajax.reload();
                },
                error: function(jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                    $('title').html('Error');
                }
            })
        }
        cekLaporan();
        interval_global = setInterval(function(){ cekLaporan(); }, 5000);
</script>
@endsection

