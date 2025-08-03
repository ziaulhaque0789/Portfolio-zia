<?php
/*
Template Name: yarn-Count
*/

// Process the form submission

?>

<?php get_header(); ?>
<!--
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602557870695275"
     crossorigin="anonymous"></script>
     
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-3602557870695275"
     data-ad-slot="9331557897"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> -->

<!-- Hero Section -->
<section id="hero" class="hero section d-none d-md-block">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-lg-6">
                <h2 class="hero-heading">
                    <span class="line1">Accurate</span> <br>
                    <span class="line2">Yarn Count</span> <br>
                    <span class="line3">Ensures</span> <br>
                    <span class="line4">Premium Fabric Quality</span>
                </h2>

                <p class="lead">
                    Determining the right yarn count is essential for high-quality fabrics. It affects texture, durability, and overall fabric performance. Accurate yarn count ensures better consistency and superior results in garment production. 
                </p>
                
                <div class="cta-buttons py-2">
                    <a href="https://brightfuturei.com/costing/" target="_blank" class="btn btn-primary">Garments Costing</a>
                    <a href="https://brightfuturei.com/cm/" target="_blank" class="btn btn-primary">Cost of Making ( C.M )</a>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="hero-image text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yarn.png" alt="Cost of Consumption Analysis" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!--consumption start-->
    <div class="container bg-white shadow-lg">
        <h2 class="display-5 fw-bold text-center border-bottom border-3 border-info py-1 d-none d-lg-block">Yarn count defines fabric quality and durability.</h2>
        
        
        <h2 class="fw-bold text-center border-bottom border-3 border-info py-2 d-block d-lg-none">Yarn count defines fabric quality and durability.</h2>
        
        
        
        <div class="row d-flex justify-content-center align-items-start"> <!--row start-->
            <div class="col-lg-12 my-5"> <!--costing start-->
                <div class="card shadow-sm p-4">
                    <h5 class="text-start border-bottom  border-3 border-info py-1">The yarn count is always an even number, so you can adjust the result by adding or subtracting 1 to ensure it remains even.</h5>
                    <div class="row gy-3 gx-3 mb-3 "><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelect" onchange="showAdditionalInfo()">
                                <option selected>Select GSM for Fleece fabric</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <option value="260">260</option>
                                <option value="280">280</option>
                                <option value="300">300</option>
                                <option value="320">320</option>
                                <option value="340">340</option>
                            </select>
                            <div class="text-center mt-2" id="additionalInfo">
                                <p class="fs-5" id="infoText"></p>
                                <button class="btn btn-danger btn-sm" onclick="hideAdditionalInfo()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew" onchange="showAdditionalInfoNew()">
                                <option selected>Select GSM for S/J fabric</option>
                                <option value="120">120</option>
                                <option value="140">140</option>
                                <option value="160">160</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                            </select>
                            <div class="text-center mt-2" id="additionalInfoNew">
                                <p class="fs-5" id="infoTextNew"></p>
                                <button class="btn btn-danger btn-sm" onclick="hideAdditionalInfoNew()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->

                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew1" onchange="showAdditionalInfoNew1()">
                                <option selected>GSM for French Terry fabric</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <option value="260">260</option>
                                <option value="280">280</option>
                                <option value="300">300</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew1">
                                <p class="fs-5" id="infoTextNew1"></p>
                                <button class="btn btn-danger btn-sm" onclick="hideAdditionalInfoNew1()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew2" onchange="showAdditionalInfoNew2()">
                                <option selected>GSM for Interlock fabric</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <option value="260">260</option>
                                <option value="280">280</option>
                                <option value="300">300</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                            
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew2">
                                <p class="fs-5" id="infoTextNew2"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew2()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->


                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select  class="form-select" id="mySelectNew3" onchange="showAdditionalInfoNew3()">
                                <option selected>Select GSM for Pique fabric</option>
                                <option value="160">160</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew3">
                                <p class="fs-5" id="infoTextNew3"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew3()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew4" onchange="showAdditionalInfoNew4()">
                                <option selected>Select GSM for Lacost fabric</option>
                                <option value="160">160</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew4">
                                <p class="fs-5" id="infoTextNew4"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew4()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->

                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew5" onchange="showAdditionalInfoNew5()">
                                <option selected>Select GSM for Lycra Fleece </option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <option value="260">260</option>
                                <option value="280">280</option>
                                <option value="300">300</option>
                                <option value="320">320</option>
                                <option value="340">340</option>
                              </select>
                        
                                <!-- Additional information for the new column -->
                                <div class="text-center mt-2" id="additionalInfoNew5">
                                    <p class="fs-5" id="infoTextNew5"></p>
                                    <button class="threeDButton" onclick="hideAdditionalInfoNew5()">Clean This Information</button>
                                </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew6" onchange="showAdditionalInfoNew6()">
                                <option selected>Select GSM for Lycra S/J</option>
                                <option value="120">120</option>
                                <option value="140">140</option>
                                <option value="160">160</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew6">
                                <p class="fs-5" id="infoTextNew6"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew6()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->

                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew7" onchange="showAdditionalInfoNew7()">
                                <option selected>GSM for Lycra French Terry</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <option value="260">260</option>
                                <option value="280">280</option>
                                <option value="300">300</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew7">
                                <p class="fs-5" id="infoTextNew7"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew7()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew8" onchange="showAdditionalInfoNew8()">
                                <option selected> GSM for Lycra Interlock</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                <option value="260">260</option>
                                <option value="280">280</option>
                                <option value="300">300</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew8">
                                <p class="fs-5" id="infoTextNew8"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew8()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->

                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew9" onchange="showAdditionalInfoNew9()">
                                <option selected>Select GSM for Lycra Pique</option>
                                <option value="160">160</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew9">
                                <p class="fs-5" id="infoTextNew9"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew9()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew10" onchange="showAdditionalInfoNew10()">
                                <option selected>Select GSM for Lycra Lacost</option>
                                <option value="160">160</option>
                                <option value="180">180</option>
                                <option value="200">200</option>
                                <option value="220">220</option>
                                <option value="240">240</option>
                                
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew10">
                                <p class="fs-5" id="infoTextNew10"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew10()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->

                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew11" onchange="showAdditionalInfoNew11()">
                                <option selected>Select GSM for 1 X 1 Cotton Rib</option>
                                 <option value="170">170</option>
                                <option value="190">190</option>
                                <option value="210">210</option>
                                <option value="230">230</option>
                                <option value="250">250</option>
                                <option value="270">270</option>
                                <option value="290">290</option>
                                <option value="310">310</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew11">
                                <p class="fs-5" id="infoTextNew11"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew11()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew12" onchange="showAdditionalInfoNew12()">
                                <option selected>Select GSM for 2 X 1 Cotton Rib</option>
                                
                                <option value="210">210</option>
                                <option value="230">230</option>
                                <option value="250">250</option>
                                <option value="270">270</option>
                                <option value="290">290</option>
                                <option value="310">310</option>
                                <option value="330">330</option>
                                <option value="350">350</option>
                                
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew12">
                                <p class="fs-5" id="infoTextNew12"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew12()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->

                    <div class="row gy-3 gx-3 mb-3"><!--row start-->
                        <!-- Fleece -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew13" onchange="showAdditionalInfoNew13()">
                                <option selected>Select GSM for 1 X 1 Laycra Rib</option>
                                 <option value="170">170</option>
                                <option value="190">190</option>
                                <option value="210">210</option>
                                <option value="230">230</option>
                                <option value="250">250</option>
                                <option value="270">270</option>
                                <option value="290">290</option>
                                <option value="310">310</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew13">
                                <p class="fs-5" id="infoTextNew13"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew13()">Clean This Information</button>
                            </div>
                        </div>
                
                        <!-- S/J -->
                        <div class="col-md-6">
                            <select class="form-select" id="mySelectNew14" onchange="showAdditionalInfoNew14()">
                                <option selected>Select GSM for 2 X 1 Laycra Rib</option>
                                 <option value="170">170</option>
                                <option value="190">190</option>
                                <option value="210">210</option>
                                <option value="230">230</option>
                                <option value="250">250</option>
                                <option value="270">270</option>
                                <option value="290">290</option>
                                <option value="310">310</option>
                                <!-- ... add more options as needed ... -->
                            </select>
                        
                            <!-- Additional information for the new column -->
                            <div class="text-center mt-2" id="additionalInfoNew14">
                                <p class="fs-5" id="infoTextNew14"></p>
                                <button class="threeDButton" onclick="hideAdditionalInfoNew14()">Clean This Information</button>
                            </div>
                        </div>
                    </div><!--row end-->
                </div>
            </div> <!--yarn count  end-->
        </div> <!--row end-->
    </div>






<?php get_footer(); ?>