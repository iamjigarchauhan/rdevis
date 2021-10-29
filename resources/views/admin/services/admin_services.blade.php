@extends('admin.admin_master_layout')

@section('title','Services')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Services</span>
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
								<h6 class="card-title">Services</h6>
								<div class="header-elements">
								</div>

								<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/service-form')}}`,'Add Service','lg')"><b><i class="icon-plus3"></i></b> Add Service</button>

							</div>
							<div class="card-body">

								<table class="table datatable-basic">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Image</th>
												<th>Service Name</th>
												<th>Description</th>
												<th>Page Title</th>
												<th>Meta Keywords</th>
												<th>Meta Description</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
										
										<?php 
										$cnt=count($data);
										for($i=0; $i<$cnt; $i++)
										{	

										 ?>
										
											<tr>
												<td>{{$i+1}}</td>
												<td><img src="{{URL::to('/public').Storage::url($data[$i]->image)}}" width="200px" height="100px"></td>
												<td>{{$data[$i]->name}}</td>
												<td class="text-justify">{!!strip_tags($data[$i]->description)!!}</td>
												<td>{{$data[$i]->page_title}}</td>
												<td>{{$data[$i]->meta_keywords}}</td>
												<td>{{$data[$i]->meta_description}}</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-right">
										<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
										<a class="dropdown-item" onclick="openModal(`{{url('/admin/service-form/'.$data[$i]->id)}}`,'Update Service','lg')" ><i class="icon-pencil7"></i>Edit</a>
										
																<a href="{{url('admin/delete-services/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										<?php }?>
											
										
		
										</tbody>
								</table>		

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
  		
 	/*###############add service validation feedback#####################*/
  		@if($errors->first('name'))
			new Noty({
                text: `{{$errors->first('name')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('image'))
			new Noty({
                text: `{{$errors->first('image')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('description'))
			new Noty({
                text: `{{$errors->first('description')}}`,
                type: 'error'
            }).show();
		@endif


	/*##################product add feedback#######################*/

 		@if(session('addService_success_msg'))
			new Noty({
                text: `{{session('addService_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addService_error_msg'))
			new Noty({
                text: `{{session('addService_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	/* ################# delete service feedback #############*/	
		@if(session('deleteService_success_msg'))
			new Noty({
                text: `{{session('deleteService_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteService_error_msg'))
			new Noty({
                text: `{{session('deleteService_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	/*update Product Category feebback message*/

		@if(session('updateService_success_msg'))
			new Noty({
                text: `{{session('updateService_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateService_error_msg'))
			new Noty({
                text: `{{session('updateService_error_msg')}}`,
                type: 'error'
            }).show();
		@endif


	/*###################### product duplicate error message##################*/

		@if(session('service_dup_err_msg'))
			new Noty({
                text: `{{session('service_dup_err_msg')}}`,
                type: 'error'
            }).show();
		@endif

	// datatable
        $('.datatable-basic').DataTable();

       

  		// browse button
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-primary-400'
        });

  	});


	function reInitInputs()
	{

          $('.summernote').summernote();
	}



</script>

@endsection 