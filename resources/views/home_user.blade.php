@extends('template/user/layout_user')

@section('konten_user')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="home_user.php">Home</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row"> 
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        @include('template/additional/kategori')
        @include('template/additional/special_offer')
        @include('template/additional/product_tag')
        @include('template/additional/testimoni')
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        @include('template/additional/banner1')
        @include('template/additional/new_product')
        @include('template/additional/featured_produk')
        @include('template/additional/banner2')
        @include('template/additional/best_seller')
      </div>
    </div>
    @include('template/additional/brand')
  </div>
</div>
@endsection
