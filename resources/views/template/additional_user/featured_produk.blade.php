<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Featured products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
      @foreach ($featured as $item)
      <div class="item item-carousel">
        <div class="products">
            <div class="product">
              <div class="product-image">
                <div class="image"> <a href="#"><img  src="assets/images/products/{{ $item->foto_produk }}" alt=""></a> </div>
                <div class="tag hot"><span>hot</span></div>
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
                    <li class="lnk"> <a class="add-to-cart" href="{{ url('detail/'. $item->id_produk) }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>