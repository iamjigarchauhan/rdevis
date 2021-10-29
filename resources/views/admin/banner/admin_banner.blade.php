@extends('admin.admin_master_layout')

@section('title','Banner')

@section('content')

<?php 
/*echo $storage_path = storage_path('app\public\banners');
echo "<br>";
echo $path=url('/storage/app/public/banners');
 dd($banners);*/

 ?>


<!-- Page header -->
<div class="page-header page-header-light">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
				<span class="breadcrumb-item active">Banner</span>
			</div>

			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>
	</div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
			<h6 class="card-title">Banner</h6>
			<div class="header-elements">
			</div>

			<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round" data-toggle="modal" data-target="#modal_default"><b><i class="icon-plus3"></i></b> Add Banner</button>
		</div>

		<div class="card-body">
		</div>

		<table class="table datatable-basic">
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>Image</th>
						<th>Banner Name</th>
						<th>Status</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$cnt=count($banners);
					
						for($i=0; $i<$cnt; $i++)
						{
				 ?>
					
					<tr>
						<td>{{$i+1}}</td>
						<td><img src="{{URL::to('/public').Storage::url($banners[$i]->image)}}" width="200px" height="100px"></td>
						<td>
							<?php 
								echo str_replace('banners/', "", $banners[$i]->image);
							 ?>


						</td>
						<td>
							<div class="form-check form-check-switch form-check-switch-left">
								<label class="form-check-label d-flex align-items-center">
									<input name="status" type="checkbox" class="form-check-input form-check-input-switch switch" data-on-text="on" data-off-text="off" data-on-color="success"  data-off-color="default" data-url= <?php echo  "banner_status/".$banners[$i]->id?> <?php if($banners[$i]->status=="on"){ echo "checked";}?> >
								</label>
							</div>	
						</td>

						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<!-- <a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit</a> -->
										<a href="{{url('admin/delete_banner/'.$banners[$i]->id)}}" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php 	
						}
					 


				?>


					
				</tbody>
		</table>

		
	</div>
</div>


 <!-- Basic modal -->
	<div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-teal-400">
					<h5 class="modal-title">Add Banner</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form action="{{url('/admin/add_banner')}}" method="post" enctype="multipart/form-data">
					  <input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="modal-body">	
						<div class="form-group">
							<label>Attach Banner:</label>
							<input type="file" name="banner" id="banner" class="form-input-styled" data-fouc required>
							<span class="form-text text-muted">Accepted formats: bmp, png, jpg. Max file size 2048 Kbytes</span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn bg-primary">Add <i class="icon-paperplane ml-2"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- /basic modal -->


@endsection	

@section('custom_script')
<script type="text/javascript">
	$(document).ready(function(){
  		
  		@if(session('dup_err_msg'))
			new Noty({
                text: `{{session('dup_err_msg')}}`,
                type: 'error'
            }).show();
		@endif

		@if($errors->first('banner'))
			new Noty({
                text: `{{$errors->first('banner')}}`,
                type: 'error'
            }).show();
		@endif

		@if(session('success_msg'))
			new Noty({
                text: `{{session('success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('Banner_delete_success_msg'))
			new Noty({
                text: `{{session('Banner_delete_success_msg')}}`,
                type: 'success'
            }).show();
		@endif

		@if(session('Banner_delete_error_msg'))
			new Noty({
                text: `{{session('Banner_delete_error_msg')}}`,
                type: 'error'
            }).show();
		@endif



  		
  		// datatable
        $('.datatable-basic').DataTable();

        // switch
  		$('.form-check-input-switch').bootstrapSwitch();
  		$('.paginate_button').on('click',function(){
  			$('.form-check-input-switch').bootstrapSwitch();
  		})

  		// browse button
        $('.form-input-styled').uniform({
            fileButtonClass: 'action btn bg-primary-400'
        });

       
    	
    	$('body').on('switchChange.bootstrapSwitch','.switch', function () {
	        var x=$(this).data('on-text');
	        var y=$(this).data('off-text');
	        var ajaxRunning;
	        if($(this).is(':checked')) 
	        {
	            var status = "on";
	            
	        } 
	        else 
	        {
	            var status = "off";
	            
	        }
	        var url = $(this).data('url');
	        if (ajaxRunning == 1) 
	       	{
            	return false;
        	}
	        ajaxRunning = 1;
	        $.ajax({
	            url: url,
	            type: 'get',
	            data: {status:status},
	            dataType: 'json',
	            success: function(a){
	                ajaxRunning = 0;
	                if (a.status) {
	                	new Noty({
	                		text: a.msg,
	                		type: 'success'
	                	}).show();
	                }else{
	                	new Noty({
	                		text: a.msg,
	                		type: 'error'
	                	}).show();
	                }
	            }
	        });
        	
	        
    	});
		

        


  	});
  </script>

  @endsection 
