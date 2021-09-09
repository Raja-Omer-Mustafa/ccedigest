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
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
<!-- swiper cdn -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/three.min.js"></script>
    <script src="js/libs/pdf.min.js"></script>

    <script src="js/dist/3dflipbook.min.js"></script>
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
