<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

use App\Http\Controllers\admin\Auth;
use App\Http\Controllers\admin\Media;
use App\Http\Controllers\admin\Settings;
use App\Http\Controllers\admin\Category;
use App\Http\Controllers\admin\Badge;
use App\Http\Controllers\admin\Platform;
use App\Http\Controllers\admin\Videosize;
use App\Http\Controllers\admin\Genre;
use App\Http\Controllers\admin\Users;
use App\Http\Controllers\admin\Newsletter;
use App\Http\Controllers\admin\Packages;
use App\Http\Controllers\admin\PackageEnquiry;
use App\Http\Controllers\admin\WithdrawalRequest;

// Frontend

use App\Http\Middleware\User as UserMiddleware;

use App\Http\Controllers\Home;
use App\Http\Controllers\Creations;
use App\Http\Controllers\Creators;
use App\Http\Controllers\User;


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

Route::get('/', [Home::class,'index']);
Route::get('/about-us', [Home::class,'aboutUs']);
Route::get('/login', [Home::class,'login']);
Route::get('/sign-up', [Home::class,'signUp']);
Route::get('/forgot-password', [Home::class,'forgotPassword']);
Route::get('/terms-of-services', [Home::class,'termsCondition']);
Route::get('/privacy-policy', [Home::class,'privacyPolicy']);
Route::get('/faq', [Home::class,'faq']);
Route::get('/mail/{debug?}/{level?}', [Home::class,'mail']);

//creations
Route::get('/creations', [Creations::class,'index']);
Route::get('/creations/{slug}', [Creations::class,'detail']);

//creators
Route::get('/creators', [Creators::class,'index']);
Route::get('/creators/{slug}', [Creators::class,'detail']);


Route::get('/user/logout', [User::class,'logout']);
Route::get('/verify/{token}', [User::class,'doVerify']);
Route::get('/user/new-password/{token}', [User::class,'newPassword']);

Route::post('ajax/doSignUp', [User::class,'doSignUp']);
Route::post('ajax/doLogin', [User::class,'doLogin']);
Route::post('ajax/doForgotPassword', [User::class,'doForgotPassword']);
Route::post('ajax/doUpdateNewPassword', [User::class,'doUpdateNewPassword']);
Route::post('ajax/doSubscribe', [User::class,'doSubscribe']);
Route::post('ajax/doCustomPackageMsg', [User::class,'doCustomPackageMsg']);

//Save Job By Creator
Route::post('/user/doSaveJob', [User::class, 'doSaveJob']);

//Apply Job By Creator
Route::post('/user/doApplyJob', [User::class, 'doApplyJob']);

Route::middleware(UserMiddleware::class)->group(function(){

    //packages
    Route::get('/packages', [Home::class,'packages']);
    Route::post('/validatePackage', [Home::class,'validatePackage']);
    Route::get('/checkout', [Home::class,'checkout']);
    Route::post('/user/doCheckout', [Home::class,'doCheckout']);

    //artist job
    Route::get('/user/post-job/{id}', [User::class,'postJob']);
    Route::post('/user/doPostJob', [User::class,'doPostJob']);
    Route::get('/user/edit-job/{id}', [User::class,'editJob']);
    Route::post('/user/doUpdateJob', [User::class,'doUpdateJob']);

    //user dashboard
    Route::get('/user/dashboard', [User::class,'dashboard']);
    Route::get('/user/my-profile', [User::class,'myProfile']);
    Route::post('/user/doUpdateProfile', [User::class,'doUpdateProfile']);
    Route::post('/user/doChangePassword', [User::class, 'doChangePassword']);
    Route::post('/user/doUpdatePaymentMethod', [User::class, 'doUpdatePaymentMethod']);
    Route::post('/user/doSendVideo', [User::class, 'doSendVideo']);
    Route::post('/user/doChangeCreationStatus', [User::class, 'doChangeCreationStatus']);
    Route::post('/user/doPaymentRequest', [User::class, 'doPaymentRequest']);

    //Thank you
    Route::get('/thank-you', [Home::class,'thankyou']);
    
});


/*Admin Ajax Route */

Route::get('/admin', [Auth::class,'index']);
Route::post('/admin/doLogin', [Auth::class,'doLogin']);

Route::get('/admin/two-factor', [Auth::class,'twoFactorAuth']);
Route::post('/admin/doTwoFactorAuth', [Auth::class,'doTwoFactorAuth']);

Route::post('/admin/resendTwoFactorPasscode', [Auth::class,'resendTwoFactorPasscode']);

Route::get('/admin/reset-password', [Auth::class,'resetPassword']);
Route::post('/admin/doResetPassword', [Auth::class,'doResetPassword']);

Route::get('/admin/new-password/{token}', [Auth::class,'newPassword']);
Route::post('/admin/doUpdateNewPassword', [Auth::class,'doUpdateNewPassword']);

Route::middleware(Admin::class)->group(function(){

    // Auth

    Route::get('/admin/dashboard', [Auth::class,'dashboard']);

    Route::get('/admin/account-settings', [Auth::class,'accountSettings']);
    Route::post('/admin/doUpdateProfile', [Auth::class,'doUpdateProfile']);

    Route::post('/admin/doUpdateTwoFactorAuth', [Auth::class, 'doUpdateTwoFactorAuth']);
    Route::post('/admin/doChangeEmail', [Auth::class, 'doChangeEmail']);
    Route::post('/admin/doChangePassword', [Auth::class, 'doChangePassword']);

    Route::get('/admin/logout', [Auth::class,'logout']);

    // Media

    Route::get('/admin/media', [Media::class,'index']);
    Route::post('/admin/media/doUpload', [Media::class,'doUpload']);
    Route::get('/admin/media/getMedia', [Media::class,'getMedia']);
    Route::post('/admin/media/doUpdateAlt', [Media::class,'doUpdateAlt']);
    Route::post('/admin/media/delete', [Media::class,'delete']);
    Route::post('/admin/media/bulkDelete', [Media::class,'bulkDelete']);

    //Settings
    Route::get('/admin/settings', [Settings::class,'index']);
    Route::post('/admin/settings/doUpdateSiteSettings', [Settings::class,'doUpdateSiteSettings']);
    Route::post('/admin/settings/doUpdateCustomCssJs', [Settings::class,'doUpdateCustomCssJs']);
    Route::post('/admin/settings/doUpdateSocialLinks', [Settings::class,'doUpdateSocialLinks']);
    Route::post('/admin/settings/doUpdateMailConfig', [Settings::class,'doUpdateMailConfig']);

    //category
    Route::get('/admin/category', [Category::class,'index']);
    Route::get('/admin/category/edit/{id}', [Category::class,'edit']);
    Route::get('/admin/category/add', [Category::class,'add']);
    Route::post('/admin/category/doAdd', [Category::class,'doAdd']);
    Route::post('/admin/category/doUpdate', [Category::class,'doUpdate']);
    Route::get('/admin/category/getCategory', [Category::class,'getCategory']);
    Route::post('/admin/category/delete', [Category::class,'delete']);
    Route::post('/admin/category/bulkDelete', [Category::class,'bulkDelete']);

    //badge
    Route::get('/admin/badge', [Badge::class,'index']);
    Route::get('/admin/badge/edit/{id}', [Badge::class,'edit']);
    Route::get('/admin/badge/add', [Badge::class,'add']);
    Route::post('/admin/badge/doAdd', [Badge::class,'doAdd']);
    Route::post('/admin/badge/doUpdate', [Badge::class,'doUpdate']);
    Route::get('/admin/badge/getbadge', [Badge::class,'getbadge']);
    Route::post('/admin/badge/delete', [Badge::class,'delete']);
    Route::post('/admin/badge/bulkDelete', [Badge::class,'bulkDelete']);

    //platform
    Route::get('/admin/platform', [Platform::class,'index']);
    Route::get('/admin/platform/add', [Platform::class,'add']);
    Route::get('/admin/platform/edit/{id}', [Platform::class,'edit']);
    Route::post('/admin/platform/doAdd', [Platform::class,'doAdd']);
    Route::post('/admin/platform/doUpdate', [Platform::class,'doUpdate']);
    Route::get('/admin/platform/get', [Platform::class,'get']);
    Route::post('/admin/platform/delete', [Platform::class,'delete']);
    Route::post('/admin/platform/bulkDelete', [Platform::class,'bulkDelete']);

    //Video Size
    Route::get('/admin/video-size', [Videosize::class,'index']);
    Route::get('/admin/video-size/add', [Videosize::class,'add']);
    Route::get('/admin/video-size/edit/{id}', [Videosize::class,'edit']);
    Route::post('/admin/video-size/doAdd', [Videosize::class,'doAdd']);
    Route::post('/admin/video-size/doUpdate', [Videosize::class,'doUpdate']);
    Route::get('/admin/video-size/get', [Videosize::class,'get']);
    Route::post('/admin/video-size/delete', [Videosize::class,'delete']);
    Route::post('/admin/video-size/bulkDelete', [Videosize::class,'bulkDelete']);

    //users
    Route::get('/admin/users', [Users::class,'index']);
    Route::get('/admin/users/get', [Users::class,'get']);
    Route::get('/admin/users/login/{id}', [Users::class,'login']);
    Route::get('/admin/users/add', [Users::class,'add']);
    Route::post('/admin/users/doAdd', [Users::class,'doAdd']);
    Route::get('/admin/users/edit/{id}', [Users::class,'edit']);
    Route::post('/admin/users/doUpdate', [Users::class,'doUpdate']);
    Route::post('/admin/users/delete', [Users::class,'delete']);
    Route::post('/admin/users/bulkDelete', [Users::class,'bulkDelete']);

    //genre
    Route::get('/admin/genre', [Genre::class,'index']);
    Route::get('/admin/genre/edit/{id}', [Genre::class,'edit']);
    Route::get('/admin/genre/add', [Genre::class,'add']);
    Route::post('/admin/genre/doAdd', [Genre::class,'doAdd']);
    Route::post('/admin/genre/doUpdate', [Genre::class,'doUpdate']);
    Route::get('/admin/genre/get', [Genre::class,'get']);
    Route::post('/admin/genre/delete', [Genre::class,'delete']);
    Route::post('/admin/genre/bulkDelete', [Genre::class,'bulkDelete']);

    //packages
    Route::get('/admin/packages', [Packages::class,'index']);
    Route::get('/admin/packages/get', [Packages::class,'get']);
    Route::get('/admin/packages/login/{id}', [Packages::class,'login']);
    Route::get('/admin/packages/add', [Packages::class,'add']);
    Route::post('/admin/packages/doAdd', [Packages::class,'doAdd']);
    Route::get('/admin/packages/edit/{id}', [Packages::class,'edit']);
    Route::post('/admin/packages/doUpdate', [Packages::class,'doUpdate']);
    Route::post('/admin/packages/delete', [Packages::class,'delete']);
    Route::post('/admin/packages/bulkDelete', [Packages::class,'bulkDelete']);

    //newsletter
    Route::get('/admin/newsletter', [Newsletter::class,'index']);
    Route::get('/admin/newsletter/get', [Newsletter::class,'get']);
    Route::post('/admin/newsletter/delete', [Newsletter::class,'delete']);
    Route::post('/admin/newsletter/bulkDelete', [Newsletter::class,'bulkDelete']);

    //custom package
    Route::get('/admin/package-enquiry', [PackageEnquiry::class,'index']);
    Route::get('/admin/package-enquiry/get', [PackageEnquiry::class,'get']);
    Route::get('/admin/package-enquiry/edit/{id}', [PackageEnquiry::class,'edit']);
    Route::post('/admin/package-enquiry/doUpdate', [PackageEnquiry::class,'doUpdate']);
    Route::post('/admin/package-enquiry/delete', [PackageEnquiry::class,'delete']);
    Route::post('/admin/package-enquiry/bulkDelete', [PackageEnquiry::class,'bulkDelete']);

    //Withdrawal Request
    Route::get('/admin/withdrawal-request', [WithdrawalRequest::class,'index']);
    Route::get('/admin/withdrawal-request/get', [WithdrawalRequest::class,'get']);
    Route::get('/admin/withdrawal-request/edit/{id}', [WithdrawalRequest::class,'edit']);
    Route::post('/admin/withdrawal-request/doUpdate', [WithdrawalRequest::class,'doUpdate']);
    Route::post('/admin/withdrawal-request/delete', [WithdrawalRequest::class,'delete']);
    Route::post('/admin/withdrawal-request/bulkDelete', [WithdrawalRequest::class,'bulkDelete']);
    
});

/*End Admin Ajax Route */