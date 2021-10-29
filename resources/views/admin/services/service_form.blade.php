

<form action="{{ isset($data->id)?url('/admin/update-services/'.$data->id) :url('/admin/add-services')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		
	        	<!-- <label class="col-form-label col-lg-2">Category Name:</label> -->
	        	

	        	<div class="form-group">
					<label>Service name:</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Service Name" value="{{isset($data->id)?$data->name:''}}" required>
				</div>

	            <div class="form-group">
							<label>Service Image:</label>
							<input type="file" name="image" id="image" class="form-input-styled" data-fouc  <?php if(isset($data->id)){ echo "";}else{ echo "required";} ?> >
							<span class="form-text text-muted">Accepted formats: bmp, png, jpg. Max file size 2048 Kbytes</span>
				</div>

				@if(isset($data->id))
				<div class="form-group">
					<img src="{{URL::to('/public').Storage::url($data->image)}}" width="200px" height="100px">
				</div>
				@endif

				

				<div class="form-group">
					<label>Service Description:</label>
					<textarea class="summernote" name="description" id="description" required>
						{{isset($data->id)?$data->description:''}}
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