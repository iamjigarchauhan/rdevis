@extends('master')

@section('meta_info')
	<title>Product Category</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
@endsection

@section('content')

<div>
	<img id="my_img" src="{{asset('')}}img/cars/car_7.jpg" width="100%" alt="">
</div>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active">Products</li>
     <!--  <li class="active">Product category</li> -->

    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  	<header class="page-header">
    	<div class="container">
      		<h1 class="title">Product category</h1>
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

				<div class="content gallery col-sm-12 col-md-12">
					<div class="row">

				<?php 
				$cnt=count($data);
				for($i=0; $i<$cnt; $i++)
				{
				 ?>
								
					  	<div class="images-box col-sm-4 col-md-4">
							<a class="gallery-images" rel="fancybox" href="{{url('/industries/'.$data[$i]['id'])}}">
							  <img src="{{URL::to('/public').Storage::url($data[$i]['image'])}}" width="370" height="270" alt="">
							  <span class="bg-images"><!--<i class="fa fa-search"></i>--></span>
							</a>

					   		<button type="button" onclick="window.location.href= `<?= url('/industries/'.$data[$i]['id']) ?>`" class="btn btn-primary btn-lg btn-block">{{$data[$i]['name']}}</button>

					  	</div>
				<?php } ?>


														  
    				</div>
				</div>
								 
		</div>
		
		
	  </article><!-- .content -->
    </div>
  </div><!-

  </article><!-- .content -->
</section><!-- #main -->

		  
<div class="clearfix"></div>

@endsection