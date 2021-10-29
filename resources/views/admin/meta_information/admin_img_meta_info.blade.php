@extends('admin.admin_master_layout')

@section('title','Product')

@section('content')

<!-- Page header -->
<div class="page-header page-header-light">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
				<span class="breadcrumb-item active">Meta Information</span>
				<span class="breadcrumb-item active">Image Video Page</span>
			</div>

			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>
	</div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

<!-- Main charts -->
<div class="row">
	<div class="col-md-12">

		<div class="card">
			<div class="card-header header-elements-inline">
				<h6 class="card-title">Image Video Page</h6>
				<div class="header-elements">
				</div>
			</div>

			<div class="card-body">

				<form action="{{url('/admin/post-img-meta-info')}}" method="post" enctype='multipart/form-data' >
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<input type="hidden" name="page" value="img_page">

						<div class="form-group">
							<label>Page title:</label>
							<input type="text" name=page_title class="form-control" placeholder="Enter Page Title" value="{{isset($data[0]['id'])?$data[0]['page_title']:''}}" required>
						</div>

						<div class="form-group">
							<label>Meta Keywords:</label>
							<textarea type="text" name=meta_keywords class="form-control" placeholder="Enter Meta Keywords" >{{isset($data[0]['id'])?$data[0]['meta_keywords']:''}} </textarea> 
						</div>

						<div class="form-group">
							<label>Meta Description:</label>
							<textarea type="text" name=meta_description class="form-control" placeholder="Enter Meta Description" >{{isset($data[0]['id'])?$data[0]['meta_description']:''}} </textarea> 
						</div>
		   

						<div class="form-group">
							<button type="submit" class="btn bg-primary float-left"> Set Details<i class="icon-paperplane ml-2"></i></button>
						</div>
					</form>
					
			</div>

		</div>

	</div>
</div>
<!-- /main charts -->
</div>
<!-- /content area -->

@endsection


@section('custom_script')
<script type="text/javascript">

	$(document).ready(function(){
  		
  


		
 /*##################product add feedback#######################*/
 		@if(session('addMeta_success_msg'))
			new Noty({
                text: `{{session('addMeta_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addMeta_error_msg'))
			new Noty({
                text: `{{session('addMeta_error_msg')}}`,
                type: 'error'
            }).show();
		@endif
    
  
  	});

	

  </script>

  @endsection 