@extends('admin.admin_master_layout')

@section('title','Video')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Media</span>
							<span class="breadcrumb-item active">Video</span>
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
								<h6 class="card-title">Video</h6>
								<div class="header-elements">
								</div>

									<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/video-form')}}`,'Add Video','lg')"><b><i class="icon-plus3"></i></b> Add Video</button>

							</div>
							<div class="card-body">

									<table class="table datatable-basic">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Video Title</th>
												<th>Youtube Embedded Link</th>
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
												<td>{{$data[$i]->title}}</td>
												<td>{{$data[$i]->link}}</td>

												
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-right">
										<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
										<a class="dropdown-item" onclick="openModal(`{{url('/admin/video-form/'.$data[$i]->id)}}`,'Update Video','lg')" ><i class="icon-pencil7"></i>Edit</a>
										
																<a href="{{url('admin/delete-video/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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

  		@if($errors->first('title'))
			new Noty({
                text: `{{$errors->first('title')}}`,
                type: 'error'
            }).show();
		@endif


  		@if($errors->first('link'))
			new Noty({
                text: `{{$errors->first('link')}}`,
                type: 'error'
            }).show();
		@endif

	

	

 /*##################video add feedback#######################*/
 		@if(session('addvideo_success_msg'))
			new Noty({
                text: `{{session('addvideo_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addvideo_error_msg'))
			new Noty({
                text: `{{session('addvideo_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	
		/*###### update video  feebback message###############*/

		@if(session('updateVideo_success_msg'))
			new Noty({
                text: `{{session('updateVideo_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateVideo_error_msg'))
			new Noty({
                text: `{{session('updateVideo_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		/* ################# delete video feedback #############*/	
		@if(session('deleteVideo_success_msg'))
			new Noty({
                text: `{{session('deleteVideo_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteVideo_error_msg'))
			new Noty({
                text: `{{session('deleteVideo_error_msg')}}`,
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