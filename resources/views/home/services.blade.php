@extends('home.layout.layout')

@section('content')
<!-- BANNER -->
<div class="section banner-page about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="title-page">Our Services</div>
                {{-- <ol class="breadcrumb">
                    <li><a href="index.html">Contact</a></li>
                    <li class="active">Get A Quote</li>
                </ol> --}}
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
                    <a href="services-detail.html" class="title">ENGINEERING</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
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
                    <a href="services-detail.html" class="title">AGRICULTURAL PROCESSING</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
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
                    <a href="services-detail.html" class="title">OILS AND GAS</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
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
                    <a href="services-detail.html" class="title">POWER AND ENERGY</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
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
                    <a href="services-detail.html" class="title">CHEMICAL PROCESSING</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
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
                    <a href="services-detail.html" class="title">MATERIAL ENGINEERING</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed</p>
                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
                    </div>
                </div>
            </div>			
            
        </div>
    </div>
</div>
@endsection