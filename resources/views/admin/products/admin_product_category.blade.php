@extends('admin.admin_master_layout')

@section('title','Product Category')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Products</span>
							<span class="breadcrumb-item active">Product Category</span>
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
								<h6 class="card-title">Product Category</h6>
								<div class="header-elements">
								</div>
								<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/category-form')}}`,'Add Category','md')"><b><i class="icon-plus3"></i></b> Add Category</button>
							</div>
							<div class="card-body">

									
									<table class="table datatable-basic">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Product Category</th>
												<th>Image</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
										
										<?php 
											$cnt=count($product_categories);
					
												for($i=0; $i<$cnt; $i++)
												{
				 						?>	
											<tr>
												<td>{{$i+1}}</td>
												<td>{{$product_categories[$i]->category_name}}</td>
												<td><img src="{{URL::to('/public').Storage::url($product_categories[$i]->image)}}" width="200px" height="100px"></td>

												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" onclick="openModal(`{{url('/admin/category-form/'.$product_categories[$i]->id)}}`,'Update Categry','md')" ><i class="icon-pencil7"></i>Edit</a>
										<!-- <a href="javascript:openModal({{url('/admin/edit-product-category/'.$product_categories[$i]->id)}},'Edit Product Category','sm')" class="dropdown-item"><i class="icon-pencil7" ></i> Edit</a> -->
																<a href="{{url('/admin/delete-product-category/'.$product_categories[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										<?php 	
											}
					 


										?>
										
		
										</tbody>
								</table>





							</div>
						</div>

					</div>
				</div>
				<!-- /main charts -->
			</div>
			<!-- /content area -->
			
<!-- Add Product Category Basic modal -->
	<div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-teal-400">
					<h5 class="modal-title">Add Product Category</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form action="/admin/add-product-category" method="post" >
					  <input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="modal-body">	
						<div class="form-group">
							<label>Category Name:</label>
							<input type="text" name=category_name class="form-control" placeholder="Enter Product Category Name" required>
						</div>

					
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn bg-primary">Add <i class="icon-paperplane ml-2"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- Add Product Category Basic modal-->


<!-- Edit Product Category Basic modal -->
	<div id="modal-edit-product-category" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-teal-400">
					<h5 class="modal-title">Edit Product Category</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form action="/admin/add-product-category" method="post" >
					  <input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="modal-body">	
							<div class="form-group">
								<label>Category Name:</label>
								<input type="text" name=category_name class="form-control" placeholder="Enter Product Category Name" required>
							</div>
						</div>

						<div class="modal-footer">
							<button type="submit" class="btn bg-primary">Update <i class="icon-paperplane ml-2"></i></button>
						</div>
				</form>
			</div>
		</div>
	</div>
<!-- Edit Product Category Basic modal-->

@endsection



@section('custom_script')
<script type="text/javascript">
	$(document).ready(function(){
  		
  	$.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{ 
                orderable: false,
                width: 100,
                targets: [ 2 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });

  		@if($errors->first('category_name'))
			new Noty({
                text: `{{$errors->first('category_name')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('image'))
			new Noty({
                text: `{{$errors->first('image')}}`,
                type: 'error'
            }).show();
		@endif

		
		/*add Product Category feebback message*/

		@if(session('addProductCategory_success_msg'))
			new Noty({
                text: `{{session('addProductCategory_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addProductCategory_error_msg'))
			new Noty({
                text: `{{session('addProductCategory_error_msg')}}`,
                type: 'error'
            }).show();
		@endif


		/*update Product Category feebback message*/

		@if(session('updateProductCategory_success_msg'))
			new Noty({
                text: `{{session('updateProductCategory_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateProductCategory_error_msg'))
			new Noty({
                text: `{{session('updateProductCategory_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

		/*delete Product Category feebback message*/

		@if(session('deleteProductCategory_success_msg'))
			new Noty({
                text: `{{session('deleteProductCategory_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteProductCategory_error_msg'))
			new Noty({
                text: `{{session('deleteProductCategory_error_msg')}}`,
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
	        $('.summernote').summernote();
      		// browse button
	        $('.form-input-styled').uniform({
	            fileButtonClass: 'action btn bg-primary-400'
	        });
		}
  </script>

  @endsection 