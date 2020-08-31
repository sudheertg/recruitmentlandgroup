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
<section class="company-profile">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
		<h1 class="flex-itemss"><img src="assets/images/logo-r.png"> Retail Company</h1>
			<div class="gray-bacground">
				<div class="logo-content">
					<h2>About Retail Company</h2>
					<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate 
magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, 
facilisis luctus, metus. Phasellus ultrices nulla quis nibh.</p>
			<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, 
ultricies in, diam. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod 
in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat Praesent dapibus.</p>
		<p id="demo" class="collapse">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</p>
			<a href="#" data-toggle="collapse" data-target="#demo">Show All Content</a>
				</div>
				<div class="right-content">
				<ul>
					<li><span>Industry:</span>
Retail</li>
<li><span>Website:</span>
www.retailcompany.ae</li>
<li><span>Number of Employees:</span>
48</li>
<li><span>Location:</span>
Dubai, UAE </li>
				</ul>
					
				</div>
			</div>
		</div>
		
			
		</div>
	</div>
</section>


<section class="jobs-posted">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Jobs Posted </h1>
				<p>Phasellus ultrices nulla quis nibh. Quisque a lectus.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="job">
					<div class="job-header">
						<h1>UI Developers</h1>
					</div>
					<div class="job-location">
						<p><span>Job Location:</span> Dubai</p>
						<p><span>Experience:</span> 8 Years</p>
						<p><span>Career Level:</span> Mid Level</p>
					</div>
					<div class="job-description">
						<p><span>Job Description:</span> Planning, developing 
and implementing effective marketing 
communication... <a href="#">Know More</a></p>
					</div>
					<div class="job-footer">
						Posted 2 days ago
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="job">
					<div class="job-header">
						<h1>UI Developers</h1>
					</div>
					<div class="job-location">
						<p><span>Job Location:</span> Dubai</p>
						<p><span>Experience:</span> 8 Years</p>
						<p><span>Career Level:</span> Mid Level</p>
					</div>
					<div class="job-description">
						<p><span>Job Description:</span> Planning, developing 
and implementing effective marketing 
communication... <a href="#">Know More</a></p>
					</div>
					<div class="job-footer">
						Posted 2 days ago
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="job">
					<div class="job-header">
						<h1>UI Developers</h1>
					</div>
					<div class="job-location">
						<p><span>Job Location:</span> Dubai</p>
						<p><span>Experience:</span> 8 Years</p>
						<p><span>Career Level:</span> Mid Level</p>
					</div>
					<div class="job-description">
						<p><span>Job Description:</span> Planning, developing 
and implementing effective marketing 
communication... <a href="#">Know More</a></p>
					</div>
					<div class="job-footer">
						Posted 2 days ago
					</div>
				</div>
			</div>
				<div class="col-md-4">
				<div class="job">
					<div class="job-header">
						<h1>UI Developers</h1>
					</div>
					<div class="job-location">
						<p><span>Job Location:</span> Dubai</p>
						<p><span>Experience:</span> 8 Years</p>
						<p><span>Career Level:</span> Mid Level</p>
					</div>
					<div class="job-description">
						<p><span>Job Description:</span> Planning, developing 
and implementing effective marketing 
communication... <a href="#">Know More</a></p>
					</div>
					<div class="job-footer">
						Posted 2 days ago
					</div>
				</div>
			</div>
				<div class="col-md-4">
				<div class="job">
					<div class="job-header">
						<h1>UI Developers</h1>
					</div>
					<div class="job-location">
						<p><span>Job Location:</span> Dubai</p>
						<p><span>Experience:</span> 8 Years</p>
						<p><span>Career Level:</span> Mid Level</p>
					</div>
					<div class="job-description">
						<p><span>Job Description:</span> Planning, developing 
and implementing effective marketing 
communication... <a href="#">Know More</a></p>
					</div>
					<div class="job-footer">
						Posted 2 days ago
					</div>
				</div>
			</div>
				<div class="col-md-4">
				<div class="job last">
				<a href="#">
					View All Jobs
				</a>
				</div>
			</div>
		</div>
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



