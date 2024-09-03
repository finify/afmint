<!-- Preloader -->
<div class="preloader"></div>
 	
<!-- Main Header-->
<header class="main-header">

	<!-- Header Top -->
	
	<!-- Header Top End -->
	
	<!-- Main Box -->
	<div class="main-box">
		<div class="auto-container">
			<div class="outer-container clearfix">
				<!--Logo Box-->
				<div class="logo-box">
					<div class="logo"><a href="/"><img src="/homeassets/images/vacogaslogowhite.png" width="200px" alt=""></a></div>
				</div>
				
				<!--Nav Outer-->
				<div class="nav-outer clearfix">
				
					<!-- Main Menu -->
					<nav class="main-menu">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix">
								<li @if (Request::path()=='/' )
								class="current"
								@endif> <a href="/">Home</a></li>
								<li @if (Request::path()=='about' )
								class="current"
								@endif><a href="/about">About</a></li>
								<li @if(Request::is('contact')) class="current" @endif><a href="/contact">Contact</a></li>
							</ul>
						</div>
					</nav>
					<!-- Main Menu End-->
					
					<!--Outer Box-->
					<div class="outer-box">
						
						<!-- <ul class="social-icon-one">
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-skype"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
						</ul> -->
					</div>
				
				</div>
				<!--Nav Outer End-->
				
			</div>    
		</div>
	</div>
	
	<!--Sticky Header-->
	<div class="sticky-header">
		<div class="auto-container">
			
			<div class="outer-container clearfix">
				<!--Logo Box-->
				<div class="logo-box pull-left">
					<div class="logo"><a href="/"><img src="/homeassets/images/vacogaslogodark.png" width="200px" alt=""></a></div>
				</div>
				
				<!--Nav Outer-->
				<div class="nav-outer clearfix">
					<!-- Main Menu -->
					<nav class="main-menu">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix">
							<ul class="navigation clearfix">
								<li> <a href="/">Home</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/contact">Contact</a></li>
							</ul>
						</div>
					</nav>
					<!-- Main Menu End-->
					
				</div>
				<!--Nav Outer End-->
				
			</div>
			
		</div>
	</div>
	<!--End Sticky Header-->
	
</header>
<!--End Main Header -->