
<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package better_solutions
 *
 * @version 5.3.0
 */

 get_header();
?>



<!-- Hero Section start -->
<section id="hero" class="hero section">
    <div class="container">
        <div class="row align-items-center pt-5">
            <div class="col-lg-6">

              <h2 class="hero-heading">
                <span class="line1">Expert in</span> <br>
                <span class="line2">Apparel</span> <br>
                <span class="line4">Merchandising</span>
            </h2>

                <p class="lead">
                   If you are looking for a merchandiser who will help you grow your business through responsibility, dedication, and smart strategies <span class="fw-bold text-primary">- then you've come to the right place. </span><br>
                   
                    <h3 class="lead text-success ">Let's work together to create something exceptional!<span class="fw-bold text-primary"> Your success is my priority.</span></h3>
                </p>
                <div class="cta-buttons py-2">
                <a href="https://brightfuturei.com/about/" target="_blank" class="btn btn-primary">About Me</a>
                    <a href="https://brightfuturei.com/view-my-work/" target="_blank" class="btn btn-primary">View My Work</a>
                   
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/PROFILE1.png" alt="Portfolio Hero Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section end -->

<!-- Section Title -->
<div class="container rounded shadow-lg bg-white" >
    <h2 class="text-start fw-bold fs-2 fs-lg-1 text-lg-center border-bottom  border-3 border-info py-1 ">Why should you hire me?</h2>
   <h4 class="lead text-start text-lg-center "> If you want help growing your business.</h4>
      <div class="row align-items-center py-3">
      <div class="col-12 col-lg-4 mb-4 mb-lg-0 text-start text-lg-start ">
  <h2 class="fw-bold fs-4 fs-lg-1 servies-title"> I have the ability to take responsibility and the willingness to act accordingly.</h2>
  <p class="lead"> I work hard to provide on-time delivery and cost-effective sourcing for every order.</p>
</div>

        <div class="col-lg-8">
          <div class="row g-4">
            <!-- hire Item -->
            <div class="col-12 col-md-6"  >
              <div class="hire-item">
                <h3><a href="#">✅Product Sourcing</a></h3>
                <p>With years of experience, I can identify and connect with the right suppliers to ensure high-quality materials at competitive prices.</p>
              </div>
            </div>

            <div class="col-12 col-md-6"  >
              <div class="hire-item">
                <h3><a href="#">✅Order Management</a></h3>
                <p>From order confirmation to final shipment, I efficiently manage every step of the process to ensure a smooth flow.</p>
              </div>
            </div>

            <div class="col-12 col-md-6"  >
              <div class="hire-item">
                <h3><a href="#">✅Timely Delivery</a></h3>
                <p>I know how to plan and coordinate every detail to meet your delivery deadlines — because time is money.</p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="hire-item">
                <h3><a href="#">✅Cost Efficiency</a></h3>
                <p>I negotiate effectively to secure the best deals, helping you reduce costs and maximize profit without compromising quality.</p>
              </div>
            </div>
            <!-- End hire Items -->
          </div>
        </div>
      </div>
    </div>
  </div>




<?php get_footer(); ?>