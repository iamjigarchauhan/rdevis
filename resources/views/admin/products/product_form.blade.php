

<form action="{{ isset($data->id)?url('/admin/update-product/'.$data->id) :url('/admin/add-product')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		
	        	<!-- <label class="col-form-label col-lg-2">Category Name:</label> -->
	        	<div class="form-group">
		        	<label>Category Name:</label>
		        		
	                <select data-placeholder="Select Category" class="form-control form-control-select2" data-fouc name="product_category_id" id="product_category_id" required>
	                    <option value=""></option>
	                    <?php 
			  				$cnt=count($category);
			  				for($i=0; $i<$cnt; $i++)
			  				{
			  			?>
			  			<option value=" {{$category[$i]['id']}}" <?php if(isset($data->id)){if($category[$i]['id'] ==$data->product_category_id){ echo "selected";} } ?> >{{$category[$i]['category_name']}}</option>
						<?php  }	?>
	                </select>
	        	</div>

	        	<div class="form-group">
					<label>Product name:</label>
					<input type="text" name=product_name class="form-control" placeholder="Enter Product Name" value="{{isset($data->id)?$data->product_name:''}}" required>
				</div>

	            <div class="form-group">
							<label>Product Image:</label>
							<input type="file" name="product_image" id="product_image" class="form-input-styled" data-fouc  <?php if(isset($data->id)){ echo "";}else{ echo "required";} ?> >
							<span class="form-text text-muted">Accepted formats: bmp, png, jpg. Max file size 2048 Kbytes</span>
				</div>

				@if(isset($data->id))
				<div class="form-group">
					<img src="{{URL::to('/public').Storage::url($data->product_image)}}" width="200px" height="100px">
				</div>
				@endif

				

				<div class="form-group">
					<label>Product Description:</label>
					<textarea class="summernote" name="product_description" id="product_description" required>
						{{isset($data->id)?$data->product_description:''}}
					</textarea>
				</div>

				<div class="form-group">
					<label>Page title:</label>
					<input type="text" name=page_title class="form-control" placeholder="Enter Page Title" value="{{isset($data->id)?$data->page_title:''}}" required>
				</div>

				<div class="form-group">
					<label>Meta Keywords:</label>
					<textarea type="text" name=meta_keywords class="form-control" placeholder="Enter Meta Keywords" >{{isset($data->id)?$data->meta_keywords:''}} </textarea> 
				</div>

				<div class="form-group">
					<label>Meta Description:</label>
					<textarea type="text" name=meta_description class="form-control" placeholder="Enter Meta Description" >{{isset($data->id)?$data->meta_description:''}} </textarea> 
				</div>
	   

		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{isset($data->id)?'Update':'Add'}}<i class="icon-paperplane ml-2"></i></button>
		</div>
</form>