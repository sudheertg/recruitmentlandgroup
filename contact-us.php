<?php include('header.php'); ?>
<section class="inner_banner contact-us">
    <img src="assets/images/contact-us.jpg" alt=""/>
    <div class="container">
        <h1 class="big_title wow animate fadeInUp" data-wow-delay=".5s">Contact Us</h1>
    </div>
</section>
<section class="section wow animate fadeInUp" data-wow-delay=".5s">
    <div class="container">
	<!--<div class="row">
	<div class="col-md-12">
        <h2 class="primary_title">Get in Touch</h2>
        <p class="big_paragraph">Need a hand? Or a high five? Here’s how to reach us.</p>
	</div>
   </div>-->
   
   <div class="row contact-ul">
   <div class="col-md-4">
   <ul class="adrees">
		<li>Recruitment Land</li>
		<li>Sharjah</li>
		<li>United Arab Emirates</li>
   </ul>
   </div>
     <div class="col-md-4">
		<ul class="phonee">
			<li><a href="tel:+00971 6 559 2228">+00971 6 559 2228</a></li>
		</ul>
   </div>
    <div class="col-md-4">
		<ul class="recruitment">
			<li><a href="mailto:info@recruitmentlanduae.com">info@recruitmentlanduae.com</a></li>
		</ul>
   </div>
   </div>
   
   <div class="row">
		<div class="col-md-6">
		<div class="form-control-col margin-btm-less">
                    <div class="form-control-main">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" required="">
                    </div>
         </div>
		 <div class="form-control-col margin-btm-less">
                    <div class="form-control-main">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="you@example.com" required="">
                    </div>
         </div>
		  <div class="form-control-col margin-btm-less">
                    <div class="form-control-main">
                        <label>Telephone</label>
                        <input type="text" class="form-control" placeholder="Telephone" required="">
                    </div>
         </div>
		  <div class="form-control-col margin-btm-less">
                    <div class="form-control-main">
                        <label>Message</label>
                        <textarea class="form-control contact-page" placeholder="Type your message"></textarea>
                    </div>
         </div>
		   <div class="form-control-col margin-btm-less">
                    <div class="form-control-main">
                     <img src="assets/images/captcha.jpg">
                    </div>
         </div>
		 
		<!-- <div class="check_box send-me">
                        <input type="checkbox" name="" id="visibility">
                        <label for="visibility">Send me offers and updates every now and then.</label>
                    </div>-->
		
                    <button class="default-btn contact--page">Submit</button>
               
					
		</div>
		<div class="col-md-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230822.21003065398!2d55.3705193404085!3d25.31773952230001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5f5fede7964b%3A0x2a830aa19c1f6d89!2sSharjah%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1585031609121!5m2!1sen!2sin" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
   </div>
    
     
    </div>
</section>

<?php include('footer.php'); ?>
<script>
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )
    wow.init();
</script>



