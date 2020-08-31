<footer>
    <div class="container d-flex align-items-start justify-content-between">
        <div class="foot_col foot_col_1">
            <h6>Home</h6>
            <ul class="common_ul">
                <li><a href="">About Us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Case Studies</a></li>
                <li><a href="">Specializations</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        <div class="foot_col foot_col_2">
            <h6>For Job Seekers</h6>
            <ul class="common_ul">
                <li><a href="">Log In</a>
                <li><a href="">Submit Resume</a>
                <li><a href="">Apply for a Job</a>
                <li><a href="">Edit Profile</a>
            </ul>
        </div>
        <div class="foot_col foot_col_3">
            <h6>Employer Login</h6>
            <ul class="common_ul">
                <li><a href="">Packages to choose</a></li>
                <li><a href="">Payment</a></li>
                <li><a href="">Upload Jobs</a></li>
                <li><a href="">Search Candidates</a></li>
                <li><a href="">Shortlist Candidates</a></li>
                <li><a href="">Download Resumes</a></li>
            </ul>
        </div>
        <div class="foot_col foot_col_4">
            <h6>Contact Us</h6>
            <ul class="common_ul">
                <li><a href="">T: +00971 6 559 2228</a></li>
                <li><a href="">M: +00971 56 180 5786</a></li>
            </ul>
            <p>Sharjah</p>
            <p>United Arab Emirates</p>
        </div>
        <div class="foot_col foot_col_5">
            <h6>Connect With Us</h6>
            <ul class="common_ul social_media">
                <li><a href=""><i class="icon-facebook"></i></a></li>
                <li><a href=""><i class="icon-twitter"></i></a></li>
                <li><a href=""><i class="icon-instagram"></i></a></li>
                <li><a href=""><i class="icon-linkedin"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="bottom_foot container">
        <p>Copyright © <?php echo date("Y"); ?> Recruitment Land UAE - All Rights Reserved.</p>
    </div>
</footer>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/tinymce.min.js" referrerpolicy="origin"></script>
<script src="assets/js/jquery.tinymce.min.js" referrerpolicy="origin"></script>
<script>
      $('textarea#tiny').tinymce({
        height: 200,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
      });
	
	$(document).on('focusin', function(e) {
  if ($(e.target).closest(".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
    e.stopImmediatePropagation();
  }
});
    </script>
    <script>
      $('textarea#tinyTwo').tinymce({
        height: 200,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
      });
	
	$(document).on('focusin', function(e) {
  if ($(e.target).closest(".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
    e.stopImmediatePropagation();
  }
});
    </script>
<script>
  $('.burger, .overlay').click(function(){
  $('.burger').toggleClass('clicked');
  $('.overlay').toggleClass('show');
  $('nav').toggleClass('show');
  $('body').toggleClass('overflow');
});
</script>
</body>
</html>
