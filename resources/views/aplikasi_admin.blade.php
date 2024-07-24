@extends('template/admin/layout_admin')

@section('konten')
  <div>
    <div style="margin-left:15%;margin-right:10%;">
      <form action="{{ url('checkout') }}" method="POST">
          @csrf
          <table>
              <tr>
                  <td>Nama Aplikasi</td>
                  <td>
                      <input class="form-control " type="text" name="nama" required="">
                  </td>
              </tr>
              <tr>
                  <td>Pemilik</td>
                  <td>
                      <textarea class="form-control" name="alamat_jalan" required=""></textarea>
                  </td>
              </tr>
              <tr>
                  <td>Alamat</td>
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

@endsection
