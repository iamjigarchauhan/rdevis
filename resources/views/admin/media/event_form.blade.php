

<form action="{{ isset($data->id)?url('/admin/update-event/'.$data->id) :url('/admin/add-event')}}" method="post" enctype='multipart/form-data' >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		
	        	<!-- <label class="col-form-label col-lg-2">Category Name:</label> -->
	        	

	        	<div class="form-group">
					<label>Event name:</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Event Name" value="{{isset($data->id)?$data->name:''}}" required>
				</div>

				<div class="form-group">
					<label>Location:</label>
					<input type="text" name="location" class="form-control" placeholder="Enter Location" value="{{isset($data->id)?$data->location:''}}" required>
				</div>

				<div class="form-group">
					<label>Date:</label>
					<div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-calendar22"></i></span>
						</span>
						<input type="text" name="date" class="form-control daterange-single" value="<?php if(isset($data->id)){echo date("d-m-Y", strtotime($data->date) );} else{ echo "";} ?>" >
					</div>
				</div>

	            <div class="form-group">
							<label>Event Image:</label>
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
					<textarea class="summernote" name="description" id="product_description" required>
						{{isset($data->id)?$data->description:''}}
					</textarea>
				</div>
	   

		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{isset($data->id)?'Update':'Add'}}<i class="icon-paperplane ml-2"></i></button>
		</div>
</form>