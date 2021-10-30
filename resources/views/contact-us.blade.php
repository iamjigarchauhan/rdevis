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

			<li class="active">Contact Us</li>

		</ul>

	</div>

</div><!-- .breadcrumb-box -->



<section id="main">

	<header class="page-header">

		<div class="container">

			<h1 class="title">Contact Us</h1>

		</div>

	</header>

	<div class="container">

		<div class="row">

			<div class="content col-sm-12 col-md-12">
				<p class="font-18">Thank you for visiting Rdevis’ website.
					If you have any queries regarding any region, please contact us at the head office details provided
					below.</p>
				<div class="row">

					<div class="col-sm-6 col-md-6 contact-info bottom-padding">

						<address class="text-justify">

							<div class="title"> <i class="fa fa-map-marker"></i>&nbsp;Head Office</div>

							{!!isset($data->id)?$data->location:''!!}

						</address>

						<hr>
						<p class="font-18">We are India’s leading plant engineering company with continuous aim for high
							efficiency and cost saving. We cater to
							various sectors like the automotive industry, two & three wheeler sector, commercial
							vehicles, consumer sector companies
							among others.
							<br>
							We are present pan-India with various branches at different locations.
						</p>




					</div>
					<div class="col-sm-6 col-md-6 bottom-padding">
						<form action="{{url('/contact-us/quick-contact')}}" id="contactform"
							class="form-box register-form contact-form" method="POST">
							<h3 class="title">Quick Contact</h3>
							<div id="success"></div>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<label>Name: <span class="required">*&nbsp;
									<?php   if(isset($errors)){ echo $errors->first('name');}?>
								</span></label>
							<input class="form-control" type="text" name="name" required>
							<label>Email Address: <span class="required">*&nbsp;
									<?php   if(isset($errors)){ echo $errors->first('email');}?>
								</span></label>
							<input class="form-control" type="email" name="email" required>
							<label>Telephone:<span class="required"> &nbsp;
									<?php   if(isset($errors)){ echo $errors->first('phone');}?>
								</span></label>
							<input class="form-control" type="text" name="phone">
							<label>Comment: </label>
							<textarea class="form-control" name="comment"></textarea>
							<div class="clearfix"></div>
							<div class="buttons-box clearfix">
								<button type="submit" class="btn btn-default">Submit</button>
								<span class="required"><b>*</b> Required Field &nbsp; <h6>
										<?php if(session('success_msg')){ echo session('success_msg');} ?>
									</h6> </span>
							</div><!-- .buttons-box -->
						</form>
					</div>

					<div class="map-box col-sm-12 col-md-12">
						<div>
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.8321867798877!2d77.23688971494704!3d28.574801493442532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce254bd9371a7%3A0x4f28ef720eefc425!2sRdevis+Engineers+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1559226309419!5m2!1sen!2sin"
								width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!--<div class="title-box text-center col-sm-12 col-md-12">
                <h1 class="title">Other Branches</h1>
        </div>-->
		<!--<article class="content col-sm-12 col-md-12">-->
		<div class="title-box">
			<h1 class="title">Other Branches</h1>
		</div>
		<!--	</article>-->

		<div class="row">
			<?php foreach ($branch_data as $key => $value) {?>
			<div class="col-xs-6 col-sm-12 col-md-3 contact-info bottom-padding" style="margin-bottom:0px !important;">
				<address class="text-left">
					<div class="title"> <i class="fa fa-map-marker"></i>&nbsp;{{$branch_data[$key]->branch_name}}</div>
					{{-- {{$branch_data[$key]->address}} --}}
				</address>
			</div>
			<?php } ?>
			<!-- <div class="col-sm-4 col-md-4 contact-info bottom-padding">
					<address class="text-justify">
					  <div class="title"> <i class="fa fa-map-marker"></i>&nbsp;Engineering</div>
					  {!!isset($data->id)?$data->location:''!!}
					</address>
				</div>
				<div class="col-sm-4 col-md-4 contact-info bottom-padding">
					<address class="text-justify">
					  <div class="title"> <i class="fa fa-map-marker"></i>&nbsp;Engineering</div>
					  {!!isset($data->id)?$data->location:''!!}
					</address>
				</div>
				<div class="col-sm-4 col-md-4 contact-info bottom-padding">
					<address class="text-justify">
					  <div class="title"> <i class="fa fa-map-marker"></i>&nbsp;Engineering</div>
					  {!!isset($data->id)?$data->location:''!!}
					</address>
				</div>
				<div class="col-sm-4 col-md-4 contact-info bottom-padding">
					<address class="text-justify">
					  <div class="title"> <i class="fa fa-map-marker"></i>&nbsp;Engineering</div>
					  {!!isset($data->id)?$data->location:''!!}
					</address>
				</div>
				<div class="col-sm-4 col-md-4 contact-info bottom-padding">
					<address class="text-justify">
					  <div class="title"> <i class="fa fa-map-marker"></i>&nbsp;Engineering</div>
					  {!!isset($data->id)?$data->location:''!!}
					</address>
				</div> -->
		{{-- </div>

		<hr>
		<div class="row"> --}}

			<address class="col-sm-12 col-md-12 font-18 contact-info">
				<div class="row">
					<div class="title col-md-2">
						<i class="fa fa-phone"></i>&nbsp;Phone
					</div>
					<div>Support: {{isset($data->id)?$data->support_phone:''}}</div>
					{{-- <div>Sales: {{isset($data->id)?$data->sales_phone:''}}</div> --}}
				</div>

				<!-- 	<div>Director: {{isset($data->id)?$data->director_phone:''}}</div> -->
				<div class="row contact-info">
					<div class="title col-md-2">
						<i class="fa fa-envelope"></i>&nbsp; Email
					</div>
					<div>Support: <a href="mailto:support@example.com">{{isset($data->id)?$data->support_email:''}}</a>
					</div>
					{{-- <div>Sales: <a href="mailto:manager@example.com">{{isset($data->id)?$data->sales_email:''}}</a>
					</div> --}}
				</div>
				<!-- <div>Director: <a href="mailto:chief@example.com">{{isset($data->id)?$data->director_email:''}}</a></div> -->
			</address>
		</div>
	</div><!-- .container -->

</section><!-- #main -->





@endsection