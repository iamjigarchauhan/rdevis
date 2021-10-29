@extends('admin.admin_master_layout')

@section('title','Candidate List')

@section('content')

<!-- Page header -->
<div class="page-header page-header-light">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
				<span class="breadcrumb-item active">Careers</span>
				<span class="breadcrumb-item active">Candidate List</span>
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
					<h6 class="card-title">Candidate List</h6>
					<div class="header-elements">
					</div>
				</div>
				<div class="card-body">

					<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Date</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Post</th>
									<th>Email</th>
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
									<td>{{date("d-m-Y", strtotime($data[$i]->date))}}</td>
									<td>{{$data[$i]->fname}}</td>
									<td>{{$data[$i]->lname}}</td>
									<td>{{$data[$i]->title}}</td>
									<td>{{$data[$i]->email}}</td>
									<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
							<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
							<a class="dropdown-item" href="{{URL::to('public/').Storage::url($data[$i]->resume)}}" ><i class="icon-file-download"></i>Resume</a>
							
													<a href="{{url('admin/delete-candidate/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
    	@if(session('deleteCandidate_success_msg'))
			new Noty({
                text: `{{session('deleteCandidate_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteCandidate_error_msg'))
			new Noty({
                text: `{{session('deleteCandidate_error_msg')}}`,
                type: 'error'
            }).show();
		@endif
    });

</script>

@endsection 