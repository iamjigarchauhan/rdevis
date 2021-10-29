	@extends('master')

	@section('meta_info')
		<title>{{$mdata[0]['page_title']}}</title>
		<meta name="keywords" content="{{$mdata[0]['meta_keywords']}}">
		<meta name="description" content="{{$mdata[0]['meta_description']}}">
	@endsection

	<style type="text/css">
		.description{
			margin-top: 5px;
		}
	</style>

	@section('content')

    <div class="slider rs-slider load">
        <div class="tp-banner-container">
            <div class="rev_slider tp-banner" data-version="5.0.7">
                <ul>
                    <?php 
                        foreach ($banners as $banner) {
                     ?>
                    <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">

                      <img src="{{URL::to('/public').Storage::url($banner->image)}}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                    </li>

                    <?php } ?>
                </ul>

              <div class="tp-bannertimer"></div>
            </div>
        </div>
	</div>
	<style>
		.full-width-box{
			padding: 40px 0;
			background: rgb(255, 255, 255);
		}
		.services .service, .services .features-block{
			margin-bottom: 0px;
		}
		.features-block .header-box .icon-box{
			width: 100%;
			min-height: 60px;
		}
		.header-box h6{
			text-align: center;
		}
	</style>
    <div class="full-width-box">
		<div class="container">
			<div class="row services">
				<div class="col-sm-3 col-md-3 text-small features-block">
					<a class="header-box" href="#">
						<div class="icon-box">
							<h2><span  class="count">1995</h2>
						</div>
						<h6>Founded</h6>
					</a>
				</div>
				<div class="col-sm-3 col-md-3 text-small features-block">
					<a class="header-box" href="#">
						<div class="icon-box">
							<h2><span  class="count">300</span>+</h2>
						</div>
						<h6>Clients</h6>
					</a>
				</div>
				<div class="col-sm-3 col-md-3 text-small features-block">
					<a class="header-box" href="#">
						<div class="icon-box">
							<h2><span  class="count">60</span>%</h2>
						</div>
						<h6>More efficiency achieved</h6>
					</a>
				</div>
				<div class="col-sm-3 col-md-3 text-small features-block">
					<a class="header-box" href="#">
						<div class="icon-box">
							<h2><span  class="count">400</span>+</h2>
						</div>
						<h6>Employees in India</h6>
					</a>
				</div>
			</div>
		</div>
	</div>
	<hr class="margin-bottom no-margin">
	
	<div class="full-width-bg-image-one">
        <div class="container">
            <div class="row">
                <article class="content col-sm-12 col-md-12">
                    <div class="title-box">
        		        <h1 class="title">Specialized in Car Paint Engineering</h1>
        		    </div>
    		    </article>
            
                <div class="bottom-padding col-sm-12 col-md-12 text-justify">
    				<p>We are more focused and passionate about our work than any other company. Our ‘attention to detail’ and passion for cars ensures that we produce exceptional results everytime. The standards we have set for ourselves provides us with the benchmark of the quality which is maintained or surpassed by our team in every renishing or detailing job performed at RDEVIS.RDEVIS offer a range of professional automotive renishing & paint enhancement services specially designed to meet the varied needs of individuals as per their requirement and condition of their vehicles</p>
    				<p>RDEVIS offer a range of professional automotive renishing & paint enhancement services specially designed to meet the varied needs of individuals as per their requirement and condition of their vehicles.We are more focused and passionate about our work than any other company. Our ‘attention to detail’ and passion for cars ensures that we produce exceptional results everytime.</p>
    				<p></p>
                </div>
            </div>
        </div> 
    </div> 
        <div class="clearfix"></div>
        <!-- .Services  start -->
    <div class="container">
        <div class="row services" >
            
             <article class="content col-sm-12 col-md-12">
                <div class="title-box">
    		        <h1 class="title">Services</h1>
    		    </div>
		    </article>
        
            <?php 
            	foreach ($services as $key => $value) {
            ?>
            <div class="col-sm-4 bottom-padding">
              	<p class="text-center">
					<img class="replace-2x img-rounded" src="{{URL::to('/public').Storage::url($services[$key]['image'])}}" width="370" height="185" alt="">
				</p>
              	<h5 class="text-center"><a href="{{url('/services/'.$services[$key]['id'])}}" class="no-border">{{$services[$key]['name']}}</a></h5>
            </div>
          <?php } ?>
        </div>
    </div> 
      
   	<div class="full-width-bg-image-two">
        <div class="container">    
            <article class="content">
                    <div class="title-box">
        		        <h1 class="title">Events</h1>
        		    </div>
    		</article>
      
            <div class="banner-set load bottom-padding" data-autoplay-disable="true">
                <div class="container">
    				<div class="banners">
    					<?php 
    						foreach ($events as $key => $value) {
    					?>
    					<a href="{{url('/media/events')}}" class="banner">
    						<img src="{{URL::to('/public').Storage::url($events[$key]['image'])}}" width="253" height="258" alt="">
    						<h2 class="title">{{$events[$key]['name']}}</h2>
    						<span class="pull-left"><i class="fa fa-calendar"></i> &nbsp;{{date("d-m-Y", strtotime($events[$key]['date']))}}</span> <br>
    						<span class="pull-left"><i class="fa fa-map-marker"></i> &nbsp; {{$events[$key]['location']}}</span>
    						
    					</a>
    					<?php } ?>
                  	</div><!-- .banners -->
                  	<div class="clearfix"></div>
                </div>
                <div class="nav-box">
    				<div class="container">
    					<a class="prev" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>
    						<div class="pagination switches"></div>
    					<a class="next" href="#"><span class="glyphicon glyphicon-arrow-right"></span></a>  
    				</div>
                </div>
    		</div>
    	</div>
    </div>
    
	<div class="container"> 	
        <div class="carousel-box bottom-padding load overflow" data-autoplay-disable="false">
            
            <div>
                 <article class="content col-sm-12 col-md-12">
                        <div class="title-box">
            		        <h1 class="title">Our Clients</h1>
            		    </div>
        		</article>
            </div>
    
            <div class="clearfix"></div>
    
            <div class="row">
				<div class="carousel carousel-links">
					<div class="col-sm-3 col-md-2 slide_image">
						<a href="#">
							<img src="{{asset('')}}img/clients/01.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
					
					<div class="col-sm-3 col-md-2">
						<a href="#">
							<img src="{{asset('')}}img/clients/02.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
					
					<div class="col-sm-3 col-md-2">
						<a href="#">
							<img src="{{asset('')}}img/clients/03.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
					
					<div class="col-sm-3 col-md-2">
						<a href="#">
							<img src="{{asset('')}}img/clients/04.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
					
					<div class="col-sm-3 col-md-2">
						<a href="#">
							<img src="{{asset('')}}img/clients/05.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
					
					<div class="col-sm-3 col-md-2">
						<a href="#">
							<img src="{{asset('')}}img/clients/06.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
					
					<div class="col-sm-3 col-md-2">
						<a href="#">
							<img src="{{asset('')}}img/clients/07.jpg" class="img-responsive img-rounded" height="" alt="">
						</a>
					</div>
				</div>
            </div>
        </div>
    </div>
	<script>
		$('.count').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 2000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	</script>
@endsection