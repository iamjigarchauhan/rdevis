@extends('admin.admin_master_layout')

@section('title','Contact Us')

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
					<h6 class="card-title">Contact Us</h6>
					<div class="header-elements">
					</div>

				</div>
				<div class="card-body">

					<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Comments</th>
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
									<td>{{$data[$i]->name}}</td>
									<td>{{$data[$i]->email}}</td>
									<td>{{$data[$i]->phone}}</td>
									<td>{{$data[$i]->comment}}</td>
									
									
									<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
								<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
								<!-- <a class="dropdown-item" onclick="openModal(`{{url('/admin/industries-form/'.$data[$i]->id)}}`,'Update Industry','lg')" ><i class="icon-pencil7"></i>Edit</a> -->
							
													<a href="{{url('admin/delete-contact-us/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
  		


	/* ################# delete service feedback #############*/	
		@if(session('delete-contactus-succsees'))
			new Noty({
                text: `{{session('delete-contactus-succsees')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('delete-contactus-error'))
			new Noty({
                text: `{{session('delete-contactus-error')}}`,
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