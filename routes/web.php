<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

use App\Http\Controllers\admin\Auth;
use App\Http\Controllers\admin\Media;
use App\Http\Controllers\admin\Settings;
use App\Http\Controllers\admin\Category;
use App\Http\Controllers\admin\Users;

// Frontend

use App\Http\Middleware\User as UserMiddleware;

use App\Http\Controllers\Home;
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


Route::get('/user/logout', [User::class,'logout']);
Route::get('/verify/{token}', [User::class,'doVerify']);
Route::get('/user/new-password/{token}', [User::class,'newPassword']);

Route::post('ajax/doSignUp', [User::class,'doSignUp']);
Route::post('ajax/doLogin', [User::class,'doLogin']);
Route::post('ajax/doForgotPassword', [User::class,'doForgotPassword']);
Route::post('ajax/doUpdateNewPassword', [User::class,'doUpdateNewPassword']);

Route::middleware(UserMiddleware::class)->group(function(){

    //user dashboard
    Route::get('/user/dashboard', [User::class,'dashboard']);
    
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

    //users
    Route::get('/admin/users', [Users::class,'index']);
    Route::get('/admin/users/get', [Users::class,'get']);
    Route::get('/admin/users/login/{id}', [Users::class,'login']);
    Route::get('/admin/users/add', [Users::class,'add']);

    // Route::get('/admin/category/edit/{id}', [Category::class,'edit']);
    // Route::post('/admin/category/doAdd', [Category::class,'doAdd']);
    // Route::post('/admin/category/doUpdate', [Category::class,'doUpdate']);
    // Route::post('/admin/category/delete', [Category::class,'delete']);
    // Route::post('/admin/category/bulkDelete', [Category::class,'bulkDelete']);
    
});

/*End Admin Ajax Route */