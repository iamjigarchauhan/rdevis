@extends('admin.admin_master_layout')

@section('title','Dashboard')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
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
								<h6 class="card-title">Dashboard</h6>
								<div class="header-elements">
								</div>
							</div>
							<div class="card-body">

									

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
  		

		@if(session('pwd_change_success_msg'))
			new Noty({
                text: `{{session('pwd_change_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('pwd_change_err_msg'))
			new Noty({
                text: `{{session('pwd_change_err_msg')}}`,
                type: 'success'
            }).show();
		@endif
	});
		
  </script>

  @endsection 