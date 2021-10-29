

@extends('admin.admin_master_layout')

@section('title','Inquiry Form')

@section('page_custom_css')
<style type="text/css">
body {
  /* Set "my-sec-counter" to 0 */
  counter-reset: page;
}
.pagefoot{
page-break-after: always;
}



#pageFooter:after{
	 counter-increment: page;
   content:"Page: " counter(page);
   
} 


</style>
@endsection

@section('content')

<!-- Page header -->
<div class="page-header page-header-light">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{url('/admin/dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
				<span class="breadcrumb-item active">Inquiry</span>
			</div>

			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>
	</div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content" >

	<!-- Main charts -->
	<div class="row" >
		<div class="col-md-12" >

			<div class="card" id="printableArea">
				
				<div class="card-header">
					
					<div class="row card-title">
						<div class="col-md-3 col-sm-3">
							<div class="logo">
								<img src="{{asset('')}}img/logo/redivs_logo.png" class="logo-img" alt="RDEVIS Logo">
							</div>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="row">
								<div class="col-sm-12">
								<h1 class="font-weight-bold text-center" style="font-family: 'Orbitron', sans-serif;font-size:25px "> RDEVIS ENGINEERING THE PAINT ENGINEERING</h1>
								</div>
							</div>
							
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							
						</div>
					</div>
					<hr>
					<div class="row">
							<div class="col-sm-12 col-md-12">
								<h3 class="text-uppercase text-center font-weight-bold">Inquiry Form</h3>
							</div>
					</div>	





					<!-- <h6 class="card-title">Inquiry Details</h6>
					<div class="header-elements">
					</div> -->
				</div>
				<div class="card-body" >

				<form method="POST" action="{{url('/add-inquiry')}}" >
            		<input type="hidden" name="_token" value="{{csrf_token()}}">
                	                 
                    	<h6>Personal Information</h6>                    	      		
            			<div class="row">
            				<div class="col-md-6 col-sm-6">
            					<div class="form-group">
							      	<label for="usr">Name:</label>
							      	<input type="text" name="name" class="form-control" id="usr"  value="{{isset($data['id'])?$data['details']->name:''}}" >
						      	 </div>
						    </div>
						    <div class="col-md-6 col-sm-6">	
						    	<div class="form-group">
						      	<label for="email">Email ID:</label>
					      		<input type="text" name="email" class="form-control" id="email" value="{{isset($data['id'])?$data['details']->email:''}}">
					      		</div>
					      	</div>
				      	</div>
				      	<div class="row">
            				<div class="col-md-6 col-sm-6">
            					<div class="form-group">
							      	<label for="phone">Phone:</label>
							      	<input type="text" name="phone" class="form-control" id="phone" value="{{isset($data['id'])?$data['details']->phone:''}}">
						      	 </div>
						    </div>
						    <div class="col-md-6 col-sm-6">	
						    	<div class="form-group">
						      	<label for="comapany">Company Name:</label>
					      		<input type="text" name="comapany_name" class="form-control" id="comapany" value="{{isset($data['id'])?$data['details']->comapany_name:''}}">
					      		</div>
					      	</div>
				      	</div>
				      	<div class="row">
            				<div class="col-md-6 col-sm-6">
            					<div class="form-group">
							      	<label for="cemail">Comapany Email ID:</label>
							      	<input type="text" name="comapany_email" class="form-control" id="cemail" value="{{isset($data['id'])?$data['details']->comapany_email:''}}">
						      	 </div>
						    </div>
						    <div class="col-md-6 col-sm-6">	
						    	<div class="form-group">
						      	<label for="designation">Designation:</label>
					      		<input type="text" name="designation" class="form-control" id="designation" value="{{isset($data['id'])?$data['details']->designation:''}}">
					      		</div>
					      	</div>
				      	</div> 
                

	                
	                    <!-- <h6>Basic Data</h6> -->
	                    <div class="row">
            				<div class="col-md-6 col-sm-6">
            					<div class="form-group">
							      	<label for="component">Type of Component:</label>
							      	<input type="text" name="component" class="form-control" id="component" value="{{isset($data['id'])?$data['details']->component:''}}">
						      	 </div>
						    </div>
						    <div class="col-md-6 col-sm-6">	
						    	<div class="form-group">
						      	<label for="plant">Plant Location:</label>
					      		<input type="text" name="plant" class="form-control" id="plant" value="{{isset($data['id'])?$data['details']->plant:''}}">
					      		</div>
					      	</div>
				      	</div>

				      	<h6>Type of Plant Required</h6>
				      	
				      	 <div class="row">
            				
            				<div class="col-md-3 col-sm-3">
            					<div class="form-group">
							      	<label for="pre_treatment">Pre Treatment:</label>
							      		<input type="text" name="pre_treatment" class="form-control" id="pre_treatment" value="{{$data['details']->pre_treatment}}">	
						      	 </div>
						    </div>

						    <div class="col-md-3 col-sm-3">
            					<div class="form-group">
							      	<label for="ele_deposition">Electro Deposition:</label>
										<input type="text" name="ele_deposition" class="form-control" id="ele_deposition" value="{{$data['details']->ele_deposition}}">			
						      	 </div>
						    </div>


						    <div class="col-md-3 col-sm-3">
            					<div class="form-group">
							      	<label for="top_coat_line">Top Coat Line :</label>
										<input type="text" name="top_coat_line" class="form-control" id="top_coat_line" value="{{$data['details']->top_coat_line}}">		
								</div>
						    </div>

	    
				      		<div class="col-md-3 col-sm-3">
				      			<div class="form-group">
							      	<label for="load_comp">Loading of components :</label>
										<input type="text" name="load_comp" class="form-control" id="load_comp" value="{{$data['details']->load_comp}}">
						      	 </div>
				      		</div>

				      		<div class="col-md-3 col-sm-3">
				      			<div class="form-group">
							      	<label for="unload_comp">Unloading of components :</label>
							      		<input type="text" name="unload_comp" class="form-control" id="unload_comp" value="{{$data['details']->unload_comp}}">
						      	 </div>
				      		</div>

				      		<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="shop_fire_fight"> Shop Fire Fighting (Hydrant) System:</label> <br>
										<input type="text" name="shop_fire_fight" class="form-control" id="shop_fire_fight" value="{{$data['details']->shop_fire_fight}}">
								</div>
							</div>

							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="shop_vent"> Shop Ventilation / Spot Cooling:</label><br>
										<input type="text" name="shop_vent" class="form-control" id="shop_vent" value="{{$data['details']->shop_vent}}">
								</div>
							</div>
						</div>
						
						<div class="row">
						    <div class="col-md-6 col-sm-6">
            					<div class="form-group">
							      	<label for="conveyor_type">Type of Conveyor preferred for Conveyorised Plant :</label>
										<input type="text" name="conveyor_type" class="form-control" id="conveyor_type" value="{{$data['details']->conveyor_type}}">  
						      	 </div>
							</div>
							
				      		<div class="col-md-6 col-sm-6">
				      			<div class="form-group">
							      	<label for="fire_fight_sys"> Fire fighting System (for spray booth & paint m/x room)  :</label>
										<input type="text" name="fire_fight_sys" class="form-control" id="fire_fight_sys" value="{{$data['details']->fire_fight_sys}}">  
						      	 </div>
				      		</div>

				      	</div>


				      	<div class="row">
				      		<div class="col-md-3 col-sm-3">
				      			<div class="form-group">
		      						<label for="eff_treat_plant"> Effluent Tratment Plant Requirement:</label> <br>
									<!-- <select name="conveyor_type">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>	   -->
						      		<div class="radio-inline">
								     	<label><input type="radio" name="eff_treat_plant"  value="yes" {{$data['details']->eff_treat_plant=='yes'?'checked':''}}>Yes  </label>
								    </div>
								    <div class="radio-inline">
								      	<label><input type="radio" name="eff_treat_plant" value="no" {{$data['details']->eff_treat_plant=='no'?'checked':''}}>No</label>
								    </div>
				      			</div>
				      		</div>

				      		<div class="col-md-9 col-sm-9" >
				      			<div class="form-group" id="eff_treat_plant_textbox">
				      				<label for="eff_treat_plant"> Quantity & details of Various effluent to be treated & frequency of discard to be indicated.:</label> <br>
				      					
				      				<textarea class="form-control text-justify" name="eff_treat_plant_text" id="eff_treat_plant_text" rows="6">
				      					{{ $data['details']->eff_treat_plant_text }}
				      				</textarea>

				      				<!-- <input type="textarea" class="form-control" name="eff_treat_plant_text"> -->

				      			</div>
				      		</div>
				      	</div>

				      	<div class="row">
				      		<div class="col-md-3 col-sm-3">
				      			<div class="form-group">
		      						<label for="air_pollution">Air Pollution controll:</label> <br>
									<!-- <select name="conveyor_type">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>	   -->
						      		<div class="radio-inline">
								     	<label><input type="radio" name="air_pollution"  value="yes" {{$data['details']->air_pollution=='yes'?'checked':''}}>Yes  </label>
								    </div>
								    <div class="radio-inline">
								      	<label><input type="radio" name="air_pollution" value="no" {{$data['details']->air_pollution=='no'?'checked':''}}>No</label>
								    </div>
				      			</div>
				      		</div>

				      		<div class="col-md-9 col-sm-9" >
				      			<div class="form-group" id="exhaust_air_textbox">
				      				<label for="eff_treat_plant"> Details of exhaust air to be treated is to be indicated:</label> <br>
				      				<textarea class="form-control text-justify" name="exhaust_air_text" id="exhaust_air_text" rows="6">
				      					{{$data['details']->exhaust_air_text }}
				      				</textarea>
				      				<!-- <input type="textarea" class="form-control" name="exhaust_air_text" rows="5"> -->
				      			</div>
				      		</div>
				      	</div>
	                

	                
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<h6> AMBIENT CONDITION</h6>
								<label for=""><h6>Summer </h6></label> <br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="temp">Temperature </label> <br>
									<input type="text" class="form-control" name="temp" id="temp" value="{{isset($data['id'])?$data['details']->temp:''}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="humidity">Humidity </label> <br>
									<input type="text" class="form-control" name="humidity" id="humidity" value="{{isset($data['id'])?$data['details']->humidity:''}}">
								</div>
							</div>
						</div>

						<div id="pageFooter" class="pagefoot text-right"> </div>

						<div class="row">
							<div class="col-md-4 col-sm-4">
								<h6>AVAILABLE WATER QUALITY</h6>
								<label for=""><h6>Supply Pressure</h6></label> <br>  		
							</div>
						</div>

						


						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="supply_pressure_sugg">Suggested (kg/cm&sup2)</label> <br>
									<input type="text" class="form-control" name="supply_pressure_sugg" id="supply_pressure_sugg" placeholder=""  value="{{$data['details']->supply_pressure_sugg}}"> 
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="supply_pressure_avai">Available (kg/cm&sup2)</label> <br>
									<input type="text" class="form-control" name="supply_pressure_avai" id="supply_pressure_avai" placeholder="" value="{{isset($data['id'])?$data['details']->supply_pressure_avai:''}}">
								</div>
							</div>
						</div>



						<div class="row" id="raw_water">
							<div class="col-md-12 col-sm-12">
								<h6>RAW WATER (INDUSTRIAL WATER) (Water Quality report of your area/borewell is essential for DM Plant calculations) </h6>  		
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<label><h6>Physical Properties</h6></label> 		
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="apearence">Apearence:</label>
									<input type="text" class="form-control" name="Apearence" id="Apearence" placeholder=""  value="{{$data['details']->supply_pressure_avai}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="color">Color: (Hazen Unit)</label>
									<input type="text" class="form-control" name="color" id="color" placeholder="" value="{{$data['details']->color}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for=" turbidity"> Turbidity: [NTU (on Kaoline)]</label>
									<input type="text" class="form-control" name="turbidity" id="turbidity" placeholder="" value="{{$data['details']->turbidity}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="odour ">Odour :</label>
									<input type="text" class="form-control" name="odour" id="odour" placeholder=""value="{{$data['details']->turbidity}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for=" ph_val">PH Value:</label>
									<input type="text" class="form-control" name="ph_val" id="ph_val" placeholder=""value="{{$data['details']->ph_val}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="tds">TDS (Total Dissolved Solids): (ppm)</label>
									<input type="text" class="form-control" name="tds" id="tds" placeholder=""value="{{$data['details']->tds}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<label><h6>Chemical Properties</h6></label> 		
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="hardness ">Total Hardness (As CaCo3): (ppm)</label>
									<input type="text" class="form-control" name="hardness" id="hardness" placeholder=""value="{{$data['details']->hardness}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="tss">TSS: (ppm)</label>
									<input type="text" class="form-control" name="tss" id="tss" placeholder=""value="{{$data['details']->tss}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="moa">Methyle Orange Alkalininty:</label>
									<input type="text" class="form-control" name="moa" id="moa" placeholder="" value="{{$data['details']->moa}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="pnenol "> Pnenolphalein Alkalininty :</label>
									<input type="text" class="form-control" name="pnenol" id="pnenol" placeholder=""value="{{$data['details']->pnenol}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="suplphate_con"> Suplphate Content as SO4: (ppm)</label>
									<input type="text" class="form-control" name="suplphate_con" id="suplphate_con" placeholder="" value="{{$data['details']->suplphate_con}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="cl_conten"> CL Content:</label>
									<input type="text" class="form-control" name="cl_conten" id="cl_conten" placeholder=""value="{{$data['details']->cl_conten}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nitrates "> Nitrates Content as NO3 : (ppm)</label>
									<input type="text" class="form-control" name="nitrates" id="nitrates" placeholder=""value="{{$data['details']->nitrates}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="calcium"> Calcium as Ca: (ppm)</label>
									<input type="text" class="form-control" name="calcium" id="calcium" placeholder=""value="{{$data['details']->calcium}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="magnesium">Magnesium as Mg: (ppm)</label> 
									<input type="text" class="form-control" name="magnesium" id="magnesium" placeholder=""value="{{$data['details']->magnesium}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="sodium "> Sodium as Na: (ppm)</label>
									<input type="text" class="form-control" name="sodium" id="sodium" placeholder=""value="{{$data['details']->sodium}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="disolved_iron"> Disolved Iron as Fe: (ppm)</label>
									<input type="text" class="form-control" name="disolved_iron" id="disolved_iron" placeholder=""value="{{$data['details']->disolved_iron}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="chromium_content"> Chromium Content : (ppm)</label>
									<input type="text" class="form-control" name="chromium_content" id="chromium_content" placeholder=""value="{{$data['details']->chromium_content}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="silica_content  "> Silica Content  : (ppm)</label>
									<input type="text" class="form-control" name="silica_content" id="silica_content" placeholder=""value="{{$data['details']->silica_content}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="zinc_content  "> Zinc Content  : (ppm)</label>
									<input type="text" class="form-control" name="zinc_content" id="zinc_content" placeholder=""value="{{$data['details']->zinc_content}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="phosphate">Phosphate as PO4: (ppm)</label>
									<input type="text" class="form-control" name="phosphate" id="phosphate" placeholder=""value="{{$data['details']->phosphate}}">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="lead "> Lead as Pb  : (ppm)</label>
									<input type="text" class="form-control" name="lead" id="lead" placeholder=""value="{{$data['details']->lead}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="copper  "> Copper as Cu: (ppm)</label>
									<input type="text" class="form-control" name="copper" id="copper" placeholder=""value="{{$data['details']->copper}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="fluorides">Fluorides as F : (mg/L)</label>
									<input type="text" class="form-control" name="fluorides" id="fluorides" placeholder=""value="{{$data['details']->fluorides}}">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="nickel "> Nickel as Ni  : (ppm)</label>
									<input type="text" class="form-control" name="nickel" id="nickel" placeholder=""value="{{$data['details']->nickel}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="arsenic  "> Arsenic as mg/L:</label>
									<input type="text" class="form-control" name="arsenic" id="arsenic" placeholder=""value="{{$data['details']->arsenic}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="cynaide">Cynaide as CN:</label>
									<input type="text" class="form-control" name="cynaide" id="cynaide" placeholder=""value="{{$data['details']->cynaide}}">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="mercury ">Mercury as Hg :</label>
									<input type="text" class="form-control" name="mercury" id="mercury" placeholder=""value="{{$data['details']->mercury}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="residual_chiorine  "> Residual Chiorine (CI) : (ppm)</label>
									<input type="text" class="form-control" name="residual_chiorine" id="residual_chiorine" placeholder=""value="{{$data['details']->residual_chiorine}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="conductivity">Conductivity: (ps)</label>
									<input type="text" class="form-control" name="conductivity" id="conductivity" placeholder=""value="{{$data['details']->conductivity}}">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="oil_grease  ">Oil & Grease :</label>
									<input type="text" class="form-control" name="oil_grease" id="oil_grease" placeholder=""value="{{$data['details']->oil_grease}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="chem_oxygen_demand"> Chemical Oxygen Demand : (mg/L) </label>
									<input type="text" class="form-control" name="chem_oxygen_demand" id="chem_oxygen_demand" placeholder=""value="{{$data['details']->chem_oxygen_demand}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="bio_oxygen_demand"> Biological  Oxygen Demand : (mg/L)</label>
									<input type="text" class="form-control" name="bio_oxygen_demand" id="bio_oxygen_demand" placeholder=""value="{{$data['details']->bio_oxygen_demand}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<label><h6>D.I. WATER SPECIFICATION (For PT-CED Plant)</h6></label> 	
							</div>
						</div>
						<div class="row">	
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<div class="form-group">
										<label for=" di_ph_val">PH Value:</label>
										<input type="text" class="form-control" name="di_ph_val" id="di_ph_val" placeholder=""value="{{$data['details']->di_ph_val}}">
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="ele_conductivity">Electrical Conductivity: (Us/Cm)</label>
									<input type="text" class="form-control" name="ele_conductivity" id="ele_conductivity" placeholder=""value="{{$data['details']->ele_conductivity}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for=" total_hardness ">  Total Hardness : (ppm)</label>
									<input type="text" class="form-control" name="total_hardness" id="total_hardness" placeholder=""value="{{$data['details']->total_hardness}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="di_chirorides"> Chirorides as CI : (ppm)</label>
									<input type="text" class="form-control" name="di_chirorides" id="di_chirorides" placeholder=""value="{{$data['details']->di_chirorides}}">
								</div>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<div class="form-group">
										<label for="di_silica  "> Silica as SiO2  : (ppm)</label>
										<input type="text" class="form-control" name="di_silica" id="di_silica" placeholder=""value="{{$data['details']->di_silica}}">
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for=" amines "> Amines :</label>
									<input type="text" class="form-control" name="amines" id="amines" placeholder=""value="{{$data['details']->amines}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for=" carbonates_bicarbonates "> Carbonates - Bicarbonates  :</label>
									<input type="text" class="form-control" name="carbonates_bicarbonates" id="carbonates_bicarbonates" placeholder=""value="{{$data['details']->carbonates_bicarbonates}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label for="drip_water">Drip Water cond. After PT: (us/cm)</label>
									<input type="text" class="form-control" name="drip_water" id="drip_water" placeholder=""value="{{$data['details']->drip_water}}">
								</div>
							</div>
						</div>
	                
						<div id="pageFooter" class="pagefoot text-right"> </div>
	               
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<label><h6>BASIC OF DESIGN</h6></label> 		
							</div>
						</div>
						<!-- <div class="row">
							<div class="container">
								<button type="button" class="btn btn-default add_field_button">Add Vehicles</button> <br>
							</div>
						</div> -->
						<?php 
						
						$cnt=count($data['details']->mytext);
						for($i=0; $i<$cnt ; $i++)
						{

						 ?>
						
						<div class="row"> 		                	
							<div class="col-md-2 col-sm-2">
									<div class="form-group ">
										<label for="usr">Quantity:</label> <br>
										<div><input type="number" min="0" class="form-control" name="mytext" value="{{$data['details']->mytext[$i]}}"></div>
									</div>
							</div>
							<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="usr">Model Name:</label> <br>
										<div><input type="text" class="form-control" name="modelName[]" value="{{$data['details']->modelName[$i]}}"></div>
									</div>
							</div>
						</div>
					<?php } ?>
						<!-- <div class="input_fields_wrap">
							
						</div> -->
						<div class="row">					
		                    	<div class="col-md-3 col-sm-3">
		                    		<div class="form-group">
			                    		<label for="work_days">No of Working Days: (per Annum) </label> <br>
			                    		<input type="number" min="0" class="form-control" name="work_days" id="work_days" placeholder="" value="{{$data['details']->work_days}}">
			                    	</div>
		                    	</div>
		                    	
		                    	<div class="col-md-3 col-sm-3">
		                    		<div class="form-group">
			                    		<label for="no_shift">No of Shift:  </label> <br>
			                    		<input type="number" min="0" class="form-control" name="no_shift" id="no_shift" value="{{$data['details']->no_shift}}">
			                    	</div>
		                    	</div>

		                    	<div class="col-md-3 col-sm-3">
		                    		<div class="form-group">
			                    		<label for="work_time">Working Time: (Minute / Shift) </label> <br>
			                    		<input type="number" min="0" class="form-control" name="work_time" id="work_time" placeholder=""value="{{$data['details']->work_time}}">
			                    	</div>
		                    	</div>

		                    	<div class="col-md-3 col-sm-3">
		                    		<div class="form-group">
			                    		<label for="efficiency">Operation Efficiency of Plant (in %)  </label> <br>
			                    		<input type="number" min="0" class="form-control" name="efficiency" id="efficiency" placeholder=""value="{{$data['details']->efficiency}}">
			                    	</div>
		                    	</div>
		                    
		                </div>

		                <div class="row">
		                	<div class="col-md-12 col-sm-12">
		                		<label for="efficiency"> Building Size available for plant  </label>	
		                	</div>
		                </div>

		                <div class="row">
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="build_width_x" class="pull-center"> Width X  (in feet)</label>
			                    		<input type="number" min="0" class="form-control" name="build_width_x" id="build_width_x" placeholder=""value="{{$data['details']->build_width_x}}">
			                    </div>
		                	</div>
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="build_length_x" class="pull-center"> Length X (in feet) </label>
			                    		<input type="number" min="0" class="form-control" name="build_length_x" id="build_length_x" placeholder=""value="{{$data['details']->build_length_x}}">
			                    </div>
		                	</div>
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="build_height" class="pull-center">Height (in feet)</label>
			                    		<input type="number" min="0" class="form-control" name="build_height" id="build_height" placeholder=""value="{{$data['details']->build_height}}">
			                    </div>
		                	</div>
		                </div>
		            

	                							
							 <div class="row">
									<div class="col-md-4 col-sm-4">
										<h6>COMPONENT DETAILS </h6>  		
									</div>
							 </div>
	
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<label for="efficiency"> Size of Component  </label> 	
								</div>
							</div>
	
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="comp_width_x" class="pull-center"> Width X  </label>
											<input type="text" min="0" class="form-control" name="comp_width_x" id="comp_width_x" placeholder=""value="{{$data['details']->comp_width_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="comp_length_x" class="pull-center"> Length X  </label>
											<input type="text" min="0" class="form-control" name="comp_length_x" id="comp_length_x" placeholder=""value="{{$data['details']->comp_length_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="comp_height_x" class="pull-center">Height X  </label>
											<input type="text" min="0" class="form-control" name="comp_height_x" id="comp_height_x" placeholder=""value="{{$data['details']->comp_height_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="comp_max_wt_x" class="pull-center">Max wt x  </label>
											<input type="text" min="0" class="form-control" name="comp_max_wt_x" id="comp_max_wt_x" placeholder=""value="{{$data['details']->comp_max_wt_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="comp_max_s_area" class="pull-center">Max S. Area  </label>
											<input type="text" min="0" class="form-control" name="comp_max_s_area" id="comp_max_s_area" placeholder=""value="{{$data['details']->comp_max_s_area}}">
									</div>
								</div>
							</div>
	
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<label for="efficiency">Design Box Dimension </label> 	
								</div>
							</div>
	
							<div class="row">
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="design_box_width_x" class="pull-center"> Width X  </label>
											<input type="text" min="0" class="form-control" name="design_box_width_x" id="design_box_width_x" placeholder=""value="{{$data['details']->design_box_width_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="design_box_length_x" class="pull-center"> Length X  </label>
											<input type="text" min="0" class="form-control" name="design_box_length_x" id="design_box_length_x" placeholder=""value="{{$data['details']->design_box_length_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="design_box_height_x" class="pull-center">Height X  </label>
											<input type="text" min="0" class="form-control" name="design_box_height_x" id="design_box_height_x" placeholder=""value="{{$data['details']->design_box_height_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="design_box_max_wt_x" class="pull-center">Max wt x  </label>
											<input type="text" min="0" class="form-control" name="design_box_max_wt_x" id="design_box_max_wt_x" placeholder=""value="{{$data['details']->design_box_max_wt_x}}">
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="form-group">
										<label for="design_box_max_s_area" class="pull-center">Max S. Area  </label>
											<input type="text" min="0" class="form-control" name="design_box_max_s_area" id="design_box_max_s_area" placeholder=""value="{{$data['details']->design_box_max_s_area}}">
									</div>
								</div>
							</div>
	
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="comp_pitch" class="pull-center"> Component loading pitch</label>
											<input type="text" min="0" class="form-control" name="comp_pitch" id="comp_pitch" placeholder=""value="{{$data['details']->comp_pitch}}">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
										<div class="form-group">
										<label for="jig_weight" class="pull-center"> Weight of Jig (if any used) </label>
											<input type="text" min="0" class="form-control" name="jig_weight" id="jig_weight" placeholder=""value="{{$data['details']->jig_weight}}">
									</div>
								</div>
							</div>
	
	
							<div class="row">
								  <div class="col-md-12 col-sm-12">
									  <div class="form-group ">
										  <label for="air_pollution">Material of Component :</label> <br>
										<div class="form-check-inline">
											 <label><input type="checkbox" name="material_comp[]"  value="ms" {{isset($data['details']->material_comp)?(in_array('ms',$data['details']->material_comp)?'checked':''):''}}> MS  </label>
										</div>
										<div class="form-check-inline">
											  <label><input type="checkbox" name="material_comp[]" value="abs" {{isset($data['details']->material_comp)?(in_array('abs',$data['details']->material_comp)?'checked':''):''}}>ABS</label>
										</div>
										<div class="form-check-inline">
											  <label><input type="checkbox" name="material_comp[]" value="aluminium " {{isset($data['details']->material_comp)?(in_array('aluminium',$data['details']->material_comp)?'checked':''):''}}>Aluminium </label>
										</div>
										<div class="form-check-inline">
											  <label><input type="checkbox" name="material_comp[]" value="assembled" {{isset($data['details']->material_comp)?(in_array('assembled',$data['details']->material_comp)?'checked':''):''}}>Assembled</label>
										</div>
										<div class="form-check-inline">
											  <label><input type="checkbox" name="material_comp[]" value="castiron" {{isset($data['details']->material_comp)?(in_array('castiron',$data['details']->material_comp)?'checked':''):''}}>Cast Iron</label>
										</div>
									  </div>
								  </div>
							</div>

						  	<div class="row">
								<div class="col-md-4 col-sm-4">
									<label for="painy_type">Type of Paint (if Paint Plant) </label> <br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<input type="text" class="form-control" name="painy_type[]" id="painy_type" placeholder="" value="{{$data['details']->painy_type[0]}}">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<input type="text" class="form-control" name="painy_type[]" id="painy_type" placeholder="" value="{{$data['details']->painy_type[1]}}">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<input type="text" class="form-control" name="painy_type[]" id="painy_type" placeholder="" value="{{$data['details']->painy_type[2]}}">
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<input type="text" class="form-control" name="painy_type[]" id="painy_type" placeholder="" value="{{$data['details']->painy_type[3]}}">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-6">
					      			<div class="form-group">
								      	<label for="powder_type"> Type of Powder (if Power Line)  :</label>
										<input type="text" class="form-control" name="powder_type" id="powder_type" placeholder="" value="{{$data['details']->powder_type}}"> 
							      	</div>
				      			</div>
				      			<div class="col-md-6 col-sm-6" id="add_powder_type">
										<div class="form-group">
											<label for="other_powder"> Other Type of Powder :</label>
											<input type="text" class="form-control" name="other_powder" id="other_powder" placeholder="" value="{{$data['details']->other_powder}}">
										</div>
				      			</div>
							</div>

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<label for="efficiency">Color Details: </label> 	
								</div>
							</div>

							<?php 
						
								$cnt=count($data['details']->color_detail);
								for($i=0; $i<$cnt ; $i++)
								{

							?>

							<div class="row"> 		                	
								<div class="col-md-3 col-sm-3">
									<div class="form-group ">
										<label for="color">Color:</label> <br>
										<div><input type="text" class="form-control" name="color_detail" value="{{$data['details']->color_detail[$i]}}"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<label for="prod">% Prod %:</label> <br>
										<div><input type="number" min="0" class="form-control" name="prod_detail" value="{{$data['details']->prod_detail[$i]}}"></div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="form-group">
										<label for="prod">Kgs/Consumed: (per day)</label> <br>
										<div><input type="number" min="0" class="form-control" name="kgs_detail" value="{{$data['details']->kgs_detail[$i]}}"></div>
									</div>
								</div>
							</div>
							<?php } ?>

							<div class="row">
								<div class="col-md-6 col-sm-6">
					      			<div class="form-group">
								      	<label for="color_change">Color Change: </label> <br>
										<div><input type="text" class="form-control" name="color_change" value="{{$data['details']->color_change}}"></div>  
							      	</div>
				      			</div>
				      			<div class="col-md-6 col-sm-6" >
										<div class="form-group">
											<label for="frequency"> Frequency :</label>
											<input type="text" class="form-control" name="frequency" id="frequency" placeholder="" value="{{$data['details']->frequency}}">
										</div>
				      			</div>
							</div>
	
		            	 <div id="pageFooter" class="pagefoot text-right"></div>
		            	
		            	<div class="row">
		                    	<div class="col-md-4 col-sm-4">
		                    		<h6>PAINT CIRCULATION SYSTEM </h6>  		
		                    	</div>
		                </div>

		                <div class="row">
				      		<div class="col-md-12 col-sm-12">
				      			<div class="form-group">
		      						<label for="paint_cir_type">TYPE OF PAINT CIRCULATION SYSTEM :</label> <br>
						      		<div class="form-check-inline">
									<input type="checkbox" name="paint_cir_type[]"  value="Direct Pail Mount System" {{isset($data['details']->paint_cir_type)?(in_array('Direct Pail Mount System',$data['details']->paint_cir_type)?'checked':''):''}}>Direct Pail Mount System

								    </div>
								    <div class="form-check-inline">
								      	<input type="checkbox" name="paint_cir_type[]" value="Pressure feed container" {{isset($data['details']->paint_cir_type)?(in_array('Pressure feed container',$data['details']->paint_cir_type)?'checked':''):''}}>Pressure feed container
								    </div>
								    <div class="form-check-inline">
								      	<input type="checkbox" name="paint_cir_type[]" value="Close Loop Type" {{isset($data['details']->paint_cir_type)?(in_array('Close Loop Type',$data['details']->paint_cir_type)?'checked':''):''}}>Close Loop Type 
								    </div>
								    <div class="form-check-inline">
								      	<input type="checkbox" name="paint_cir_type[]" value="assembled" {{isset($data['details']->paint_cir_type)?(in_array('assembled',$data['details']->paint_cir_type)?'checked':''):''}}>Assembled
								    </div>
								    <div class="form-check-inline">
								      	<input type="checkbox" name="paint_cir_type[]" value="Third, Return Line" {{isset($data['details']->paint_cir_type)?(in_array('Third, Return Line',$data['details']->paint_cir_type)?'checked':''):''}}>Third, Return Line (Applicable for Metalic Paint)
								    </div>
				      			</div>
				      		</div>
				      	</div>



				      	<div class="row">
		                    	<div class="col-md-4 col-sm-4">
		                    		<h6>PAINT MIX ROOM </h6>  		
		                    	</div>
		                </div>

		                <div class="row">
				      		<div class="col-md-12 col-sm-12">
				      			<div class="form-group">
		      						<label for="paint_cir_type">TYPE OF PAINT CIRCULATION SYSTEM :</label> <br>
						      		<div class="form-check-inline">
										<input type="checkbox" name="paint_mix_room[]"  value="Open Type" {{isset($data['details']->paint_mix_room)?(in_array('Open Type',$data['details']->paint_mix_room)?'checked':''):''}}>Open Type 

								    </div>
								    <div class="form-check-inline">
								      	<input type="checkbox" name="paint_mix_room[]" value="Close type with Gi Enclouser" {{isset($data['details']->paint_mix_room)?(in_array('Close type with Gi Enclouser',$data['details']->paint_mix_room)?'checked':''):''}}>Close type with Gi Enclouser
								    </div>
								    <div class="form-check-inline">
								      	<input type="checkbox" name="paint_mix_room[]" value="Close type Civil Building" {{isset($data['details']->paint_mix_room)?(in_array('Close type Civil Building',$data['details']->paint_mix_room)?'checked':''):''}}>Close type Civil Building (Client's Scope)  
								    </div>
								    
				      			</div>
				      		</div>
				      	</div>

				      	<div class="row">
		                    	<div class="col-md-4 col-sm-4">
		                    		<h6>PAINT / SOLVENT </h6>  		
		                    	</div>
		                </div>


		                <div class="row">
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="prime_coat" class="pull-center">Prime Coat </label>
			                    		<input type="number" min="0" class="form-control" name="prime_coat" id="prime_coat" placeholder="" value="{{$data['details']->prime_coat}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="base_coat" class="pull-center"> Base Coat </label>
			                    		<input type="number" min="0" class="form-control" name="base_coat" id="base_coat" placeholder="" value="{{$data['details']->base_coat}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="clear_coat" class="pull-center">Clear Coat</label>
			                    		<input type="number" min="0" class="form-control" name="clear_coat" id="clear_coat" placeholder="" value="{{$data['details']->clear_coat}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="solid_colors" class="pull-center">Solid Colors  </label>
			                    		<input type="number" min="0" class="form-control" name="solid_colors" id="solid_colors" placeholder="" value="{{$data['details']->solid_colors}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="solvent" class="pull-center">Solvent  </label>
			                    		<input type="number" min="0" class="form-control" name="solvents" id="solvents" placeholder="" value="{{$data['details']->solvents}}">
			                    </div>
		                	</div>
		                </div>


		                <div class="row">
		                    	<div class="col-md-12 col-sm-12">
		                    		<h6>NOS. OF OUTLETS (NOS. OF OPERATOR POINT) </h6>  		
		                    	</div>
		                </div>


		                <div class="row">
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="dry_air" class="pull-center">Dry Air </label>
			                    		<input type="number" min="0" class="form-control" name="dry_air" id="dry_air" placeholder="" value="{{$data['details']->dry_air}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="normal_air" class="pull-center"> Normal Air </label>
			                    		<input type="number" min="0" class="form-control" name="normal_air" id="normal_air" placeholder="" value="{{$data['details']->normal_air}}">
			                    </div>
		                	</div>
		                	
		                </div>

		                 


		                <div class="row">
		                    	<div class="col-md-4 col-sm-4">
		                    		<h6>OTHER ACCESSORIES </h6>  		
		                    	</div>
		                </div>


		                <div class="row">
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="paint_mix_tank" class="pull-center">Paint Mixing Tank  </label>
			                    		<input type="number" min="0" class="form-control" name="paint_mix_tank" id="paint_mix_tank" placeholder="" value="{{$data['details']->paint_mix_tank}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="paint_supply" class="pull-center"> Paint Supply Tank </label>
			                    		<input type="number" min="0" class="form-control" name="paint_supply" id="paint_supply" placeholder="" value="{{$data['details']->paint_supply}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="air_agitator" class="pull-center">Air Agitator </label>
			                    		<input type="number" min="0" class="form-control" name="air_agitator" id="air_agitator" placeholder="" value="{{$data['details']->air_agitator}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="paint_trans_pump" class="pull-center">Paint Transfer Pump  </label>
			                    		<input type="number" min="0" class="form-control" name="paint_trans_pump" id="paint_trans_pump" placeholder="" value="{{$data['details']->paint_trans_pump}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="paint_feed_pump" class="pull-center">Paint Feed Pump  </label>
			                    		<input type="number" min="0" class="form-control" name="paint_feed_pump" id="paint_feed_pump" placeholder="" value="{{$data['details']->paint_feed_pump}}">
			                    </div>
		                	</div>
		                	<div class="col-md-2 col-sm-2">
		                		<div class="form-group">
		                			<label for="paint_pipe_material" class="pull-center">Paint piping Material   </label>
			                    		<input type="number" min="0" class="form-control" name="paint_pipe_material" id="paint_pipe_material" placeholder="" value="{{$data['details']->paint_pipe_material}}">
			                    </div>
		                	</div>
		                </div>

		              
		              <!--   <div id="pageFooter" class="text-right"> </div> -->

		                <div class="row">
		                    	<div class="col-md-4 col-sm-4">
		                    		<h6>MANUAL PAINT APPLICATORS </h6>  		
		                    	</div>
		                </div>


		                <div class="row">
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="conv_spray_gun" class="pull-center">Conventional Spray Gun  </label>
			                    		<input type="number" min="0" class="form-control" name="conv_spray_gun" id="conv_spray_gun" placeholder="" value="{{$data['details']->conv_spray_gun}}">
			                    </div>
		                	</div>
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="hvlp" class="pull-center"> High Volume Low Pressure (HVLP)           :  </label>
			                    		<input type="number" min="0" class="form-control" name="hvlp" id="hvlp" placeholder="" value="{{$data['details']->hvlp}}">
			                    </div>
		                	</div>
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="electrostatic_gun" class="pull-center">Electrostatic Gun </label>
			                    		<input type="number" min="0" class="form-control" name="electrostatic_gun" id="electrostatic_gun" placeholder="" value="{{$data['details']->electrostatic_gun}}">
			                    </div>
		                	</div>
		                	
		                </div>

		                <div class="row">
		                    	<div class="col-md-4 col-sm-4">
		                    		<h6>SEALENT APPLICATORS  </h6>  		
		                    	</div>
		                </div>

		                <div class="row">
		                	<div class="col-md-4 col-sm-4">
		                		<div class="form-group">
		                			<label for="manual_aplicator" class="pull-center">Manual Applicators</label>
			                    	<input type="number" min="0" class="form-control" name="manual_aplicator" id="manual_aplicator" placeholder="" value="{{$data['details']->manual_aplicator}}">
			                    </div>
		                	</div>        	
		                </div>

		                

						<div class="row">
							<div class="col-md-12 text-right">
								<button type="button" name="button"  id="printbutton" onclick="printDiv('printableArea')" class="btn btn-primary">Print</button>
							</div>
						</div>

						<div id="pageFooter" class="text-right"> </div>
		          
				</form>

				</div>
			</div>

		</div>
	</div>
	<!-- /main charts -->
</div>
<!-- /content area -->




@endsection




@section('custom_script')
<script type="text/javascript">

	

	
	
	$( ":text" ).attr('readonly', true);
	$('#pre_treatment').prop('disabled', true);
	$('#ele_deposition').prop('disabled', true);
	$('#top_coat_line').prop('disabled', true);
	$('#load_comp').prop('disabled', true);

	$('#unload_comp').prop('disabled', true);
	$('#shop_fire_fight').prop('disabled', true);
	$('#shop_vent').prop('disabled', true);
	$('#conveyor_type').prop('disabled', true);
	$('#fire_fight_sys').prop('disabled', true);

	$('input[type="radio"]').prop('disabled', true);
	$('input[type="number"]').prop('disabled', true);
	$('input[type="checkbox"]').prop('disabled', true);

	$( "#eff_treat_plant_text").attr('readonly', true);
	$( "#exhaust_air_text").attr('readonly', true);



	function printDiv(divName) 
	{
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;

     $( "#printbutton").hide();

     
     window.print();
     document.body.innerHTML = originalContents;
	}



  </script>

 @endsection 