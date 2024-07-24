<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
  <div class="more-info-tab clearfix ">
    <h3 class="new-product-title pull-left">New Products</h3>
    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
      <li class="active"><a data-transition-type="backSlide" href="all" data-toggle="tab">All</a></li>
      <li><a data-transition-type="backSlide" href="#anak" data-toggle="tab">Anak-anak</a></li>
      <li><a data-transition-type="backSlide" href="#remaja" data-toggle="tab">Remaja</a></li>
      <li><a data-transition-type="backSlide" href="#dewasa" data-toggle="tab">Dewasa</a></li>
    </ul>
  </div>
  <div class="tab-content outer-top-xs">
    <div class="tab-pane in active" id="all">
      <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
          @foreach ($new as $item)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="#"><img  src="assets/images/products/{{ $item->foto_produk }}" alt=""></a> </div>
                  <div class="tag new"><span>New</span></div>
                </div>
                <div class="product-info text-left">
                  <h3 class="name"><a href="#">{{ $item->nama_produk }}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>
                  <div class="product-price"> <span class="price">Rp{{ $item->harga }}</span> </div>
                </div>
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <ul class="list-unstyled">
                      <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ url('login') }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
    <div class="tab-pane" id="anak">
      <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
          @foreach ($new as $item)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="#"><img  src="assets/images/products/{{ $item->foto_produk }}" alt=""></a> </div>
                  <div class="tag new"><span>New</span></div>
                </div>
                <div class="product-info text-left">
                  <h3 class="name"><a href="#">{{ $item->nama_produk }}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>
                  <div class="product-price"> <span class="price">Rp{{ $item->harga }}</span> </div>
                </div>
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <ul class="list-unstyled">
                      <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ url('login') }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
    <div class="tab-pane" id="remaja">
      <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
          @foreach ($new as $item)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="#"><img  src="assets/images/products/{{ $item->foto_produk }}" alt=""></a> </div>
                  <div class="tag new"><span>New</span></div>
                </div>
                <div class="product-info text-left">
                  <h3 class="name"><a href="#">{{ $item->nama_produk }}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>
                  <div class="product-price"> <span class="price">Rp{{ $item->harga }}</span> </div>
                </div>
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <ul class="list-unstyled">
                      <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ url('login') }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
    <div class="tab-pane" id="dewasa">
      <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
          @foreach ($new as $item)
          <div class="item item-carousel">
            <div class="products">
              <div class="product">
                <div class="product-image">
                  <div class="image"> <a href="#"><img  src="assets/images/products/{{ $item->foto_produk }}" alt=""></a> </div>
                  <div class="tag new"><span>New</span></div>
                </div>
                <div class="product-info text-left">
                  <h3 class="name"><a href="#">{{ $item->nama_produk }}</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="description"></div>
                  <div class="product-price"> <span class="price">Rp{{ $item->harga }}</span> </div>
                </div>
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <ul class="list-unstyled">
          
                      <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ url('login') }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
  </div>
</div>