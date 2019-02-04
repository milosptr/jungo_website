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

<body>

  <?php include "include/header.php" ?>

  <section id="portfolio-hero">
    <div class="hero-image"></div>
    <div class="page-subtitle">How we do it</div>
    <div class="scroll-element">Scroll</div>
    <div class="container">
      <div class="homepage-graph">
        <div class="graph-wrapper">
          <img src="images/graph/iks.svg" class="iks" />
          <img src="images/graph/dots-rect.svg" class="dots-rect" />
          <img src="images/graph/circle.svg" class="circle" />
          <img src="images/graph/line.svg" class="line" />
          <img src="images/graph/square.svg" class="square" />
          <img src="images/graph/x-rect.svg" class="x-rect" />
        </div>
      </div>
      <div class="row align-itmes-center">
        <div class="col-md-12 text-center position-relative">
          <h1 class="page-title">Portfolio</h1>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 root1">
          <p class="portfolio-title">Root1_</p>
        </div>
        <div class="col-md-4 geysis">
          <p class="portfolio-title">Geysis Bikarinn_</p>
        </div>
        <div class="col-md-4 marwear">
          <p class="portfolio-title">Mar Wear_</p>
        </div>
        <div class="col-md-4 root1">
          <p class="portfolio-title">Root1_</p>
        </div>
        <div class="col-md-4 geysis">
          <p class="portfolio-title">Geysis Bikarinn_</p>
        </div>
        <div class="col-md-4 marwear">
          <p class="portfolio-title">Mar Wear_</p>
        </div>
      </div>
    </div>
  </section>



  <?php include 'include/footer.php'; ?>

  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>