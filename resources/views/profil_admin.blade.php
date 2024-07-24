@extends('template/admin/layout_admin')

@section('konten')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="breadcrumb">
      <div class="container">
        <div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">
            <li><a href="#">Profil</a></li>
            <li class='active'>Admin</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
                <div style="padding: 15%;">
                    <h1 style="text-align: center;font-size:35px;">Admin</h1>
                    <img src="assets/images/products/p20.jpg" alt="" width="150%" style="border-radius: 50px;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
                <div >
                    <form action="{{ url('checkout') }}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input class="form-control " type="text" name="nama" required="">
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <textarea class="form-control" name="alamat_jalan" required=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <textarea class="form-control" name="alamat_jalan" required=""></textarea>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
