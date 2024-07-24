@extends('template/user/layout_user')

@section('konten_user')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{ url('homeuser') }}">User</a></li>
          <li class='active'>Page Home</li>
        </ul>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row"> 
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        @include('template.additional_user.kategori')
        @include('template.additional_user.special_offer')
        @include('template/additional_user/product_tag')
        @include('template/additional_user/testimoni')
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        @include('template/additional_user/banner1')
        @include('template/additional_user/new_product')
        @include('template/additional_user/featured_produk')
        @include('template/additional_user/banner2')
        @include('template.additional_user.best_seller')
      </div>

    </div>
    @include('template/additional_user/brand')
  </div>
</div>
@endsection
@section('script_custom')
  
@endsection
