

<form action="{{ isset($data->id)?url('/admin/update-job/'.$data->id) :url('/admin/add-job')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		
	        	<!-- <label class="col-form-label col-lg-2">Category Name:</label> -->
	        	

	        	<div class="form-group">
					<label>Title:</label>
					<input type="text" name="title" class="form-control" placeholder="Enter Job Title" value="{{isset($data->id)?$data->title:''}}" required>
				</div>


	            <div class="form-group">
							<label>Image:</label>
							<input type="file" name="image" id="image" class="form-input-styled" data-fouc  <?php if(isset($data->id)){ echo "";}else{ echo "required";} ?> >
							<span class="form-text text-muted">Accepted formats: bmp, png, jpg. Max file size 2048 Kbytes</span>
				</div>

				@if(isset($data->id))
				<div class="form-group">
					<img src="{{URL::to('/public').Storage::url($data->image)}}" width="200px" height="100px">
				</div>
				@endif

				<div class="form-group">
					<label>Description:</label>
					<textarea class="summernote" name="description" id="description" required>
						{{isset($data->id)?$data->description:''}}
					</textarea>
				</div>


		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{isset($data->id)?'Update':'Add'}}<i class="icon-paperplane ml-2"></i></button>
		</div>
</form>