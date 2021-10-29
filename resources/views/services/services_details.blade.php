@extends('master')



@section('meta_info')

	<title>{{$data->page_title}}</title>

  <meta name="keywords" content="{{$data->meta_keywords}}">

  <meta name="description" content="{{$data->meta_description}}">

@endsection



@section('content')



<div>
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
      <li>Services</li>
      <li class="active">{{$data->name}}</li>

    </ul>	

  </div>

</div><!-- .breadcrumb-box -->







<!-- <div class="tp-banner-container">

	<img src="{{asset('')}}img/services/services_banner.jpg" >

</div> -->



<section id="main"> 	

  	

  	<header class="page-header">

    	<div class="container">

      		<h1 class="title">{{$data->name}}</h1>

    	</div>	

  	</header>



  	

   <div class="container">

	  <article class="content">

		
<!-- 
			<div class="title-box">

				<h2 class="title">{{$data->name}}</h2>

	  		</div> -->



		  	<div class="bottom-padding">

				<div class="row">

			  		<div class="col-sm-12 col-md-12 text-justify">

						<p>

							{!!$data->description!!}

						</p>

			  		</div>

				  	<!-- <div class="col-sm-5 col-md-4  work-element"> -->

					<!-- <a href="portfolio-single.html" class="work"> -->

					  <!-- <img src="{{asset('')}}img/services/extra_services_01.jpg" width="370" height="270" alt=""> -->

					<!-- </a> -->

				  	<!-- </div> -->

				</div>

		  	</div>



	  </article><!-- .content -->

	</div>



</section><!-- #main -->



		  

<div class="clearfix"></div>



@endsection