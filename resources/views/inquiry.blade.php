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
      <li class="active">Enquiry</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->



<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Enquiry</h1>
    </div>	
  </header>
  <div class="container">
	    <div class="row">
	      <div class="content col-sm-12 col-md-12">
			<div class="row">
			  <div class="col-sm-6 col-md-6 contact-info bottom-padding">
							
				<p class="font-18">{!!$inquiry_msg->inquiry_form_msg!!}</p>

				
				<hr>
				<a href="{{URL::to('public/').Storage::url($inquiry_msg->inquiry_form)}}"  class="btn btn-default" role="button">Download RFQ Form</a>
			  </div>

			  <div class="col-sm-6 col-md-6 bottom-padding">
				<form action="{{url('/add-inquiry')}}" id="contactform" class="form-box register-form contact-form" method="POST">

				  <h3 class="title">Enquiry Form</h3>

				  <div id="success"></div>

					  <input type="hidden" name="_token" value="{{csrf_token()}}">
					  
					  <label>Name: <span class="required">*&nbsp; <?php   if(isset($errors)){ echo $errors->first('name');}?></span></label>
					  <input class="form-control" type="text" name="name" required>
					  
					  <label>Email Address: <span class="required">*&nbsp; <?php   if(isset($errors)){ echo $errors->first('email');}?></span></label>
					  <input class="form-control" type="email" name="email" required>
					  
					  <label>Telephone:<span class="required"> &nbsp;<?php   if(isset($errors)){ echo $errors->first('phone');}?></span></label>
					  <input class="form-control" type="text" name="phone">

					  <label>Company Name: <span class="required">*&nbsp; <?php   if(isset($errors)){ echo $errors->first('company');}?></span></label>
					  <input class="form-control" type="text" name="company" required>
					  
					  <label>Comment: </label>
					  <textarea class="form-control" name="comment"></textarea>
					  
					  <div class="clearfix"></div>

					  <div class="buttons-box clearfix">
						<button type="submit"  class="btn btn-default">Submit</button>
						<span class="required"><b>*</b> Required Field &nbsp; <h6><?php if(session('success_msg')){ echo session('success_msg');} ?> </h6> </span>
					 </div><!-- .buttons-box -->
				</form>
			  </div>
			</div>
	      </div>
	    </div>
	    
  </div><!-- .container -->

</section><!-- #main -->





@endsection