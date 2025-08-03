<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

    
   <!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-lg-6">
                
                <h2 class="hero-heading">
                    <span class="line2">Knock Knock !</span> <br>
                    <span class="line4">Who is There</span>
                </h2>
                <p class="lead">
                    Sometimes, all it takes is a simple knock to open the door to something great. Life brings challenges, but it also brings endless opportunities.
                     When you knock with courage, patience, and trust in Allah, the door will open to something better than you imagined.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="Portfolio Hero Image" class="img-fluid rounded" >
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->

  <!-- Section Title -->
  <div class="container shadow-lg bg-white rounded " >
    <h2 class="border-bottom text-center display-5 fw-bold border-3 border-info py-1">Get in touch</h2>
     
<div class="container py-3">
    
      <div class="row g-5">
          <!-- Contact Info -->
          <div class="col-lg-6">
             
                  
                  <h2 class="display-6  mb-4">I’d Love to Hear from You!</h2>
                  <p class="lead mb-4">Whether you have a question, a project idea, or just want to say hello, feel free to reach out. Your message is always welcome!</p>
                  <div class="mt-4">
                      <div class="d-flex align-items-center mb-3">
                          <i class="bi bi-envelope-at me-3 fs-4"></i>
                          <span>zia@brightfuturei.com</span>
                      </div>
                      <div class="d-flex align-items-center mb-3">
                          <i class="bi bi-telephone me-3 fs-4"></i>
                          <span>+88 01327227048</span>
                      </div>
                      <div class="d-flex align-items-center mb-3">
                          <i class="bi bi-geo-alt me-3 fs-4"></i>
                          <span>Mirpur-12, Dhaka, Bangladesh</span>
                      </div>
                      <a href="https://maps.app.goo.gl/Jf8cYmEV6FKsjPVx8" class="text-primary text-decoration-none d-inline-flex align-items-center">
                          Open Map <i class="bi bi-arrow-right ms-2"></i>
                      </a>
                  </div>
              </div>
         
          
          <!-- Contact Form -->
          <div class="col-lg-6">
              <div class="card shadow-sm" >
                  <div class="card-body p-4 p-lg-5">
                      <form id="contactForm" class="row gy-3">
                          <div class="col-12">
                              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                          </div>
                          <div class="col-12">
                              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                          </div>
                          <div class="col-12">
                              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                          </div>
                          <div class="col-12">
                              <textarea name="message" rows="6" class="form-control" placeholder="Message" required></textarea>
                          </div>
                          <div class="col-12 text-center">
                              <button type="submit" class="btn btn-primary w-100">Submit Message</button>
                          </div>
                      </form>
                      <div id="response" class="mt-3 text-center text-primary"></div>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>
<!-- Contact Section --> 
        
<?php get_footer(); ?>