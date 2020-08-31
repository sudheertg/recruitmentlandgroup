<?php include('header.php'); ?>
<section class="blue_band_top top_menu">
    <div class="container">
        <ul class="common_ul d-flex align-items-center justify-content-start">
            <li class="active"><a href="">Dashboard</a></li>
            <li><a href="">My CV</a></li>
            <li><a href="">My Applications</a></li>
            <li><a href="">Recommended Jobs</a></li>
        </ul>
    </div>
</section>
<section class="search_box section bg_grey">
    <div class="container">
        <h1 class="primary_title_sm text-center">Search Jobs</h1>
        <form class="search_box_form" method="post">
            <div class="form-control-col">
                <div class="form-control-main">
                    <input type="text" class="form-control" placeholder="Job Title, Skills, Etc" required/>
                </div>
            </div>
            <div class="form-control-col">
                <div class="form-control-main">
                    <select class="custom_select form-control">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div class="form-control-col form-control-col--but ">
                <div class="form-control-main">
                    <button class="default-btn">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="dashboard_image bg_grey dashboard_box">
                            <div class="dashboard_image_box">
                                <img src="assets/images/dashboard_user.jpg" alt="" class="img_fluid"/>
                            </div>
                            <p class="primary_title_sm">Oliver Smith</p>
                            <a href="mailto:oliver@recruitmentland.ae" class="user_mail">oliver@recruitmentland.ae</a>
                            <a href="" class="default-btn w-100">Update Your Profile Now</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dashboard_alert_job bg_grey dashboard_box">
                            <h3 class="primary_title_sm">Create a Job Alert</h3>
                            <form>
                                <div class="form-control-col">
                                    <div class="form-control-main">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" placeholder="Ex. Head of Human Resources">
                                    </div>
                                </div>
                                <div class="form-control-col">
                                    <div class="form-control-main">
                                        <label>Location</label>
                                        <select class="custom_select form-control">
                                            <option value="Choose Country">Choose Country</option>
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="default-btn">Create</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 pt-4">
                        <h3 class="primary_title_sm">Saved Jobs</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" class="dashboard_saved_job bg_grey dashboard_box">
                                    <div class="saved_job_img">
                                        <img src="assets/images/suggested_1.jpg" alt="" class="img_fluid"/>
                                    </div>
                                    <div class="saved_job_text">
                                        <p><span>Store Keeper Dubai</span> - United Arab Emirates Via Edarabia</p>
                                        <span class="saved_job_text_date"><i class="icon-timer"></i>Saved on: Dec 16, 2019</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="dashboard_saved_job bg_grey dashboard_box">
                                    <div class="saved_job_img">
                                        <img src="assets/images/suggested_2.jpg" alt="" class="img_fluid"/>
                                    </div>
                                    <div class="saved_job_text">
                                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                                        <span class="saved_job_text_date"><i class="icon-timer"></i>Saved on: Dec 16, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="" class="blue_anchor">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard_target_job bg_grey dashboard_box">
                    <h3 class="primary_title_sm">Target Jobs</h3>
                    <p>Add target job and work experience so we can give you relevant jobs.</p>
                    <form>
                        <div class="form-control-col">
                            <div class="form-control-main">
                                <label>Target job Title</label>
                                <input type="text" class="form-control" placeholder="Preffered Job">
                            </div>
                        </div>
                        <div class="form-control-col">
                            <div class="form-control-main">
                                <label>Career Level</label>
                                <select class="custom_select form-control">
                                    <option value="Choose Country">Career Level</option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-control-col">
                            <div class="form-control-main">
                                <label>Which sectors would you like to work in?</label>
                                <select class="custom_select form-control">
                                    <option value="Choose Country">Select Sectors</option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-control-col">
                            <div class="form-control-main">
                                <label>Where would you like to work?</label>
                                <select class="custom_select form-control">
                                    <option value="Choose Country">Select Country</option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <button class="default-btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg_grey suggested_jobs">
    <div class="container">
        <h2 class="primary_title text-center">Suggested Jobs</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_1.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_2.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Room Attendant</span> Raffles Dubai Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_3.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_4.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_5.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_6.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_4.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_5.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="" class="dashboard_saved_job dashboard_box">
                    <div class="saved_job_img">
                        <img src="assets/images/suggested_6.jpg" alt="" class="img_fluid"/>
                    </div>
                    <div class="saved_job_text">
                        <p><span>Office Administrator</span> Irwin & Dow Dubai - United Arab Emirates</p>
                        <div class="d-flex align-items-center justify-content-start">
                            <span class="saved_job_text_date"><i class="icon-timer"></i>10 Hours Ago</span>
                            <span class="saved_job_text_date"><i class="icon-job"></i>Full-time</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-right">
            <a href="" class="blue_anchor">View All</a>
        </div>
    </div>
</section>
<section class="section job_application_section">
    <div class="container">
        <h2 class="primary_title text-center">Your Job Applications</h2>

        <table class="theme_table theme_table_img">
            <thead>
                <tr>
                    <td></td>
                    <td>Job Title</td>
                    <td>Location</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">
                        <img src="assets/images/table_image.jpg" alt="" class="img_fluid"/>
                    </td>
                    <td>
                        <span>Business Development Manager</span>Hoyamal Recruitment
                    </td>
                    <td>
                        Dubai, United Arab Emirates
                    </td>
                    <td>
                        Applied on Dec 10, 2019
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="" class="blue_anchor">View All</a>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>





