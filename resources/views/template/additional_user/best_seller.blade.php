<div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Best seller</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        @foreach ($best as $item)
        <div class="item">
          <div class="products best-product">
              <div class="product">
                <div class="product-micro">
                  <div class="row product-micro-row">
                    <div class="col col-xs-5">
                      <div class="product-image">
                        <div class="image"> <a href="#"> <img src="assets/images/products/{{ $item->foto_produk }}" alt=""> </a> </div>
                      </div>
                    </div>
                    <div class="col2 col-xs-7">
                      <div class="product-info">
                        <h3 class="name"><a href="#">{{ $item->nama_produk }}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> <span class="price">Rp{{ $item->harga }}</span> </div>                      
                      </div>
                    </div>
                  </div>
                </div>              
              </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>