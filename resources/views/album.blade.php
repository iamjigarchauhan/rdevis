@extends('master')

@section('title','Album')

@section('content')

	<div class="breadcrumb-box">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a> </li>
      <li class="active">Gallery</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Celebration Gallery</h1>
    </div>	
  </header>
  <div class="container">
    <div class="row">
      <div class="content gallery col-sm-12 col-md-12">
		<div class="row">

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_08.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_08.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_09.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_09.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_08.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_08.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		   <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_08.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_08.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_09.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_09.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_08.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_08.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->
		   <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_08.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_08.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_09.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_09.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->

		  <div class="images-box col-sm-4 col-md-4">
			<a class="gallery-images" rel="fancybox" href="{{asset('')}}img/gallery/gallery_08.jpg">
			  <img src="{{asset('')}}img/gallery/gallery_08.jpg" width="370" height="270" alt="">
			  <span class="bg-images"><i class="fa fa-search"></i></span>
			</a>
		  </div><!-- .images-box -->
		  


<!-- 
		  <div class="col-sm-12 col-md-12">
			<div class="pagination-box">
			  <ul class="pagination">
				<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
				<li class="active"><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="disabled"><a href="#">...</a></li>
				<li><a href="#">9</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			  </ul>
			  <i class="pagination-text">Displaying 1 to 10 (of 100 posts)</i>
			</div> -->
			<!-- .pagination-box -->
		  </div>
		</div>
      </div><!-- .content -->
    </div>
  </div><!-- .container -->
</section><!-- #main -->

@endsection