<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home');
Route::get('/privacy-policy', 'HomeController@privacyPolicy');
Route::get('/term-conditions', 'HomeController@termCondition');


Route::get('/inquiry', 'InquiryController@inquiry');
Route::post('/add-inquiry', 'InquiryController@addInquiry');



Route::get('/contact-us', 'ContactUsController@contactUs');
Route::post('/contact-us/quick-contact', 'ContactUsController@quickContact');


// Route::get('users', function () {
//     $data = App\User::paginate(15);

//     $data->withPath('/media');

// });
Route::get('/media', 'MediaController@media');
Route::get('/mediaList', 'MediaController@mediaList');
Route::get('/media/album/{id}','MediaController@showAlbumPhotos');
Route::get('/media/events', 'MediaController@showEvents');
Route::get('/media/video', 'MediaController@showVideos');


/*Route::get('/media/album', 'HomeController@media_album');*/
Route::get('/services', 'HomeController@services');


Route::get('/careers', 'CareersController@careers');
Route::post('careers/job-applicaion','CareersController@jobApplication');





Route::get('/about-us', 'AboutUsController@AboutUs');
Route::get('/about-us/portfolio/{id}', 'AboutUsController@showPortfolio');






Route::get('/portfolio', 'HomeController@portfolio');



/*header tab routes*/
Route::get('/products/{prod_cat_id}/{prod_id}', 'ProductsController@products');
Route::get('/all-product-category', 'ProductsController@showProductCategories');
Route::get('/product-category/{id}', 'ProductsController@showProducts');


Route::get('/services/{id}', 'ServicesController@services');
Route::get('/services', 'ServicesController@service');
Route::get('/industries/{id}', 'IndustriesController@industries');
Route::get('/industry', 'IndustriesController@index');




/*#####################Admin Routes########################*/

Route::get('/admin','admin\AdminLoginController@toLoginPage');
Route::get('/admin/login','admin\AdminLoginController@showLoginPage');
Route::post('/admin/login-check','admin\AdminLoginController@login');
Route::get('/admin/logout','admin\AdminLoginController@logout');
/*Route::get('/admin/forgot-password','admin\AdminLoginController@showForgotPasswordPage');
Route::post('/admin/forgot-password-post','admin\AdminLoginController@postForgotPassword');*/


// Password Reset Routes...
    Route::get('/admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('/admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('/admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset.token');
    Route::post('/admin/password/reset', 'Auth\ResetPasswordController@reset');



Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){

Route::get('/change-password','admin\AdminLoginController@showChangePassWordForm');
Route::post('/change-password','admin\AdminLoginController@changePassword');

/*admin dashboard routes*/
Route::get('/dashboard','admin\AdminDashboardController@dashboard');

/*admin products routes*/
Route::get('/product','admin\AdminProductController@product');
Route::get('/product-form','admin\AdminProductController@productForm');
Route::get('/product-form/{id}','admin\AdminProductController@productForm');
Route::post('/add-product','admin\AdminProductController@addProduct');
Route::post('/update-product/{id}','admin\AdminProductController@updateProduct');
Route::get('/delete-product/{id}','admin\AdminProductController@deleteProduct');

Route::get('/product-category','admin\AdminProductController@product_category');
Route::post('/add-product-category','admin\AdminProductController@addProductCategory');
Route::post('/update-product-category/{id}','admin\AdminProductController@updateProductCategory');
Route::get('/delete-product-category/{id}','admin\AdminProductController@deleteProductCategory');
Route::get('/category-form','admin\AdminProductController@productCategoryForm');
Route::get('/category-form/{id}','admin\AdminProductController@productCategoryForm');




/*admin services routes*/
Route::get('/services','admin\AdminServiceController@service');
Route::get('/service-form','admin\AdminServiceController@serviceForm');
Route::get('/service-form/{id}','admin\AdminServiceController@serviceForm');
Route::post('/add-services','admin\AdminServiceController@addService');
Route::post('/update-services/{id}','admin\AdminServiceController@updateService');
Route::get('/delete-services/{id}','admin\AdminServiceController@deleteService');


/*admin industries routes*/
Route::get('/industries','admin\AdminIndustryController@industries');
Route::get('/industries-form','admin\AdminIndustryController@industryForm');
Route::get('/industries-form/{id}','admin\AdminIndustryController@industryForm');
Route::post('/add-industries','admin\AdminIndustryController@addIndustries');
Route::post('/update-industries/{id}','admin\AdminIndustryController@updateIndustries');
Route::get('/delete-industries/{id}','admin\AdminIndustryController@deleteIndustries');



/*banner routes*/
Route::get('/banner','admin\AdminBannerController@banners');
Route::post('/add_banner','admin\AdminBannerController@add_banner');
Route::get('/delete_banner/{id}','admin\AdminBannerController@delete_banner');
Route::get('/banner_status/{id}','admin\AdminBannerController@banner_status');


/*media routes*/
Route::get('/albums','admin\AdminMediaController@albums');
Route::post('/add-albums','admin\AdminMediaController@addAlbums');
Route::post('/update-albums/{id}','admin\AdminMediaController@updateAlbums');
Route::get('/delete-albums/{id}','admin\AdminMediaController@deleteAlbums');
Route::get('/albums-form','admin\AdminMediaController@albumsForm');
Route::get('/albums-form/{id}','admin\AdminMediaController@albumsForm');
Route::get('/video','admin\AdminMediaController@video');
Route::get('/video-form','admin\AdminMediaController@videoForm');
Route::get('/video-form/{id}','admin\AdminMediaController@videoForm');
Route::post('/add-video','admin\AdminMediaController@addVideo');
Route::post('/update-video/{id}','admin\AdminMediaController@updateVideo');
Route::get('/delete-video/{id}','admin\AdminMediaController@deleteVideo');




Route::get('/photos','admin\AdminMediaController@photos');
Route::get('/photos-form','admin\AdminMediaController@photosForm');
Route::post('/add-photos','admin\AdminMediaController@addPhotos');
Route::get('/delete-photo/{id}','admin\AdminMediaController@deletePhoto');
Route::get('/photo-status/{id}','admin\AdminMediaController@photoStatus');





Route::get('/events','admin\AdminMediaController@events');
Route::post('/add-event','admin\AdminMediaController@addEvent');
Route::post('/update-event/{id}','admin\AdminMediaController@updateEvent');
Route::get('/delete-event/{id}','admin\AdminMediaController@deleteEvent');
Route::get('/event-form','admin\AdminMediaController@eventForm');
Route::get('/event-form/{id}','admin\AdminMediaController@eventForm');







/*Inquiry routes*/
Route::get('/inquiry','admin\AdminInquiryController@inquiry');
/*Route::get('/inquiry-details/{id}','admin\AdminInquiryController@inquiryDetails');*/
Route::get('/delete-inquiry/{id}','admin\AdminInquiryController@inquiryDelete');
Route::post('/add-inquiry-details','admin\AdminInquiryController@addInquiryDetails');




/*careers routes*/
Route::get('/jobs', 'admin\AdminCareerController@jobs');
Route::get('/job-form','admin\AdminCareerController@jobForm');
Route::get('/job-form/{id}','admin\AdminCareerController@jobForm');
Route::post('/add-job','admin\AdminCareerController@addJob');
Route::post('/update-job/{id}','admin\AdminCareerController@updateJob');
Route::get('/delete-job/{id}','admin\AdminCareerController@deleteJob');
Route::get('/job-status/{id}','admin\AdminCareerController@jobStatus');


Route::get('/candidate-list', 'admin\AdminCareerController@candidateList');
Route::get('/delete-candidate/{id}', 'admin\AdminCareerController@deleteCandidate');

/*about us routes*/
Route::get('/management', 'admin\AdminAboutUsController@management');
Route::get('/management-form', 'admin\AdminAboutUsController@managementForm');
Route::get('/management-status/{id}', 'admin\AdminAboutUsController@managementStatus');
Route::get('/management-form/{id}', 'admin\AdminAboutUsController@managementForm');
Route::post('/add-management', 'admin\AdminAboutUsController@addManagement');
Route::post('/update-management/{id}', 'admin\AdminAboutUsController@updateManagement');
Route::get('/delete-management/{id}', 'admin\AdminAboutUsController@deleteManagement');


Route::get('/certification', 'admin\AdminAboutUsController@certification');

Route::post('/add-certification', 'admin\AdminAboutUsController@addCertification');
Route::post('/update-certification/{id}', 'admin\AdminAboutUsController@updateCertification');
Route::get('/delete-certification/{id}', 'admin\AdminAboutUsController@deleteCertification');

Route::get('/certification-form', 'admin\AdminAboutUsController@certificationForm');
Route::get('/certification-form/{id}', 'admin\AdminAboutUsController@certificationForm');
Route::get('/certification-status/{id}', 'admin\AdminAboutUsController@certificationStatus');


Route::get('/contact-us','admin\AdminContactUsController@ContactUs');
Route::get('/delete-contact-us/{id}','admin\AdminContactUsController@deleteContactUs');
Route::get('/address','admin\AdminContactUsController@Address');
Route::post('/add-address','admin\AdminContactUsController@addAddress');
Route::get('/other-branches','admin\AdminContactUsController@otherBranches');
Route::post('/add-other-branch','admin\AdminContactUsController@addOtherBranch');
Route::post('/update-other-branch/{id}','admin\AdminContactUsController@updateOtherBranch');
Route::get('/delete-other-branch/{id}','admin\AdminContactUsController@deleteOtherBranch');
Route::get('/other-branch-form','admin\AdminContactUsController@otherBranchesForm');
Route::get('/other-branch-form/{id}','admin\AdminContactUsController@otherBranchesForm');



Route::get('/home-meta-info','admin\AdminMetaInfoController@homeMetaInfo');
Route::post('/post-home-meta-info','admin\AdminMetaInfoController@posthomeMetaInfo');

Route::get('/img-meta-info','admin\AdminMetaInfoController@imgMetaInfo');
Route::post('/post-img-meta-info','admin\AdminMetaInfoController@postimgMetaInfo');

Route::get('/event-meta-info','admin\AdminMetaInfoController@eventMetaInfo');
Route::post('/post-event-meta-info','admin\AdminMetaInfoController@posteventMetaInfo');

Route::get('/careers-meta-info','admin\AdminMetaInfoController@careersMetaInfo');
Route::post('/post-careers-meta-info','admin\AdminMetaInfoController@postcareersMetaInfo');

Route::get('/aboutus-meta-info','admin\AdminMetaInfoController@aboutusMetaInfo');
Route::post('/post-aboutus-meta-info','admin\AdminMetaInfoController@postaboutusMetaInfo');

Route::get('/contactus-meta-info','admin\AdminMetaInfoController@contactusMetaInfo');
Route::post('/post-contactus-meta-info','admin\AdminMetaInfoController@postcontactusMetaInfo');

Route::get('/inquiry-meta-info','admin\AdminMetaInfoController@inquiryMetaInfo');
Route::post('/post-inquiry-meta-info','admin\AdminMetaInfoController@postinquiryMetaInfo');

});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
