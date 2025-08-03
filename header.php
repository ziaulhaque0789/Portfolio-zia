<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package better_solutions
 *
 * @version 5.3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!--
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602557870695275"
     crossorigin="anonymous"></script>
     
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-i9+2-8-i+1t"
     data-ad-client="ca-pub-3602557870695275"
     data-ad-slot="8481510652"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-3602557870695275"
     data-ad-slot="3149292921"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
     -->
     
  <meta charset="<?php bloginfo('charset'); ?>">
 <!-- Character Encoding -->
  <meta charset="UTF-8">

  <!-- Viewport for Mobile Responsiveness -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Portfolio – Apparel Merchandiser & Front-End Web Developer">
  
  <meta name="google-site-verification" content="bSm9zi7N_x5tGjXuBwtZr64Q8Yhur5U-BSqCwdchvW0" />
  
  <!-- Google Tag Manager -->

  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

 
<!-- Fixed Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="https://brightfuturei.com/home/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/apparel-merchadiser-logo.png" class="img-fluid rounded" alt="Logo" width="90">
        </a>

        <!-- Social Icons (Hidden on Large Screens) -->
        <div class="d-lg-none ms-auto me-3">

          <a href="https://www.facebook.com/ziayouright" class="social-icons"><button class="btn" style="background-color: #1877F2; color: #FFFFFF; border-radius: 5px;">
            <i class="bi bi-facebook"></i>
        </button></a>

        <a href="https://www.instagram.com/ziayouright" class="social-icons"><button class="btn text-white" style="background: linear-gradient(45deg, #833AB4, #E1306C, #FD1D1D, #F77737); border-radius: 5px; ">
          <i class="bi bi-instagram"></i>
      </button></a>
      <a href="https://www.linkedin.com/in/ziaul-haque-40b23a241?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3ByMB3o5kBR0iy8aRx%2B3Mx0g%3D%3D" class="social-icons"><button class="btn text-white" style="background-color: #0077B5; border-radius: 5px;">
        <i class="bi bi-linkedin "></i>
    </button></a>
        </div>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Navbar -->
        <div class="offcanvas offcanvas-end" id="offcanvasNavbar">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/home/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/about/">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/resume/">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/consumption/">Consumption</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/costing/" >Costing</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/yarn-count/">Yarn Count</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/cm/">CM</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/blog/">Blog</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="https://brightfuturei.com/contact/">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Social Icons (Visible on Large Screens) -->
        <div class="d-none d-lg-flex social-icons">
          <a href="https://www.facebook.com/ziayouright" class="social-icons"><button class="btn" style="background-color: #1877F2; color: #FFFFFF; border-radius: 5px;">
            <i class="bi bi-facebook"></i>
        </button></a>

        <a href="https://www.instagram.com/ziayouright" class="social-icons"><button class="btn text-white" style="background: linear-gradient(45deg, #833AB4, #E1306C, #FD1D1D, #F77737); border-radius: 5px; ">
          <i class="bi bi-instagram"></i>
      </button></a>
      <a href="https://www.linkedin.com/in/ziaul-haque-40b23a241?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3ByMB3o5kBR0iy8aRx%2B3Mx0g%3D%3D" class="social-icons"><button class="btn text-white" style="background-color: #0077B5; border-radius: 5px;">
        <i class="bi bi-linkedin "></i>
    </button></a>
        </div>
    </div>
</nav>