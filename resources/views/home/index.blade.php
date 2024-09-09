@extends('home.layout.layout')

@section('content')
<!-- BANNER -->
<div id="slides" class="section banner">
    <ul class="slides-container">
        <li>
            <img src="/homeassets/images/slide-3.jpg" alt="">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption">
                    <h2 class="caption-heading">
                        Welcome to Africa Factory Mart International
                    </h2>
                    
                    <a href="/about" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="/contact" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                </div>
            </div>
        </li>
        <li>
            <img src="/homeassets/images/banner-page.jpg" alt="">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="wrap-caption">
                    <h2 class="caption-heading">
                        We Strive For Excellence In Sales, Service & Support.
                    </h2>
                    <p class="excerpt">We provide innovative solutions with integrity for the process and manufacturing industries through quality products and services.</p>	
                    <a href="/about" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="/contact" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                </div>
            </div>
        </li>
        
    </ul>

    <nav class="slides-navigation">
        <div class="container">
            <a href="#" class="next">
                <i class="fa fa-chevron-right"></i>
            </a>
            <a href="#" class="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
        </div>
    </nav>
    
</div>

<!-- ABOUT FEATURE -->
<div class="section feature overlap">
    <div class="container">

        <div class="row">
            
            <div class="col-sm-4 col-md-4">
                <!-- BOX 1 -->
                <div class="box-icon-2">
                    <div class="icon">
                        <div class="fa fa-star-o"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">QUALITY DRIVEN</div>
                        We are driven by the Pursuit of Excellence & Integrity in all we do
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- BOX 2 -->
                <div class="box-icon-2">
                    <div class="icon">
                        <div class="fa fa-umbrella"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">CUSTOMER FOCUSED</div>
                        We adhere to the principle that the greatest leader is the one who serves others
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- BOX 3 -->
                <div class="box-icon-2">
                    <div class="icon">
                        <div class="fa fa-users"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">GLOBAL SOURCING</div>
                       We source globally to deliver the best products and solutions.
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="section-heading">
                    ABOUT US
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5 col-md-5">
                <div class="jumbo-heading">
                    <h2>Welcome to Africa Factory Mart Automation.</h2>
                    <span class="fa fa-paper-plane-o"></span>
                </div>
            </div>
            <div class="col-sm-7 col-md-7" style="z-index:1;">
                <p class="lead">Africa Factory Mart was founded on the principles of integrity in solving process measurement and control problems with a degreed engineer and trained professionals. We take pride in listening to our customers and learning about their business, their problems, their needs & desires in order to provide the best solutions.</p> 
            </div>

        </div>

    </div>
</div>
    
<!-- SERVICES -->
<div class="section service section-border bglight">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="section-heading">
                    SERVICES
                </h2>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <!-- BOX 1 -->
                <div class="feature-box-8">
                    <div class="media">
                    <img src="/homeassets/images/blog-4.jpg" alt="rud" class="img-responsive">
                    </div>
                    <div class="body">
                    <div class="icon-holder">
                        <span class="fa fa-gears"></span>
                    </div>
                    <a href="#" class="title">ENGINEERING SERVICES</a>
                    <p>We provide innovative and reliable engineering solutions.</p>
                    <!-- <a href="#" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- BOX 2 -->
                <div class="feature-box-8">
                    <div class="media">
                    <img src="/homeassets/images/service-2.jpg" alt="rud" class="img-responsive">
                    </div>
                    <div class="body">
                    <div class="icon-holder">
                        <span class="fa fa-leaf"></span>
                    </div>
                    <a href="#" class="title">RENEWABLE ENERGY</a>
                    <p>We offer sustainable energy solutions that drive a cleaner and greener future.</p>
                    <!-- <a href="#" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- BOX 3 -->
                <div class="feature-box-8">
                    <div class="media">
                    <img src="/homeassets/images/blog-6.jpg" alt="rud" class="img-responsive">
                    </div>
                    <div class="body">
                    <div class="icon-holder">
                        <span class="fa fa-fire"></span>
                    </div>
                    <a href="#" class="title">OILS AND GAS</a>
                    <p>We deliver efficient and reliable solutions across the oil and gas sector.</p>
                    <!-- <a href="#" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- BOX 4 -->
                <div class="feature-box-8">
                    <div class="media">
                    <img src="/homeassets/images/project-img-9.jpg" alt="rud" class="img-responsive">
                    </div>
                    <div class="body">
                    <div class="icon-holder">
                        <span class="fa fa-flash"></span>
                    </div>
                    <a href="#" class="title">POWER AND ENERGY</a>
                    <p>We provide innovative solutions to power industries and drive energy efficiency.</p>
                    <!-- <a href="#" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- BOX 5 -->
                <div class="feature-box-8">
                    <div class="media">
                    <img src="/homeassets/images/service-3.jpg" alt="rud" class="img-responsive">
                    </div>
                    <div class="body">
                    <div class="icon-holder">
                        <span class="fa fa-flask"></span>
                    </div>
                    <a href="#" class="title">CHEMICAL PROCESSING</a>
                    <p>We offer advanced solutions for efficient and safe chemical processing operations</p>
                    <!-- <a href="#" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- BOX 6 -->
                <div class="feature-box-8">
                    <div class="media">
                    <img src="/homeassets/images/project-img-7.jpg" alt="rud" class="img-responsive">
                    </div>
                    <div class="body">
                    <div class="icon-holder">
                        <span class="fa fa-cubes"></span>
                    </div>
                    <a href="#" class="title">MATERIAL ENGINEERING</a>
                    <p>We provide specialized solutions to enhance material durability.</p>
                    <!-- <a href="#" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>			
            
        </div>
    </div>
</div>
    
<!-- Statistic -->
<div class="section statistic bgsection">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-3 col-md-3">
                <div class="counter-1">
                    <div class="counter-number">
                        5
                    </div>
                    <div class="counter-title">Offices<br> Worldwide </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="counter-1">
                    <div class="counter-number">
                        20
                    </div>
                    <div class="counter-title">Missions &amp; <br>Operations</div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="counter-1">
                    <div class="counter-number">
                        50
                    </div>
                    <div class="counter-title">Satisfied<br>Employees</div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="counter-1">
                    <div class="counter-number">
                        2
                    </div>
                    <div class="counter-title">Awards &amp; <br>Recognitions</div>
                </div>
            </div>

        </div>
    </div>
</div> 

<!-- PROJECTS -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="section-heading">
                    PROJECTS
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <nav class="categories">
                <ul class="portfolio_filter dark">
                    <li><a href="" class="active" data-filter="*">All</a></li>
                    <li><a href="" data-filter=".electrical">Electrical</a></li>
                    <li><a href="" data-filter=".automation">Automations</a></li>
                </ul>
            </nav>
            </div>
        </div>
        <div class="row grid-services">
            <div class="col-sm-6 col-md-4 electrical">
                <div class="box-image-4">
                    <a href="/homeassets/images/projects/electrical/electrical1.jpeg" title="Industrial Complex">
                        <div class="media">
                            <img src="/homeassets/images/projects/electrical/electrical1.jpeg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">INDUSTRIAL COMPLEX</h4>
                                <span class="category">Commodoenim</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 electrical">
                <div class="box-image-4">
                    <a href="/homeassets/images/projects/electrical/electrical2.jpeg" title="Industrial Complex">
                        <div class="media">
                            <img src="/homeassets/images/projects/electrical/electrical2.jpeg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">The Gas Company</h4>
                                <span class="category">Commodoenim</span>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
            <div class="col-sm-6 col-md-4 electrical">
                <div class="box-image-4">
                    <a href="/homeassets/images/projects/electrical/electrical3.jpeg" title="Industrial Complex">
                        <div class="media">
                            <img src="/homeassets/images/projects/electrical/electrical3.jpeg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">Warehouse Industry</h4>
                                <span class="category">Commodoenim</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 automation">
                <div class="box-image-4">
                    <a href="/homeassets/images/projects/automation/automation1.jpg" title="Industrial Complex">
                        <div class="media">
                            <img src="/homeassets/images/projects/automation/automation1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">Gear Manufacturing</h4>
                                <span class="category">Commodoenim</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 automation">
                <div class="box-image-4">
                    <a href="/homeassets/images/projects/automation/automation2.jpeg" title="Industrial Complex">
                        <div class="media">
                            <img src="/homeassets/images/projects/automation/automation2.jpeg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">Oil Pipeline Industry</h4>
                                <span class="category">Commodoenim</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 automation">
                <div class="box-image-4">
                    <a href="/homeassets/images/projects/automation/automation2.jpeg" title="Industrial Complex">
                        <div class="media">
                            <img src="/homeassets/images/projects/automation/automation2.jpeg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">Oil Pipeline Industry</h4>
                                <span class="category">Commodoenim</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--CLIENTS TESTIMONIALS --> 
<div class="section testimony bglight">
    <div class="container">
        
        <div class="row">
            
            <div class="col-sm-12 col-md-12">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading">
                            Our Clients
                        </h2>
                    </div>
                </div>

                <div id="owl-testimony">
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media"><img src="/homeassets/images/buagorup.webp" alt="" class="img-responsive"></div>
                            <div class="body">
                            <div class="title">Bua Group</div>
                            <div class="company">Instrumentation & Automation</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media"><img src="/homeassets/images/dangote.webp" alt="" class="img-responsive"></div>
                            <div class="body">
                            <div class="title">Dangote Group</div>
                            <div class="company">Procurement</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media"><img style="background: white;" src="/homeassets/images/tgigroup.webp" alt="" class="img-responsive"></div>
                            <div class="body">
                            <div class="title">TGI Investment Group</div>
                            <div class="company">Instrumentation & Automation</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media"><img style="background: white;" src="/homeassets/images/indomie.jpeg" alt="" class="img-responsive"></div>
                            <div class="body">
                            <div class="title">Indomie</div>
                            <div class="company">Instrumentation & Automation</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-1">
                            <div class="media"><img style="background: white;" src="/homeassets/images/indorama.webp" alt="" class="img-responsive"></div>
                            <div class="body">
                            <div class="title">Indorama</div>
                            <div class="company">Procurement</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>

<!-- TESTIMONY --> 
<!-- SERVICES -->
<div class="section services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="section-heading">
                    BRANDS WE WORK WITH
                </h2>
            </div>
        </div>

        <div class="row no-gutter">

            <div class="col-sm-6 col-md-2 col-6">
                <!-- BOX 1 -->
                <div class="box-icon-3">
                    <div class="line-t"></div>
                    <img src="/homeassets/images/brands/abb.png" style="height:80px;" alt="">
                    <div class="line-b"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-6">
                <!-- BOX 2 -->
                <div class="box-icon-3">
                    <div class="line-t"></div>
                    <img src="/homeassets/images/brands/fluke.avif" style="height:80px;" alt="">
                    <div class="line-b"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-6">
                <!-- BOX 3 -->
                <div class="box-icon-3">
                    <div class="line-t"></div>
                    <img src="/homeassets/images/brands/honeywell.avif" style="height:80px;" alt="">
                    <div class="line-b"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-6">
                <!-- BOX 4 -->
                <div class="box-icon-3">
                    <div class="line-t"></div>
                    <img src="/homeassets/images/brands/schneider.avif" style="height:80px;" alt="">
                    <div class="line-b"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-6">
                <!-- BOX 5 -->
                <div class="box-icon-3">
                    <div class="line-t"></div>
                    <img src="/homeassets/images/brands/siemens.avif" style="height:80px;" alt="">
                    <div class="line-b"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-6">
                <!-- BOX 6 -->
                <div class="box-icon-3">
                    <div class="line-t"></div>
                    <img src="/homeassets/images/brands/abb.png" style="height:80px;" alt="">
                    <div class="line-b"></div>
                </div>
            </div>			
            
        </div>
    </div>
</div> 

<!-- CTA -->
<div class="section cta">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="cta-info">
                    <h3>If you need industrial solution... We are available for you</h3>
                    <p>We provide innovative solutions for sustainable progress. Our professional team works to increase productivity and cost effectiveness on the market</p>
                    <a href="contact.html" title="" class="btn btn-cta">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection