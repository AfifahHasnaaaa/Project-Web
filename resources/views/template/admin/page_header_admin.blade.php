<header class="header-style-1"> 
	<div class="top-bar animate-dropdown">
	  <div class="container">
		<div class="header-top-inner">
		  <div class="cnt-account">
			<ul class="list-unstyled">
			  <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
			  
			  <li><a href="{{ url('logout') }}"><i class="icon fa fa-lock"></i>Logout</a></li>
			</ul>
		  </div>

		</div>

	  </div>

	</div>
	
	<div class="main-header">
	  <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
			
			<div class="logo"> <a href="#"> <img src="{{ asset('assets/images/Logooo.png') }}" alt="logo"> </a> </div></div>
		  
		  <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
			<div class="search-area">
			  <form>
				<div class="control-group">
				  <input class="search-field" placeholder="Search here..." type="text" name="cari" id="cari">
				  <a class="search-button" href="#" value="Cari Produk" class="btn btn-primary" type="submit" id=""></a> </div>
			  </form>
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
				  <li class="active dropdown yamm-fw"> <a href="{{ url('produk') }}" >Home</a> </li>
				  <li class="active dropdown yamm-fw"> <a href="{{ url('laporan') }}">Laporan</a> </li>
				  <li class="dropdown yamm-fw"> <a href="{{ url('aplikasi') }}">Aplikasi</a> </li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </header>
