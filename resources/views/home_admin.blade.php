@extends('template/admin/layout_admin')

@section('konten')
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
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Nama Barang</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Stok Barang</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Barang Terjual</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Pengiriman Barang</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Brand</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Review</a>
                    </li>
                </nav>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 

          <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h5><i class="fa fa-desktop"></i> Nama Barang</h5>
                  </div>
                  <div class="panel-body" style="text-align: center">
                    <h1>25</h1>
                  </div>
                  <div class="panel-footer">
                    <h4 style="font-size:12px;font-weight:500;"><a href="#">Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Stok Barang</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1>7235</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="#">Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Barang Terjual</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1>5609</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="#">Tabel Penjualan<i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Pengiriman Barang</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1>25</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="#">Tabel Pengiriman<i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Brand</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1>6</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="#">Tabel Brand <i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i>  Review</h5>
                </div>
                <div class="panel-body" style="text-align: center">
                  <h1>796</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:12px;font-weight:500;"><a href="#">Tabel Review <i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
        </div>

          {{-- diisi tabel --}}
        </div>
      </div>
    </div>
</div>

@endsection