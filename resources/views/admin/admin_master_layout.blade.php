<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	@include('admin.admin_header_link')
	@yield('page_custom_css')
	<style type="text/css">
		.navbar-brand {
		    padding-top: 0.5rem;
		    padding-bottom: 0.5rem;
		}
		.navbar-brand img {
    		height: 2rem;
		}

	</style>
</head>


<body>
	
	@include('admin.admin_header')



<!-- Page content -->
	<div class="page-content">

		@include('admin.admin_sidebar')


		<!-- Main content -->
		<div class="content-wrapper">

			@yield('content')

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
	@yield('custom_script')

</body>
</html>
