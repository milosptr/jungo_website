<?php include 'config.php'; ?>

<div id="preloader">
  <span class="loading-image"></span>
  <span class="loading-image-fill"></span>
</div>

<nav id="navigation">
  <div class="row align-items-center justify-content-between">
    <div class="col-md-4 site-logo">
      <a href="<?php echo $fullPath; ?>"><img src="<?php echo $fullPath; ?>images/jungo_logo.svg" /></a>
    </div>
    <div class="col-md-4 text-right">
      <div class="hamburger-button">
        <div class="close-button"></div>
        <span class="hamburger-title">MENU</span>
        <button class="hamburger hamburger--emphatic" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
</nav>

<section id="hamburger-menu">
  <div class="blur"></div>
  <div class="hamburger-sidebar">
    <div class="hamburger-content">
      <ul>
        <li>
          <a href="<?php echo $fullPath; ?>about-us.php" class="nav-item">About Us</a>
          <ul class="sub-menu">
            <li><a href="<?php echo $fullPath; ?>about-us.php#about-us" class="nav-item">About Us</a></li>
            <li><a href="<?php echo $fullPath; ?>about-us.php#our-team" class="nav-item">Our Team</a></li>
            <li><a href="<?php echo $fullPath; ?>about-us.php#google-map" class="nav-item">Contact</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo $fullPath; ?>services.php" class="nav-item">Services</a>
          <ul class="sub-menu">
          <li><a href="<?php echo $fullPath; ?>services.php#outsourcing" class="nav-item">Outsourcing</a></li>
            <li><a href="<?php echo $fullPath; ?>services.php#development" class="nav-item">Development</a></li>
            <li><a href="<?php echo $fullPath; ?>services.php#marketing" class="nav-item">Marketing</a></li>
            <li><a href="<?php echo $fullPath; ?>services.php#design" class="nav-item">Design</a></li>
            <li><a href="<?php echo $fullPath; ?>services.php#customer-support" class="nav-item">Customer Support</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo $fullPath; ?>projects.php" class="nav-item">Projects</a>  
        </li>
      </ul>
      <ul class="social">
        <li><a href="https://www.facebook.com/jungodigital/" target="_blank"><img src="<?php echo $fullPath; ?>images/icons/facebook.svg" alt="" width="12" height="24"></a></li>
        <li><a href="https://www.instagram.com/jungo_digital_solutions/" target="_blank"><img src="<?php echo $fullPath; ?>images/icons/instagram.svg" alt="" width="24" height="24"></a></li>
        <li><a href="https://www.linkedin.com/company/jungo-digital-solution/" target="_blank"><img src="<?php echo $fullPath; ?>images/icons/linkedin.svg" alt="" width="24" height="24"></a></li>
      </ul>
      <div class="copyright">© 2019 Jungo, all rights reserved.</div>
    </div>
  </div>
</section>