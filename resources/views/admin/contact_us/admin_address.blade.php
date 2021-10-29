@extends('admin.admin_master_layout')

@section('title','Address')

@section('content')

<!-- Page header -->
<div class="page-header page-header-light">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
				<span class="breadcrumb-item active">Contact Us</span>
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
					<h6 class="card-title">Address</h6>
					<div class="header-elements">
					</div>

				</div>
				<div class="card-body col-md-6" >

					<form action="{{url('/admin/add-address')}}" method="post" enctype='multipart/form-data' >
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">
			
						<div class="form-group">
							<label>Support Email:</label>
							<input type="text" name=support_email class="form-control"  value="{{isset($data->id)?$data->support_email:''}}" required>
						</div>

						<div class="form-group">
							<label>Sales Email:</label>
							<input type="text" name=sales_email class="form-control"  value="{{isset($data->id)?$data->sales_email:''}}" required>
						</div>

						<!-- <div class="form-group">
							<label>Director Email:</label>
							<input type="text" name=director_email class="form-control"  value="{{isset($data->id)?$data->director_email:''}}" required>
						</div> -->

						<div class="form-group">
							<label>Support Phone:</label>
							<input type="text" name=support_phone class="form-control"  value="{{isset($data->id)?$data->support_phone:''}}" required>
						</div>

						<div class="form-group">
							<label>Sales Phone:</label>
							<input type="text" name=sales_phone class="form-control" value="{{isset($data->id)?$data->sales_phone:''}}" required>
						</div>

						<!-- <div class="form-group">
							<label>Director Phone:</label>
							<input type="text" name=director_phone class="form-control"  value="{{isset($data->id)?$data->director_phone:''}}" required>
						</div> -->

			        	

						<div class="form-group">
							<label>Address:</label>
							<textarea class="summernote" name="location" id="location" required>
								{{isset($data->id)?$data->location:''}}
							</textarea>
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
  		


	/* ################# add address feedback #############*/	
		@if(session('addAddress_success_msg'))
			new Noty({
                text: `{{session('addAddress_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addAddress_error_msg'))
			new Noty({
                text: `{{session('addAddress_error_msg')}}`,
                type: 'error'
            }).show();
		@endif


	// datatable
        $('.datatable-basic').DataTable();

       

  		// browse button
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-primary-400'
        });

         $('.summernote').summernote();

  	});


	



</script>

@endsection 