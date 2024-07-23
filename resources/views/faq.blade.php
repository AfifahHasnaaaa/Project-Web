@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('homeuser') }}">Home</a></li>
				<li class='active'>FAQ</li>
			</ul>
		</div>
    </div>
</div>
<div class="body-content">
	<div class="container">
		<div class="checkout-box faq-page">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-title">Frequently Asked Questions</h2>
					<span class="title-tag">Last Updated on Juli 02, 2024</span>
					<div class="panel-group checkout-steps" id="accordion">
                        <div class="panel panel-default checkout-step-01">
                            <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                <span>1</span>Apa bahan dari hodie yang dijual?
                                </a>
                            </h4>
                        </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Semua hodie kami terbuat dari bahan berkualitas tinggi, seperti katun dan poliester, untuk kenyamanan dan daya tahan yang optimal.		
                        </div>
                    </div>
                </div>
					  	<div class="panel panel-default checkout-step-02">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
						          <span>2</span>Bagaimana cara menentukan ukuran yang tepat?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
						      <div class="panel-body">
						        Kami menyediakan panduan ukuran di setiap halaman produk untuk membantu Anda memilih ukuran yang paling sesuai. Anda juga dapat menghubungi layanan pelanggan kami untuk bantuan lebih lanjut.
						      </div>
						    </div>
					  	</div>
					  	<div class="panel panel-default checkout-step-03">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
						       		<span>3</span>Apakah ada garansi untuk produk yang dibeli?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse">
						      <div class="panel-body">
						        Ya, kami menawarkan garansi 30 hari untuk setiap pembelian. Jika Anda tidak puas dengan produk kami, Anda dapat mengembalikannya dalam waktu 30 hari untuk penggantian atau pengembalian uang.
						      </div>
						    </div>
					  	</div>
					    <div class="panel panel-default checkout-step-04">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
						        	<span>4</span>Berapa lama waktu pengiriman?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFour" class="panel-collapse collapse">
							    <div class="panel-body">
							        Waktu pengiriman standar adalah 3-7 hari kerja, tergantung lokasi Anda. Kami juga menawarkan opsi pengiriman ekspres dengan biaya tambahan.
							    </div>
					    	</div>
						</div>
					  	<div class="panel panel-default checkout-step-05">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
						        	<span>5</span>Bagaimana cara merawat hodie saya?
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFive" class="panel-collapse collapse">
						      <div class="panel-body">
						        Untuk menjaga hodie Anda tetap dalam kondisi terbaik, cuci dengan air dingin dan keringkan dengan cara digantung. Hindari penggunaan pemutih dan setrika pada suhu rendah jika diperlukan.
						      </div>
						    </div>
					    </div>
					    
					</div>
				</div>
			</div>
</div>
@include('template/additional_user/brand')
</div>
</div>
@endsection