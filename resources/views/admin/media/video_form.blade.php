

<form action="{{ isset($data->id)?url('/admin/update-video/'.$data->id) :url('/admin/add-video')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		
	        	<!-- <label class="col-form-label col-lg-2">Category Name:</label> -->
	        	

	        	<div class="form-group">
					<label>Video Title:</label>
					<input type="text" name="title" class="form-control" placeholder="Enter Video Title" value="{{isset($data->id)?$data->title:''}}" required>
				</div>

				<div class="form-group">
					<label>Youtube Embedded Link:</label>
					<input type="textarea" name="link" class="form-control" placeholder="Enter src of Youtube Embedded Link without double quotes" value="{{isset($data->id)?$data->link:''}}" required>
				</div>

				

	
		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{isset($data->id)?'Update':'Add'}}<i class="icon-paperplane ml-2"></i></button>
		</div>
</form>