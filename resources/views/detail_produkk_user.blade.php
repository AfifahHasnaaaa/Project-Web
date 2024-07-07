@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home_user.php">Home</a></li>
				<li class='active'>Detail Produk</li>
			</ul>
		</div>
    </div>
</div>

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">
					@include('template/additional/special_offer')
					@include('template/additional/product_tag')
        			@include('template/additional/testimoni')
				</div>
			</div><!-- /.sidebar -->
			<div class='col-md-9'>
            <div class="detail-block">
				<div class="row  wow fadeInUp">
                	<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    					<div class="product-item-holder size-big single-product-gallery small-gallery">
							<div id="owl-single-product">
								<div class="single-product-gallery-item" id="slide1">
									<a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
										<img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p8.jpg" />
									</a>
								</div>
							<div class="single-product-gallery-item" id="slide2">
								<a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p9.jpg">
									<img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p9.jpg" />
								</a>
							</div>
							<div class="single-product-gallery-item" id="slide3">
								<a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p10.jpg">
									<img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p10.jpg" />
								</a>
							</div>
							<div class="single-product-gallery-item" id="slide4">
								<a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p11.jpg">
									<img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p11.jpg" />
								</a>
							</div>
        				</div>
					<div class="single-product-gallery-thumbs gallery-thumbs">
						<div id="owl-single-product-thumbnails">
							<div class="item">
								<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
									<img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p17.jpg" />
								</a>
							</div>
							<div class="item">
								<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
									<img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p18.jpg"/>
								</a>
							</div>
							<div class="item">
								<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
									<img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p19.jpg" />
								</a>
							</div>
							<div class="item">
								<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
									<img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p20.jpg" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>  			
			<div class='col-sm-6 col-md-7 product-info-block'>
				<div class="product-info">
					<h1 class="name">Floral Print Buttoned</h1>
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
										<span class="label">Availability :</span>
									</div>	
								</div>
								<div class="col-sm-9">
									<div class="stock-box">
										<span class="value">In Stock</span>
									</div>	
								</div>
							</div>	
						</div>

						<div class="description-container m-t-20">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</div>

						<div class="price-container info-container m-t-20">
							<div class="row">
								<div class="col-sm-6">
									<div class="price-box">
										<span class="price">$800.00</span>
										<span class="price-strike">$900.00</span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="favorite-button m-t-10">
										<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											<i class="fa fa-heart"></i>
										</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
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
										<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Add to Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
				@include('template/additional/dekripsi')
				@include('template/additional/featured_produk')
			</div>
			<div class="clearfix"></div>
		</div>
		@include('template/additional/brand')
	</div>
</div>
@endsection