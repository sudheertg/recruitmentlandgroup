<?php include('header.php'); ?>
<section class="section no_bottom_padding">
    <div class="container text-center">
        <h1 class="primary_title mb-1">Create a Free Account</h1>
        <p class="text_bold">Already have an account? <a href="" class="text_link">Log In</a></p>
        <div class="free_account">
            <a href="" class="free_account_but free_account_but_fb"><i class="icon-facebook"></i><span>Register With Facebook</span></a>
            <a href="" class="free_account_but free_account_but_gp"><i class="icon-google-plus"></i><span>Register With Google</span></a>
            <p class="text-center m-0">recruitmentland-uae.com never shares any of your activities through Facebook<br> or Google without your explicit permission.</p>
        </div>
    </div>
</section>
<section class="section no_top_padding">
    <div class="container">
        <p class="or_line"><span>Or</span></p>
        <form class="" id="" method="post">
            <div class="row">
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>First name</label>
                        <input type="text" class="form-control" placeholder="First name" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" required/>
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
                        <input type="password" class="form-control" placeholder="Password" required/>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Target Job Title</label>
                        <input type="text" class="form-control" placeholder="What is the job title you're looking for?">
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="form-control-main">
                        <label>Job Role</label>
                        <input type="text" class="form-control" placeholder="Which field do you want to work in?">
                    </div>
                </div>
                <div class="col-md-8 form-control-col">
                    <div class="form-control-main">
                        <label>Upload CV (Optional)</label>
                        <div class="upload_file">
                            <input type="file" id="" class="file_input custom-file-input" />
                            <input type="hidden" class="file_input_hidden" placeholder="">
                            <span class="upload_file_text"><i class="icon-up-arrow"></i><b>Browse</b> file to Upload</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <div class="check_box">
                        <input type="checkbox" name="" id="visibility"/>
                        <label for="visibility">Make my profile public to increase my visibility to employers</label>
                    </div>
                </div>
                <div class="col-md-4 form-control-col">
                    <button class="default-btn">Proceed to build your CV</button>
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




