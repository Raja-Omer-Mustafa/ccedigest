<?php
  require 'include/config.php';
  $id = $_GET["id"];
  $magazines = [
    '1' => [
      'name' => '01-Feb-2015',
      'pages' => '99'
    ],
    '2' => [
      'name' => '01-March-2015',
      'pages' => '119'
    ],
    '3' => [
      'name' => '03-Aug-2014',
      'pages' => '120'
    ],
    '4' => [
      'name' => '03-May-2015',
      'pages' => '119'
    ],
    '5' => [
      'name' => '04-Jan-2015',
      'pages' => '150'
    ],
    '6' => [
      'name' => '04-May-2014',
      'pages' => '130'
    ],
    '7' => [
      'name' => '05-April-2015',
      'pages' => '150'
    ],
    '8' => [
      'name' => '05-Oct-2014',
      'pages' => '150'
    ],
    '9' => [
      'name' => '06-April-2014',
      'pages' => '106'
    ],
    '10' => [
      'name' => '07-Sept-2014',
      'pages' => '149'
    ],
    '11' => [
      'name' => '08-Feb-2015',
      'pages' => '130'
    ],
    '12' => [
      'name' => '08-March-2015',
      'pages' => '120'
    ],
    '13' => [
      'name' => '09-Nov-2014',
      'pages' => '150'
    ],
    '14' => [
      'name' => '10-Aug-2014',
      'pages' => '150'
    ],
    '15' => [
      'name' => '11-Jan-2015',
      'pages' => '150'
    ],
    '16' => [
      'name' => '11-May-2014',
      'pages' => '130'
    ],
    '17' => [
      'name' => '12-April-2015',
      'pages' => '150'
    ],
    '18' => [
      'name' => '12-Oct-2014',
      'pages' => '150'
    ],
    '19' => [
      'name' => '13april2014',
      'pages' => '120'
    ],
    '20' => [
      'name' => '14-Dec-2014',
      'pages' => '150'
    ],
    '21' => [
      'name' => '14-Sept-2014',
      'pages' => '150'
    ],
    '22' => [
      'name' => '15-Feb-2015',
      'pages' => '120'
    ],
    '23' => [
      'name' => '15-March-2015',
      'pages' => '120'
    ],
    '24' => [
      'name' => '16feb2014',
      'pages' => '110'
    ],
    '25' => [
      'name' => '16-Nov-2014',
      'pages' => '150'
    ],
    '26' => [
      'name' => '17-Aug-2014',
      'pages' => '150'
    ],
    '27' => [
      'name' => '18-Jan-2015',
      'pages' => '150'
    ],
    '28' => [
      'name' => '18-May-2014',
      'pages' => '160'
    ],
    '29' => [
      'name' => '19-April-2015',
      'pages' => '120'
    ],
    '30' => [
      'name' => '19Jan2014',
      'pages' => '120'
    ],
    '31' => [
      'name' => '19-Oct-2014',
      'pages' => '120'
    ],
    '32' => [
      'name' => '20april2014',
      'pages' => '110'
    ],
    '33' => [
      'name' => '21-Dec-2014',
      'pages' => '150'
    ],
    '34' => [
      'name' => '21-Sept-2014',
      'pages' => '150'
    ],
    '35' => [
      'name' => '22-Feb-2015',
      'pages' => '120'
    ],
    '36' => [
      'name' => '22-March-2015',
      'pages' => '150'
    ],
    '37' => [
      'name' => '23-Nov-2014',
      'pages' => '150'
    ],
    '38' => [
      'name' => '24-Aug-2014',
      'pages' => '150'
    ],
    '39' => [
      'name' => '25-Jan-2015',
      'pages' => '150'
    ],
    '40' => [
      'name' => '25-May-2014',
      'pages' => '140'
    ],
    '41' => [
      'name' => '26-April-2015',
      'pages' => '150'
    ],
    '42' => [
      'name' => '26jan2014',
      'pages' => '102'
    ],
    '43' => [
      'name' => '26-Oct-2014',
      'pages' => '150'
    ],
    '44' => [
      'name' => '27april2014',
      'pages' => '120'
    ],
    '45' => [
      'name' => '28-Dec-2014',
      'pages' => '150'
    ],
    '46' => [
      'name' => '28-Sept-2014',
      'pages' => '150'
    ],
    '47' => [
      'name' => '29-March-2015',
      'pages' => '150'
    ],
    '48' => [
      'name' => '30-Nov-2014',
      'pages' => '150'
    ],
    '49' => [
      'name' => '31-Aug-2014',
      'pages' => '150'
    ],
    '50' => [
      'name' => 'Magazine June 15th - 21st, 2014',
      'pages' => '150'
    ]
  ];
  $magazine = $magazines[$id];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Magazine</title>
    <meta charset="utf-8" />
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

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
        <h1 class="logo me-auto me-lg-0"><a href="index.html">cceDigest</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0 ms-1 ">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="advertise-with-us.html">Advertise with us</a></li>
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li>
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
      console.log(`${baseurl}${magazine.name}/${magazine.name} (1).jpg`);
      var images = {
        '1': 'public/books/image/theKingIsBlack/1.jpg',
        '2': 'public/books/image/theKingIsBlack/2.jpg',
        '3': 'public/books/image/theKingIsBlack/3.jpg',
        '4': 'public/books/image/theKingIsBlack/4.jpg',
        '5': 'public/books/image/theKingIsBlack/5.jpg',
        '6': 'public/books/image/theKingIsBlack/6.jpg',
        '7': 'public/books/image/theKingIsBlack/7.jpg',
        '8': 'public/books/image/theKingIsBlack/8.jpg',
        '9': 'public/books/image/theKingIsBlack/9.jpg',
        '10': 'public/books/image/theKingIsBlack/10.jpg',
        '11': 'public/books/image/theKingIsBlack/11.jpg',
        '12': 'public/books/image/theKingIsBlack/12.jpg',
        '13': 'public/books/image/theKingIsBlack/13.jpg',
        '14': 'public/books/image/theKingIsBlack/14.jpg',
        '15': 'public/books/image/theKingIsBlack/15.jpg',
        '16': 'public/books/image/theKingIsBlack/16.jpg',
        '17': 'public/books/image/theKingIsBlack/17.jpg',
        '18': 'public/books/image/theKingIsBlack/18.jpg',
        '19': 'public/books/image/theKingIsBlack/19.jpg',
        '20': 'public/books/image/theKingIsBlack/20.jpg',
        '21': 'public/books/image/theKingIsBlack/21.jpg',
        '22': 'public/books/image/theKingIsBlack/22.jpg',
        '23': 'public/books/image/theKingIsBlack/23.jpg',
        '24': 'public/books/image/theKingIsBlack/24.jpg',
        '25': 'public/books/image/theKingIsBlack/25.jpg',
        '26': 'public/books/image/theKingIsBlack/26.jpg',
        '27': 'public/books/image/theKingIsBlack/27.jpg',
        '28': 'public/books/image/theKingIsBlack/28.jpg',
        '29': 'public/books/image/theKingIsBlack/29.jpg',
        '30': 'public/books/image/theKingIsBlack/30.jpg',
        '31': 'public/books/image/theKingIsBlack/31.jpg',
        '32': 'public/books/image/theKingIsBlack/32.jpg',
        '33': 'public/books/image/theKingIsBlack/33.jpg',
        '34': 'public/books/image/theKingIsBlack/34.jpg',
        '35': 'public/books/image/theKingIsBlack/35.jpg',
        '36': 'public/books/image/theKingIsBlack/36.jpg',
        '37': 'public/books/image/theKingIsBlack/37.jpg',
        '38': 'public/books/image/theKingIsBlack/38.jpg',
        '39': 'public/books/image/theKingIsBlack/39.jpg',
        '40': 'public/books/image/theKingIsBlack/40.jpg',
        '41':
          'https://drive.google.com/uc?export=view&id=1BW0gUspYPfbrn6Yw7nWWKIQ3xWpLze4V',
        '42':
          'https://drive.google.com/uc?export=view&id=1ic8uhuzLkDzVHjq-mdDojh0VqCQeecjI',
      }
      // // Sample 0 {
      // $('#container').FlipBook({
      //   pdf: 'public/books/pdf/FoxitPdfSdk.pdf',
      //   template: {
      //     html: 'templates/default-book-view.html',
      //     styles: [
      //       'css/short-black-book-view.css'
      //     ],
      //     links: [
      //       {
      //         rel: 'stylesheet',
      //         href: 'css/font-awesome.min.css'
      //       }
      //     ],
      //     script: 'js/default-book-view.js'
      //   }
      // });
      // // }

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

      // // Sample 2 {
      // $('#container').FlipBook({
      //   pdf: 'public/books/pdf/CondoLiving.pdf',
      //   template: {
      //     html: 'templates/default-book-view.html',
      //     styles: [
      //       'css/white-book-view.css'
      //     ],
      //     links: [
      //       {
      //         rel: 'stylesheet',
      //         href: 'css/font-awesome.min.css'
      //       }
      //     ],
      //     script: 'js/default-book-view.js'
      //   }
      // });
      // // }

      // // Sample 3 {
      // $('#container').FlipBook({
      //   pdf: 'public/books/pdf/TheThreeMusketeers.pdf',
      //   propertiesCallback: function(props) {
      //     props.page.depth /= 2.5;
      //     props.cover.padding = 0.002;
      //     return props;
      //   },
      //   template: {
      //     html: 'templates/default-book-view.html',
      //     styles: [
      //       'css/short-black-book-view.css'
      //     ],
      //     links: [
      //       {
      //         rel: 'stylesheet',
      //         href: 'css/font-awesome.min.css'
      //       }
      //     ],
      //     script: 'js/default-book-view.js'
      //   }
      // });
      // // }

      // // Sample 4 {
      // function preview(n) {
      //   return {
      //     type: 'html',
      //     src: 'public/books/html/preview/'+(n%3+1)+'.html',
      //     interactive: true
      //   };
      // }
      //
      // $('#container').FlipBook({
      //   pageCallback: preview,
      //   pages: 20,
      //   propertiesCallback: function(props) {
      //     props.sheet.color = 0x008080;
      //     props.cover.padding = 0.002;
      //     return props;
      //   },
      //   template: {
      //     html: 'templates/default-book-view.html',
      //     styles: [
      //       'css/black-book-view.css'
      //     ],
      //     links: [
      //       {
      //         rel: 'stylesheet',
      //         href: 'css/font-awesome.min.css'
      //       }
      //     ],
      //     script: 'js/default-book-view.js'
      //   }
      // });
      // // }
    </script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
