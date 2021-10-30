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
			<li class="active">Events</li>
		</ul>
	</div>
</div>

<div class="clearfix"></div>

<section id="main">
	<header class="page-header">
		<div class="container">
			<h1 class="title">Events</h1>
		</div>
	</header>

	<div class="container">
		<div class="content">

			<!--Accordion wrapper-->
			<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				<!-- Accordion card -->
				@php
				$cnt=count($events);
				@endphp
				@for($i=0; $i<$cnt; $i++) <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingOne1">
						<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$i}}"
							aria-expanded="true" aria-controls="collapseOne1" style="text-decoration: none !important;">
							<h5 class="mb-0"
								style="background: #e3e3e3;border-radius: 7px;padding: 5px 20px;color: black;">
								{{ date("d-m-Y", strtotime($events[$i]['date']))}} <i
									class="fa fa-angle-down rotate-icon" style="float: right; padding-right: 10px;"></i>
							</h5>
						</a>
					</div>

					<!-- Card body -->
					<div id="collapseOne{{$i}}" class="{{$i == 0 ? 'show collapse in' : 'collapse' }}" role="tabpanel"
						aria-labelledby="headingOne1" data-parent="#accordionEx">
						<div class="card-body" style="margin: 15px 0px;color:white">
							<div class="event-img">
								<span class="" style="font-size: 20px"> {{$events[$i]['name']}}</span>
								<span class="" style="font-size: 20px"><i class="fa fa-map-marker"></i>
									{{$events[$i]['location']}}</span>
							</div>
							<div class="entry-content">
								<p><img class="img-rounded"
										src="{{URL::to('/public').Storage::url($events[$i]['image'])}}" width="253"
										height="158" alt=""></p>

							</div>
							<div class="event-text">
								<p class="text-justify"> {!!$events[$i]['description']!!}</p>
							</div>
						</div>
					</div>

			</div>
			@endfor
		</div>
		<!-- Accordion wrapper -->
	</div><!-- .content -->
</section><!-- #main -->


@endsection