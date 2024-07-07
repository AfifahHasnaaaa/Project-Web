

<?php $__env->startSection('konten_user'); ?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="../views/template/home_user.php">Home</a></li>
				<li class='active'>cart</li>
			</ul>
		</div>
    </div>
</div>
<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">Remove</th>
									<th class="cart-description item">Image</th>
									<th class="cart-product-name item">Product Name</th>
									<th class="cart-edit item">Edit</th>
									<th class="cart-qty item">Quantity</th>
									<th class="cart-sub-total item">Subtotal</th>
									<th class="cart-total last-item">Grandtotal</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">
												<a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
												<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
											</span>
										</div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="detail.html">
											<img src="assets/images/products/p1.jpg" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-8">
												<div class="reviews">
													(06 Reviews)
												</div>
											</div>
										</div><!-- /.row -->
										<div class="cart-product-info">
															<span class="product-color">COLOR:<span>Blue</span></span>
										</div>
									</td>
									<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
									<td class="cart-product-quantity">
										<div class="quant-input">
												<div class="arrows">
												<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
												</div>
												<input type="text" value="1">
										</div>
									</td>
									<td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
									<td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
								</tr>
								<tr>
									<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="detail.html">
											<img src="assets/images/products/p2.jpg" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-8">
												<div class="reviews">
													(06 Reviews)
												</div>
											</div>
										</div><!-- /.row -->
										<div class="cart-product-info">
										<span class="product-color">COLOR:<span>Pink</span></span>
										</div>
									</td>
									<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
									<td class="cart-product-quantity">
										<div class="cart-quantity">
											<div class="quant-input">
												<div class="arrows">
												<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
												</div>
												<input type="text" value="1">
										</div>
										</div>
									</td>
									<td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
									<td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>				
			<div class="col-md-4 col-sm-12 estimate-ship-tax">
				<table class="table">
					<thead>
						<tr>
							<th>
								<span class="estimate-title">Estimate shipping and tax</span>
								<p>Enter your destination to get shipping and tax.</p>
							</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td>
									<div class="form-group">
										<label class="info-title control-label">Country <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>India</option>
											<option>SriLanka</option>
											<option>united kingdom</option>
											<option>saudi arabia</option>
											<option>united arab emirates</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">State/Province <span>*</span></label>
										<select class="form-control unicase-form-control selectpicker">
											<option>--Select options--</option>
											<option>TamilNadu</option>
											<option>Kerala</option>
											<option>Andhra Pradesh</option>
											<option>Karnataka</option>
											<option>Madhya Pradesh</option>
										</select>
									</div>
									<div class="form-group">
										<label class="info-title control-label">Zip/Postal Code</label>
										<input type="text" class="form-control unicase-form-control text-input" placeholder="">
									</div>
									<div class="pull-right">
										<button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
									</div>
								</td>
							</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4 col-sm-12 estimate-ship-tax">
				<table class="table">
					<thead>
						<tr>
							<th>
								<span class="estimate-title">Discount Code</span>
								<p>Enter your coupon code if you have one..</p>
							</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td>
									<div class="form-group">
										<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
									</div>
									<div class="clearfix pull-right">
										<button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
									</div>
								</td>
							</tr>
					</tbody>
				</table>
			</div>
				<div class="col-md-4 col-sm-12 cart-shopping-total">
					<table class="table">
						<thead>
							<tr>
								<th>
									<div class="cart-sub-total">
										Subtotal<span class="inner-left-md">$600.00</span>
									</div>
									<div class="cart-grand-total">
										Grand Total<span class="inner-left-md">$600.00</span>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>
										<div class="cart-checkout-btn pull-right">
											<button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
											<span class="">Checkout with multiples address!</span>
										</div>
									</td>
								</tr>
						</tbody>
					</table>
				</div>		
		</div>
	</div> 
	<?php echo $__env->make('template/additional/brand', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/user/layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\DATAKU\Hodieku\resources\views/cart_user.blade.php ENDPATH**/ ?>