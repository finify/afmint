@extends('home.layout.layout')

@section('content')
    
	<!--Location Section-->
	<section class="location-section" style="background-image:url(/homeassets/images/background/pattern-1.png)">
    	<div class="auto-container">
        	<ul class="page-breadcrumb">
            	<li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        	<div class="sec-title centered light">
            	<h2>Contact Us</h2>
                <div class="separator"></div>
            </div>
            
            <!--Map Outer-->
            <!-- <div class="map-outer">
                
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Vacogas"
                    data-icon-path="/homeassets/images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@vacogas.com</a>">
                </div>
            </div> -->
            
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="contact-section">
    	<div class="auto-container">
        	
            <!--Title Box-->
            <div class="sec-title">
            	<div class="clearfix">
                	<div class="pull-left">
                    	<h2>Quick Contact</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">You have questions? Dont hesitate to contact us</div>
                </div>
            </div>
        
        	<div class="inner-container">
            	<div class="clearfix">
                	
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<div class="upper-box">
                            	<ul class="list-style-three">
                                	<li><span class="icon flaticon-map-marker"></span><strong>Lagos Office: </strong>Plot 3B Elegba Festival Road - Oniru Victoria Island Lagos</li>
                                	<li><span class="icon flaticon-map-marker"></span><strong>Abuja Office: </strong>Aldenco estate  house  43 main  Avenue. Galadimawa Abuja</li>
                                	<li><span class="icon flaticon-technology-2"></span><strong>Call Us: </strong>08033167341 , 08033102244</li>
                                    <li><span class="icon flaticon-envelope-1"></span><strong>Mail Us: </strong>info@vacogas.com</li>
                                </ul>
                            </div>
                            <!-- <div class="lower-box">
                            	<div class="lower-inner">
                                	<div class="image">
                                    	<img src="/homeassets/images/resource/author-7.jpg" alt="" />
                                    </div>
                                    <h3>Jenifer Hearly</h3>
                                    <div class="designation">Manager</div>
                                    <div class="emailed">Jenifer@Metroindustry.com</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	
                            <!-- Contact Form -->
                            <div class="contact-form">
                                <!--Default Form-->
                                <!-- <form method="post" action="/contact" id="contact-form"> -->
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="E-Mail" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="subject" placeholder="Company" required>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">Submit Now <span class="icon flaticon-right-arrow-1"></span></button>
                                        </div>
                                        
                                    </div>
                                <!-- </form> -->
                                    
                            </div>
                            <!--End Contact Form -->
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection