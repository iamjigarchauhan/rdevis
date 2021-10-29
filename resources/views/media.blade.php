@extends('master')

@section('meta_info')
	<title>{{$mdata[0]['page_title']}}</title>
  <meta name="keywords" content="{{$mdata[0]['meta_keywords']}}">
  <meta name="description" content="{{$mdata[0]['meta_description']}}">
@endsection

@section('content')

<div>
	<img id="#my_img" src="{{asset('')}}img/cars/car_7.jpg" width="100%" alt="">
</div>

<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
       <li class="active"> Album </li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  	<header class="page-header">
    	<div class="container">
      		<h1 class="title">Album</h1>
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
					    <div class="content gallery col-sm-12 col-md-12">
							<div class="row">
							<?php  
					
							foreach ($data as $key => $value) {		
						
							?>

							  <div class="images-box col-sm-4 col-md-4">
								<a class="gallery-images" rel="fancybox" href="{{url('media/album/'.$data[$key]->id)}}">
								  <img src="{{URL::to('/public').Storage::url($data[$key]->photo)}}" width="370" height="270" alt="">
								  <span class="bg-images"><!--<i class="fa fa-search"></i>--></span>
								</a>
								<!--<div class="title-box">
										<a href="{{url('media/album/'.$data[$key]->id)}}"><h2 class="title">{{$data[$key]->name}}</h2></a>
						   		</div>-->
						   		<button type="button" onclick="window.location.href= `<?= url('media/album/'.$data[$key]->id)?>`" class="btn btn-primary btn-lg btn-block">{{$data[$key]->name}}</button>
							  </div>
							<?php } ?>
							  
							  <div class="col-sm-12 col-md-12">
							      {{ $data->links() }}
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

							</div>
					    </div><!-- .content -->
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