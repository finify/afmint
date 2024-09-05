@extends('home.layout.layout')

@section('content')
<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Contact Us</div>
					{{-- <ol class="breadcrumb">
						<li><a href="index.html">Contact</a></li>
						<li class="active">Get A Quote</li>
					</ol> --}}
				</div>
			</div>
		</div>
	</div>
<!-- Contact -->
<div class="section contact overlap">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-md-push-8">
                
                <div class="widget contact-info-sidebar">
                    <div class="widget-title">
                        Contact Info
                    </div>
                    <ul class="list-info">
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div> </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="info-text">(0761) 654-123987</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="info-text">info@yoursite.com</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="info-text">Mon - Sat 09:00 - 17:00</div>
                        </li>
                    </ul>
                </div> 

            </div>
            <div class="col-sm-8 col-md-8 col-md-pull-4">
                <div class="content">
                   
                    <div class="margin-bottom-30"></div>
                    <h3 class="section-heading-2">
                        Reach out to us:
                    </h3>
                    <form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_name" placeholder="Full Name..." required="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="mech">Mechanical Engineering</option>
                                <option value="oil">Oil and Lubricants</option>
                                <option value="chem">Chemical Research</option>
                                <option value="agri">Agricultural Processing</option>
                                <option value="power">Power and Energy</option>
                                <option value="mat">Material Engineering</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="p_email" placeholder="Enter Address..." required="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_subject" placeholder="Subject...">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                                <textarea id="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;">ASK A QUOTE</button>
                        </div>
                    </form>
                    <div class="margin-bottom-50"></div>
                    <p><em>Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
                    </div>
            </div>

        </div>
        
    </div>
</div>	
@endsection