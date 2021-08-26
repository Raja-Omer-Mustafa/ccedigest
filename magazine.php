<?php
require 'include/config.php';
$id = $_GET['id'];
$magazines = [
    '1' => [
        'name' => '01-Feb-2015',
        'pages' => '99',
    ],
    '2' => [
        'name' => '01-March-2015',
        'pages' => '119',
    ],
    '3' => [
        'name' => '03-Aug-2014',
        'pages' => '120',
    ],
    '4' => [
        'name' => '03-May-2015',
        'pages' => '119',
    ],
    '5' => [
        'name' => '04-Jan-2015',
        'pages' => '150',
    ],
    '6' => [
        'name' => '04-May-2014',
        'pages' => '130',
    ],
    '7' => [
        'name' => '05-April-2015',
        'pages' => '150',
    ],
    '8' => [
        'name' => '05-Oct-2014',
        'pages' => '150',
    ],
    '9' => [
        'name' => '06-April-2014',
        'pages' => '106',
    ],
    '10' => [
        'name' => '07-Sept-2014',
        'pages' => '149',
    ],
    '11' => [
        'name' => '08-Feb-2015',
        'pages' => '130',
    ],
    '12' => [
        'name' => '08-March-2015',
        'pages' => '120',
    ],
    '13' => [
        'name' => '09-Nov-2014',
        'pages' => '150',
    ],
    '14' => [
        'name' => '10-Aug-2014',
        'pages' => '150',
    ],
    '15' => [
        'name' => '11-Jan-2015',
        'pages' => '150',
    ],
    '16' => [
        'name' => '11-May-2014',
        'pages' => '130',
    ],
    '17' => [
        'name' => '12-April-2015',
        'pages' => '150',
    ],
    '18' => [
        'name' => '12-Oct-2014',
        'pages' => '150',
    ],
    '19' => [
        'name' => '13april2014',
        'pages' => '120',
    ],
    '20' => [
        'name' => '14-Dec-2014',
        'pages' => '150',
    ],
    '21' => [
        'name' => '14-Sept-2014',
        'pages' => '150',
    ],
    '22' => [
        'name' => '15-Feb-2015',
        'pages' => '120',
    ],
    '23' => [
        'name' => '15-March-2015',
        'pages' => '120',
    ],
    '24' => [
        'name' => '16feb2014',
        'pages' => '110',
    ],
    '25' => [
        'name' => '16-Nov-2014',
        'pages' => '150',
    ],
    '26' => [
        'name' => '17-Aug-2014',
        'pages' => '150',
    ],
    '27' => [
        'name' => '18-Jan-2015',
        'pages' => '150',
    ],
    '28' => [
        'name' => '18-May-2014',
        'pages' => '160',
    ],
    '29' => [
        'name' => '19-April-2015',
        'pages' => '120',
    ],
    '30' => [
        'name' => '19Jan2014',
        'pages' => '120',
    ],
    '31' => [
        'name' => '19-Oct-2014',
        'pages' => '120',
    ],
    '32' => [
        'name' => '20april2014',
        'pages' => '110',
    ],
    '33' => [
        'name' => '21-Dec-2014',
        'pages' => '150',
    ],
    '34' => [
        'name' => '21-Sept-2014',
        'pages' => '150',
    ],
    '35' => [
        'name' => '22-Feb-2015',
        'pages' => '120',
    ],
    '36' => [
        'name' => '22-March-2015',
        'pages' => '150',
    ],
    '37' => [
        'name' => '23-Nov-2014',
        'pages' => '150',
    ],
    '38' => [
        'name' => '24-Aug-2014',
        'pages' => '150',
    ],
    '39' => [
        'name' => '25-Jan-2015',
        'pages' => '150',
    ],
    '40' => [
        'name' => '25-May-2014',
        'pages' => '140',
    ],
    '41' => [
        'name' => '26-April-2015',
        'pages' => '150',
    ],
    '42' => [
        'name' => '26jan2014',
        'pages' => '102',
    ],
    '43' => [
        'name' => '26-Oct-2014',
        'pages' => '150',
    ],
    '44' => [
        'name' => '27april2014',
        'pages' => '120',
    ],
    '45' => [
        'name' => '28-Dec-2014',
        'pages' => '150',
    ],
    '46' => [
        'name' => '28-Sept-2014',
        'pages' => '150',
    ],
    '47' => [
        'name' => '29-March-2015',
        'pages' => '150',
    ],
    '48' => [
        'name' => '30-Nov-2014',
        'pages' => '150',
    ],
    '49' => [
        'name' => '31-Aug-2014',
        'pages' => '150',
    ],
    '50' => [
        'name' => 'Magazine June 15th - 21st, 2014',
        'pages' => '150',
    ],
];
$magazine = $magazines[$id];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Magazine</title>
    <meta charset="utf-8" />

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
        <nav id="navbar" class="navbar order-last order-lg-0 ms-1 ">
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
    <script src="js/libs/jquery.min.js"></script>
    <script src="js/libs/html2canvas.min.js"></script>
    <script src="js/libs/three.min.js"></script>
    <script src="js/libs/pdf.min.js"></script>

    <script src="js/dist/3dflipbook.js"></script>
    <script type="text/javascript">
      var magazine = JSON.parse('<?= json_encode($magazine) ?>');
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
      // }
    </script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
