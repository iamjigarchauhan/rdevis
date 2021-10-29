@extends('admin.admin_master_layout')

@section('title','Jobs')

@section('content')

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<span class="breadcrumb-item active">Careers</span>
					<span class="breadcrumb-item active">Jobs</span>
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
						<h6 class="card-title">Jobs</h6>
						<div class="header-elements">
						</div>

						<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/job-form')}}`,'Add Job','md')"><b><i class="icon-plus3"></i></b> Add Job</button>

					</div>
					<div class="card-body">

							<table class="table datatable-basic">
								<thead>
									<tr>
										<th>Sr. No.</th>
										<th>Title</th>
										<th>Image</th>
										<th>Description</th>
										<th>Status</th>
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
										
										<td><img src="{{URL::to('/public').Storage::url($data[$i]->image)}}" width="200px" height="100px"></td>

										<td class="text-justify">{!!$data[$i]->description!!} </td>

									<td>
										<div class="form-check form-check-switch form-check-switch-left">
											<label class="form-check-label d-flex align-items-center">
												<input name="status" type="checkbox" class="form-check-input form-check-input-switch switch" data-on-text="on" data-off-text="off" data-on-color="success"  data-off-color="default" data-url=<?php echo  "job-status/".$data[$i]->id?> <?php if($data[$i]->status=="on"){ echo "checked";}?> >
											</label>
										</div>
									</td>
										
										<td class="text-center">
											<div class="list-icons">
												<div class="dropdown">
													<a href="#" class="list-icons-item" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>

													<div class="dropdown-menu dropdown-menu-right">
								<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
								<a class="dropdown-item" onclick="openModal(`{{url('/admin/job-form/'.$data[$i]->id)}}`,'Update Job','lg')" ><i class="icon-pencil7"></i>Edit</a>
								
														<a href="{{url('admin/delete-job/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
  		
  	/*############## add job Validation meesssage #######################*/

  		@if($errors->first('title'))
			new Noty({
                text: `{{$errors->first('title')}}`,
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

	

 /*################## job add feedback #######################*/
 		@if(session('addJob_success_msg'))
			new Noty({
                text: `{{session('addJob_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addJob_error_msg'))
			new Noty({
                text: `{{session('addJob_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	
		/*###### update job  feebback message###############*/

		@if(session('updateJob_success_msg'))
			new Noty({
                text: `{{session('updateJob_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateJob_error_msg'))
			new Noty({
                text: `{{session('updateJob_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		/* ################# delete Job feedback #############*/	
		@if(session('deleteJob_success_msg'))
			new Noty({
                text: `{{session('deleteJob_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteJob_error_msg'))
			new Noty({
                text: `{{session('deleteJob_error_msg')}}`,
                type: 'error'
            }).show();
		@endif


		

  		
  		// datatable
        $('.datatable-basic').DataTable();

        // switch
  		$('.form-check-input-switch').bootstrapSwitch();
  		$('.paginate_button').on('click',function(){
  			$('.form-check-input-switch').bootstrapSwitch();
  		})
  		

  		// browse button
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-primary-400'
        });

       
    	
    	$('body').on('switchChange.bootstrapSwitch','.switch', function () {
	        var x=$(this).data('on-text');
	        var y=$(this).data('off-text');
	        var ajaxRunning;
	        if($(this).is(':checked')) 
	        {
	            var status = "on";
	            
	        } 
	        else 
	        {
	            var status = "off";
	            
	        }
	        var url = $(this).data('url');
	        if (ajaxRunning == 1) 
	       	{
            	return false;
        	}
	        ajaxRunning = 1;
	        $.ajax({
	            url: url,
	            type: 'get',
	            data: {status:status},
	            dataType: 'json',
	            success: function(a){
	                ajaxRunning = 0;
	                if (a.status) {
	                	new Noty({
	                		text: a.msg,
	                		type: 'success'
	                	}).show();
	                }else{
	                	new Noty({
	                		text: a.msg,
	                		type: 'error'
	                	}).show();
	                }
	            }
	        });
        	
	        
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

          /*$('.daterange-single').daterangepicker({ 
            singleDatePicker: true,
            locale: {
				format: 'DD-MM-YYYY'
			},
        });*/
	}

  </script>

  @endsection 