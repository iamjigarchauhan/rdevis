@inject('request', 'Illuminate\Http\Request')
<header class="header header-two">
    <div class="header-wrapper no-padding">
   <!-- <div class="header-wrapper">-->
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-2 col-xs-4 logo-box">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('')}}img/logo/redivs_logo.png" class="logo-img" alt="RDEVIS Logo">
                        </a>
                    </div>
                </div><!-- .logo-box -->
                
                <div class="col-xs-8 col-md-9 col-lg-10 right-box">
                    <div class="right-box-wrapper no-padding">
                        <div class="primary no-margin">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                
                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">

                                        <li class="">
                                        <a class="text-uppercase" href="{{url('/')}}">Home</a>
                                        </li> <!-- Home -->

                                        <li class="parent megamenu promo">
                                            <a class="text-uppercase" href="{{url('/all-product-category')}}">Products</a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                            <ul>
                                                                <?php 
                                                                    $ProdCatData = \App\Helpers\HeaderMenuData::getProductCategoryData();
                                                                    $ProdCatData =$ProdCatData->toArray();
                                                                    foreach ($ProdCatData as $ikey => $value) 
                                                                    {  
                                                                ?>
                                                                <li  class=
                                                                <?php 
                                                                   
                                                                        if($ProdCatData[$ikey]['product'])
                                                                        {
                                                                            echo "parent";
                                                                        }
                                                                        else
                                                                        {
                                                                            echo "";
                                                                        }
                                                                ?>
                                                                >
                                                                    <a class="text-capitalize" href="{{url('/product-category/'.$ProdCatData[$ikey]['id'])}}"> {{$ProdCatData[$ikey]['category_name']}} <i  class="<?php 
                                                                    if($ProdCatData[$ikey]['product']) 
                                                                    {
                                                                        echo "fa fa-chevron-right pull-right";
                                                                    } else{
                                                                        echo "";
                                                                    } ?>" ></i> </a>

                                                                    <?php 
                                                                            $prod=$ProdCatData[$ikey]['product'];
                                                                           
                                                                    ?>
                                                                
                                                                    <ul class="sub no-margin">
                                                                        <?php
                                                                      foreach ($prod as $jkey => $value) 
                                                                        {
                                                                       
                                                                        ?>
                                                                        <li><a class="text-capitalize" href="{{url('/products/'.$ProdCatData[$ikey]['id'].'/'.$prod[$jkey]['id'])}}"> {{$prod[$jkey]['product_name']}}</a></li>
                                                                        <?php        
                                                                         }
                                                                        ?>
                                                                    </ul>
                                                                 </li>	
                                                            <?php } ?>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    <div class="promo-block text-left">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>
                                        <li class="parent megamenu promo">
                                            <a class="text-uppercase" href="{{url('services')}}">Services</a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                            <ul>
                                                                <?php 
                                                                    $serviceData = \App\Helpers\HeaderMenuData::getServiceData();
                                                                    foreach ($serviceData as $key => $value) {
                                                                ?>
                                                                <li>
                                                                    <a class="text-capitalize" href="{{url('/services/'.$serviceData[$key]['id'])}}">{{$serviceData[$key]['name']}}</a>
                                                                </li>	
                                                            <?php } ?>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    <div class="promo-block text-left">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>

                                        <li class="parent megamenu promo">
                                            <a class="text-uppercase" href="{{ url('industry') }}">Industries</a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                            <ul>
                                                                <?php 
                                                                    $industryData = \App\Helpers\HeaderMenuData::getIndustryData();
                                                                    foreach ($industryData as $key => $value) {
                                                                
                                                                ?>
                                                                <li class="">
                                                                    <a class="text-capitalize" href="{{url('/industries/'.$industryData[$key]['id'])}}">{{$industryData[$key]['name']}}</a>
                                                                </li>	
                                                            <?php } ?>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    <div class="promo-block text-left">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>
                                    
                                        <li class="parent megamenu promo">
                                            <a class="text-uppercase" href="{{url('/mediaList')}}">Media</a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                            <ul>
                                                                <li><a class="text-capitalize" href="{{url('/media')}}">Images</a></li>
                                                                <li><a class="text-capitalize" href="{{url('/media/video')}}">Videos</a></li>
                                                                <li><a class="text-capitalize" href="{{url('/media/events')}}">Events</a></li>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    <div class="promo-block text-left">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>
                                    
                                        <li class="">
                                        <a class="text-uppercase" href="{{url('/careers')}}">Careers</a>
                                        </li> <!-- career -->

                                        <li class="parent megamenu promo">
                                            <a class="text-uppercase" href="{{url('/about-us')}}">About Us</a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                            <ul>
                                                                <li><a class="text-capitalize" href="#">Overview</a></li>
                                                                <li><a class="text-capitalize" href="{{url('/about-us')}}">Our Group Companies</a></li>
                                                                <li><a class="text-capitalize" href="{{url('/about-us')}}#Management" id="Management_hrf">Management</a></li>
                                                                <li><a class="text-capitalize" href="{{url('/about-us')}}#Values" id="Values_hrf">Values</a></li>
                                                                <li><a class="text-capitalize" href="{{url('/about-us')}}#Certification" id="Certification_hrf">Certification</a></li>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    <div class="promo-block text-left">
                                                    <div class="sub-list">
                                                        <div class="closed">
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>

                                        <li class="">
                                        <a class="text-uppercase" href="{{url('/contact-us')}}">Contact Us</a>
                                        </li> <!-- contact -->

                                        <li class=""> 
                                            <a class="text-uppercase" href="{{url('/inquiry')}}">Enquiry</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- .primary -->
                    </div>
                </div>
            </div><!--.row -->
        </div>
    </div><!-- .header-wrapper -->
</header>
