@extends('master')

@section('meta_info')
  <title>{{$mdata[0]['page_title']}}</title>
  <meta name="keywords" content="{{$mdata[0]['meta_keywords']}}">
  <meta name="description" content="{{$mdata[0]['meta_description']}}">
@endsection

@section('content')

<div class="container">
    <div class="row">
	      <article class="content product-page col-sm-12 col-md-12">

			<div class="product-tab">
					  <ul class="nav nav-tabs">
						<li class="active"><a href="#gallery_tab">Album</a></li>
						<li><a href="#videos_tab">Videos</a></li>
					  </ul><!-- .nav-tabs -->	
					  <div class="tab-content">
							<div class="tab-pane active" id="gallery_tab">
								<h3>Album</h3>

								<div class="row">
									      <div class="content gallery col-sm-12 col-md-12">
											<div class="row">
    								<?php  
    								foreach ($data as $key => $value) {
    								?>
    								    <div class="images-box col-sm-4 col-md-4">
        									<a class="gallery-images" rel="fancybox" href="{{url('media/album/'.$data[$key]->id)}}">
            									  <img class="replace-2x" src="{{URL::to('/public').Storage::url($data[$key]->photo)}}" width="370" height="270" alt="">
            									  <span class="bg-images"><i class="fa fa-search"></i></span>
        									</a>
    									    <div class="title-box">
      										    <a href="{{url('media/album/'.$data[$key]->id)}}"><h2 class="title">{{$data[$key]->name}}</h2></a>
    							   		    </div>
    								    </div>
									<?php } ?>
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
												</div><!-- .pagination-box -->
											</div>

											</div>
									      </div><!-- .content -->
    							</div>


							</div>
				
						
							<div class="tab-pane" id="videos_tab">
							  <h3>Videos</h3>

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
											<!-- <div class="bottom-padding col-sm-6 col-md-6">
												  <div class="title-box">
													<h2 class="title">Car Dent Repairing</h2>
												  </div>
												  <div class="video-box youtube">
													<iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/qyM22nu83ys"></iframe>
												  </div>
											</div> -->

										


											


							



							</div>


					  </div><!-- .tab-content -->
			</div>

		</article>
	</div>
</div>
		  
<div class="clearfix"></div>

@endsection