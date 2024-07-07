

<?php $__env->startSection('konten_user'); ?>
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
            <?php echo $__env->make('template/additional/maps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php echo $__env->make('template/additional/informasi_kontak', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
        </div>
    </div>
    <?php echo $__env->make('template/additional/brand', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/user/layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATAKU\Hodieku\resources\views/contact_user.blade.php ENDPATH**/ ?>