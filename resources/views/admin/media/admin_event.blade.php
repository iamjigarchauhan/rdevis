@extends('admin.admin_master_layout')

@section('title','Events')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Media</span>
							<span class="breadcrumb-item active">Events</span>
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
								<h6 class="card-title">Events</h6>
								<div class="header-elements">
								</div>

									<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/event-form')}}`,'Add Event','lg')"><b><i class="icon-plus3"></i></b> Add Event</button>

							</div>
							<div class="card-body">

									<table class="table datatable-basic">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Event Name</th>
												<th>Date</th>
												<th>Location</th>
												<th>Image</th>
												<th>Description</th>
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
												<td>{{$data[$i]->location}}</td>

												<td><img src="{{URL::to('/public').Storage::url($data[$i]->image)}}" width="200px" height="100px"></td>

												<td class="text-justify">{!!$data[$i]->description!!} </td>
												
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-right">
										<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
										<a class="dropdown-item" onclick="openModal(`{{url('/admin/event-form/'.$data[$i]->id)}}`,'Update Event','lg')" ><i class="icon-pencil7"></i>Edit</a>
										
																<a href="{{url('admin/delete-event/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
  		
  	/*############## add event Validation meesssage #######################*/

  		@if($errors->first('name'))
			new Noty({
                text: `{{$errors->first('name')}}`,
                type: 'error'
            }).show();
		@endif


  		@if($errors->first('location'))
			new Noty({
                text: `{{$errors->first('location')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('date'))
			new Noty({
                text: `{{$errors->first('date')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('image'))
			new Noty({
                text: `{{$errors->first('image')}}`,
                type: 'error'
            }).show();
		@endif

		

 /*##################event add feedback#######################*/
 		@if(session('addEvent_success_msg'))
			new Noty({
                text: `{{session('addEvent_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addEvent_error_msg'))
			new Noty({
                text: `{{session('addEvent_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	
		/*###### update event  feebback message###############*/

		@if(session('updateEvent_success_msg'))
			new Noty({
                text: `{{session('updateEvent_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateEvent_error_msg'))
			new Noty({
                text: `{{session('updateEvent_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		/* ################# delete event feedback #############*/	
		@if(session('deleteEvent_success_msg'))
			new Noty({
                text: `{{session('deleteEvent_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteEvent_error_msg'))
			new Noty({
                text: `{{session('deleteEvent_error_msg')}}`,
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
		 /*$('.form-control-select2').select2();*/
		 // Control editor height
        // $('.summernote-height').summernote({
        //     height: 400
        // });
          $('.summernote').summernote();

          $('.daterange-single').daterangepicker({ 
            singleDatePicker: true,
            locale: {
				format: 'DD-MM-YYYY'
			},
        });
	}

  </script>

  @endsection 