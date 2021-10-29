

<form action="{{ isset($data->id)?url('/admin/update-certification/'.$data->id) :url('/admin/add-certification')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		
	        	
	        	


	          <div class="form-group">
					<label>Certificate Description:</label>
					<textarea type="text" rows="5" name="description" class="form-control" placeholder="Enter Certificate Description" >{{isset($data->id)?$data->description:''}} </textarea> 
		    </div>

				
		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{isset($data->id)?'Update':'Add'}}<i class="icon-paperplane ml-2"></i></button>
		</div>
</form>