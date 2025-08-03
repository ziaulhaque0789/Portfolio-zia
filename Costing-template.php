<?php
/*
Template Name: Costing
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
                    <span class="line1">Smart</span> <br>
                    <span class="line2">Garment Costing</span> <br>
                    <span class="line3">for</span> <br>
                    <span class="line4">Maximum Profitability</span>
                </h2>

                <p class="lead">
                    Effective garment costing is the key to maximizing profitability while maintaining quality. By accurately calculating fabric, trims, worker and overhead costs, you can set competitive prices without compromising on quality. 
                </p>
                
                <div class="cta-buttons py-2">
                    <a href="https://brightfuturei.com/consumption/" target="_blank" class="btn btn-primary">Fabric Consumption</a>
                    <a href="https://brightfuturei.com/yarn-count/" target="_blank" class="btn btn-primary">Found Yarn Count</a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="hero-image text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cost.png" alt="Cost of Consumption Analysis" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!--consumption start-->
    <div class="container bg-white shadow-lg">
        <h2 class="display-6 fw-bold text-center border-bottom border-3 border-info py-1 d-none d-lg-block">Calculate Apparel Marketing Costing with Simple Input</h2>
        
        <!-- Visible only on small and medium screens (xs, sm, md) -->
<h4 class="fw-bold text-center border-bottom border-3 border-info py-2 d-block d-lg-none">
  Calculate Apparel Marketing Costing with Simple Input
</h4>

        <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
            <div class="col-lg-12 my-5"> <!--costing start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1">Enter 0 for not applicable options.</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="consumption" class="form-label">Consumption</label>
                            <input type="text" id="consumption" class="form-control" placeholder="Per dozen in kg">
                        </div>
                        <div class="col-md-4">
                            <label for="yarnPrice" class="form-label">Yarn Price</label>
                            <input type="text" id="yarnPrice" class="form-control" placeholder="Price per kg in $">
                        </div>

                        <div class="col-md-4">
                            <label for="knittingPrice" class="form-label">Knitting Price</label>
                            <input type="text" id="knittingPrice" class="form-control" placeholder="Price per kg in $">
                        </div>
                    </div>
                
                    <div class="row g-3 mt-2">
                        <div class="col-md-4">
                            <label for="spandex" class="form-label">Spandex</label>
                            <input type="text" id="spandex" class="form-control" placeholder="Per dozen in kg">
                        </div>
                        <div class="col-md-4">
                            <label for="spandexPrice" class="form-label">Spandex Price</label>
                            <input type="text" id="spandexPrice" class="form-control" placeholder="Price per kg in $">
                        </div>

                        <div class="col-md-4">
                            <label for="dyeingPrice" class="form-label">Dyeing Price</label>
                            <input type="text" id="dyeingPrice" class="form-control" placeholder="Price per kg in $">
                        </div>
                    </div>

                    <div class="row g-3 mt-2">
                        <div class="col-md-4">
                            <label for="alloverPrintPrice" class="form-label">Allover Print Price</label>
                            <input type="text" id="alloverPrintPrice" class="form-control" placeholder="Price per kg in $">
                        </div>
                        <div class="col-md-4">
                            <label for="chestPrintPrice" class="form-label">Chest Print Price</label>
                            <input type="text" id="chestPrintPrice" class="form-control" placeholder="Price per dozen in $">
                        </div>

                        <div class="col-md-4">
                            <label for="accessoriesPrice" class="form-label">Accessories Price</label>
                            <input type="text" id="accessoriesPrice" class="form-control" placeholder="Price per dozen in $">
                        </div>
                    </div>

                    <div class="row g-3 mt-2">
                        <div class="col-md-4">
                            <label for="costOfMaking" class="form-label">Cost of Making ( C.M )</label>
                            <input type="text" id="costOfMaking" class="form-control" placeholder="Price per dozen in $">
                        </div>
                        <div class="col-md-4">
                            <label for="commercialCharges" class="form-label">Commercial Charges</label>
                            <input type="text" id="commercialCharges" class="form-control" placeholder="Commercial charge to be added as a percentage %">
                        </div>

                        <div class="col-md-4">
                            <label for="handlingCharge" class="form-label">Handling Charge</label>
                            <input type="text" id="handlingCharge" class="form-control" placeholder="Handling charge to be added as a percentage %">
                        </div>
                    </div>
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Price per piece</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output7" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate7()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult7()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs7()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                
                </div>
            </div> <!--costing  end-->
        
           
        </div> <!--row end-->
 
      
    </div>

    




<?php get_footer(); ?>