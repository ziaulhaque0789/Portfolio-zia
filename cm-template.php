<?php
/*
Template Name: CM
*/

// Process the form submission

?>

<?php get_header(); ?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602557870695275"
     crossorigin="anonymous"></script>

<!-- Hero Section -->
<section id="hero" class="hero section d-none d-md-block">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-lg-6">
                <h2 class="hero-heading">
                    <span class="line1">Essential to calculate</span> <br>
                    <span class="line2">Cost of making</span> <br>
                    <span class="line3">To</span> <br>
                    <span class="line4">Ensure profitability</span>
                </h2>

                <p class="lead">
                    The Cost of Making (C.M) refers to the total expense of manufacturing a garment, excluding fabric and trims. It includes worker, overheads, and other production costs. CM includes all the steps needed to turn fabric into a finished garment.
                </p>
                
                <div class="cta-buttons py-2">
                    <a href="https://brightfuturei.com/consumption/" target="_blank" class="btn btn-primary">Fabric Consumption</a>
                    <a href="https://brightfuturei.com/costing/" target="_blank" class="btn btn-primary">Costing</a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="hero-image text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cm.png" alt="Cost of Consumption Analysis" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!--consumption start-->
    <div class="container bg-white shadow-lg">
      <!-- Visible only on large screens and above (lg, xl, xxl) -->
<h2 class="display-6 fw-bold text-center border-bottom border-3 border-info py-1 d-none d-lg-block">
  Effective Way of Calculation of Garments Cost of Making (CM)
</h2>

<!-- Visible only on small and medium screens (xs, sm, md) -->
<h4 class="fw-bold text-center border-bottom border-3 border-info py-2 d-block d-lg-none">
  Effective Way of CM Calculation
</h4>



        <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
            <div class="col-lg-12 my-5"> <!--cm start-->
                <div class="card shadow-sm p-4">

                    <h3 class="text-center border-bottom  border-3 border-info py-1">Calculate CM in a simple approximation.</h3>
                   
                    <div class="row g-3">

                       
                        <div class="col-md-4">
                            <label for="quantityOfMachines" class="form-label">Quantity of machines</label>
                            <input type="text" id="quantityOfMachines" class="form-control" placeholder="Machines QTY">
                        </div>
                        <div class="col-md-4">
                            <label for="productionQuantity" class="form-label">Per day (10 hours)</label>
                            <input type="text" id="productionQuantity" class="form-control" placeholder="Production Quantity">
                        </div>
                
                        <div class="col-md-4">
                            
                           <label for="costPerMachine" class="form-label">Cost per machine</label>
                            <input type="text" id="costPerMachine" class="form-control" placeholder="$">
                            </div>

                    </div>
                

                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>C.M per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output6" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate6()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult6()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs6()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                
                </div>
            </div> <!--cm  end-->
        
           
        </div> <!--row end-->
 
      <div class="container py-5">

        <p class="lead d-none d-lg-block">
            This calculation is a general estimate. In reality, several additional factors affect the cost of production (CM), such as factory rent,
             business expenses, electricity and water bills, machine repair costs, the number of machines on a production floor, work shifts, 
             hours worked per month, and the production target per hour. 
            With these factors in mind, let's explore another mathematical problem to clarify our idea further.

        </p>

       

      <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
        <div class="col-lg-12 my-5"> <!--cm start-->
            <div class="card shadow-sm p-4">
                <h3 class="text-center">Let's explore another mathematical problem to further clarify our idea.</h3>
                        <svg width="100%" height="50">
                            <line x1="0" y1="25" x2="100%" y2="25" stroke="green" stroke-width="4" />
                        </svg>

                <div class="row g-3 mt-2">
                    <div class="col-md-4">
                        <label class="form-label" for="A" >Total monthly expenses</label>
                        <input type="text" id="A" class="form-control" placeholder="in $">
                    </div>
                    <div class="col-md-4">
                        <label for="B" class="form-label">Total number of machines used for production </label>
                        <input type="text" id="B" class="form-control" placeholder=" Quantity">
                    </div>
            
                    <div class="col-md-4">
                       <label for="C" class="form-label">Number of machines used per layout</label>
                        <input type="text" id="C" class="form-control" placeholder="Quantity">
                    </div>

                </div>

                <div class="row g-3 mt-2">
                    <div class="col-md-4">
                        <label for="D" class="form-label">Production target per hour</label>
                        <input type="text" id="D" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="col-md-4">
                        <label for="E" class="form-label">Working days in a month</label>
                        <input type="text" id="E" class="form-control" placeholder="How many days?">
                    </div>
            
                    <div class="col-md-4">
                       <label for="F" class="form-label">Working hours per day</label>
                        <input type="text" id="F" class="form-control" placeholder="How many hours?">
                    </div>

                </div>
            

                <div class="row g-3 my-3">
                    <div class="col-md-6">
                        <label for="" class="text-primary"><h3>C.M per dozen</h3></label>
                    </div>
                    <div class="col-md-6">
                        <h3 id="output15" class="bg-light text-dark"></h3>
                    </div>
                </div>
               
            
                <!-- Buttons -->
                <div class="row g-2">
                    <div class="col-md-4">
                        <button class="btn btn-primary w-100" onclick="calculate15()">Get result</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-success w-100" onclick="saveResult15()">Save result</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-danger w-100" onclick="clearInputs15()">Clear inputs</button>
                    </div>
                </div>
            
                <!-- Hidden textarea for saving result -->
                <textarea id="hiddenResult" class="d-none"></textarea>
            
            </div>
        </div> <!--cm  end-->
    
       
    </div> <!--row end-->
    </div>

    




<?php get_footer(); ?>