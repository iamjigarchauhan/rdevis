@extends('admin.admin_master_layout')

@section('title','Albums')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Media</span>
							<span class="breadcrumb-item active">Albums</span>
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
								<h6 class="card-title">Albums</h6>
								<div class="header-elements">								
								</div>
								<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/albums-form')}}`,'Add Album','sm')"><b><i class="icon-plus3"></i></b> Add Album</button>
							</div>
							<div class="card-body">


								<table class="table datatable-basic">
									<thead>
										<tr>
											<th>Sr. No.</th>
											<th>Album Name</th>
											<th>Date</th>
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
											<td>{{date("d-m-Y", strtotime($data[$i]->date))}}</td>

											<td class="text-center">
												<div class="list-icons">
													<div class="dropdown">
														<a href="#" class="list-icons-item" data-toggle="dropdown">
															<i class="icon-menu9"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" onclick="openModal(`{{url('/admin/albums-form/'.$data[$i]->id)}}`,'Update Service','lg')" ><i class="icon-pencil7"></i>Edit</a>
															

												<a href="{{url('admin/delete-albums/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
									<?php } ?>
									
	
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
  		
  		
		/*###############add album validation feedback#####################*/
  		@if($errors->first('name'))
			new Noty({
                text: `{{$errors->first('name')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('date'))
			new Noty({
                text: `{{$errors->first('date')}}`,
                type: 'error'
            }).show();
		@endif



  		/*add albums feebback message*/

		@if(session('addAlbums_success_msg'))
			new Noty({
                text: `{{session('addAlbums_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addAlbums_error_msg'))
			new Noty({
                text: `{{session('addAlbums_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		/*update albums feebback message*/

		@if(session('updateAlbums_success_msg'))
			new Noty({
                text: `{{session('updateAlbums_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateAlbums_error_msg'))
			new Noty({
                text: `{{session('updateAlbums_error_msg')}}`,
                type: 'error'
            }).show();
		@endif


		/* ################# delete album feedback #############*/	
		@if(session('deleteAlbums_success_msg'))
			new Noty({
                text: `{{session('deleteAlbums_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteAlbums_error_msg'))
			new Noty({
                text: `{{session('deleteAlbums_error_msg')}}`,
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

	function reInitInputs(){
        $('.daterange-single').daterangepicker({ 
            singleDatePicker: true,
            locale: {
				format: 'DD-MM-YYYY'
			},
        });
	}

  </script>

  @endsection 