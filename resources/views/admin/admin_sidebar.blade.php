<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<!--<div class="mr-3">
								<a href="#"><img src="{{asset('')}}admin_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>-->

							<div class="media-body">
								<div class="media-title font-weight-semibold">Admin</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Surat, Gujarat
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<!-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li> -->
						<li class="nav-item">
							<a href="{{url('/admin/dashboard')}}" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cart2"></i> <span>Products</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{url('/admin/product-category')}}" class="nav-link"><i class="icon-grid5"></i>Product Category</a></li>
								<li class="nav-item"><a href="{{url('/admin/product')}}" class="nav-link"><i class="icon-cart-add2"></i>Product</a></li>
							</ul>
						</li>
						<li class="nav-item ">
							<a href="{{url('/admin/services')}}" class="nav-link"><i class="icon-stack3"></i> <span>Services</span></a>
						</li>
						<li class="nav-item ">
							<a href="{{url('/admin/industries')}}" class="nav-link"><i class="icon-office"></i> <span>Industries</span></a>
						</li>
						<li class="nav-item ">
							<a href="{{url('/admin/banner')}}" class="nav-link"><i class="icon-image4"></i> <span>Banner</span></a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-clapboard"></i> <span>Media</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{url('/admin/albums')}}" class="nav-link"> <i class="icon-film"></i>Albums</a></li>
								<li class="nav-item"><a href="{{url('/admin/photos')}}" class="nav-link"><i class="icon-camera"></i>Photos</a></li>
								<li class="nav-item"><a href="{{url('/admin/video')}}" class="nav-link"> <i class="icon-video-camera3"></i>Video</a></li>
								<li class="nav-item"><a href="{{url('/admin/events')}}" class="nav-link"> <i class="icon-megaphone"></i>Events</a></li>
							</ul>
						</li>
						<li class="nav-item ">
							<a href="{{url('/admin/inquiry')}}" class="nav-link"><i class="icon-bubbles7"></i> <span>Inquiry</span></a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graduation"></i> <span>Careers</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{url('/admin/jobs')}}" class="nav-link"><i class="icon-portfolio"></i>Jobs</a></li>
								<li class="nav-item"><a href="{{url('/admin/candidate-list')}}" class="nav-link"> <i class="icon-users4"></i>List of Candidate</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-collaboration"></i> <span>About Us</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{url('/admin/management')}}" class="nav-link"> <i class="icon-user-tie"></i>Management</a></li>
								<li class="nav-item"><a href="{{url('/admin/certification')}}" class="nav-link"> <i class="icon-certificate"></i>Certification</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-phone-wave"></i> <span>Contact Us</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{url('/admin/contact-us')}}" class="nav-link"> <i class="icon-phone"></i>Quick Contact</a></li>
								<li class="nav-item"><a href="{{url('/admin/address')}}" class="nav-link"> <i class="icon-location3"></i>Address</a></li>
								<li class="nav-item"><a href="{{url('/admin/other-branches')}}" class="nav-link"> <i class="icon-city"></i>Other Branches</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu ">
							<a href="#" class="nav-link"><i class="icon-compose"></i> <span>Meta Information</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{url('admin/home-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>Home Page</a></li>
								<li class="nav-item"><a href="{{url('admin/img-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>Image Video Page</a></li>
								<li class="nav-item"><a href="{{url('admin/event-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>Event Page</a></li>
								<li class="nav-item"><a href="{{url('admin/careers-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>Careers Page</a></li>
								<li class="nav-item"><a href="{{url('admin/aboutus-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>About Us Page</a></li>
								<li class="nav-item"><a href="{{url('admin/contactus-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>Contact Us Page</a></li>
								<li class="nav-item"><a href="{{url('admin/inquiry-meta-info')}}" class="nav-link"> <i class="icon-embed2"></i>Inquiry Page</a></li>


								
							</ul>
						</li>






						<!-- <li class="nav-item ">
							<a href="{{url('/admin/contact-us')}}" class="nav-link"><i class="icon-phone"></i> <span>Contact Us</span></a>
						</li> -->
					

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
<!-- /main sidebar -->