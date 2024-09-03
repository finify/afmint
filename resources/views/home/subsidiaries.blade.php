@extends('home.layout.layout')

@section('content')


<!-- BANNER -->
<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Our Company</div>
					<ol class="breadcrumb">
						<li><a href="index.html">About Us</a></li>
						<li class="active">Subsidiaries</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

    <!-- Team -->
	<div class="section why">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-push-8">
					<div class="widget categories">
						<ul class="category-nav">
							<li><a href="#agro">Ziegle Agro</a></li>
							<li><a href="#global">Zeigle Global</a></li>
							<li><a href="#power">Zeigle Gas & Power</a></li>
						</ul>
					</div> 
				</div>
				<div class="col-sm-8 col-md-8 col-md-pull-4" >
					<div class="single-page" id="Agro">
						<img src="homeassets/images/agriculture.jpeg" alt="" class="img-responsive"> 
						<div class="margin-bottom-30"></div>
						<h2 class="section-heading">
							Zeigle Agro
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
						
					 </div>
                     <div class="single-page" id="global">
						<img src="homeassets/images/global.jpeg" alt="" class="img-responsive"> 
						<div class="margin-bottom-30"></div>
						<h2 class="section-heading">
							Zeigle Global
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
						
					 </div>
                     <div class="single-page" id="power">
						<img src="homeassets/images/oilgas.jpg" alt="" class="img-responsive"> 
						<div class="margin-bottom-30"></div>
						<h2 class="section-heading">
							Zeigle Gas & Power
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
						
					 </div>
				</div>
			</div>
		</div>
	</div>	
	
@endsection