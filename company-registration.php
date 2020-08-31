<?php include('header.php'); ?>
<section class="blue_band_top top_menu">

</section>
<section class="section no_bottom_padding padding-new">
    <div class="container text-center">
        <h1 class="primary_title mb-1">Create a Free Account</h1>
        <p class="text_bold">Already have an account? <a href="" class="text_link">Log In</a></p>
    
    </div>
</section>
<section class="section no_top_padding company-regestration">
    <div class="container">
     
        <form class="" id="" method="post">
            <div class="row">
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Company name</label>
                        <input type="text" class="form-control" placeholder="Company name" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Company location</label>
                        <input type="text" class="form-control" placeholder="Company location" required/>
                    </div>
                </div>
                    <div class="col-md-4 form-control-col">
                   <div class="form-control-main">
                                    <label>Industry</label>
                                    <select class="custom_select form-control">
                                        <option value="Choose Level">Industry</option>
                                        <option value="AL">Industry</option>
                                        <option value="WY">Industry</option>
                                    </select>
                                </div>
                </div>
                    <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Contact person's name</label>
                        <input type="text" class="form-control" placeholder="Contact person's name" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
           
            
                <div class="col-md-4 form-control-col">
                    <button class="default-btn">Register Now</button>
                </div>

                <div class="col-md-12 form-control-col m-0">
                    <p class="terms_text">By registering, you confirm that you have read and agree to recruitmentland-uae.com <br><a href="" target="_blank">Terms and Conditions of Use</a> and <a href="" target="_blank">Privacy Policy</a>.</p>
                </div>
            </div>
        </form>

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




