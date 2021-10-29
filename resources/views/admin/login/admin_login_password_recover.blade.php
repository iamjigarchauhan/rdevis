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

			
	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Password recovery form -->
				<form class="login-form" action="{{url('/admin/forgot-password-post')}}" method="POST">
					<div class="card mb-0">
						<div class="card-body">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="text-center mb-3">
								<i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Password recovery</h5>
								<span class="d-block text-muted">We'll send you instructions in email</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
								<input type="email" name="email" class="form-control" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button>
						</div>
					</div>
				</form>
				<!-- /password recovery form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
			



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
