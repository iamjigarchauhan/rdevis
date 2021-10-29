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

      <li class="active">About Us</li>

    </ul>	

  </div>

</div><!-- .breadcrumb-box -->



<section id="main">

  <header class="page-header">

    <div class="container">

      <h1 class="title">About Us</h1>

    </div>	

  </header>



  <div class="container">

    <div class="row">

	  <article class="content">



	  	<div class="row">

			  <div class="col-sm-6 col-md-6">

					<div class="row list-images responsive">

					  <!-- <div class="col-sm-4 col-md-4"> -->

						  <img class="replace-2x" src="{{asset('')}}img/careers/job1.jpg" width="600px" height="100%" alt="">

					</div>

			  </div>

			  <div class="col-sm-6 col-md-6">

					<div class="row content">

						<h6>VISION</h6>

						<p class="text-justify">To become the leading ‘Engineering Products and Solutions Company’ with a focus towards constant innovation to create value and attain global standards.</p>
						
						<h6>MISSION</h6>

						<p class="text-justify">We aim to deliver innovative products and solutions that exceed the needs of its customers. Together with our exceptional people and strong stakeholder relationships, we commit to the highest standards of quality, productivity, sustainability and performance that drive shareholder value and long-term success in a responsible way.</p>
					</div>

					<br>

					<div class="row content">

						<!-- <div class="bottom-padding col-sm-12 col-md-12"> -->

						 <!--  <div class="panel-group one-open" id="accordion">

							

								<div class="panel panel-default panel-bg active" data-appear-animation="fadeInRightBig">

								  <div class="panel-heading">

									<div class="panel-title">

									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">

										Pession in Automobile

									  </a>

									</div>

								  </div>

								  <div id="collapse1" class="panel-collapse collapse in">

									<div class="panel-body">

									  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis eos perferendis accusamus autem nisi!

									</div>

								  </div>

								</div>

								

								<div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">

								  <div class="panel-heading">

									<div class="panel-title">

									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">

										Quality Work

									  </a>

									</div>

								  </div>

								  <div id="collapse2" class="panel-collapse collapse">

									<div class="panel-body">

									  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque natus quaerat voluptate? Asperiores hic dolore voluptate corporis obcaecati reiciendis sunt ipsam iste. Eligendi inventore voluptatibus quia saepe odit deserunt nam?

									</div>

								  </div>

								</div>

								

								<div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">

								  <div class="panel-heading">

									<div class="panel-title">

									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">

										Great Service

									  </a>

									</div>

								  </div>

								  <div id="collapse3" class="panel-collapse collapse">

									<div class="panel-body">

									  <img class="replace-2x" src="content/img/animations.png" class="alignleft" width="100" height="62" alt="">

									  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit commodi eaque voluptatem officia quam. Molestiae nobis quidem atque explicabo eum facilis libero porro in fugiat pariatur molestias maiores voluptates rerum ipsa architecto quae assumenda harum fuga modi accusantium nihil dolor consequatur totam commodi quam quas neque dolorem veritatis unde adipisci ad illo excepturi quia facere reprehenderit non alias cum minima labore quo repudiandae perferendis?

									</div>

								  </div>

								</div>

								

								<div class="panel panel-default panel-bg" data-appear-animation="fadeInRightBig">

								  <div class="panel-heading">

									<div class="panel-title">

									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">

										Budget Price

									  </a>

									</div>

								  </div>

								  <div id="collapse4" class="panel-collapse collapse">

									<div class="panel-body">

									 

									  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit commodi eaque voluptatem officia quam. Molestiae nobis quidem atque explicabo eum facilis libero porro in fugiat pariatur molestias maiores voluptates rerum ipsa architecto quae assumenda harum fuga modi accusantium nihil dolor consequatur totam commodi quam quas neque dolorem veritatis unde adipisci ad illo excepturi quia facere reprehenderit non alias cum minima labore quo repudiandae perferendis?

									</div>

								  </div>

								</div>



			  			  </div> -->

						<!-- </div> -->

					</div>

			  </div>

		</div>



	



		<!-- Our Group Companies start-->

	 

	  	<!--<div class="title-box text-center">
		  		<h1 class="title" id="Our_Group_Companies">Our Group Companies</h1>
		</div>-->
		
		<div class="title-box">
    		 <h1 class="title">Our Group Companies</h1>
        </div>
        

	  

		<div class="banner-set load bottom-padding" data-autoplay-disable="false">

			<div class="container">

			  <div class="banners">

				<a href="#" class="banner">

				  <img class="replace-2x" src="{{asset('')}}img/events/body_polishing.jpg" width="253" height="158" alt="">

				  <h2 class="title"> Shani Paints </h2> 

				  <span class="pull-left"><i class="fa fa-map-marker"></i> Surat</span>&nbsp;&nbsp;



				  <div class="description">Nunc condimentum eros vel nibh consectetur dignissim. Ut ante neque, ullamcorper ac feugiat at, ullamcorper sagittis magna.</div>

				</a>

				<a href="#" class="banner">

				  <img class="replace-2x" src="{{asset('')}}img/events/body-repair.jpg" width="253" height="158" alt="">

				  <h2 class="title">Atul Chemicals</h2>

				  <span class="pull-left"><i class="fa fa-map-marker"></i> Surat</span>&nbsp;&nbsp;

				  

				  <div class="description">Maecenas ac leo velit. Aliquam venenatis tellus in erat pellentesque ut dignissim turpis consequat. Fusce sit amet sagittis urna.</div>

				</a>

				<a href="#" class="banner">

				  <img class="replace-2x" src="{{asset('')}}img/events/dent_repair.jpg" width="253" height="158" alt="">

				  <h2 class="title">Ramaji Paints</h2>

				  <span class="pull-left"><i class="fa fa-map-marker"></i> Surat</span>&nbsp;&nbsp;

				  

				  <div class="description">Phasellus quis mauris non mauris sceleris vehicula. Vestibulum ipsum odio, placerat sed consequat in, congue non nibh.</div>

				</a>

				<a href="#" class="banner">

				  <img class="replace-2x" src="{{asset('')}}img/events/body-repair.jpg" width="253" height="158" alt="">

				  <h2 class="title">Balaji Colors</h2>

				  <span class="pull-left"><i class="fa fa-map-marker"></i> Surat</span>&nbsp;&nbsp;

				  

				  <div class="description">Maecenas et massa odio, tincidunt ultrices sapien. Praesent non tortor quis metus posuere gravida at quis nulla.</div>

				</a>

				<a href="#" class="banner">

				  <img class="replace-2x" src="{{asset('')}}img/events/body_polishing.jpg" width="253" height="158" alt="">

				  <h2 class="title">Harekrishna Paints</h2>

				  <span class="pull-left"><i class="fa fa-map-marker"></i> Surat</span>&nbsp;&nbsp;

				  

				  <div class="description">Nunc condimentum eros vel nibh consectetur dignissim. Ut ante neque, ullamcorper ac feugiat at, ullamcorper sagittis magna.</div>

				</a>

				<a href="#" class="banner">

				  <img class="replace-2x" src="{{asset('')}}img/events/body_polishing.jpg" width="253" height="158" alt="">

				  <h2 class="title">Shankar Paints</h2>

				  <span class="pull-left"><i class="fa fa-map-marker"></i> Surat</span>&nbsp;&nbsp;

				  

				  <div class="description">Maecenas ac leo velit. Aliquam venenatis tellus in erat pellentesque ut dignissim turpis consequat. Fusce sit amet sagittis urna.</div>

				</a>

			  </div><!-- .banners -->

			  <div class="clearfix"></div>

			</div>

			<div class="nav-box">

			  <div class="container">

				<a class="prev" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>

				<div class="pagination switches"></div>

				<a class="next" href="#"><span class="glyphicon glyphicon-arrow-right"></span></a>	

			  </div>

			</div>

		</div><!-- Our Group Companies end -->





		<!-- managment start -->

		<div class="title-box" id="Managment">
		  		<h1 class="title" id="Management">Management</h1>
		</div>
		

		<div class="clearfix"></div>





	    <div class="row">

	      <div class="content portfolio portfolio4 col-sm-12 col-md-12">

			

			<!-- <div class="row">

			  <div class="col-sm-12 col-md-8">

				<div class="btn-group filter-buttons filter-list">

				  <button type="button" class="dropdown-toggle" data-toggle="dropdown">

					All <span class="caret"></span>

				  </button>

				  <ul class="dropdown-menu" role="menu">

					<li><a href="#" data-filter="*" class="active">All</a></li>

					<li><a href="#" data-filter=".founder">Founder</a></li>

					<li><a href="#" data-filter=".admin">Admin</a></li>

					<li><a href="#" data-filter=".engineering">Engineering</a></li>

				  </ul>

				  <div class="clearfix"></div>

				</div>

			  </div>

			

			 

			</div> -->

			

			<div class="clearfix"></div>

			

			<div class="row filter-elements">

			<?php 

				foreach ($management as $key => $value) {

				

				

			 ?>

			  

			  <div class="founder col-xs-12 col-sm-4 col-md-3">

				<a href="{{url('/about-us/portfolio/'.$management[$key]->id)}}" class="work">

				  <img class="replace-2x" src="{{URL::to('/public').Storage::url($management[$key]->image)}}" width="370" height="270" alt="">

				  <span class="shadow"></span>

				  <div class="bg-hover"></div>

				  <div class="work-title">

				<h3 class="title">{{$management[$key]->name}}</h3>

				<div class="description">{{$management[$key]->designation}}</div>

				  </div>

				</a>

			  </div>

			<?php } ?>

			 



			</div>

	      </div><!-- .content -->

	    </div>

  

  		<!-- managment end -->







  		<!-- values start -->

		<div class="title-box">
		  		<h1 class="title" id="Values">Values</h1>
		</div>



		<div class="row"></div>

			<div class="bottom-padding col-sm-12 col-md-12">

				<p class="text-justify">

					Ambition, Dynamism, Honor Dignity & Sanctity, Integrity  Passion Respect, Strong Drive for Growth, Strive for Innovation & Excellence,  Stand for Truth and Transparency, Welcome & Embrace Change

				</p> 

		  	</div>

		</div>

		<!-- values end -->





	<!-- certifications  start-->

	  <!--	<div class="title-box" >
		  	<h1 class="title">Certifications</h1>
		</div>-->
		<div class="title-box">
		  		<h1 class="title" id="Certifications">Certifications</h1>
		</div>

	<!--	<div class="clearfix"></div>-->
			
		
		<div class="row">
			<?php foreach ($certification as $key => $value) { ?>
			<div class="content-block text-center frame-shadow" style="<?php if($key!=0){echo "margin-top:4%;";}else{ echo ""; } ?>" >
				<p class="lead"> {{$certification[$key]->description}}</p>
			</div>
			<?php } ?>
		</div>






  		<!-- location start -->

  <!-- 		<div class="map-box bottom-padding">

							 

							  	<div class="title-box text-center">

		  							<h1 class="title" id="Location">Location</h1>

								</div>

		  

								<div

								  class="map-canvas"

								  data-zoom="6"

								  data-lat="40.748441"

								  data-lng="-73.985664"

								  data-title="Bryant Park"

								  data-content="New York, NY">

								 </div>

		</div> -->

		<!-- Location end -->















	  </article>

</section>



<div class="clearfix"></div>



@endsection