@extends('template/admin/layout_admin')

@section('konten')
<link rel="stylesheet" type="text/css" href="{{ url('Chartist/chartist.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ url('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}">

<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="breadcrumb">
      <div class="container">
        <div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">
            <li><a href="#">Home</a></li>
            <li class='active'>Admin</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
            <div class="side-menu animate-dropdown outer-bottom-xs">
                <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>MENU</div>
                <nav class="yamm megamenu-horizontal">
                  <ul class="nav">
                    <li class="dropdown menu-item"> <a href="{{ url('tabelproduk') }}" ><i class="icon fa fa-user" aria-hidden="true"></i>Produk</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="{{ url('transaksi') }}" ><i class="icon fa fa-user" aria-hidden="true"></i>Transaksi</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="{{ url('user') }}" ><i class="icon fa fa-user" aria-hidden="true"></i>User</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="{{ url('brand') }}" ><i class="icon fa fa-user" aria-hidden="true"></i>Brand</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="{{ url('review') }}" ><i class="icon fa fa-user" aria-hidden="true"></i>Review</a>
                    </li>
                </nav>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 

          <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h5>Nama Barang</h5>
                  </div>
                  <div class="panel-body" style="text-align: center">
                    <h1 style="font-size:30px;">{{ $produk}}</h1>
                  </div>
                  <div class="panel-footer">
                    <h4 style="font-size:12px;font-weight:500;"><a href="{{ url('tabelproduk') }}">Tabel Barang</a></h4>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5>Penjualan</h5>
                </div>
                <div class="panel-body" style="text-align: center;c">
                  <h1 style="font-size:27px;">Rp {{ $transaksi}}</h1>
                </div>
                <div class="panel-footer">
                  <h5 style="font-size:12px;font-weight:500;"><a href="{{ url('transaksi') }}">Tabel Transaksi </a></h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5>Brand</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1 style="font-size:30px;">{{ $brand}}</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="{{ url('brand') }}">Tabel Brand</a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5>Review</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1 style="font-size:30px;">{{ $review}}</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="{{ url('review') }}">Tabel Review</a></h4>
                </div>
              </div>
            </div>
        </div>

        <div style="margin-top:2%;">
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
      
          <div id="chartHours" class="ct-chart" style="padding: 2%;border-style: double;border-radius: 5px;background-color:white;margin-bottom:2%;"></div>

        </div>

        </div>
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
