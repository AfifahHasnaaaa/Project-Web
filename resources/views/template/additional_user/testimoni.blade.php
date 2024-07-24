<div class="sidebar-widget  wow fadeInUp outer-top-vs ">
    <div id="advertisement" class="advertisement">
      @foreach ($review as $item)
        <div class="item">
          <div class="avatar"><img src="{{ asset('assets/images/testimonials/' . $item->foto) }}" alt="Image"></div>
          <div class="testimonials"><em>"{{ $item->review }}"</em></div>
          <div class="clients_author">{{ $item->nama }}<span>{{ $item->asal }}</span> </div>
        </div>
      @endforeach      
    </div>
</div>