<?php include('header.php'); ?>
<section class="blue_band_top top_menu">

</section>
<section class="section no_bottom_padding">
    <div class="container text-center">
        <h1 class="primary_title mb-1">Candidate Log In</h1>
        <p class="text_bold">Don't have an account?  <a href="" class="text_link">Register here</a></p>
        <div class="free_account">
            <a href="" class="free_account_but free_account_but_fb"><i class="icon-facebook"></i><span>Log in With Facebook</span></a>
            <a href="" class="free_account_but free_account_but_gp"><i class="icon-google-plus"></i><span>Log in With Google</span></a>
            <p class="text-center m-0">recruitmentland-uae.com never shares any of your activities through Facebook<br>
or Google without your explicit permission.</p>
        </div>
    </div>
</section>
<section class="section no_top_padding candidate-login">
    <div class="container">
        <p class="or_line"><span>Or</span></p>
        <form class="" id="" method="post">
            <div class="row justify-content-center">
            
                <div class="col-md-4 form-control-col margin-btm-less">
                    <div class="form-control-main">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col margin-btm-less">
                    <div class="form-control-main">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required/>
                    </div>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-md-4 form-control-col">
                    <div class="check_box ">
                        <input type="checkbox" name="" id="visibility"/>
                        <label for="visibility">Keep me logged in</label>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="check_box justify-content-start">
                     <a href="#" class="float-right">Forgot Password?</a>
                    </div>
                </div>

               
            </div>
            <div class="row justify-content-center">
            	  <div class="col-md-4 form-control-col">
                    <button class="default-btn ">Login</button>
                </div>
            </div>
        </form>

    </div>
</section>

<?php include('footer.php'); ?>

<script>
jQuery(function ($) {
 $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
</script>



