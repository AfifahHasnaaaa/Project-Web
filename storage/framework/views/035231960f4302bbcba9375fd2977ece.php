

<?php $__env->startSection('konten'); ?>
  <div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="breadcrumb">
      <div class="container">
        <div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">
            <li><a href="#">Home</a></li>
            <li class='active'>Data</li>
          </ul>
        </div>
        </div>
    </div>
    <div class="container">
      <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
            <div class="side-menu animate-dropdown outer-bottom-xs">
                <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>MENU</div>
                <nav class="yamm megamenu-horizontal">
                  <ul class="nav">
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Produk</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Penjualan</a>
                    </li>  
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Pengiriman</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Return</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data User</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Pengguna</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Diskon</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Review</a>
                    </li>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Whishlist</a>
                    </li> 
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-user" aria-hidden="true"></i>Data Cart</a>
                    </li> 
                </nav>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
          
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/admin/layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATAKU\Hodieku\resources\views/data_admin.blade.php ENDPATH**/ ?>