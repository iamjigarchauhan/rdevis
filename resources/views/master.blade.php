
<!doctype html >

<html lang="en">

<head>

<meta charset="utf-8">

@yield('meta_info')

<!--  <title>@yield('title')</title>

<meta name="keywords" content="HTML5 Template">

<meta name="description" content="Progressive — Responsive Multipurpose HTML Template"> -->
<!--  <meta name="keywords" content="HTML5 Template">

<meta name="description" content="Progressive — Responsive Multipurpose HTML Template"> -->

<!--   <meta name="author" content="itembridge.com"> -->
<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Favicon -->

<link rel="shortcut icon" href="{{asset('')}}img/Logo_3.jpg"><!-- Font -->

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>
<!-- Plugins CSS -->

<link rel="stylesheet" href="{{asset('')}}css/bootstrap.css">
<link rel="stylesheet" href="{{asset('')}}css/font-awesome.min.css">
 <!--   <link rel="stylesheet" href="{{asset('')}}css/jslider.css"> -->
<link rel="stylesheet" href="{{asset('')}}css/revslider/settings.css">
<link rel="stylesheet" href="{{asset('')}}css/jquery.fancybox.css">
<link rel="stylesheet" href="{{asset('')}}css/animate.css">
<!--<link rel="stylesheet" href="{{asset('')}}css/video-js.min.css"> -->
 <!--   <link rel="stylesheet" href="{{asset('')}}css/morris.css"> -->
<link rel="stylesheet" href="{{asset('')}}css/royalslider/royalslider.css">
<link rel="stylesheet" href="{{asset('')}}css/royalslider/skins/minimal-white/rs-minimal-white.css">
  <!--  <link rel="stylesheet" href="{{asset('')}}css/layerslider/css/layerslider.css"> -->
  <!--  <link rel="stylesheet" href="{{asset('')}}css/ladda.min.css"> -->
<!-- <link rel="stylesheet" href="{{asset('')}}css/datepicker.css"> -->
<link rel="stylesheet" href="{{asset('')}}css/jquery.scrollbar.css">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('')}}css/style.css">
<!-- Custom CSS -->
  <!--  <link rel="stylesheet" href="{{asset('')}}css/customizer/pages.css"> -->
<link rel="stylesheet" href="{{asset('')}}css/customizer/home-pages-customizer.css">
<!-- IE Styles-->
 <!--   <link rel='stylesheet' href="{{asset('')}}css/ie/ie.css"> -->
<!-- Include SmartWizard CSS -->
<link href="{{asset('')}}css/smart_wizard_css/smart_wizard.css" rel="stylesheet" type="text/css" />
<!-- Optional SmartWizard theme -->
 <!--   <link href="{{asset('')}}css/smart_wizard_css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />-->
  <!--  <link href="{{asset('')}}css/smart_wizard_css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />-->
  <!--  <link href="{{asset('')}}css/smart_wizard_css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" /> -->
<link rel='stylesheet' href="{{asset('')}}css/custom.css">
<script src="{{asset('')}}js/jquery-3.0.0.min.js"></script>
<script src="{{asset('')}}js/bootstrap.min.js"></script>
@yield('custom_css')

<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<link rel='stylesheet' href="{{asset('')}}/css/ie/ie8.css">

<![endif]-->

</head>

<body class="fixed-header">

<!-- .header -->

@include('layouts.header')
<!-- .header -->
					<div class="page-box">
						<div class="page-box-content">
						@yield('content')
				</div>
				</div>
					<footer id="footer">
						<style type="text/css">
					.icon .fa 
					{
							line-height: 40px;
					}
					</style>
					<div class="footer-top ">
						<div class="container">
							<div class="row sidebar ">
									
								<aside class="col-xs-12 col-sm-3 col-md-3 widget social  ">
								<!-- <div class="title-block">
								<h3 class="title">Follow Us</h3>
								</div> -->
								<div class="pull-left">
										<p>Follow us on social media</p>
											<div class="social-list ">
												<a class="icon rounded icon-facebook " href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
												<a class="icon rounded icon-twitter " href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
												<a class="icon rounded icon-google " href="#" target="_blank"><i class="fa fa-google fa-lg"></i></a>
												<a class="icon rounded icon-linkedin " href="https://www.linkedin.com/company/rdevis-engineers-pvt-ltd/about/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
											</div>
									</div>
								</aside>
								<aside class="col-xs-12 col-sm-9 col-md-7 widget links" style="padding-top: 0px">
                                   
									<div class=" text-center" >
										<nav>
											<ul class="list-inline">
												<li><a href="{{url('/about-us')}}">About us</a></li>
												<li>|</li>
												<li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
												<li>|</li>
												<li><a href="{{url('/term-conditions')}}">Terms &amp; Conditions</a></li>
												<li>|</li>
												<li><a href="{{url('/contact-us')}}">Contact Us</a></li>
											</ul>
										</nav>
									</div>
									<p style="padding-top: 20px" class="text-center">B- 96, 2nd, 3rd Floor, Lajpat Nagar- I, Lajpat Nagar 1,	New Delhi-110024, Delhi, India.</p>
								</aside>
								
							</div>
						</div>
					</div>

					<div class="footer-bottom">
						<div class="container">
					<div class="row">
						<div class="copyright text-center col-xs-12 col-sm-12 col-md-12">
						Copyright © <a href="" target ="_blank" style="text-decoration:none;">Rdevis Engineers Pvt. Ltd.</a>
				        </div>

			
				<!--	<div class="col-xs-12 col-sm-12 col-md-6 text-right">

					Design and Developed By <a href="httap://www.siliconbrain.co.in" target="_blank">Siliconbrain Technosoft LLP.</a> 
				</div>-->

				</div>
					</div>
				</div>
				</footer>
				<a class="scroll-to-top scroll" href=".page-box"><span class=" glyphicon glyphicon-arrow-up top-icon "></span></a> 
				<div class="clearfix"></div>
					<script src="{{asset('')}}js/jquery.carouFredSel-6.2.1-packed.js"></script>
					<script src="{{asset('')}}js/jquery.touchwipe.min.js"></script>
					<script src="{{asset('')}}js/jquery.imagesloaded.min.js"></script>
					<script src="{{asset('')}}js/jquery.appear.js"></script>
					<script src="{{asset('')}}js/jquery.fancybox.pack.js"></script>
					<script src="{{asset('')}}js/isotope.pkgd.min.js"></script>
					<script src="{{asset('')}}js/jquery.selectBox.min.js"></script>
					<script src="{{asset('')}}js/jquery.royalslider.min.js"></script>
					<script src="{{asset('')}}js/revolution/jquery.themepunch.tools.min.js"></script>
					<script src="{{asset('')}}js/revolution/jquery.themepunch.revolution.min.js"></script>
					<script src="{{asset('')}}js/bootstrapValidator.min.js"></script>
					<script src="{{asset('')}}js/jquery.scrollbar.min.js"></script>
					<script src="{{asset('')}}js/main.js"></script>
					@yield('custom_js')
					<script type="text/javascript">
					$(document).ready(function()
					{
						$("#Values_hrf").click('on',function(e){
							e.preventDefault();
							if (window.location.origin+window.location.pathname == "{{url('/about-us')}}") 
							{
								$("#Values_hrf").addClass("scroll");
								$("#Values_hrf").attr("href", "#Values_hrf");
								$("#Values_hrf").bind("click");
							}
							else
							{
											
							}
						});
					});
					$(function () {
						$(window).scroll(function () {
							if ($(this).scrollTop() > 100) {
								$('.scroll-to-top').addClass('active');
							} else {
								$('.scroll-to-top').removeClass('active');
							}
						});
					});
					</script>
					<script type="text/javascript" src="{{asset('')}}js/smart_wizard_js/jquery.smartWizard.min.js"></script>
					<script type="text/javascript">
					$(document).ready(function(){
						$('input[name="eff_treat_plant"]').on('click', function() {
							if ($(this).val() == 'yes') {
								$('#eff_treat_plant_textbox').show();
								$('input[name="eff_treat_plant_text"]').prop('required',true);
							} else {
								$('#eff_treat_plant_textbox').hide();
								$('input[name="eff_treat_plant_text"]').prop('required',false);
							}
						});
						
						$('input[name="air_pollution"]').on('click', function() {
							if ($(this).val() == 'yes') {
								$('#exhaust_air_textbox').show();
								$('input[name="exhaust_air_text"]').prop('required',true);
							}
							else {
								$('#exhaust_air_textbox').hide();
								$('input[name="exhaust_air_text"]').prop('required',false);
							}
						});
					});
					</script>
					<script type="text/javascript">
					$(document).ready(function(){
							
						// Step show event
						$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
									/*  alert("You are on step "+stepNumber+" now");*/
							if(stepPosition === 'first'){
								$("#prev-btn").addClass('disabled');
							}else if(stepPosition === 'final'){
								$("#next-btn").addClass('disabled');
							}else{
								$("#prev-btn").removeClass('disabled');
								$("#next-btn").removeClass('disabled');
							}
						});
						
						var btnFinish = $('<button></button>').text('Finish').addClass('btn btn-info').on('click', function(){ alert('Finish Clicked'); });
						var btnCancel = $('<button></button>').text('Cancel').addClass('btn btn-danger').on('click', function(){ $('#smartwizard').smartWizard("reset"); });
						
						$('.scroll-to-top').bind("click");
						
						// Smart Wizard
						$('#smartwizard').smartWizard({
							selected:0,
							theme: 'default',
							transitionEffect:'fade',
							toolbarSettings: {toolbarPosition: 'both',
								toolbarButtonPosition: 'end',
								toolbarExtraButtons: [btnFinish, btnCancel]
							}
						});
						
						// External Button Events
						$("#reset-btn").on("click", function() {
							// Reset wizard
							$('#smartwizard').smartWizard("reset");
							return true;
						});
						
						$("#prev-btn").on("click", function() {
							// Navigate previous
							$('#smartwizard').smartWizard("prev");
							return true;
						});
						
						$("#next-btn").on("click", function() {
							// Navigate next
							$('#smartwizard').smartWizard("next");
							return true;
						});
						
						$("#theme_selector").on("change", function() {
							// Change theme
							$('#smartwizard').smartWizard("theme", $(this).val());
							return true;
						});
						
						// Set selected theme on page refresh
						$("#theme_selector").change();
					});
					</script>
					</body>
					</html>