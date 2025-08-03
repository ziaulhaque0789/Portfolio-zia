<?php
/*
Template Name: MerchandiserSOP
*/
?>

<?php get_header(); ?>

    
   <!-- Hero Section -->
   <section class="container-fluid position-relative py-5 my-5 px-3 text-white" style="background: linear-gradient(to right, #0d6efd, #6610f2); overflow: hidden;">
    
    <!-- SVG Pattern -->
    <svg class="position-absolute top-0 start-0 w-100 h-100 opacity-25 svg-bg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <pattern id="pattern" width="60" height="60" patternUnits="userSpaceOnUse">
          <circle cx="30" cy="30" r="1.5" fill="white" />
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#pattern)" />
    </svg>

    <!-- Hero Content -->
    <div class="container position-relative text-center z-1">
      <h1 class="display-4 fw-bold">Merchandiser Standard Operating Procedure (SOP)</h1>
      <p class="lead mt-3">Structured processes. Smooth operations. Consistent results.</p>
    

      
      <a href="https://brightfuturei.com/home/" target="_blank" class="btn btn-outline-light btn-lg px-4 fw-semibold">Back to Home</a>
    </div>
    </div>

  </section>

<div class="container">

  <!-- Accordion Section -->
  <h2 class="section-heading1 text-center">📚 SOP According Overview</h2>
  <div class="accordion" id="sopAccordion">

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingIntro">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIntro">
          SOP Introduction
        </button>
      </h2>
      <div id="collapseIntro" class="accordion-collapse collapse show" data-bs-parent="#sopAccordion">
        <div class="accordion-body">
            SOPs are step-by-step guides that help keep the merchandising process organized and smooth. 
            They make sure everything gets done the right way.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingMarketing">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMarketing">
          Marketing Considerations
        </button>
      </h2>
      <div id="collapseMarketing" class="accordion-collapse collapse" data-bs-parent="#sopAccordion">
        <div class="accordion-body">
            Focus on product quality, pricing, customer needs, and reliable buyers. These things help sell your product better and avoid risks.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingDev">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDev">
          Development Stage
        </button>
      </h2>
      <div id="collapseDev" class="accordion-collapse collapse" data-bs-parent="#sopAccordion">
        <div class="accordion-body">
            Talk to the buyer often, understand what they want, make sample products if needed, and make sure everyone agrees on the plan.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOrder">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrder">
          Order Confirmation
        </button>
      </h2>
      <div id="collapseOrder" class="accordion-collapse collapse" data-bs-parent="#sopAccordion">
        <div class="accordion-body">
            Once the buyer approves everything, get the order, prepare materials (BOM), plan timelines (TNA), and confirm payment and shipping details.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingProd">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProd">
          Production & Shipping
        </button>
      </h2>
      <div id="collapseProd" class="accordion-collapse collapse" data-bs-parent="#sopAccordion">
        <div class="accordion-body">
            Get materials ready, Pre-production meetings, start production, meet daily goals, check quality, inspections, book shipments, and stay in touch with the buyer until everything is delivered and paid for.
            
        </div>
      </div>
    </div>

  </div>

  <!-- Timeline Section -->
  <h2 class="section-heading1 text-center">🚚 Workflow Timeline</h2>
  <div class="timeline1">

    <div class="timeline1-step">
      <h5>🔍 Product & Market Assessment</h5>
      <p>Understand product differentiation, market trends and maintain high standards.</p>
    </div>

    <div class="timeline1-step">
      <h5>📞 Buyer Communication</h5>
      <p>Keep in touch with the buyer, understand needs, and confirm samples.</p>
    </div>

    <div class="timeline1-step">
      <h5>🧾 Order Finalization</h5>
      <p>Confirm price, receive PO, prepare BOM, and create the TNA calendar.</p>
    </div>

    <div class="timeline1-step">
      <h5>✅ Approvals & Planning</h5>
      <p>Get Lab Dip, trims, fabric approvals and set clear production schedules.</p>
    </div>

    <div class="timeline1-step">
      <h5>🏭 Production Execution</h5>
      <p>Hold pre-production meetings, ensure material readiness, and track targets.</p>
    </div>

    <div class="timeline1-step">
      <h5>📦 Shipping & Payment</h5>
      <p>Book final inspection, arrange shipment, hand over goods, and follow up for payment.</p>
    </div>

  </div>

</div>

<div class=" container text-center text-dark justify-content-center pb-5 mt-4">
    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/Marketing & Merchandising SOP.pdf" target="_blank" class="btn btn-outline-dark btn-lg px-4 fw-semibold">View S.O.P PDF</a>
  </div>
        
<?php get_footer(); ?>