@extends('master')

@section('meta_info')
	<title>{{$pdata->page_title}}</title>
  <meta name="keywords" content="{{$pdata->meta_keywords}}">
  <meta name="description" content="{{$pdata->meta_description}}">
@endsection

@section('content')

<div>
	<!--<img id="my_img" src="{{URL::to('/public').Storage::url($pdata->product_image)}}" width="100%" alt="">-->
	<?php if( $pdata->product_image != '' ){ ?>
	    <img id="my_img" src="{{URL::to('/public').Storage::url($pdata->product_image)}}" width="100%" alt="">
    <?php } else{ ?>
        <img id="my_img" src="{{asset('')}}img/cars/car_6.jpg" width="100%" alt="">
    <?php } ?>
</div>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active"> <a href="{{url('/all-product-category')}}"> Products</a></li>
      @if(isset($cdata->id))
      	<li class="active">	<a href="{{url('/product-category/'.$cdata->id)}}"> {{$cdata->category_name}} </a></li>
      @endif
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

{{-- <section id="main">
  	<header class="page-header">
    	<div class="container">
      		<h1 class="title">{{$pdata->product_name}}</h1>
    	</div>	
  	</header>

  <!-- 	<div class="title-box text-center" id="Managment">
		<h1 class="title"></h1>
	</div> -->
  
  <article class="content">
	
	<div class="container">
    <div class="row">
      <article class="content col-sm-12 col-md-12">
		
		<div class="row">
		  
		 	<!-- <div class="col-sm-6 col-md-6">
				<div class="list-images no-responsive">
					<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/products/paint_application/paint_colors.jpg">
					  <img src="{{asset('')}}img/products/paint_application/paint_colors.jpg" width="700" height="350" alt="">
					  <span class="bg-images"><i class="fa fa-search"></i></span>
					</a>
				</div>
		 	</div> -->
		  <div class="col-sm-12 col-md-12 text-justify">
			<h4>Description</h4>
			
				<div class="text-justify">{!!$pdata->product_description!!}</div>
			
		  </div>
		</div>
		
		
	  </article><!-- .content -->
    </div>
  </div><!-

  </article><!-- .content -->
</section><!-- #main --> --}}

		  
<div class="clearfix"></div>

@endsection