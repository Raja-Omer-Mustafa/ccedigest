<?php
require 'include/config.php';
$id = 4;
$magazines = [
    '4' => [
        'name' => '03-May-2015',
        'pages' => '40',
    ],
];
$magazine = $magazines[$id];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf-8" />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
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
    <link rel="stylesheet" href="assets/css/style.css" />
<!-- swiper cdn -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--swiper cdn end -->
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
    <!--flip book container-->
    <div class="flip-book" id="container"></div>
    <!--flip book end-->  
    <h1><a class="eeditions" href="archives.html">Earlier editions</a></h1>
    <!--Slider Start-->
    <section class="slidersection">
      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="magazine.php?id=1">
              <img src="assets/img/slider/1.jpg" alt="slider 1 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=2">
              <img src="assets/img/slider/2.jpg" alt="slider 2 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=3">
              <img src="assets/img/slider/3.jpg" alt="slider 3 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=4">
              <img src="assets/img/slider/4.jpg" alt="slider 4 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=5">
              <img src="assets/img/slider/5.jpg" alt="slider 5 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=6">
              <img src="assets/img/slider/6.jpg" alt="slider 6 slide " />
            </a>
          </div>
          <!-- <div class="swiper-slide">
            <a href="magazine.php?id=7">
              <img src="assets/img/slider/7.jpg" alt="slider 7 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=8">
              <img src="assets/img/slider/8.jpg" alt="slider 8 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=9">
              <img src="assets/img/slider/9.jpg" alt="slider 9 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=10">
              <img src="assets/img/slider/10.jpg" alt="slider 10 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=11">
              <img src="assets/img/slider/11.jpg" alt="slider 11 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=12">
              <img src="assets/img/slider/12.jpg" alt="slider 12 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=13">
              <img src="assets/img/slider/13.jpg" alt="slider 13 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=14">
              <img src="assets/img/slider/14.jpg" alt="slider 14 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=15">
              <img src="assets/img/slider/15.jpg" alt="slider 15 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=16">
              <img src="assets/img/slider/16.jpg" alt="slider 16 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=17">
              <img src="assets/img/slider/17.jpg" alt="slider 17 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=18">
              <img src="assets/img/slider/18.jpg" alt="slider 18 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=19">
              <img src="assets/img/slider/19.jpg" alt="slider 19 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=20">
              <img src="assets/img/slider/20.jpg" alt="slider 20 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=21">
              <img src="assets/img/slider/21.jpg" alt="slider 21 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=22">
              <img src="assets/img/slider/22.jpg" alt="slider 22 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=23">
              <img src="assets/img/slider/23.jpg" alt="slider 23 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=24">
              <img src="assets/img/slider/24.jpg" alt="slider 24 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=25">
              <img src="assets/img/slider/25.jpg" alt="slider 25 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=26">
              <img src="assets/img/slider/26.jpg" alt="slider 26 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=27">
              <img src="assets/img/slider/27.jpg" alt="slider 27 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=28">
              <img src="assets/img/slider/28.jpg" alt="slider 28 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=29">
              <img src="assets/img/slider/29.jpg" alt="slider 29 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=30">
              <img src="assets/img/slider/30.jpg" alt="slider 30 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=31">
              <img src="assets/img/slider/31.jpg" alt="slider 31 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=32">
              <img src="assets/img/slider/32.jpg" alt="slider 32 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=33">
              <img src="assets/img/slider/33.jpg" alt="slider 33 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=34">
              <img src="assets/img/slider/34.jpg" alt="slider 34 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=35">
              <img src="assets/img/slider/35.jpg" alt="slider 35 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=36">
              <img src="assets/img/slider/36.jpg" alt="slider 36 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=37">
              <img src="assets/img/slider/37.jpg" alt="slider 37 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=38">
              <img src="assets/img/slider/38.jpg" alt="slider 38 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=39">
              <img src="assets/img/slider/39.jpg" alt="slider 39 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=40">
              <img src="assets/img/slider/40.jpg" alt="slider 40 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=41">
              <img src="assets/img/slider/41.jpg" alt="slider 41 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=42">
              <img src="assets/img/slider/42.jpg" alt="slider 42 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=43">
              <img src="assets/img/slider/43.jpg" alt="slider 43 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=44">
              <img src="assets/img/slider/44.jpg" alt="slider 44 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=45">
              <img src="assets/img/slider/45.jpg" alt="slider 45 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=46">
              <img src="assets/img/slider/46.jpg" alt="slider 46 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=47">
              <img src="assets/img/slider/47.jpg" alt="slider 47 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=48">
              <img src="assets/img/slider/48.jpg" alt="slider 48 slide " />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="magazine.php?id=49">
              <img src="assets/img/slider/49.jpg" alt="slider 49 slide " />
            </a>
          </div> -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    <!--footer start-->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright
          <strong><span>2021</span></strong>
          . All Rights Reserved
        </div>
      </div>
    </footer>
    <!--footer end-->
              <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.mySwiper', {
          cssMode: true,
          slidesPerView: 6,
          spaceBetween: 20,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          mousewheel: true,
          keyboard: true,
          lazy: {
    loadPrevNext: true,
  }
        });
      </script>
    </section>
    <!--Slider End-->
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
        <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/html2canvas.min.js"></script>
    <script src="js/libs/three.min.js"></script>
    <script src="js/libs/pdf.min.js"></script>

    <script src="js/dist/3dflipbook.js"></script>
    <script type="text/javascript">
      var magazine = {
        'name': '03-May-2015',
        'pages': '40'
      };//JSON.parse('<?= json_encode($magazine) ?>');
      var baseurl = '<?= $baseurl ?>';
      // Sample 1 {
      function theKingIsBlackPageCallback(n) {
        return {
          type: 'image',
          src: `${baseurl}${magazine.name}/${magazine.name} (${n + 1}).jpg`, // images[n + 1]
          interactive: true,
        }
      }
      $('#container').FlipBook({
        pageCallback: theKingIsBlackPageCallback,
        pages: magazine.pages,
        propertiesCallback: function (props) {
          props.cover.color = 0x000000
          return props
        },
        template: {
          html: 'templates/default-book-view.html',
          styles: ['css/short-white-book-view.css'],
          links: [
            {
              rel: 'stylesheet',
              href: 'css/font-awesome.min.css',
            },
          ],
          script: 'js/default-book-view.js',
          sounds: {
            startFlip: 'sounds/start-flip.mp3',
            endFlip: 'sounds/end-flip.mp3',
          },
        },
      })
    </script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
