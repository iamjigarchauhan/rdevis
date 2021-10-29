@extends('master')

@section('meta_info')
	<title>{{$data->page_title}}</title>
  <meta name="keywords" content="{{$data->meta_keywords}}">
  <meta name="description" content="{{$data->meta_description}}">
@endsection

@section('content')



<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active">Portfolio</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Portfolio</h1>
    </div>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="content portfolio col-sm-12 col-md-12">
		
		
		  
		<div class="row">
		  	
		  	<!-- employee image name and designation start -->
		  	<div class="portfolio-tags bottom-padding col-sm-4 col-md-4">	  	
			  	<!-- <div class="frame frame-padding frame-shadow-lifted"> -->
				<!-- 	<a href="{{url('media/album')}}"> -->
					<img src="{{URL::to('/public').Storage::url($data->image)}}" width="200px" height="450px" alt="">
					<!-- </a>  -->
				<!-- </div> -->

			  <!-- 	<div>
			  		<img src="{{asset('')}}img/gallery/gallery_06.jpg" width="100px" hidden="200px">
			  	</div> -->

			  	<br> 
			  	<br>

				<p><b>Name: </b><span>{{$data->name}}</span></p>
				<p><b>Designation: </b><span>{{$data->designation}}</span></p>
				<!-- <p><b>Date: </b><span>March 2013</span></p>
				<p><b>Tags: </b><span>Identity, Print, Web</span></p> -->	
		  	</div>
		  	<!-- employee image name and designation end -->
		  
		  	<!-- Employee descriptions start-->
		  	<div class="bottom-padding col-sm-8 col-md-8">
				<p>
					{{$data->description}}
				</p>
		  	</div>
		  	<!-- Employee descriptions end-->

		  	<a href="{{url('/about-us')}}" class="btn btn-default pull-right">Back</a>
		</div>
		  
		<div class="clearfix"></div>
		  
      </div><!-- .content -->
    </div>
  </div><!-- .container -->
</section><!-- #main -->


<div class="clearfix"></div>

@endsection