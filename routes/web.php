<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontendPagesController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\AllfoodController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Dashboard\FoodmenuController;
use App\Http\Controllers\Dashboard\LocationController;
use App\Http\Controllers\Dashboard\ReservationController;
use App\Http\Controllers\Dashboard\FoodcategoryController;
use App\Http\Controllers\Admin\AdminForgotPasswordController;
use App\Http\Controllers\ReservationMessageConfirmController;
use App\Http\Controllers\ReservationMessageController;

//  Admin Pages
Route::group([ 'middleware' => 'admin.redirect' ], function(){
    Route::get('/admin-login', [ AdminPagesController::class, 'ShowLoginPage' ]) ->name('login.page');
    Route::post('/admin-login', [ AdminAuthController::class, 'Login' ]) ->name('admin.login');

    // Admin Forgot Password
    Route::get('/forgot-password', [ AdminForgotPasswordController::class, 'ShowForgotPassword' ] ) -> name('forgot.password.page');
    Route::post('/forgot-password', [ AdminForgotPasswordController::class, 'ForgotPassword' ] ) -> name('forgot.password');
    Route::get('/reset-password/{token?}/{email?}', [ AdminForgotPasswordController::class, 'ResetPasswordLink' ] ) -> name('reset.password');
    Route::post('/reset-password', [ AdminForgotPasswordController::class, 'ResetPassword' ] ) -> name('reset.password');

});



//  Admin Auth
Route::group([ 'middleware' => 'admin' ], function(){    

    Route::get('/dashboard', [ AdminPagesController::class, 'ShowDashboard' ]) ->name('admin.dashboard');
    Route::get('/admin-profile', [ AdminProfileController::class, 'ShowAdminProfile' ]) ->name('admin.profile');
    Route::post('/admin-profile', [ AdminProfileController::class, 'AdminProfileChange' ]) ->name('admin.profile.change');
    Route::post('/admin-password', [ AdminProfileController::class, 'AdminPasswordChange' ]) ->name('admin.password.change');
    Route::get('/admin-logout', [ AdminAuthController::class, 'logout' ]) ->name('admin.logout');
    // Permission  Routes
    Route::resource('/permission', PermissionController::class );    
    //  Roll Routes
    Route::resource('/role', RoleController::class );
    //  Admin Routes
    Route::resource('/admin-user', AdminController::class );
    // Status & Trash Route
    Route::get('/admin-status/{id}', [ AdminController::class, 'StatusUpdate' ] ) -> name('admin.status');
    Route::get('/admin-trash', [ AdminController::class, 'TrashUsers' ] ) -> name('admin.trash');
    Route::get('/admin-trash-update/{id}', [ AdminController::class, 'TrashUpdate' ] ) -> name('admin.trash.update');

    //  Slider Routes
    Route::resource('/slider', SliderController::class );
    //  Food Menu Routes
    Route::resource('/food-menu', FoodmenuController::class );
    //  All-Foods Routes
    Route::resource('/all-food', AllfoodController::class );
    //  Foods Category Routes
    Route::resource('/food-category', FoodcategoryController::class );
    //  Foods Location Routes
    Route::resource('/food-location', LocationController::class );
    //  Foods Reservation Routes
    // Route::resource('/food-reservation', ReservationController::class );

    Route::get('/revervation-dashboard', [ ReservationMessageController::class, 'ShowReservationDashboard' ]) ->name('reservation.dashboard');
    Route::post('/revervation-store', [ ReservationMessageController::class, 'store' ]) ->name('reservation.store');

    Route::get('/reserve-update/{id}', [ReservationMessageController::class, 'updateToReserved'])->name('reserve.update');
    Route::get('/cancel-update/{id}', [ReservationMessageController::class, 'updateToCancel'])->name('cancel.update');
    Route::get('/reservation-delete{id}', [ReservationMessageController::class, 'destroy'])->name('reservation.delete');



    
});


// Frontend Routes
Route::get('/', [ FrontendPagesController::class, 'ShowFrontendHomePage' ] ) -> name('home.page');
Route::get('/menu', [ FrontendPagesController::class, 'ShowFrontendMenuPage' ] ) -> name('menu.page');
Route::get('/location', [ FrontendPagesController::class, 'ShowFrontendLocationPage' ] ) -> name('location.page');
Route::get('/reservation', [ FrontendPagesController::class, 'ShowFrontendReservationPage' ] ) -> name('reservation.page');





