<?php
/*
Template Name: Consumption
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
                    <span class="line1">Accurate</span> <br>
                    <span class="line2">Fabric Consumption</span> <br>
                    <span class="line3">to</span> <br>
                    <span class="line4">Support Your Factory’s Growth</span>
                </h2>

                <p class="lead">
                    Optimize your apparel production costs with precise consumption analysis. Achieve cost savings while maintaining high-quality standards to support your factory’s growth.
                </p>
                
                <div class="cta-buttons py-2">
                    <a href="https://brightfuturei.com/costing/" target="_blank" class="btn btn-primary">Costing</a>
                    <a href="https://brightfuturei.com/yarn-count/" target="_blank" class="btn btn-primary">Found Yarn Count</a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="hero-image text-center">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/consumption.png" alt="Cost of Consumption Analysis" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!--consumption start-->

    <div class="container bg-white shadow-lg">
        <h2 class="display-5 fw-bold text-start border-bottom  border-3 border-info py-1">Fabric consumption for initial costing</h2>

        <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
            <div class="col-lg-6 my-5"> <!--body co start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1">Body consumption for all knitted tops</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="body_length" class="form-label">Body length</label>
                            <input type="text" id="body_length" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="chest" class="form-label">Chest</label>
                            <input type="text" id="chest" class="form-control" placeholder="By Centimetres">
                        </div>
                    </div>
                
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label for="sleeve_length" class="form-label">Sleeve length</label>
                            <input type="text" id="sleeve_length" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="gsm" class="form-label">Body Fabric GSM</label>
                            <input type="text" id="gsm" class="form-control" placeholder="Put GSM">
                        </div>
                    </div>
                
                    <div class="mt-3">
                        <label for="wastage" class="form-label">Wastage %</label>
                        <input type="text" id="wastage" class="form-control" placeholder="Put Wastage % if N/A then put 0">
                    </div>
                
                
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Consumption per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                
                </div>
            </div> <!--body co end-->
        
            <div class="col-lg-6 my-5"> <!--neck rib co start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1">Neck-Rib consumption for all knitted tops</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="neck_width" class="form-label">Neck Width</label>
                            <input type="text" id="neck_width" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="rib_height" class="form-label">Rib Height</label>
                            <input type="text" id="rib_height" class="form-control" placeholder="By Centimetres">
                        </div>
                    </div>
                
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label for="front_neckdrop" class="form-label">Front Neck Drop</label>
                            <input type="text" id="front_neckdrop" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="gsm1" class="form-label">Rib GSM</label>
                            <input type="text" id="gsm1" class="form-control" placeholder="Put GSM">
                        </div>
                    </div>
                
                    <div class="mt-3">
                        <label for="wastage1" class="form-label">Wastage %</label>
                        <input type="text" id="wastage1" class="form-control" placeholder="Put Wastage % if N/A then put 0">
                    </div>
                
                
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Consumption per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output1" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate1()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult1()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs1()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult1" class="d-none"></textarea>
                </div>
            </div><!--neck rib co start-->
        </div> <!--row end-->

        <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
            <div class="col-lg-6 my-5"> <!--trouser co start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1">Basic trouser or legging consumption</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="front_rise" class="form-label">Front Rise</label>
                            <input type="text" id="front_rise" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="inseam_length" class="form-label">Inseam Length</label>
                            <input type="text" id="inseam_length" class="form-control" placeholder="By Centimetres">
                        </div>
                    </div>
                
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label for="back_rise" class="form-label">Back Rise</label>
                            <input type="text" id="back_rise" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="thai" class="form-label">Thai</label>
                            <input type="text" id="thai" class="form-control" placeholder="By Centimetres">
                        </div>
                    </div>

                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label for="waistBandHeight" class="form-label">Waistband Height</label>
                            <input type="text" id="waistBandHeight" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="gsm2" class="form-label">Main Fabric GSM</label>
                            <input type="text" id="gsm2" class="form-control" placeholder="Put GSM">
                        </div>
                    </div>
                
                    <div class="mt-3">
                        <label for="wastage2" class="form-label">Wastage %</label>
                        <input type="text" id="wastage2" class="form-control" placeholder="Put Wastage % if N/A then put 0">
                    </div>
                
                
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Consumption per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output3" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate3()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult3()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs3()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                
                </div>
            </div> <!--trouser co end-->
        
            <div class="col-lg-6 my-5"> <!--nPocket consumption for all knitted trouser start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1"> Back Pocket Consumption for Trousers & Front Pocket Consumption for Polo-Shirts</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="pocket_width" class="form-label">Pocket Width</label>
                            <input type="text" id="pocket_width" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-6">
                            <label for="pocket_height" class="form-label">Pocket Height</label>
                            <input type="text" id="pocket_height" class="form-control" placeholder="By Centimetres">
                        </div>
                    </div>
                
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label for="gsm8" class="form-label">Fabric GSM</label>
                            <input type="text" id="gsm8" class="form-control" placeholder="Put GSM">
                        </div>
                        <div class="col-md-6">
                            <label for="wastage8" class="form-label">Wastage %</label>
                            <input type="text" id="wastage8" class="form-control" placeholder="Put Wastage % if N/A then put 0">
                        </div>
                    </div>
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Consumption per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output8" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate8()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult8()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs8()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                </div>
            </div><!--Pocket consumption for all knitted trouser end-->
        </div> <!--row end-->

        <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
            <div class="col-lg-6 my-5"> <!--collar co start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1">Basic polo-shirt collar consumption</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="collarLength" class="form-label">Collar Length</label>
                            <input type="text" id="collarLength" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-4">
                            <label for="collarHeight" class="form-label">Collar Height</label>
                            <input type="text" id="collarHeight" class="form-control" placeholder="By Centimetres">
                        </div>

                        <div class="col-md-4">
                            <label for="wastage9" class="form-label">Wastage %</label>
                            <input type="text" id="wastage9" class="form-control" placeholder="Put Wastage %  if N/A then put 0">
                        </div>
                    </div>
                
                
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Consumption per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output9" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate9()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult9()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs9()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                
                </div>
            </div> <!--COLLAR co end-->
        
            <div class="col-lg-6 my-5"> <!--Basic polo-shirt cuff consumption start-->
                <div class="card shadow-sm p-4">
                    <h2 class="text-center border-bottom  border-3 border-info py-1"> Basic polo-shirt cuff consumption</h2>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="sleeveOpening" class="form-label">Sleeve Opening</label>
                            <input type="text" id="sleeveOpening" class="form-control" placeholder="By Centimetres">
                        </div>
                        <div class="col-md-4">
                            <label for="cuffHeight" class="form-label">Cuff Height</label>
                            <input type="text" id="cuffHeight" class="form-control" placeholder="By Centimetres">
                        </div>

                        <div class="col-md-4">
                            <label for="wastage10" class="form-label">Wastage %</label>
                            <input type="text" id="wastage10" class="form-control" placeholder="Put Wastage %  if N/A then put 0">
                        </div>
                    </div>
                
                
                
                    <div class="row g-3 my-3">
                        <div class="col-md-6">
                            <label for="" class="text-primary"><h3>Consumption per dozen</h3></label>
                        </div>
                        <div class="col-md-6">
                            <h3 id="output10" class="bg-light text-dark"></h3>
                        </div>
                    </div>
                   
                
                    <!-- Buttons -->
                    <div class="row g-2">
                        <div class="col-md-4">
                            <button class="btn btn-primary w-100" onclick="calculate10()">Get result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success w-100" onclick="saveResult10()">Save result</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger w-100" onclick="clearInputs10()">Clear inputs</button>
                        </div>
                    </div>
                
                    <!-- Hidden textarea for saving result -->
                    <textarea id="hiddenResult" class="d-none"></textarea>
                </div>
            </div><!--Basic polo-shirt cuff consumption end-->
        </div> <!--row end-->
    </div>




<?php get_footer(); ?>