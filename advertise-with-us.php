<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Advertise with us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

       <!-- ======= Header ======= -->
  <header id="header">

    <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="logo me-auto me-lg-0"><a href="index.php">cceDigest</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0 ms-1">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="advertise-with-us.php">Advertise with us</a></li>
            <li><a href="archives.php">Archives</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

       <div class="header-social-links">
          <a href="https://twitter.com/CEconomicDigest" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/ccedigest" class="facebook">
            <i class="bi bi-facebook"></i>
          </a>
        </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <section class="contact">
      <div class="container" >  <!--data-aos="fade-up"-->
        <div class="section-title">
          <h2>Dear Valued Customers!</h2>
          <p>If you desire to place advertisement of your organization to be seen by millions of the readers of China Economic Digest across the world, every week please contact our Sales & Marketing Department through the email given below.</p>
        </div>
         <form role="form" id='myForm' class="php-email-form">
           <h4 class="sent-notification text-center"></h4>
              <div class="row m-2">
                <div class="col-md-6 form-group">
                  			<input id="name" name="name" class="form-control " type="text" placeholder="Enter Your Name" required>
                </div>
                <div class="col-md-6 form-group ">
                  			<input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                </div>
              </div>
              <div class="form-group m-3 ">
                <input id="subject" type="text" class="form-control" name="subject" placeholder="Subject" required> 
              </div>
              <div class="form-group m-3">
                <textarea id="body" rows="5" class="form-control" name="message" placeholder="Message"></textarea>
              </div>
              <div class="text-center m-3">
              	<button type="submit" onclick="sendEmail()" value="Send An Email">Submit</button> 
              </div>
            </form>
         </div>
    </section><!-- End About Section -->
    	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   },success: function (response)
                    {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>