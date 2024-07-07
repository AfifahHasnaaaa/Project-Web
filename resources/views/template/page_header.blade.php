<header class="header-style-1"> 
	<div class="top-bar animate-dropdown">
	  <div class="container">
		<div class="header-top-inner">
		  <div class="cnt-account">
			<ul class="list-unstyled">
			  <li><a href="{{ url('login') }}"><i class="icon fa fa-lock"></i>Login</a></li>
			  <li><a href="register.php"><i class="icon fa fa-lock"></i>Daftar</a></li>
			</ul>
		  </div>
		</div>

	  </div>

	</div>
	
	<div class="main-header">
	  <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
			
			<div class="logo"> <a href="home.blade.php"> <img src="assets/images/logooo.png" alt="logo"> </a> </div></div>
		  
		  <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
			<div class="search-area">
			  <form>
				<div class="control-group">
				  <ul class="categories-filter animate-dropdown">
					<li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
					  <ul class="dropdown-menu" role="menu" >
						<li class="menu-header">Hodiee</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">Pria Dewasa</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">Wanita Dewasa</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">Remaja Pria</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">Dewasa Wanita</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">Anak-anak</a></li>
					  </ul>
					</li>
				  </ul>
				  <input class="search-field" placeholder="Search here..." type="text" name="cari" id="cari">
				  <a class="search-button" href="#" value="Cari Produk" class="btn btn-primary" type="submit" id=""></a> </div>
			  </form>
			</div>
			</div>
		  <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
			<div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			  <div class="items-cart-inner">
				<div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
				<div class="basket-item-count"><span class="count">2</span></div>
				<div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">$</span><span class="value">600.00</span> </span> </div>
			  </div>
			  </a>
			  <ul class="dropdown-menu">
				<li>
				  <div class="cart-item product-summary">
					<div class="row">
					  <div class="col-xs-4">
						<div class="image"> <a href="detail.html"><img src="assets/images/cart.jpg" alt=""></a> </div>
					  </div>
					  <div class="col-xs-7">
						<h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
						<div class="price">$600.00</div>
					  </div>
					  <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
					</div>
				  </div>

				  <div class="clearfix"></div>
				  <hr>
				  <div class="clearfix cart-total">
					<div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
					<div class="clearfix"></div>
					<a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
				</li>
			  </ul>
			</div>
			</div>
		</div>
	  </div>
	</div>
	
	<div class="header-nav animate-dropdown">
	  <div class="container">
		<div class="yamm navbar navbar-default" role="navigation">
		  <div class="navbar-header">
		 <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
		 <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		  </div>
		  <div class="nav-bg-class">
			<div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
			  <div class="nav-outer">
				<ul class="nav navbar-nav">
				  <li class="active dropdown yamm-fw"> <a href="home.blade.php" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
				  <li class="dropdown yamm-fw"> <a href="{{ url('produk/form') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Produk</a> </li>
				  <li class="dropdown yamm-fw"> <a href="blog.blade.php" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Input Produk</a> </li>
				  <li class="active dropdown yamm-fw"> <a href="{{ url('transaksi') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Transaksi</a> </li>
				  <li class="dropdown yamm-fw"> <a href="{{ url('laporan') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Laporan</a> </li>
				  <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
				</ul>
				{{-- <div class="clearfix"></div> --}}
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </header>
