<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portfolio - Jungo Digital Solutions</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/jungo-favikon-04.png" type="image/x-icon">

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css" />
</head>

<body class="projects-page">

  <?php include "include/header.php" ?>

  <section id="portfolio-hero">
    <div class="hero-image"></div>
  </section>

  <section id="portfolio">
      <div class="row full-height align-items-center">
        <div class="col-md-4 portfolio-navigation">
          <div class="page-title">Projects</div>
          <div class="projects-backBtn" onclick="window.location.href='/about-us.php#our-clients'"><span>❮</span>Our Services</div>
          <ul>
            <li class="active">Websites</li>
            <li>Mobile Apps</li>
            <li>Branding</li>
            <li>Print Design</li>
            <li>Video & Animations</li>
            <li>Social Media</li>
          </ul>
          <div class="apply-project">LET'S MAKE THINGS TOGETHER</div>
        </div>
        <div class="col-md-8 projects-box">
          <div class="row">
            <div class="col-md-4 project-box lightgrey" data-project="websites">
              <a href="/projects/marwear-iceland.php">
                <div class="project-title">MarWear Iceland</div>
                <img src="images/projects/websites/marwear-iceland.svg" class="project-image" />
              </a>
            </div>
            <div class="col-md-4 project-box lightgrey" data-project="websites">
              <a href="/projects/marwear-canada.php">
                <div class="project-title">MarWear Canada</div>
                <img src="images/projects/websites/marwear-canada.svg" class="project-image" />
              </a>
            </div>
            <div class="col-md-4 project-box darkgrey" data-project="websites">
              <a href="/projects/route1.php">
                <div class="project-title">Route1</div>
                <img src="images/projects/websites/route1.svg" class="project-image" />
              </a>
            </div>
            <div class="col-md-4 project-box lightblue" data-project="websites">
              <a href="/projects/icrs.php">
                <div class="project-title">ICRS</div>
                <img src="images/projects/websites/icrs.svg" class="project-image" />
              </a>
            </div>
            <div class="col-md-4 project-box yellow" data-project="websites">
              <a href="/projects/auto.php">
                <div class="project-title">Auto</div>
                <img src="images/projects/websites/auto.svg" class="project-image" />
              </a>
            </div>
            <div class="col-md-4 project-box black" data-project="websites">
              <a href="/projects/jungo.php">
                <div class="project-title">Jungo</div>
                <img src="images/projects/websites/jungo.svg" class="project-image" />
              </a>
            </div>
            <div class="col-md-4 project-box navyblue" data-project="mobile-apps">
                <div class="project-title">CPS_</div>
                <img src="images/projects/mobile-apps/cps.png" class="project-image" width="190" />
            </div>
            <div class="col-md-4 project-box" data-project="branding">
                <div class="project-title">Logo Design_</div>
                <img src="images/projects/logo/route1.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box" data-project="branding">
                <div class="project-title">Logo Design_</div>
                <img src="images/projects/logo/icrs.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box" data-project="branding">
                <div class="project-title">Logo Design_</div>
                <img src="images/projects/logo/auto.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box" data-project="branding">
                <div class="project-title">Logo Design_</div>
                <img src="images/projects/logo/orange.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box" data-project="branding">
                <div class="project-title">Logo Design_</div>
                <img src="images/projects/logo/marsupplies.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box align-items-center" data-project="branding">
                <div class="project-title">Corporate Identity_</div>
                <img src="images/projects/logo/jungo.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box white" data-project="print-design">
                <div class="project-title">Mar Wear & Voot Beita Catalogue_</div>
                <img src="images/projects/print-design/mw-voot-catalogue.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box navyblue" data-project="print-design">
                <div class="project-title">Mar Wear Rollup Banner_</div>
                <img src="images/projects/print-design/mw-rollup-banner.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box white" data-project="print-design">
                <div class="project-title">Mar Wear Glove Brochure_</div>
                <img src="images/projects/print-design/mw-glove-brochure.svg" class="project-image" />
            </div>
            <div class="col-md-4 project-box black" data-project="print-design">
                <div class="project-title">Voot Beita & Hampidjan Theater Flyer</div>
                <img src="images/projects/print-design/voot-theater-flyer.svg" class="project-image" />
            </div>
            <div class="back-to-top-large">BACK TO TOP <img src="images/icons/arrow-up.svg" alt=""></div>
          </div>
        </div>
      </div>
  </section>

  <img src="images/icons/backtotop.svg" class="back-to-top-small">

  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/projects.js"></script>
</body>

</html>