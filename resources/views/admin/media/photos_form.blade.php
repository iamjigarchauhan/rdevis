



<form action="{{ url('/admin/add-photos')}}" method="post" enctype='multipart/form-data' >

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		

		

	        	<!-- <label class="col-form-label col-lg-2">Category Name:</label> -->

	        	<div class="form-group">

		        	<label>Album Name:</label>

		        		

	                <select data-placeholder="Select Album" class="form-control form-control-select2" data-fouc name="album_id" id="album_id" required>

	                    <option value=""></option>

	                    <?php 

			  				$cnt=count($albums);

			  				for($i=0; $i<$cnt; $i++)

			  				{

			  			?>

			  			<option value=" {{$albums[$i]['id']}}">{{$albums[$i]['name']}}</option>

						<?php  }	?>

	                </select>

	        	</div>



	        	



	            <div class="form-group">

							<label>Photos:</label>

							<input type="file" name="photos[]" id="photos" class="form-input-styled" data-fouc multiple required >

							<span class="form-text text-muted">Accepted formats: bmp, png, jpg. Max file size 2048 Kbytes</span>

				</div>



					

		<div class="form-group">

			<button type="submit" class="btn bg-primary float-right"> Add<i class="icon-paperplane ml-2"></i></button>

		</div>

</form>