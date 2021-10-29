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
      <li class="active">Careers</li>
    </ul>	
  </div>
</div><!-- .breadcrumb-box -->

<section id="main">
  <header class="page-header">
    <div class="container">
      <h1 class="title">Careers</h1>
    </div>	
  </header>
  <div class="container">
    <div class="row">
      <article class="content col-sm-12 col-md-12">
	<?php 
		$cnt=count($jobs);
		for($i=0; $i<$cnt; $i++)
		{
	 ?>
		<div class="row">
		  <div class="col-sm-6 col-md-6">
				<div class="row list-images responsive">
				  <!-- <div class="col-sm-4 col-md-4"> -->
					<a class="gallery-images" rel="fancybox" href="{{URL::to('/public').Storage::url($jobs[$i]['image'])}}">
					  <img src="{{URL::to('/public').Storage::url($jobs[$i]['image'])}}" width="580" height="300" alt="">
					  <span class="bg-images"><!--<i class="fa fa-search"></i>--></span>
					</a>
				</div>
		  </div>
		  <div class="col-sm-6 col-md-6 text-">
			<h4>{{$jobs[$i]['title']}}</h4>
			<p class="text-justify"> {!!$jobs[$i]['description']!!}</p>
		  </div>
		</div>
		<br>
	<?php } ?>


		
		<div class="title-box">
		  <h2 class="title">Latest jobs openings</h2>
		</div>
		<div class="panel-group" id="accordion3">
		  <div class="panel panel-default panel-bg">
			<div class="panel-heading">
			  <div class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse31">
				  Our Company Mission
				</a>
			  </div>
			</div>
			<div id="collapse31" class="panel-collapse collapse">
			  <div class="panel-body">
				<!-- <img src="content/img/animations.png" class="alignleft" width="100" height="62" alt=""> -->
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit commodi eaque voluptatem officia quam. Molestiae nobis quidem atque explicabo eum facilis libero porro in fugiat pariatur molestias maiores voluptates rerum ipsa architecto quae assumenda harum fuga modi accusantium nihil dolor consequatur totam commodi quam quas neque dolorem veritatis unde adipisci ad illo excepturi quia facere reprehenderit non alias cum minima labore quo repudiandae perferendis?
			  </div>
			</div>
		  </div>
		  
		  <div class="panel panel-default panel-bg">
			<div class="panel-heading">
			  <div class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse32">
				  The Infostyle Philosophy
				</a>
			  </div>
			</div>
			<div id="collapse32" class="panel-collapse collapse">
			  <div class="panel-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque natus quaerat voluptate? Asperiores hic dolore voluptate corporis obcaecati reiciendis sunt ipsam iste. Eligendi inventore voluptatibus quia saepe odit deserunt nam?
			  </div>
			</div>
		  </div>
		  
		  <div class="panel panel-default panel-bg">
			<div class="panel-heading">
			  <div class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse33">
				  The Infostyle Promise
				</a>
			  </div>
			</div>
			<div id="collapse33" class="panel-collapse collapse">
			  <div class="panel-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit commodi eaque voluptatem officia quam. Molestiae nobis quidem atque explicabo eum facilis libero porro in fugiat pariatur molestias maiores voluptates rerum ipsa architecto quae assumenda harum fuga modi accusantium nihil dolor consequatur totam commodi quam quas neque dolorem veritatis unde adipisci ad illo excepturi quia facere reprehenderit non alias cum minima labore quo repudiandae perferendis?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam impedit.</p>
			  </div>
			</div>
		  </div>
		  
		  <div class="panel panel-default panel-bg">
			<div class="panel-heading">
			  <div class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse34">
				  We Can Deliver On Projects
				</a>
			  </div>
			</div>
			<div id="collapse34" class="panel-collapse collapse">
			  <div class="panel-body">
				<!-- <img src="content/img/animations.png" class="alignleft" width="100" height="62" alt=""> -->
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsa esse obcaecati repudiandae veniam amet modi recusandae optio earum sequi accusantium culpa vitae iste sit commodi eaque voluptatem officia quam. Molestiae nobis quidem atque explicabo eum facilis libero porro in fugiat pariatur molestias maiores voluptates rerum ipsa architecto quae assumenda harum fuga modi accusantium nihil dolor consequatur totam commodi quam quas neque dolorem veritatis unde adipisci ad illo excepturi quia facere reprehenderit non alias cum minima labore quo repudiandae perferendis?
			  </div>
			</div>
		  </div>
		</div>

		<div class="clearfix"></div>

		<div class="title-box">
		  <h2 class="title">Job Application</h2>
		</div>
		<div class="clearfix"></div>
		<!-- <div>
			<span> -->
		<?php 
		/*if(isset($errors))
			{
				echo $errors->first();	
			}*/
		 ?>
		<!--  </span>
		 </div> -->
	  	<form action="{{url('careers/job-applicaion')}}" role="form" method="post" enctype="multipart/form-data">
	  		<input type="hidden" name="_token" value="{{csrf_token()}}">
	  			<div class="form-group">
					<label for="fname">First name</label>
					<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter first name" required>
				</div>
				<div class="form-group">
					<label for="lname">Last name</label>
					<input type="text" class="form-control" name="lname" id="lname" placeholder="Enter last name" required>
				</div>
				<div class="form-group">
					<label for="examplid">Email address</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
				</div>
				<div class="form-group">
					<label for="job_id">Job ID</label>
					<!-- <input type="text" class="form-control" id="post_name" placeholder="Enter post name"> -->
					<select name="job_id" class="form-control" id="job_id" required>
					 <!--  <option value="">Select Job ID</option> -->
					  <?php 
					  $cnt=count($jobs);
					  for($i=0; $i<$cnt ;$i++)
					  { ?>
					  <option value="{{$jobs[$i]['id']}}">{{$jobs[$i]['title']}}</option>
					  <?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="resume">Resume</label>
					<input type="file" name="resume" id="resume" required>
				</div>
				  
				<button type="submit" class="btn btn-default">Apply</button> 
				<span> 
					<?php 
						if(session('job_msg'))
						{
							echo session('job_msg');
						}
					 ?>
				</span>
		</form>

	  </article><!-- .content -->

	  

    </div>
  </div><!-- .container -->
</section><!-- #main -->
@endsection