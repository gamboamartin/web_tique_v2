<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Listing Preview</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <?php include $generales->path_base.'templates/css.php'; ?>
        <!-- End custom template style   -->
        <link rel="stylesheet" href="assets/css/print.css"  media="print"/>
    </head>
    <body class="">
        <div class="container container-wrapper">
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="widget widget-box box-container widget-property">
                                <div class="property-slider-box">
                                    <div id="property-slider" class="property-slider carousel slide" data-ride="carousel">
                                        <!-- Content -->
                                        <div class="carousel-inner" role="listbox">
                                            <!-- Slide 1 -->
                                            <div class="item active">
                                                <img src="assets/img/placeholders/815x460.png" alt="Sunset over beach" />
                                            </div>
                                            <!-- Slide 2 -->
                                            <div class="item">
                                                <img src="assets/img/placeholders/815x460.png" alt="Rob Roy Glacier" />
                                            </div>
                                            <!-- Slide 3 -->
                                            <div class="item">
                                                <img src="assets/img/placeholders/815x460.png" alt="Longtail boats at Phi Phi" />
                                            </div>
                                        </div>
                                        <!-- Previous/Next controls -->
                                        <a class="left carousel-control" href="#property-slider" role="button" data-slide="prev">
                                            <span class="icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#property-slider" role="button" data-slide="next">
                                            <span class="icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="widget-header widget-title text-uppercase">
                                        <h2>Listing Description</h2> 
                                    </div>
                                    <div class="widget-content wide-p">
                                        <p class='clearfix'>
                                            <img src="assets/img/placeholders/450x300.png"  class="pull-right-img" alt="" />
                                            This is simply dummy text of the printing and typesetting industry. That has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages.
                                        </p>
                                    </div>
                                </div> 
                            </div> <!-- /. widget-body --> 
                            <div class="widget widget-box box-container page-break">
                                <div class="widget-header text-uppercase">
                                    <h2>Indoor amenities</h2> 
                                </div>
                                <ul class="amenities text-color-primary clearfix">
                                    <li>
                                        <i class="icon-air"></i><span>Air conditioning</span><i class="icon-checked"></i>
                                    </li>
                                    <li>
                                        <i class="icon-move"></i><span>Cable TV</span><i class="icon-checked"></i>
                                    </li>
                                    <li>
                                        <i class="icon-pc"></i><span>Computer</span><i class="icon-checked"></i>
                                    </li>
                                    <li>
                                        <i class="icon-micro"></i><span>Microwave</span><i class="icon-checked"></i>
                                    </li>
                                </ul>
                            </div> <!-- /. widget-amenities -->    
                            <div class="widget widget-box box-container widget-property-map">
                                <div class="widget-header text-uppercase">
                                    <h2>Property location</h2> 
                                </div>
                                <div class="property-map" id='property-map' style='height: 385px;'></div>
                                <div class="route_suggestion form-additional">
                                    <input id="route_from" class="inputtext w360 form-control" type="text" value="" placeholder="Type your address" name="route_from" />
                                    <a id="route_from_button" href="#" class="btn-second">Suggest route</a>
                                </div>
                            </div>  <!-- /. widget-map and walkscore -->    
                            <div class="widget widget-box box-container">
                                <div class="widget-header text-uppercase">
                                    <h2>Image gallery</h2>
                                </div>
                                <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="images-gallery clearfix">  
                                    <li class="col-xs-4">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-xs-4">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                    <li class="col-xs-4">
                                        <a data-gallery="gallery" href="assets/img/placeholders/1600x1080.png" title="" download="assets/img/placeholders/1600x1080.png" class="preview show-icon">
                                            <img src="assets/img/preview-icon.png" class="" alt=""/>
                                        </a>
                                        <div class="preview-img"><img src="assets/img/placeholders/360x210.png" data-src="assets/img/placeholders/1600x1080.png" alt="" class="" /></div>
                                    </li>
                                </ul>
                            </div><!-- /. widget-gallery -->       
                        </div><!-- /.center-content -->
                        <div class="col-md-3">
                            <div class="widget widget-box box-container widget-overview">
                                <div class="widget-header text-uppercase">
                                    <h2>Overview</h2> 
                                </div>
                                <ul class="list-overview">
                                    <li>
                                        <span class="list-overview-option">Address</span>
                                        <span class="list-overview-value">Vatikanska 11, Zagreb</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Purpose: </span>
                                        <span class="list-overview-value"><span class="label label-default label-tag-primary">sale</span></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Type:   </span>
                                        <span class="list-overview-value">House</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Country: </span>
                                        <span class="list-overview-value">Zagreb</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">City </span>
                                        <span class="list-overview-value">Zagreb</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Area: </span>
                                        <span class="list-overview-value">More than 100m2</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Size precise:    </span>
                                        <span class="list-overview-value"> 200 m2</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Energy efficiency:   </span>
                                        <span class="list-overview-value">-</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Bathrooms: </span>
                                        <span class="list-overview-value">3</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Bedrooms: </span>
                                        <span class="list-overview-value">2</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Roooms: </span>
                                        <span class="list-overview-value">20</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Ownerships: </span>
                                        <span class="list-overview-value">Owner</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Floor: </span>
                                        <span class="list-overview-value">3</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Energy efficient:</span>
                                        <span class="list-overview-value">80 kWh EP / m2</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Gas emissions: </span>
                                        <span class="list-overview-value">30 kg CO2 / mВІ</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Views Counter: 	 </span>
                                        <span class="list-overview-value">15119</span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Pro</span>
                                        <span class="list-overview-value">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div><!-- /. widget-OVERVIEW -->   
                            <button class="print_hidden print_btn" onclick="print_page()">Print</button>
                            <div class="widget widget-box box-container widget-energy-eff">
                                <div class="widget-header text-uppercase">
                                    <h2>Energy efficient</h2> 
                                </div>
                                <!--energy version full -->
                                <div class="divider"></div>
                                <div title="energie:80" style="margin-top: 5px;"  class='energy-eff-box'>
                                    <div class="alert alert-warning">No Efficiency</div>
                                </div>
                                <!--energy --> 
                            </div><!-- /. widget-energy -->    
                            <div class="widget widget-box box-container widget-energy-eff">
                                <div class="widget-header text-uppercase">
                                    <h2>Gas emission</h2> 
                                </div>
                                <!--energy version full -->
                                <div class="divider"></div>
                                <div title="ges:30" style="margin-top: 5px;"  class='energy-eff-box'>
                                    <div class="alert alert-warning"> No Gas </div>
                                </div>
                                <!--energy --> 
                            </div><!-- /. widget-energy-gas -->      
                            <div class="widget widget-box box-container widget-agent">
                                <div class="widget-header text-uppercase">
                                    <h2>Agent</h2> 
                                </div>
                                <div class="media">
                                    <div class="agent-logo media-left media-middle">
                                        <a href="profile.php" class="img-circle-cover">
                                            <img src="assets/img/placeholders/90x90.png" alt="" class="img-circle" />
                                        </a>
                                    </div>
                                    <div class="agent-details media-right media-top">
                                        <a href="profile.php" class="agent-name text-color-primary">Sophia Beckett</a>
                                        <span class="phone">+385 (0)92 12 3 321</span>
                                        <a href="mailto:sophia@estatepoint.com" class="mail">sophia@estatepoint.com</a>
                                    </div>
                                </div><!-- /.agent-card--> 
                            </div><!-- /. widget-agent -->    
                        </div>
                        <!-- /.right side bar -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
        </div>
        <!-- Start Jquery -->
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
        <!-- End Jquery -->
        <!-- Start BOOTSTRAP -->
        <script src="assets/libraries/tether/dist/js/tether.min.js"></script>
        <script src="assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <script src="assets/js/winter-flat.js"></script>
        <!-- End  Template files -->
        <!-- Start owl-carousel -->
        <script src="assets/libraries/owl.carousel/owl.carousel.min.js"></script>
        <!-- End owl-carousel -->
        <!-- Start JS MAP  -->
        <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyArqScnm2PDzRvEIAGXpULA4AOvVe8LtCY&amp;&scale=2" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/map_infobox.js"></script>
        <script type="text/javascript" src="assets/js/markerclusterer.js"></script>
        <script src="assets/js/map.js" type="text/javascript"></script>
        <!-- End JS MAP  -->
        <!-- Start blueimp  -->
        <script src="assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- Start custom template style  -->
        <script src="assets/js/custom_template_style.js" type="text/javascript"></script>
        <!-- End custom template style   -->
        <script src="assets/js/dpejes/dpe.js"></script>
        <script src="assets/js/dpejes_custom.js"></script>
    </body>
</html>