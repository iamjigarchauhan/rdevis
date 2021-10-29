

<form action="{{ isset($data->id) ? url('/admin/update-albums/'.$data->id) :url('/admin/add-albums')}}" method="post" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
		<div class="form-group">
			<label>Album Name:</label>
			<input type="text" name=name class="form-control" placeholder="Enter Album Name" required value="<?= isset($data->name) ? $data->name : '' ?>">
		</div>

		<div class="form-group">
				<label>Date:</label>
				<div class="input-group">
					<span class="input-group-prepend">
						<span class="input-group-text"><i class="icon-calendar22"></i></span>
					</span>
					<input type="text" name="date" class="form-control daterange-single" value="">
				</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn bg-primary float-right"> {{ isset($data->id) ? 'Update' : 'Add' }} <i class="icon-paperplane ml-2"></i></button>
		</div>
</form>