@extends('master')

@section('meta_info')
	<title>{{$mdata[0]['page_title']}}</title>
  <meta name="keywords" content="{{$mdata[0]['meta_keywords']}}">
  <meta name="description" content="{{$mdata[0]['meta_description']}}">
@endsection

@section('content')

	<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active">Events</li>
    </ul>	
  </div>
</div>

<div class="clearfix"></div>

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Events</h1>
    </div>	
  </header>
  
  <div class="container">
    <div class="content">
	  <div class="timeline">

		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">Jan 20, 2019</time>
          </div>
		  
		  <div class="timeline-icon">
			<div class="livicon" data-n="pen" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content" data-appear-animation="fadeInLeft">
			<h2 class="entry-title">
			  <a href="blog-view.html">Body Polishing Workshop</a>
			</h2>
			
			<div class="entry-content">
			  Car wax is used after washing and polishing to add a layer of shine to the car as well as a layer of protection. It is a type of paint sealant. If there is any dirt or stains on the paint, then the wax will seal it on the car.You do not want to apply a lot of wax as too much can actually damage the paint.
			</div>
		  </div>
		</article> -->
		<!-- .post -->
	<?php 
		$cnt=count($events);
		for($i=0; $i<$cnt; $i++)
		{

	 ?>
		
		<article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23"> {{	date("d-m-Y", strtotime($events[$i]['date']))}}</time>
          </div>
		  
		  <div class="timeline-icon bg-danger">
			<div class="livicon" data-n="calendar" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
	
	
		  <div class="timeline-content bg bg-danger" data-appear-animation= "fadeInRight"   >
		      
			<!--<h2 class="entry-title">
			  <a href="blog-view.html">{{$events[$i]['name']}}</a> <span class= "pull-right" ><i class="fa fa-map-marker"></i> {{$events[$i]['location']}}</span>
			</h2>-->
			<div class="event-img"> 
			  	<span class="pull-left" style="font-size: 20px"> {{$events[$i]['name']}}</span> 
			  	<span class= "pull-right" style="font-size: 20px"><i class="fa fa-map-marker"></i> {{$events[$i]['location']}}</span>
		  	</div>
			
			<div class="entry-content">
			  <p><img class="img-rounded" src="{{URL::to('/public').Storage::url($events[$i]['image'])}}" width="253" height="158" alt=""></p>
			 <!-- <p class="text-justify"> {!!$events[$i]['description']!!}</p>-->
			</div>
			<div class="event-text"> 
			  	<p class="text-justify"> {!!$events[$i]['description']!!}</p>
		  	</div>
		  </div>
		</article><!-- .post -->

	<?php }  ?>
		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">Feb 3, 2019</time>
          </div>
		  
		  <div class="timeline-icon bg-danger">
			<div class="livicon" data-n="calendar" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-danger" data-appear-animation="fadeInLeft">
			<h2 class="entry-title">
			  <a href="blog-view.html">Body Repair Camp</a> <span class="pull-right"><i class="fa fa-map-marker"></i> Surat</span>
			</h2>
			
			<div class="entry-content">
			  <p><img class="replace-2x img-rounded" src="{{asset('')}}img/events_page/event_page_01.jpg" width="523" height="183" alt=""></p>
			  <p>Use a Sanding Tool Instead of Your Hands. Sanding is important when repairing car body dents, dings and scratches, as well as buffing out a new paint job. However, use a sanding block or a sanding tool rather than your hands for auto body work.</p>
			</div>
		  </div>
		</article> -->
		<!-- .post -->
		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-warning">
			<div class="livicon" data-n="camcoder" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-warning" data-appear-animation="fadeInLeft">
			<h2 class="entry-title">
			  <a href="blog-view.html">Excepteur sint occaecat cupidatat</a>
			</h2>
			
			<div class="entry-content">
			  <div class="video-box youtube">
				<iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/oNBBijn4JuY?showinfo=0&amp;wmode=opaque"></iframe>
			  </div>
			</div>
		  </div>
		</article> -->
		<!-- .post -->

		

		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">Feb 15, 2019</time>
          </div>
		  
		  <div class="timeline-icon bg-danger">
			<div class="livicon" data-n="calendar" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-danger" data-appear-animation="fadeInRight">
			<h2 class="entry-title">
			  <a href="blog-view.html">Body Repair Camp</a><span class="pull-right"><i class="fa fa-map-marker"></i> Surat</span>
			</h2>
			
			<div class="entry-content">
			  <p><img class="replace-2x img-rounded" src="{{asset('')}}img/events_page/event_page_01.jpg" width="523" height="183" alt=""></p>
			  <p>Use a Sanding Tool Instead of Your Hands. Sanding is important when repairing car body dents, dings and scratches, as well as buffing out a new paint job. However, use a sanding block or a sanding tool rather than your hands for auto body work.</p>
			</div>
		  </div>
		</article> -->
		<!-- .post -->



		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-danger">
			<div class="livicon" data-n="location" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content border border-danger" data-appear-animation="fadeInRight">
			<div class="entry-content">
			  <div class="map-box not-margin">
				<div
				  class="map-canvas img-rounded"
				  data-zoom="6"
				  data-lat="40.748441"
				  data-lng="-73.985664"
				  data-hue="#c3293a"
				  data-title="Bryant Park"
				  data-content="New York, NY"></div>
			  </div>
			</div>
		  </div>
		</article> -->
		<!-- .post -->

		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-info">
			<div class="livicon" data-n="pen" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-info" data-appear-animation="fadeInLeft">
			<h2 class="entry-title">
			  <a href="blog-view.html">Excepteur sint occaecat cupidatat</a>
			</h2>
			
			<div class="entry-content">
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
			</div>
		  </div>
		</article> -->
		<!-- .post -->
		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-primary">
			<div class="livicon" data-n="camera" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content border border-primary" data-appear-animation="fadeInRight">
			<div class="entry-content">
			  <img class="replace-2x img-rounded" src="content/img/portfolio-8.jpg" width="543" height="396" alt="">
			</div>
		  </div>
		</article> -->
		<!-- .post -->
		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon">
			<div class="livicon" data-n="pen" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content" data-appear-animation="fadeInLeft">
			<h2 class="entry-title">
			  <a href="blog-view.html">Excepteur sint occaecat cupidatat</a>
			</h2>
			
			<div class="entry-content">
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
			</div>
		  </div>
		</article> -->
		<!-- .post -->
		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-danger">
			<div class="livicon" data-n="calendar" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-danger" data-appear-animation="fadeInRight">
			<h2 class="entry-title">
			  <a href="blog-view.html">Excepteur sint occaecat cupidatat</a>
			</h2>
			
			<div class="entry-content">
			  <p><img class="replace-2x img-rounded" src="content/img/portfolio-14.jpg" width="523" height="183" alt=""></p>
			  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		  </div>
		</article> -->
		<!-- .post -->
		
		<!-- <article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-success">
			<div class="livicon" data-n="quote-right" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-success" data-appear-animation="fadeInLeft">
			<div class="entry-content">
			  <blockquote>
				<p>Proin vel ultrices erat. Etiam et enim libero. Duis sollicitudin dignissim. Duis suscipit  faucibus. Duis tristique feugiat velit quis lobortis. Phasellus dignissim mollis massa, sit amet accumsan urna euismod quis.</p>
				<small>Someone famous in Source Title</small>
			  </blockquote>
			</div>
		  </div>
		</article> -->
		<!-- .post -->
		<!-- 
		<article class="post">
		  <div class="timeline-time">
			<time datetime="2014-06-23">June 23, 2014</time>
          </div>
		  
		  <div class="timeline-icon bg-primary">
			<div class="livicon" data-n="pen" data-c="#fff" data-hc="0" data-s="22"></div>
		  </div>
		  
		  <div class="timeline-content bg bg-primary" data-appear-animation="fadeInRight">
			<h2 class="entry-title">
			  <a href="blog-view.html">Excepteur sint occaecat cupidatat</a>
			</h2>
			
			<div class="entry-content">
			  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
			</div>
		  </div>
		</article> -->
		<!-- .post -->



	  </div><!-- .timeline -->
	</div><!-- .content -->
  </div>
</section><!-- #main -->


@endsection