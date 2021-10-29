@extends('admin.admin_master_layout')

@section('title','Product')

@section('content')

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Products</span>
							<span class="breadcrumb-item active">Product</span>
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
								<h6 class="card-title">Product</h6>
								<div class="header-elements">
								</div>

								<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" onclick="openModal(`{{url('/admin/product-form')}}`,'Add Product','lg')"><b><i class="icon-plus3"></i></b> Add Product</button>

							</div>
							<div class="card-body">

									<table class="table datatable-basic">
										<thead>
											<tr>
												<th>Sr. No.</th>
												<th>Image</th>
												<th>Product Name</th>
												<th>Product Category</th>
												<th>Description</th>
												<th>Page Title</th>
												<th>Meta Keywords</th>
												<th>Meta Description</th>
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
												<td><img src="{{URL::to('/public').Storage::url($data[$i]->product_image)}}" width="200px" height="100px"></td>
												<td>{{$data[$i]->product_name}}</td>
												<td>{{$data[$i]->category_name}}</td>
												<td class="text-justify">{!!strip_tags($data[$i]->product_description)!!}</td>
												<td>{{$data[$i]->page_title}}</td>
												<td>{{$data[$i]->meta_keywords}}</td>
												<td>{{$data[$i]->meta_description}}</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-right">
										<!-- <a class="dropdown-item"  ><i class="icon-pencil7"></i>Edit</a> -->
										<a class="dropdown-item" onclick="openModal(`{{url('/admin/product-form/'.$data[$i]->id)}}`,'Update Product','lg')" ><i class="icon-pencil7"></i>Edit</a>
										
																<a href="{{url('admin/delete-product/'.$data[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
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
  		
  

  		@if($errors->first('category_name'))
			new Noty({
                text: `{{$errors->first('category_name')}}`,
                type: 'error'
            }).show();
		@endif

		/*###############add product validation feedback#####################*/
		@if($errors->first('category_category_id'))
			new Noty({
                text: `{{$errors->first('category_category_id')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('product_name'))
			new Noty({
                text: `{{$errors->first('product_name')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('product_image'))
			new Noty({
                text: `{{$errors->first('product_image')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('product_description'))
			new Noty({
                text: `{{$errors->first('product_description')}}`,
                type: 'error'
            }).show();
		@endif

 /*##################product add feedback#######################*/
 		@if(session('addProduct_success_msg'))
			new Noty({
                text: `{{session('addProduct_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('addProduct_error_msg'))
			new Noty({
                text: `{{session('addProduct_error_msg')}}`,
                type: 'error'
            }).show();
		@endif

	/* ################# delete product feedback #############*/	
		@if(session('deleteProduct_success_msg'))
			new Noty({
                text: `{{session('deleteProduct_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('deleteProduct_error_msg'))
			new Noty({
                text: `{{session('deleteProduct_error_msg')}}`,
                type: 'error'
            }).show();
		@endif





		/*###################### product duplicate error message##################*/

		@if(session('product_dup_err_msg'))
			new Noty({
                text: `{{session('product_dup_err_msg')}}`,
                type: 'error'
            }).show();
		@endif

		
		/*###############  add Product Category feedback message##################*/

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

		/*update Product  feebback message*/

		@if(session('updateProduct_success_msg'))
			new Noty({
                text: `{{session('updateProduct_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('updateProduct_error_msg'))
			new Noty({
                text: `{{session('updateProduct_error_msg')}}`,
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


		

  		
  		// datatable
        $('.datatable-basic').DataTable();

       

  		// browse button
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-primary-400'
        });

       


       
  
  	});

	function reInitInputs()
	{
		 $('.form-control-select2').select2();
		 // Control editor height
        // $('.summernote-height').summernote({
        //     height: 400
        // });
          $('.summernote').summernote();
	}

  </script>

  @endsection 