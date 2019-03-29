<?php /* C:\xampp\htdocs\elaravel-master\resources\views/pages/checkout.blade.php */ ?>
<?php $__env->startSection('content'); ?>

	<section id="cart_items">
		<div class="container">
			<div class="register-req">
				<p>Please fillup this form............</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Shipping Details</p>
							<div class="form-one">
								<form action="<?php echo e(url('/save-shipping-details')); ?>" method="post">
									<?php echo e(csrf_field()); ?>

								<input type="text" name="shipping_email"  placeholder="Email*" required="">
								<input type="text" name="shipping_first_name"  placeholder="First Name *" required="">
								<input type="text"  name="shipping_last_name" placeholder="Last Name *" required="">
								<input type="text" name="shipping_address"  placeholder="Address *">
								<input type="text" name="shipping_mobile_number"  placeholder="Mobile Number *" required="">
                                <input type="text" name="shipping_city"  placeholder="city *" required=""> 
                                <input type="submit" class="btn btn-default" value="Done" required="">
								</form>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>