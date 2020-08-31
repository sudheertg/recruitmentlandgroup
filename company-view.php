<?php include('header.php'); ?>
<section class="blue_band_top top_menu" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <ul class="common_ul d-flex align-items-center justify-content-start">
            <li class="active"><a href="">Dashboard</a></li>
            <li><a href="">My CV</a></li>
            <li><a href="">My Applications</a></li>
            <li><a href="">Recommended Jobs</a></li>
        </ul>
    </div>
</section>
<section class="section no_top_padding company-view">
    <form class="container resume_container">
        <!--User Details-->
        <div class="row resume_row">
            <div class="col-md-12">
                <div class="tab_accordion">
                    <div class="tab_heading">
                        <h2>Retail Company</h2>
                        <div class="tab_head_upload">
                         <button type="button" class="icon_button" data-toggle="modal" data-target="#personal_information"><i class="icon-edit"></i></button>
                        </div>
                    </div>
                    <div class="tab_content upload_file_main_container">
                        <div class="profile_image_upload">
                            <img class="profile-pic" src="assets/images/upload-company-photo.jpg">
                            <input class="file-upload" type="file" accept="image/*"/>
                        </div>

                        <div class="user_information">
                            <ul class="common_ul">
                                <li><span>Industry </span><br>Information Technology </li>
                                <li><span>Number ofEmployees</span><br>58 </li>
                           
                            </ul>
                        </div>
    <div class="user_information">
                            <ul class="common_ul">
                                <li><span>Country  </span><br>UAE </li>
                                <li><span>City</span><br>Dubai, Bur Dubai </li>
                           
                            </ul>
                        </div>
                         <div class="user_information">
                            <ul class="common_ul">
                                <li><span>Website </span><br>www.retailcompany.ae </li>
                                
                           
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Personal Information -->
        <div class="row resume_row">
            <div class="col-md-12">
                <div class="tab_accordion">
                    <div class="tab_heading">
                        <h2>About Retail Company</h2>
                        <button type="button" class="icon_button" data-toggle="modal" data-target="#work_experience"><i class="icon-edit"></i></button>
                    </div>
                    <div class="tab_content upload_file_main_container">
                        <div class="row w_100_row">
                            
                           <h2>About Retail Company</h2>
                           <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate 
magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, 
facilisis luctus, metus. Phasellus ultrices nulla quis nibh.</p>
                       <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, 
ultricies in, diam. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod 
in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat Praesent dapibus.</p>
                       <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate 
magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, 
facilisis luctus, metus. Phasellus ultrices nulla quis nibh.Aliquam erat volutpat. Nam dui mi, 
tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="default-btn">Save</button>
    </form>
</section>
<?php include('footer.php'); ?>

<script>
    var jobTitleTags = [
        "Marketing manager",
        "Account manager",
        "Office manager",
        "Store manager",
        "Plant manager",
        "Regional manager",
        "Divisional manager",
        "Procurement manager",
        "Hr manager",
        "IT manager",
        "R&D manager",
        "Project manager",
        "Risk manager",
        "Quality manager",
        "Design manager",
        "Facility manager"
    ];
    var preferredIndustryTag = [
        "Business services",
        "Information technology",
        "Manufacturing",
        "Health care",
        "Finance",
        "Retail",
        "Accounting and legal",
        "Construction",
        "Media",
        "Restaurants",
        "Advertising",
        "Events Management"
    ];
    $( function() {
        $('.job_title_tag').on("focus", function(){
            $(this).autocomplete({
                minLength: 2,
                source: jobTitleTags
            });
        });

        $('.preferred_industry_tag').on("focus", function(){
            $(this).autocomplete({
                minLength: 2,
                source: preferredIndustryTag
            });
        });
        $(document).on('click', '.tag_main .icon-close',  function(){
            if($('.tag_container_job_title .tag_main').length != 1){
                $(this).parent().remove();
            }
        });
    } );
    $(function() {
        $( ".datepicker" ).datepicker();
    });
    $(document).ready(function(){
        /*job title tags*/

        var jobTitle = 2;
        $(document).on('click', '.add_tag_job_title', function(e){
            e.preventDefault();
            var newJobTitle = '<span class="tag_main">'+
                '<input id="job_title_tag_'+jobTitle+'" type="text" class="job_title_tag tag_box" value=""/>'+
                '<i class="icon-close"></i>'+
                '</span>';
            $('.tag_container_job_title').append(newJobTitle);
            jobTitle++;
            $('.job_title_tag').autocomplete({
                minLength: 2,
                source: jobTitleTags
            });
        });


        var preferredIndustry = 2;
        $(document).on('click', '.preferred_industry_tag_but', function(e){
            e.preventDefault();
            var newPreferredIndustry = '<span class="tag_main">'+
                '<input id="job_title_tag_'+preferredIndustry+'" type="text" class="job_title_tag tag_box" value=""/>'+
                '<i class="icon-close"></i>'+
                '</span>';
            $('.tag_container_industry').append(newPreferredIndustry);
            preferredIndustry++;
            $('.job_title_tag').autocomplete({
                minLength: 2,
                source: preferredIndustryTag
            });
        });


        $(document).on('click','.tab_content_delete', function(){
            $(this).parents('.tab_content_show').remove();
        })

    });
</script>

<!-- Contact Information Modal -->
<div class="modal fade" id="contact_information" tabindex="-1" role="dialog" aria-labelledby="contact_informationTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="primary_title_sm m-0" id="contact_informationTitle">Contact Information</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>Email ID</label>
                            <input type="text" class="form-control" value="oliversmith@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>Telephone</label>
                            <input type="text" class="form-control" value="+971 50 8956259">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="default-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="default-btn">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Personal Information Modal -->
<div class="modal fade" id="personal_information" tabindex="-1" role="dialog" aria-labelledby="personal_informationTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
       
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="primary_title_sm m-0" id="personal_informationTitle">Company Information<span></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Retail Company">
                        </div>
                    </div>
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                             <div class="form-control-main">
                            <label>Industry</label>
                            <input type="text" class="form-control" placeholder="Information Technology">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>Number ofEmployees</label>
                            <input type="text" class="form-control" placeholder="58">
                        </div>
                    </div>
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>Country</label>
                            <select class="custom_select form-control">
                                <option value="Choose Country">Select Country</option>
                                <option value="AL">UAE</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>City</label>
                            <select class="custom_select form-control">
                                <option value="Choose Country">Select City</option>
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                      <div class="col-md-6 form-control-col">
                        <div class="form-control-main">
                            <label>Website</label>
                            <input type="text" class="form-control" placeholder="www.retailcompany.ae">
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="default-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="default-btn">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Work Experience Modal -->
<div class="modal fade" id="work_experience" tabindex="-1" role="dialog" aria-labelledby="work_experienceTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="primary_title_sm m-0" id="work_experienceTitle">About Company</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                
                   
                   



                   
                   
                   
                    <div class="col-md-12 form-control-col">
                        <div class="form-control-main">
                            <label>About Company</label>
                            <textarea class="form-control" placeholder=""></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="default-btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="default-btn">Save changes</button>
            </div>
        </div>
    </div>
</div>

