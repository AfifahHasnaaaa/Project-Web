@extends('template/user/layout_user')

@section('konten_user')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Contact</li>
			</ul>
		</div>
	</div>
</div>

<div class="body-content">
	<div class="container">
        <div class="contact-page">
            @include('template/additional/maps')
            <div class="col-md-9 contact-form">
                <div class="col-md-12 contact-title">
                    <h4>Contact Form</h4>
                </div>
                <div class="col-md-4 ">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="" required="">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" required="">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="" required="">
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <form class="register-form" role="form">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                            <textarea class="form-control unicase-form-control" id="exampleInputComments"required=""></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 outer-bottom-small m-t-20">
                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
                </div>
            </div>
            @include('template/additional/informasi_kontak')			
        </div>
    </div>
    @include('template/additional/brand')
</div>
@endsection
