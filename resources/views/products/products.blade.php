@extends('master')

@section('meta_info')
	<title>Product Category</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
@endsection

@section('content')

<div>

	<?php if($product_category->image){ ?>
	<img id="my_img" src="{{ url('/public/storage/'. $product_category->image) }}" width="100%" alt="">
	<?php } else{ ?>
	<img id="my_img" src="{{asset('')}}img/cars/car_7.jpg" width="100%" alt="">
	<?php } ?>

</div>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li><a href="{{url('/all-product-category')}}">Products</a> </li>
    <!--  <li class="active"> <a href="{{url('/all-product-category')}}"> Products</a></li>-->
      <li class="active"> {{$product_category->category_name}} </li>

    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  	<header class="page-header">
    	<div class="container">
      		<h1 class="title">{{$product_category->category_name}}</h1>
    	</div>	
  	</header>
  <!-- 	<div class="title-box text-center" id="Managment">
		<h1 class="title"></h1>
	</div> -->
  
  <article class="content">
	
	<div class="container">
    <div class="row">
      <article class="content col-sm-12 col-md-12">
          
        <div class="bottom-padding col-sm-12 col-md-12 text-justify">
              <p>{!!$product_category->description!!}</p>
        </div>
		
		<div class="row">

				<div class="content gallery col-sm-12 col-md-12">
					<div class="row">

				<?php 
				$cnt=count($data);
				for($i=0; $i<$cnt; $i++)
				{
				 ?>
								
					  	<div class="images-box col-sm-4 col-md-4">
							<a class="gallery-images" rel="fancybox" href="{{url('/products/'.$data[$i]['product_category_id'].'/'.$data[$i]['id'])}}">
							  <img src="{{URL::to('/public').Storage::url($data[$i]['product_image'])}}" width="370" height="270" alt="">
							  <span class="bg-images"><!--<i class="fa fa-search"></i>--></span>
							</a>

						<!--	<div class="title-box">
									<a href="{{url('/products/'.$data[$i]['product_category_id'].'/'.$data[$i]['id'])}}"><h2 class="title">{{$data[$i]['product_name']}}</h2></a>
					   		</div>-->
					   		
					   		<button type="button" onclick="window.location.href= `<?= url('/products/'.$data[$i]['product_category_id'].'/'.$data[$i]['id']) ?>`" class="btn btn-primary btn-lg btn-block">{{$data[$i]['product_name']}}</button>

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