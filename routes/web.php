<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

use App\Http\Controllers\admin\Auth;
use App\Http\Controllers\admin\Media;
use App\Http\Controllers\admin\Settings;


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

Route::get('/', function () {
    return view('welcome');
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
    
});

/*End Admin Ajax Route */