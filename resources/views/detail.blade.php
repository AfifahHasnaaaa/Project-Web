@extends('template/user/layout_user')

@section('konten_user')
@if(session('error'))
  <div>{{ session('error') }}</div>
@endif
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('shop') }}">Produk</a></li>
				<li class='active'>Detail Produk</li>
			</ul>
		</div>
    </div>
</div>
<div class='container'>
  <div class='row single-product'>
    <div class='col-md-3 sidebar'>
      <div class="sidebar-module-container">
        @include('template/additional_user/kategori')
        @include('template/additional_user/testimoni')     
      </div>
    </div>
    <div class='col-md-9' >
      <div class="detail-block">
      <div class="row  wow fadeInUp">
        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
          <div class="product-item-holder size-big single-product-gallery small-gallery">
            <div id="owl-single-product">
              <div class="single-product-gallery-item" id="slide1">
                  <a data-lightbox="image-1" data-title="Gallery" href="#">
                      <img class="img-responsive" alt="" src="{{ asset('assets/images/products/' . $product->foto_produk) }}">
                  </a>
              </div>
            </div>
            <div class="single-product-gallery-thumbs gallery-thumbs">
                <div id="owl-single-product-thumbnails">
                    <div class="item">
                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                            <img class="img-responsive" width="85" alt="" src="{{ asset('assets/images/products/' . $product->foto_produk) }}" >
                        </a>
                    </div>
                    <div class="item">
                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                            <img class="img-responsive" width="85" alt="" src="{{ asset('assets/images/products/' . $product->foto_produk) }}" >
                        </a>
                    </div>
                    <div class="item">
                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                            <img class="img-responsive" width="85" alt="" src="{{ asset('assets/images/products/' . $product->foto_produk) }}" >
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>       			
        <div class='col-sm-6 col-md-7 product-info-block'>
          <div class="product-info">
            <h1 class="name">{{ $product->nama_produk }}</h1>
            <div class="rating-reviews m-t-20">
              <div class="row">
                <div class="col-sm-3">
                  <div class="rating rateit-small"></div>
                </div>
                <div class="col-sm-8">
                  <div class="reviews">
                    <a href="#" class="lnk">(13 Reviews)</a>
                  </div>
                </div>
              </div>		
            </div>
            <div class="stock-container info-container m-t-10">
              <div class="row">
                <div class="col-sm-2">
                  <div class="stock-box">
                    <span class="label">Tersedia : {{ $product->stok }}</span>
                  </div>	
                </div>
              </div>	
            </div>
            <div class="description-container m-t-20">
              {{ $product->deskripsi }}
            </div>
            <div class="price-container info-container m-t-20">
              <div class="row">
                <div class="col-sm-6">
                  <div class="price-box">
                    <span class="price">Rp {{ $product->harga }}</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="favorite-button m-t-10">
                    {{-- <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                        <i class="fa fa-heart"></i>
                    </a>
                    <a class="btn btn-primary" title="Add to Compare" href="#">
                       <i class="fa fa-signal"></i> --}}
                    {{-- </a> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="quantity-container info-container">
              <div class="row">
                <div class="col-sm-2">
                  <span class="label">Qty :</span>
                </div>
                <div class="col-sm-2">
                  <div class="cart-quantity">
                    <div class="quant-input">
                      <div class="arrows">
                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                      </div>
                      <input type="text" value="1">
                    </div>
                  </div>
                </div>
                <div class="col-sm-7">
                  <a href="{{ url('keranjang') }}" onclick="add_to_cart({{ $product->id_produk }})" class="btn btn-primary add-to-cart" ><i class="fa fa-shopping-cart inner-right-vs"></i> Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      
      <div class="product-tabs inner-bottom-xs  wow fadeInUp">
        <div class="row">
          <div class="col-sm-3">
            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
              <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
              <li><a data-toggle="tab" href="#review">REVIEW</a></li>
            </ul>
          </div>
          <div class="col-sm-9">
            <div class="tab-content">
              <div id="description" class="tab-pane in active">
                <div class="product-tab">
                  <p class="text">{{ $product->deskripsi }}</p>
                </div>	
              </div>

              <div id="review" class="tab-pane">
                <div class="product-tab">        
                  <div class="product-reviews">
                    <h4 class="title">Customer Reviews</h4>
                    <div class="reviews">
                      <div class="review">
                        <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                        <div class="text">"Tulis review anda disini."</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-add-review">
                    <h4 class="title">Write your own review</h4>
                    <div class="review-table">
                      <div class="table-responsive">
                        <table class="table">	
                          <thead>
                            <tr>
                              <th class="cell-label">&nbsp;</th>
                              <th>1 star</th>
                              <th>2 stars</th>
                              <th>3 stars</th>
                              <th>4 stars</th>
                              <th>5 stars</th>
                            </tr>
                          </thead>	
                          <tbody>
                            <tr>
                              <td class="cell-label">Quality</td>
                              <td><input type="radio" name="quality" class="radio" value="1"></td>
                              <td><input type="radio" name="quality" class="radio" value="2"></td>
                              <td><input type="radio" name="quality" class="radio" value="3"></td>
                              <td><input type="radio" name="quality" class="radio" value="4"></td>
                              <td><input type="radio" name="quality" class="radio" value="5"></td>
                            </tr>
                            <tr>
                              <td class="cell-label">Price</td>
                              <td><input type="radio" name="quality" class="radio" value="1"></td>
                              <td><input type="radio" name="quality" class="radio" value="2"></td>
                              <td><input type="radio" name="quality" class="radio" value="3"></td>
                              <td><input type="radio" name="quality" class="radio" value="4"></td>
                              <td><input type="radio" name="quality" class="radio" value="5"></td>
                            </tr>
                            <tr>
                              <td class="cell-label">Value</td>
                              <td><input type="radio" name="quality" class="radio" value="1"></td>
                              <td><input type="radio" name="quality" class="radio" value="2"></td>
                              <td><input type="radio" name="quality" class="radio" value="3"></td>
                              <td><input type="radio" name="quality" class="radio" value="4"></td>
                              <td><input type="radio" name="quality" class="radio" value="5"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    <div class="review-form">
                      <div class="form-container">
                        <form role="form" class="cnt-form">
                          
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                              </div>
                            </div>
                          </div>
      
                          <div class="action text-right">
                            <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>								
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>

@endsection
@section('script_custom')
    <script>
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

</script>
@endsection
