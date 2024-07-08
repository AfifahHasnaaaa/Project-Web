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
                  <div class="panel-body">
                    <h1>25</h1>
                  </div>
                  <div class="panel-footer">
                    <h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Nama Barang</h5>
                </div>
                <div class="panel-body">
                  <h1>25</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Nama Barang</h5>
                </div>
                <div class="panel-body">
                  <h1>25</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5><i class="fa fa-desktop"></i> Nama Barang</h5>
                </div>
                <div class="panel-body">
                  <h1>25</h1>
                </div>
                <div class="panel-footer">
                  <h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=barang'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                </div>
              </div>
            </div>
        </div>
    

            {{-- <table class="table container">
                <tr>
                    <th style="padding-left: 10px;padding-right:10px;padding-top:5;padding-bottom:5;background-color:yellow;border-radius: 25px;text-align:center;margin:auto;">
                        <div style="padding: 2px; width:100px;">
                            <p style="font-size: 13px">Nama Barang</p>
                            <h1 style="font-size: 35px">150</h1>
                            <p><a href=""style="font-size: 10px">See Details</a></p>
                        </div>
                    </th>

                    <th style="padding-left: 10px;padding-right:10px;padding-top:5;padding-bottom:5;background-color:yellow;border-radius: 25px;text-align:center;">
                        <div class="text-center" style="padding: 2px; width:100px;">
                            <p style="font-size: 13px">Stok Barang</p>
                            <h1 style="font-size: 35px">8765</h1>
                            <p><a href=""style="font-size: 10px">See Details</a></p>
                        </div>
                    </th>

                    <th style="padding-left: 10px;padding-right:10px;padding-top:5;padding-bottom:5;background-color:yellow;border-radius: 25px;text-align:center;">
                        <div class="text-center" style="padding: 2px; width:100px;">
                            <p style="font-size: 13px">Barang Terjual</p>
                            <h1 style="font-size: 35px">5690</h1>
                            <p><a href=""style="font-size: 10px">See Details</a></p>
                        </div>
                    </th>

                    <th style="padding-left: 10px;padding-right:10px;padding-top:5;padding-bottom:5;background-color:yellow;border-radius: 25px;text-align:center;">
                        <div class="text-center" style="padding: 2px; width:100px;">
                            <p style="font-size: 13px">Barang Terkirim</p>
                            <h1 style="font-size: 35px">345</h1>
                            <p><a href=""style="font-size: 10px">See Details</a></p>
                        </div>
                    </th>
                    
                    <th style="padding-left: 10px;padding-right:10px;padding-top:5;padding-bottom:5;background-color:yellow;border-radius: 25px;text-align:center;">
                        <div class="text-center" style="padding: 2px; width:100px;">
                            <p style="font-size: 13px">Brand</p>
                            <h1 style="font-size: 35px">15</h1>
                            <p><a href=""style="font-size: 10px">See Details</a></p>
                        </div>
                    </th>

                    <th style="padding-left: 10px;padding-right:10px;padding-top:5;padding-bottom:5;background-color:yellow;text-align:center;">
                        <div class="text-center" style="padding: 2px; width:100px;text-align:center;">
                            <p style="font-size: 13px;text-align:center;">Review</p>
                            <h1 style="font-size: 35px;text-align:center;">279</h1>
                            <p><a href=""style="font-size: 10px;text-align:center;">See Details</a></p>
                        </div>
                    </th>

                </tr>
            </table> --}}
          {{-- diisi tabel --}}
        </div>
      </div>
    </div>
  </div>

@endsection
