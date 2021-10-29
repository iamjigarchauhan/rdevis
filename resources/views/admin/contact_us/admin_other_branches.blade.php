@extends('admin.admin_master_layout')

@section('title','Other Branches')

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
					<h6 class="card-title">Other Branches</h6>
					<div class="header-elements">
					</div>

					<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/other-branch-form')}}`,'Add Branch','lg')"><b><i class="icon-plus3"></i></b> Add Branch</button>

				</div>
				<div class="card-body">

					<table class="table datatable-basic">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Branch Name</th>
												<th>Address</th>
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
												<td>{{$data[$i]->branch_name}}</td>
												<td class="text-justify">{{$data[$i]->address}}</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-right">
										<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
										<a class="dropdown-item" onclick="openModal(`{{url('/admin/other-branch-form/'.$data[$i]->id)}}`,'Update Branch','lg')" ><i class="icon-pencil7"></i>Edit</a>
										
																<a href="{{url('admin/delete-other-branch/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
  		
		@if($errors->first('branch_name'))
			new Noty({
                text: `{{$errors->first('branch_name')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('address'))
			new Noty({
                text: `{{$errors->first('address')}}`,
                type: 'error'
            }).show();
		@endif

		/* ################# add branch feedback #############*/	
		@if(session('addOtherBranch_success_msg'))
			new Noty({
                text: `{{session('addOtherBranch_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addOtherBranch_error_msg'))
			new Noty({
                text: `{{session('addOtherBranch_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		/* ################# update branch feedback #############*/	
		@if(session('updateOtherBranch_success_msg'))
			new Noty({
                text: `{{session('updateOtherBranch_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateOtherBranch_error_msg'))
			new Noty({
                text: `{{session('updateOtherBranch_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	/* ################# delete branch feedback #############*/	
		@if(session('deleteOtherBranch_success_msg'))
			new Noty({
                text: `{{session('deleteOtherBranch_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteOtherBranch_error_msg'))
			new Noty({
                text: `{{session('deleteOtherBranch_error_msg')}}`,
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


	/*function reInitInputs()
	{

          $('.summernote').summernote();
	}*/



</script>

@endsection 