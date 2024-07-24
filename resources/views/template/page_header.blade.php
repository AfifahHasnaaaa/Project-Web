<header class="header-style-1"> 
	<div class="top-bar animate-dropdown">
	  <div class="container">
		<div class="header-top-inner">
		  <div class="cnt-account">
			<ul class="list-unstyled">
			  <li><a href="{{ url('login') }}"><i class="icon fa fa-lock"></i>Login</a></li>
			  <li><a href="#"><i class="icon fa fa-lock"></i>Daftar</a></li>
			</ul>
		  </div>
		</div>

	  </div>

	</div>
	
	<div class="main-header">
	  <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
			
			<div class="logo"> <a href="#"> <img src="assets/images/logooo.png" alt="logo"> </a> </div></div>
		  
		  <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
			<div class="search-area">
			  <form>
				<div class="control-group">
				  <ul class="categories-filter animate-dropdown">
					<li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="#">Categories <b class="caret"></b></a>
					  <ul class="dropdown-menu" role="menu" >
						<li class="menu-header">Hodiee</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('login') }}">Pria Dewasa</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('login') }}">Wanita Dewasa</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('login') }}">Remaja Pria</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('login') }}">Dewasa Wanita</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('login') }}">Anak-anak</a></li>
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
				<div class="basket-item-count"><span class="count">0</span></div>
				<div class="total-price-basket"> <span class="total-price"> <span class="sign">Rp</span><span class="value">Total</span> </span> </div>
			  </div>
			  </a>
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
				  <li class="active dropdown yamm-fw"> <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
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
