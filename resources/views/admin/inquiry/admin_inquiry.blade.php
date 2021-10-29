@extends('admin.admin_master_layout')

@section('title','Inquiry')

@section('content')

<!-- Page header -->
<div class="page-header page-header-light">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
				<span class="breadcrumb-item active">Inquiry</span>
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
					<h6 class="card-title">Inquiry Page Text And File</h6>
					<div class="header-elements">
					</div>
				</div>
				<div class="card-body">
					<form action="{{url('/admin/add-inquiry-details')}}" method="post" enctype='multipart/form-data'>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label>Service Description:</label>
							<textarea class="summernote" name="inquiry_form_msg" id="inquiry_form_msg" required>
								{{isset($inquiry_page_data->id)?$inquiry_page_data->inquiry_form_msg:''}}
							</textarea>
						</div>
						 <div class="form-group">
							<label>Inquiry Form:</label>
							<input type="file" name="inquiry_form" id="inquiry_form" class="form-input-styled" data-fouc   > 
							<span class="form-text text-muted">Accepted formats:pdf, doc, docx,xls,xlsx</span>
							<span class="form-text text-muted"> Uploaded File: <?php  if(isset($inquiry_page_data->id)){ echo $inquiry_page_data->inquiry_form ;}else{ echo '';} ?> </span>
						</div>
						<div class="form-group">
								<button type="submit" class="btn bg-primary float-left"> Set Details<i class="icon-paperplane ml-2"></i></button>
						</div>
					</form>
				</div>
			</div>

			<div class="card">
				<div class="card-header header-elements-inline">
					<h6 class="card-title">Inquiry</h6>
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
									<th>Company</th>
									<th>Comments</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							
								<?php foreach ($data as $key => $value) {?>
							
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$data[$key]->name}}</td>
									<td>{{$data[$key]->email}}</td>
									<td>{{$data[$key]->phone}}</td>
									<td>{{$data[$key]->company}}</td>
									<td>{{$data[$key]->comment}}</td>
									
									<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
								<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
								<!-- <a class="dropdown-item" onclick="openModal(`{{url('/admin/industries-form/'.$data[$key]->id)}}`,'Update Industry','lg')" ><i class="icon-pencil7"></i>Edit</a> -->
							
													<a href="{{url('admin/delete-inquiry/'.$data[$key]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
  		
		@if($errors->first('inquiry_form_msg'))
			new Noty({
                text: `{{$errors->first('inquiry_form_msg')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('inquiry_form'))
			new Noty({
                text: `{{$errors->first('inquiry_form')}}`,
                type: 'error'
            }).show();
		@endif

	/* ################# delete service feedback #############*/	
		@if(session('inquiryDelete_success_msg'))
			new Noty({
                text: `{{session('inquiryDelete_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('inquiryDelete_error_msg'))
			new Noty({
                text: `{{session('inquiryDelete_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		@if(session('addInquiry_detail_success_msg'))
			new Noty({
                text: `{{session('addInquiry_detail_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addInquiry_detail_error_msg'))
			new Noty({
                text: `{{session('addInquiry_detail_error_msg')}}`,
                type: 'error'
            }).show();
		@endif



	// datatable
        $('.datatable-basic').DataTable();
        $('.summernote').summernote();
       

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