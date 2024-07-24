@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('homeuser') }}">Home</a></li>
				<li class='active'>Produk</li>
			</ul>
		</div>
    </div>
</div>
<div class="body-content outer-top-xs">
	<div class='container'>
	  	<div class='row'>
			<div class='col-md-3 sidebar'> 
		  	@include('template/additional_user/kategori')
		  		<div class="sidebar-module-container">
					<div class="sidebar-filter"> 
						<div class="sidebar-widget wow fadeInUp">
							<h3 class="section-title">shop by</h3> 
						</div>
						<div class="sidebar-widget wow fadeInUp">
							<div class="widget-header">
								<h4 class="widget-title">Price Slider</h4>
							</div>
							<div class="sidebar-widget-body m-t-10">
								<div class="price-range-holder"> <span class="min-max"> <span class="pull-left">Rp40.000</span> <span class="pull-right">Rp.200.000</span> </span>
									<input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
									<input type="text" class="price-slider" value="" >
								</div>
							</div>
						</div>
					<div class="sidebar-widget wow fadeInUp">
						<div class="widget-header">
							<h4 class="widget-title">Colors</h4>
						</div>
						<div class="sidebar-widget-body">
							<ul class="list">
								<li><a href="#">Red</a></li>
								<li><a href="#">Blue</a></li>
								<li><a href="#">Yellow</a></li>
							</ul>
						</div>
					</div>
					@include('template/additional_user/product_tag')
					@include('template/additional_user/testimoni')
				</div>
		  </div>
		</div>

		<div class='col-md-9'> 
			<div class="clearfix filters-container m-t-10">
				<div class="row">
				  <div class="col col-sm-6 col-md-2">
					<div class="filter-tabs">
					  <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
						<li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
						<li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="search-result-container ">
				<div id="myTabContent" class="tab-content category-list">
				  <div class="tab-pane active " id="grid-container">
					<div class="category-product">
					  <div class="row">
						@foreach ($produk as $item)
						<div class="col-sm-6 col-md-4 wow fadeInUp">
							<div class="products">
							  <div class="product">
								<div class="product-image">
								  <div class="image"> <a href="#"><img  src="assets/images/products/{{ $item->foto_produk }}" alt=""></a> </div>
								  <div class="tag new"><span>new</span></div>
								</div>
								<div class="product-info text-left">
								  <h3 class="name"><a href="#">{{ $item->nama_produk }}</a></h3>
								  <div class="rating rateit-small"></div>
								  <div class="description"></div>
								  <div class="product-price"> <span class="price">Rp {{ $item->harga }}</span></div>
								</div>
								<div class="cart clearfix animate-effect">
								  <div class="action">
									<ul class="list-unstyled">
									  <li class="lnk"> <a class="add-to-cart" href="{{ url('detail/'. $item->id_produk) }}" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						@endforeach
					  </div>
					</div> 
				  </div>
				  
				  <div class="tab-pane "  id="list-container">
					<div class="category-product">
						@foreach ($produk as $item)
						<div class="category-product-inner wow fadeInUp">
							<div class="products">
							  <div class="product-list product">
								<div class="row product-list-row">
								  <div class="col col-sm-4 col-lg-4">
									<div class="product-image">
									  <div class="image"> <img src="assets/images/products/{{ $item->foto_produk }}" alt=""> </div>
									</div>
									<!-- /.product-image --> 
								  </div>
								  <!-- /.col -->
								  <div class="col col-sm-8 col-lg-8">
									<div class="product-info">
									  <h3 class="name"><a href="detail.html">{{ $item->nama_produk }}</a></h3>
									  <div class="rating rateit-small"></div>
									  <div class="product-price"> <span class="price"> Rp {{ $item->harga }}</span></div>
									  <!-- /.product-price -->
									  <div class="description m-t-10">{{ $item->deskripsi }}</div>
									  <div class="cart clearfix animate-effect">
										<div class="action">
										  <ul class="list-unstyled">
											{{-- <li class="add-cart-button btn-group">
											  <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
											  <button class="btn btn-primary cart-btn" type="button"><a href="{{ url('keranjang') }}" onclick="add_to_cart({{ $product->id_produk }})">Add to cart</a></button>
											</li> --}}
											<li class="lnk"> <a class="add-to-cart" href="{{ url('detail/'. $item->id_produk) }}" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
										  </ul>
										</div>
									  </div>
									</div>
								  </div>
								</div>
								<div class="tag new"><span>new</span></div>
							  </div>
							</div>
						</div>
						@endforeach
					</div>
				  </div>
				</div>
				<hr>
				</div>
			  </div>
	</div>
</div>
@endsection
@section('script_custom')
@endsection