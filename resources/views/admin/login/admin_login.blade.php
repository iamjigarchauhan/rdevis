<!DOCTYPE html>
<html lang="en">

<head>
	<title>login</title>
	@include('admin.admin_header_link')
</head>

<body>
	
	



<!-- Page content -->
	<div class="page-content">




		<!-- Main content -->
		<div class="content-wrapper">

			
			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form action="{{url('/admin/login-check')}}" class="login-form" method="POST">
					<div class="card mb-0">
						<div class="card-body">

							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="text-center mb-3">
								<!-- <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i> -->
								
								 <div class="logo">
									<a href="{{url('/admin')}}">
									<img src="{{asset('')}}img/logo/Logo_2.jpg" class="logo-img" width="180px" height="51px" alt="RDEVIS Logo">
									</a>
				  				</div>
				  				<br>
				  			
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Enter your credentials below</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" name="name" class="form-control" placeholder="Name">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="{{url('/admin/password/reset')}}">Forgot password?</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->




			@include('admin.admin_footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	<!-- Edit Product Category Basic modal -->
	<div id="layoutModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-teal-300">
					<h6 class="modal-title">Untitled</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
	</div>
<!-- Edit Product Category Basic modal-->

	@include('admin.admin_footer_link')
	

	
	<script type="text/javascript">

		$(document).ready(function(){
		
			@if(session('login_err_msg'))
			new Noty({
                text: `{{session('login_err_msg')}}`,
                type: 'error'
            }).show();
			@endif

		});



	</script>

</body>
</html>
