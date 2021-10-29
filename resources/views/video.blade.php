@extends('master')

@section('meta_info')
	<title>Video</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
@endsection

@section('content')

<div>
	<img id="#my_img" src="{{asset('')}}img/cars/car_7.jpg" width="100%" alt="">
</div>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active"> <a href="{{url('/media')}}"> Media</a></li>
      <li class="active"> Video </li>

    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  	<header class="page-header">
    	<div class="container">
      		<h1 class="title">Video</h1>
    	</div>	
  	</header>

  <!-- 	<div class="title-box text-center" id="Managment">
		<h1 class="title"></h1>
	</div> -->
  
  <article class="content">
	
	<div class="container">
    <div class="row">
      <article class="content col-sm-12 col-md-12">
		
		<div class="container">
	    	<article class="content">
					<div class="row">

						<?php 
						$cnt=count($vdata); 
						for($i=0; $i<$cnt; $i++)
						{
						?>

						<div class="bottom-padding col-sm-6 col-md-6">
						  <div class="title-box">
							<h2 class="title">{{$vdata[$i]['title']}}</h2>
						  </div>
						  <div class="video-box youtube">
							<iframe frameborder="0" allowfullscreen="" src="{{$vdata[$i]['link']}}"></iframe>
						  </div>
						</div>

					<?php } ?>
				
				</div>
				<div class="col-sm-12 col-md-12">
				      {{ $vdata->links() }}
					<!--<div class="pagination-box">-->
					<!--  <ul class="pagination">-->
					<!--	<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>-->
					<!--	<li class="active"><span>1</span></li>-->
					<!--	<li><a href="#">2</a></li>-->
					<!--	<li><a href="#">3</a></li>-->
					<!--	<li class="disabled"><a href="#">...</a></li>-->
					<!--	<li><a href="#">9</a></li>-->
					<!--	<li><a href="#"><i class="fa fa-angle-right"></i></a></li>-->
					<!--  </ul>-->
					<!--  <i class="pagination-text">Displaying 1 to 10 (of 100 posts)</i>-->
					<!--</div><!-- .pagination-box -->
				  </div>

			</article>	
		</div><!-- .tab-content -->
		
		
	  </article><!-- .content -->
    </div>
  </div><!-

  </article><!-- .content -->
</section><!-- #main -->

		  
<div class="clearfix"></div>

@endsection