@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Produk</li>
			</ul>
		</div>
	</div>
</div>
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row'>
			<div class='col-md-3 sidebar'>
				@include('template/additional/kategori')
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
								<div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
									<input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
									<input type="text" class="price-slider" value="">
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
									<li><a href="#">Pink</a></li>
									<li><a href="#">Brown</a></li>
									<li><a href="#">Teal</a></li>
								</ul>
							</div>
						</div>
						@include('template/additional/product_tag')
						@include('template/additional/testimoni')
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
						<div class="col col-sm-12 col-md-6">
							<div class="col col-sm-3 col-md-6 no-padding">
								<div class="lbl-cnt"> <span class="lbl">Sort by</span>
									<div class="fld inline">
										<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
											<button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
											<ul role="menu" class="dropdown-menu">
												<li role="presentation"><a href="#">position</a></li>
												<li role="presentation"><a href="#">Price:Lowest first</a></li>
												<li role="presentation"><a href="#">Price:HIghest first</a></li>
												<li role="presentation"><a href="#">Product Name:A to Z</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-sm-3 col-md-6 no-padding">
								<div class="lbl-cnt"> <span class="lbl">Show</span>
									<div class="fld inline">
										<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
											<button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
											<ul role="menu" class="dropdown-menu">
												<li role="presentation"><a href="#">1</a></li>
												<li role="presentation"><a href="#">2</a></li>
												<li role="presentation"><a href="#">3</a></li>
												<li role="presentation"><a href="#">4</a></li>
												<li role="presentation"><a href="#">5</a></li>
												<li role="presentation"><a href="#">6</a></li>
												<li role="presentation"><a href="#">7</a></li>
												<li role="presentation"><a href="#">8</a></li>
												<li role="presentation"><a href="#">9</a></li>
												<li role="presentation"><a href="#">10</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-sm-6 col-md-4 text-right">
							<div class="pagination-container">
								<ul class="list-inline list-unstyled">
									<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
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
									<div class="col-sm-6 col-md-4 wow fadeInUp">
										<div class="products">
											<div class="product">
												<div class="product-image">
													<div class="image">
														<a href="detail.html"><img src="assets/images/products/p5.jpg" alt=""></a>
													</div>
													<div class="tag new"><span>new</span></div>
												</div>
												<div class="product-info text-left">
													<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
													<div class="rating rateit-small"></div>
													<div class="description"></div>
													<div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
												</div>
												<div class="cart clearfix animate-effect">
													<div class="action">
														<ul class="list-unstyled">
															<li class="add-cart-button btn-group">
																<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
																	<i class="fa fa-shopping-cart"></i>
																</button>
																<button class="btn btn-primary cart-btn" type="button">
																	Add to cart
																</button>
															</li>
															<li class="lnk wishlist">
																<a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
															</li>
															<li class="lnk">
																<a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6 col-md-4 wow fadeInUp">
										<div class="products">
											<div class="product">
												<div class="product-image">
													<div class="image"> <a href="detail.html">
															<img src="assets/images/products/p7.jpg" alt=""></a>
													</div>
													<div class="tag sale"><span>sale</span></div>
												</div>
												<div class="product-info text-left">
													<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
													<div class="rating rateit-small"></div>
													<div class="description"></div>
													<div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
												</div>
												<div class="cart clearfix animate-effect">
													<div class="action">
														<ul class="list-unstyled">
															<li class="add-cart-button btn-group">
																<button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
																<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
															</li>
															<li class="lnk wishlist">
																<a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
															</li>
															<li class="lnk">
																<a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6 col-md-4 wow fadeInUp">
										<div class="products">
											<div class="product">
												<div class="product-image">
													<div class="image"> <a href="detail.html">
															<img src="assets/images/products/p8.jpg" alt=""></a>
													</div>
													<div class="tag new"><span>new</span></div>
												</div>
												<div class="product-info text-left">
													<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
													<div class="rating rateit-small"></div>
													<div class="description"></div>
													<div class="product-price"> <span class="price"> $450.99 </span>
														<span class="price-before-discount">$ 800</span>
													</div>
												</div>
												<div class="cart clearfix animate-effect">
													<div class="action">
														<ul class="list-unstyled">
															<li class="add-cart-button btn-group">
																<button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i></button>
																<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
															</li>
															<li class="lnk wishlist">
																<a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
															</li>
															<li class="lnk">
																<a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane " id="list-container">
							<div class="category-product">
								<div class="category-product-inner wow fadeInUp">
									<div class="products">
										<div class="product-list product">
											<div class="row product-list-row">
												<div class="col col-sm-4 col-lg-4">
													<div class="product-image">
														<div class="image">
															<img src="assets/images/products/p3.jpg" alt="">
														</div>
													</div>
												</div>
												<div class="col col-sm-8 col-lg-8">
													<div class="product-info">
														<h3 class="name">
															<a href="detail.html">Floral Print Buttoned</a>
														</h3>
														<div class="rating rateit-small"></div>
														<div class="product-price">
															<span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span>
														</div>
														<div class="description m-t-10">
															Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.
														</div>
														<div class="cart clearfix animate-effect">
															<div class="action">
																<ul class="list-unstyled">
																	<li class="add-cart-button btn-group">
																		<button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
																		<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																	</li>
																	<li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
																	<li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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

								<div class="category-product-inner wow fadeInUp">
									<div class="products">
										<div class="product-list product">
											<div class="row product-list-row">
												<div class="col col-sm-4 col-lg-4">
													<div class="product-image">
														<div class="image">
															<img src="assets/images/products/p4.jpg" alt="">
														</div>
													</div>
												</div>
												<div class="col col-sm-8 col-lg-8">
													<div class="product-info">
														<h3 class="name">
															<a href="detail.html">Floral Print Buttoned</a>
														</h3>
														<div class="rating rateit-small"></div>
														<div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
														<div class="description m-t-10">
															Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.
														</div>
														<div class="cart clearfix animate-effect">
															<div class="action">
																<ul class="list-unstyled">
																	<li class="add-cart-button btn-group">
																		<button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
																		<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																	</li>
																	<li class="lnk wishlist">
																		<a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
																	</li>
																	<li class="lnk">
																		<a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tag sale">
												<span>sale</span>
											</div>
										</div>
									</div>
								</div>
								<div class="category-product-inner wow fadeInUp">
									<div class="products">
										<div class="product-list product">
											<div class="row product-list-row">
												<div class="col col-sm-4 col-lg-4">
													<div class="product-image">
														<div class="image"> <img src="assets/images/products/p6.jpg" alt=""> </div>
													</div>
												</div>
												<div class="col col-sm-8 col-lg-8">
													<div class="product-info">
														<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
														<div class="rating rateit-small"></div>
														<div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
														<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
														<div class="cart clearfix animate-effect">
															<div class="action">
																<ul class="list-unstyled">
																	<li class="add-cart-button btn-group">
																		<button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
																		<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																	</li>
																	<li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
																	<li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tag hot"><span>hot</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix filters-container">
						<div class="text-right">
							<div class="pagination-container">
								<ul class="list-inline list-unstyled">
									<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@include('template/additional/banner2')
				@include('template/additional/best_seller')
				@include('template/additional/featured_produk')
			</div>
		</div>
		@include('template/additional/brand')
	</div>
</div>
@endsection