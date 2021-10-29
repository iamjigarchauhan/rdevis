	

	<form action="{{ isset($data->id)?url('/admin/update-other-branch/'.$data->id) :url('/admin/add-other-branch')}}" method="post" enctype='multipart/form-data' >
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">


						<div class="form-group">
							<label>Branch Name:</label>
							<input type="text" name=branch_name class="form-control" placeholder="Enter Branch Name with Country" value="{{isset($data->id)?$data->branch_name:''}}" required>
						</div>

						<div class="form-group">
							<label>Address:</label>
							<textarea type="text" name=address class="form-control" placeholder="Enter Branch Address" >{{isset($data->id)?$data->address:''}} </textarea> 
						</div>

		   

						<div class="form-group">
							<button type="submit" class="btn bg-primary float-left"> {{isset($data->id)?'Update':'Add'}} <i class="icon-paperplane ml-2"></i></button>
						</div>
					</form>