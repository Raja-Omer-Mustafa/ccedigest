<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Contact</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
   </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header">
      <div
        class="container-fluid d-flex justify-content-between align-items-center"
      >
        <h1 class="logo me-auto me-lg-0"><a href="index.php">cceDigest</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0 ms-1">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="advertise-with-us.php">Advertise with us</a></li>
            <li><a href="archives.php">Archives</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <div class="header-social-links">
          <a href="https://twitter.com/CEconomicDigest" class="twitter">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="https://www.facebook.com/ccedigest" class="facebook">
            <i class="bi bi-facebook"></i>
          </a>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" >  <!--data-aos="fade-up"-->
          <div class="section-title">
            <h2>Head Office</h2>
            <pre>
CASH Mass Media,
944 Brookline blvd
Pittsburgh Pennsylvania, USA
Zip 15226</pre
            >

            <h2>Asia & Pacific Office</h2>
            <pre>
CASH Mass Media,
1102-1103 11th Floor, Longhang No 555,
Nathan Road, Mongkok, Kowloon, Hong Kong
          </pre
            >

            <h2>Regional Office</h2>
            <pre>
CASH Plaza, No. C-1, Street No. 08,
Sector I-8/1, Islamabad, Pakistan</pre
            >
          </div>

          <div class="row mt-5">
            <div class="col-lg-4">
              <h1>Editor</h1>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
           <form role="form" id='myForm' class="php-email-form">
           <h4 class="Editor-Sent-notification text-center alert-success" role='alert'></h4>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="editorName"
                      class="form-control"
                      id="editorName"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group ">  <!--mt-3 mt-md-0-->
                    <input
                      type="email"
                      class="form-control"
                      name="editorEmail"
                      id="editorEmail"
                      placeholder="Enter Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="editorSubject"
                    id="editorSubject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                             <textarea id="editorBody" rows="5" class="form-control" name="editorMessage" placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                   	<button type="submit" class="btn btn-primary "  onclick="editorContact()" value="Send An Email">Submit</button>
                </div>
              </form>
              <hr />
            </div>
            <div class="col-lg-4">
              <h1>Sales & Marketing</h1>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
              <form role="form" id='myForm1' class="php-email-form">
           <h4 class="Sales-Sent-notification text-center alert-success" role='alert'></h4>                
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="SalesName"
                      class="form-control"
                      id="SalesName"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group ">  <!--mt-3 mt-md-0-->
                    <input
                      type="email"
                      class="form-control"
                      name="SalesEmail"
                      id="SalesEmail"
                      placeholder="Enter Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="SalesSubject"
                    id="SalesSubject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                             <textarea id="SalesBody" rows="5" class="form-control" name="message" placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                   	<button type="submit" class="btn btn-primary" onclick="salesAndMarketingContact()" value="Send An Email">Submit</button>
                </div>
              </form>
              <hr />
            </div>

            <div class="col-lg-4">
              <h1>Web Master</h1>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
             <form role="form" id='myForm2' class="php-email-form">
           <h4 class="Web-Sent-notification text-center alert-success" role='alert'></h4>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="WebName"
                      class="form-control"
                      id="WebName"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group ">  <!--mt-3 mt-md-0-->
                    <input
                      type="email"
                      class="form-control"
                      name="WebEmail"
                      id="WebEmail"
                      placeholder="Enter Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="WebSubject"
                    id="WebSubject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                             <textarea id="WebBody" rows="5" class="form-control" name="message" placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                   	<button type="submit" class="btn btn-primary" onclick="webMasterContact()" value="Send An Email">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright
          <strong><span>2021</span></strong>
          . All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
    >
      <i class="bi bi-arrow-up-short"></i>
    </a>

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
<!--EDITOR FORM SCRIPTS-->
	<script type="text/javascript">
        function editorContact() {
            var name = $("#editorName");
            var email = $("#editorEmail");
            var subject = $("#editorSubject");
            var body = $("#editorBody");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'editorContact.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   },success:function (response)
                    {
                        $('#myForm')[0].reset();
                        $('.Editor-Sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
      }
    </script>

<!--SalesAndMarketingScripts-->
	<script type="text/javascript">
        function salesAndMarketingContact() {
            var name = $("#SalesName");
            var email = $("#SalesEmail");
            var subject = $("#SalesSubject");
            var body = $("#SalesBody");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'salesAndMarketingContact.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   },success: function (response)
                    {
                        $('#myForm1')[0].reset();
                        $('.Sales-Sent-notification').text("Message Sent Successfully.");
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
    <!--webMasterContact Scripts-->
	<script type="text/javascript">
        function webMasterContact() {
            var name = $("#WebName");
            var email = $("#WebEmail");
            var subject = $("#WebSubject");
            var body = $("#WebBody");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'webMasterContact.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   },success: function (response)
                    {
                        $('#myForm2')[0].reset();
                        $('.Web-Sent-notification').text("Message Sent Successfully.");
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


  </body>
</html>
