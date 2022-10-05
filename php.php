<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Stylish Portfolio - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- W3School icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body> 
    <?php 
    include_once 'navporto.php';
    ?>
    <!-- PORTOFOLIO -->
    <section class="content-section" id="portfolio">
      <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row gx-0">
          <div class="col-lg-6">
            <a class="portfolio-item" href="html.php">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">HTML</div>
                  <p class="mb-0">
                    HTML adalah singkatan dari Hypertext Markup Language, yaitu
                    bahasa markup standar untuk membuat dan menyusun halaman dan
                    aplikasi web..
                  </p>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/HTML.jpg" alt="..." />
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="javascript.php">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">JAVASCRIPT</div>
                  <p class="mb-0">
                    JavaScript adalah skrip pemrograman ringan yang umumnya
                    digunakan oleh developer untuk menciptakan interaksi yang
                    lebih dinamis pada halaman web, aplikasi, server, atau game.
                  </p>
                </div>
              </div>
              <img
                class="img-fluid"
                src="assets/img/JAVASCRIPT.jpeg"
                alt="..."
              />
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="php.php">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">PHP</div>
                  <p class="mb-0">
                    PHP adalah bahasa penulisan skrip open-source yang biasanya
                    digunakan dalam pemrograman atau pengembangan website.
                  </p>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/PHP.png" alt="..." />
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
              <div class="caption">
                <div class="caption-content">
                  <div class="h1">WHAT NEXT?</div>
                </div>
              </div>
              <img
                class="img-fluid"
                width="450"
                src="assets/img/next.jpg"
                alt="..."
              />
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
