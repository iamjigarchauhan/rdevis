@extends('master')

@section('meta_info')
	<title>{{$data->page_title}}</title>
  <meta name="keywords" content="{{$data->meta_keywords}}">
  <meta name="description" content="{{$data->meta_description}}">
@endsection

@section('content')


<div>
	<!-- <img  id="#my_img" src="{{asset('')}}img/gallery/gallery_05.jpg"  alt="" > -->
	 <?php if( $data->image != '' ){ ?>
	<img id="my_img" src="{{URL::to('/public').Storage::url($data->image)}}" width="100%" alt="">
	  <?php } else{ ?>
	   <img id="my_img" src="{{asset('')}}img/cars/car_6.jpg" width="100%" alt="">
    <?php } ?>
</div>


<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li>Industries</li>
      <li class="active">{{$data->name}}</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->




<section id="main"> 

  	
  	<header class="page-header">
    	<div class="container">
      		<h1 class="title">{{$data->name}}</h1>
    	</div>	
  	</header>

  	<div class="container">
	  

	  <article class="content">

	  

	  	<div class="row">
      		<div class="content col-sm-12 col-md-12 text-justify">
      		<!--	<h4>{{$data->name}} </h4>-->
					<p class="text-justify">
						{!!$data->description!!}
					</p>
      		</div>
      	</div>
      	
      	@php
        $img_name = json_decode($data->data_img);
        $img_name = is_array($img_name) ? $img_name : [$data->data_img];
        @endphp
        <?php foreach ($img_name as $img): ?>
            <div class="images-box col-sm-6 col-md-4" style="margin-bottom: 30px;">
                <a class="gallery-images" rel="fancybox" href="{{URL::to('/public').Storage::url($img)}}">
                    <img class="replace-2x" src="{{URL::to('/public').Storage::url($img)}}" style="height: 250px;" alt="">
                </a>
            </div>
        <?php endforeach ?>

	 <!--  	<div class="row">
      		<div class="content gallery col-sm-12 col-md-12">
				<div class="row">
		 			<div class="images-box col-sm-12 col-md-12">
						<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_05.jpg">
						  <img src="{{asset('')}}img/gallery/gallery_05.jpg" width="1170" height="410" alt="">
			  				<span class="bg-images"><i class="fa fa-search"></i></span>
						</a>
		  			</div>
				</div> 
      		</div>
    	</div> -->
    	




	  </article><!-- .content -->
	</div>

</section><!-- #main -->

		  
<div class="clearfix"></div>

@endsection