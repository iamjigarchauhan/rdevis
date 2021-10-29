

<form action="{{ isset($data->id) ? url('/admin/update-product-category/'.$data->id) :url('/admin/add-product-category')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<div class="form-group">
			<label>Category Name:</label>
			<input type="text" name=category_name class="form-control" placeholder="Enter Product Category Name" required value="<?= isset($data->category_name) ? $data->category_name : '' ?>">
		</div>
		
		<div class="form-group">
			<label>Category Description:</label> <br>
			<textarea class="summernote" name="description" id="description" required>
				{{isset($data->id)?$data->description:''}}
			</textarea>
		</div>

		 <div class="form-group">
							<label>Product Category Image:</label>
							<input type="file" name="image" id="image" class="form-input-styled" data-fouc  <?php if(isset($data->id)){ echo "";}else{ echo "required";} ?> >
							<span class="form-text text-muted">Accepted formats: bmp, png, jpg. Max file size 2048 Kbytes</span>
		</div>

				@if(isset($data->id))
				<div class="form-group">
					<img src="{{URL::to('/public').Storage::url($data->image)}}" width="200px" height="100px">
				</div>
				@endif

		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{ isset($data->id) ? 'Update' : 'Add' }} <i class="icon-paperplane ml-2"></i></button>
		</div>
</form>