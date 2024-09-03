<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vacogas</title>
<!-- Stylesheets -->
<link href="/homeassets/css/bootstrap.css" rel="stylesheet">
<link href="/homeassets/css/style.css" rel="stylesheet">
<link href="/homeassets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/homeassets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/homeassets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="/homeassets/css/responsive.css" rel="stylesheet">
<!--<link href="css/color.css" rel="stylesheet">-->

<link rel="shortcut icon" href="/homeassets/images/vacogasfavicon.png" type="image/x-icon">
<link rel="icon" href="/homeassets/images/vacogasfavicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style>
.team_image{
	width:200px!important;
	height:220px!important;
}
</style>
</head>

<body>

<div class="page-wrapper">
 	
    
    <!-- Main Header-->
	@include('home.layout.header')
    <!--End Main Header -->
    
	@yield('content')

	@include('home.layout.footer')
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="/homeassets/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="/homeassets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/homeassets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/homeassets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/homeassets/js/main-slider-script.js"></script>

<script src="/homeassets/js/bootstrap.min.js"></script>
<script src="/homeassets/js/jquery.fancybox.js"></script>
<script src="/homeassets/js/owl.js"></script>
<script src="/homeassets/js/jquery-ui.js"></script>
<script src="/homeassets/js/wow.js"></script>
<script src="/homeassets/js/knob.js"></script>
<script src="/homeassets/js/appear.js"></script>
<script src="/homeassets/js/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="/homeassets/js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>