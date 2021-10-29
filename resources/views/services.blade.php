@extends('master')

@section('title','Services')

@section('content')



<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active">Services</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Services</h1>
    </div>	
  </header>
  
  	<article class="content">
		<div class="container">
		  <div class="row bottom-padding-mini">
			<div class="big-services-box col-sm-4 col-md-4">
			  <a href="#">
				<div class="big-icon border border-info">
				  <span class="livicon" data-n="brush" data-s="62" data-c="#0098ca" data-hc="#0098ca">
				</div>
				<h4 class="title">Web Design</h4>
				<div class="text-small">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</div>
			  </a>
			</div><!-- .services-box-two -->
			
			<div class="big-services-box col-sm-4 col-md-4">
			  <a href="#">
				<div class="big-icon border border-info">
				  <span class="livicon" data-n="cellphone" data-s="62" data-c="#0098ca" data-hc="#0098ca">
				</div>
				<h4 class="title">Responsive & Retina-Ready</h4>
				<div class="text-small">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste. It is a long established fact that a reader.</div>
			  </a>
			</div><!-- .services-box-two -->
			
			<div class="big-services-box col-sm-4 col-md-4">
			  <a href="#">
				<div class="big-icon border border-info">
				  <span class="livicon" data-n="linechart" data-s="62" data-c="#0098ca" data-hc="#0098ca">
				</div>
				<h4 class="title">Internet Marketing</h4>
				<div class="text-small">The readable content of a page when looking at its layout. The point of using. Duis aute irure dolor reprehenderit in voluptate velit esse cillum.</div>
			  </a>
			</div><!-- .services-box-two -->
		  </div>
		</div>
	
		<div class="full-width-box bottom-padding cm-padding-bottom-36">
		  <div class="fwb-bg fwb-blur" data-blur-image="{{asset('')}}img/services/rs-slider3-bg.jpg" data-blur-amount="3">
			<div class="overlay"></div>
		  </div>
		  
		  <div class="container">
			<div class="title-box text-center title-white">
			  <h2 class="h1 title">Other Services</h2>
			</div>
		  
			<p class="text-center white">Proin vel ultrices erat. Etiam et enim libero. Duis sollicitudin auctor faucibus. Duis tristique feugiat velit quis lobortis. Phasellus dignissim lobortis dignissim.</p>
		  
			<div class="row services white">
			  <div class="service col-sm-4 col-md-4" data-appear-animation="bounceInLeft">
				<a href="#">
				  <div class="icon border">
					<div class="livicon" data-n="tablet" data-s="42" data-c="#fff" data-hc="0"></div>
				  </div>
				  <h6 class="title">Web Design</h6>
				  <div class="text-small">Content management systens Virtual shops and ecommerce Presentation websites Online catalogues</div>
				</a>
			  </div>
			  
			  <div class="service col-sm-4 col-md-4" data-appear-animation="bounceInDown">
				<a href="#">
				  <div class="icon border">
					<div class="livicon" data-n="brush" data-s="42" data-c="#fff" data-hc="0"></div>
				  </div>
				  <h6 class="title">Graphic Design</h6>
				  <div class="text-small">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</div>
				</a>
			  </div>
			  
			  <div class="service col-sm-4 col-md-4" data-appear-animation="bounceInRight">
				<a href="#">
				  <div class="icon border">
					<div class="livicon" data-n="responsive" data-s="42" data-c="#fff" data-hc="0" data-d="1600"></div>
				  </div>
				  <h6 class="title">Internet Marketing</h6>
				  <div class="text-small">Content management systens Virtual shops and ecommerce Presentation websites Online catalogues</div>
				</a>
			  </div>
			  
			  <div class="clearfix"></div>
			  
			  <div class="service col-sm-4 col-md-4" data-appear-animation="bounceInLeft">
				<a href="#">
				  <div class="icon border">
					<div class="livicon" data-n="piggybank" data-s="42" data-c="#fff" data-hc="0"></div>
				  </div>
				  <h6 class="title">Graphic Design</h6>
				  <div class="text-small">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</div>
				</a>
			  </div>
			  
			  <div class="service col-sm-4 col-md-4" data-appear-animation="bounceInUp">
				<a href="#">
				  <div class="icon border">
					<div class="livicon" data-n="users" data-s="42" data-c="#fff" data-hc="0" data-d="1600"></div>
				  </div>
				  <h6 class="title">Internet Marketing</h6>
				  <div class="text-small">Content management systens Virtual shops and ecommerce Presentation websites Online catalogues</div>
				</a>
			  </div>
			  
			  <div class="service col-sm-4 col-md-4" data-appear-animation="bounceInRight">
				<a href="#">
				  <div class="icon border">
					<div class="livicon" data-n="thumbs-up" data-s="42" data-c="#fff" data-hc="0"></div>
				  </div>
				  <h6 class="title">Graphic Design</h6>
				  <div class="text-small">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste.</div>
				</a>
			  </div>
			</div>
			<div class="clearfix"></div>
		  </div>
		</div><!-- .full-width-box -->
		
		<div class="container">
		  <div class="title-box">
			<h2 class="h1 title">Extra Services</h2>
		  </div>
		  
		  <p>Proin vel ultrices erat. Etiam et enim libero. Duis sollicitudin auctor faucibus. Duis tristique feugiat velit quis lobortis. Phasellus dignissim lobortis dignissim. Vestibulum aliquet.</p>
		  
		  <div class="row">
			<div class="col-sm-4 bottom-padding">
			  <p class="text-center"><img class="replace-2x img-rounded" src="{{asset('')}}img/services/extra_services_03.jpg" width="370" height="185" alt=""></p>
			  <h5><a href="#" class="no-border">Lorem ipsum dolor.</a></h5>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere deserunt a enim harum eaque fugit.</p>
			</div>
			
			<div class="col-sm-4 bottom-padding">
			  <p class="text-center"><img class="replace-2x img-rounded" src="{{asset('')}}img/services/extra_services_02.jpg" width="370" height="185" alt=""></p>
			  <h5><a href="#" class="no-border">Lorem ipsum dolor.</a></h5>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere deserunt a enim harum eaque fugit.</p>
			</div>
			
			<div class="col-sm-4 bottom-padding">
			  <p class="text-center"><img class="replace-2x img-rounded" src="{{asset('')}}img/services/extra_services_03.jpg" width="370" height="185" alt=""></p>
			  <h5><a href="#" class="no-border">Lorem ipsum dolor.</a></h5>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id pariatur molestiae illum cum facere deserunt a enim harum eaque fugit.</p>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-8">
				<h5>Interested in working with us? Or got a question?<br>Maybe just want to say hello?</h5>
			</div>
			<div class="col-sm-4 text-right text-center-mobile">
			  <a href="#" class="btn btn-default btn-lg">Contact Us Now</a>
			</div>
		  </div>
		</div><!-- .container -->
  	</article><!-- .content -->



</section><!-- #main -->

		  
<div class="clearfix"></div>

@endsection