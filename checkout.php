<?php include('header.php'); ?>
<section class="blue_band_top top_menu">

</section>
<section class="section no_bottom_padding padding-new">
    <div class="container">
		<h1 class="primary_title mb-1">Checkout</h1>
    </div>
</section>
<section class="checkout">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="strandard-plan">
					<div class="stan float-left">
						<h1>Standard Plan</h1>
<p>250 CV Downloading</p>
<p>25 Job Posting</p>
<p>One Month AED 500</p>
					</div>
					<div class="standard-price package_price_strip float-right">
						 <p><span class="price">AED</span>500<span class="month">/Mon</span></p>
					</div>
				</div>
				<div class="dropdown-box">
					     <div class="form-control-main">
                                    <label>Choose Billing Cycle</label>
                                    <select class="custom_select form-control">
                                        <option value="Choose Level">AED 6000.00 Annually</option>
                                        <option value="AL">Industry</option>
                                        <option value="WY">Industry</option>
                                    </select>
                                </div>
				</div>
				<div class="payment-method">
					<h1>Payment Method</h1>
					<div class="radio_box">
                                        <input type="radio" id="male" name="gender" checked="">
                                        <label for="male">PayPal</label>
                                        <img src="assets/images/paypal.png" class="abs-right">
                                    </div>
                                    <div class="radio_box">
                                        <input type="radio" id="male" name="gender" checked="">
                                        <label for="male">Credit Card</label>
                                        <img src="assets/images/visa.png" class="abs-right">
                                    </div>
				</div>
			</div>
			<div class="col-md-4">
			<div class="gray-box">
				<h1>Order Summary</h1>
<p>Standard Plan <span>AED 6000.00</span></p>
		<div class="line"></div>
		<div class="two">
		<p>Setup Fees <span>AED 0.00
</span></p>
			<p>VAT @ 5%:<span>AED 300.00</span></p>
			</div>
			<div class="line"></div>
			<p class="lastt">Total Due<span class="bog">AED 6300.00</span></p>
			</div>
			<div class="form-control-col">
                    <div class="check_box ">
                        <input type="checkbox" name="" id="visibility">
                        <label for="visibility">I accept the <a href="#">Terms & Conditions</a></label>
                    </div>
                </div>
                <a href="" class="default-btn w-100">Place Order Now</a>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php'); ?>

<script>
    $(document).ready(function(){
        $(".custom-file-input").on('change',function(){
            var filename = this.files[0].name;
            $(this).parent().find('.file_input_hidden').val(filename);
            $(this).parent().find('.upload_file_text').html('<i class="icon-up-arrow"></i>'+filename);

        });
    });
</script>




