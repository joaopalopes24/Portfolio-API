<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHasPermissionController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RoleHasPermissionController;
use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
/* ---------- ADMINISTRADOR ---------- */
/* Rotas de Login do Administrador */
Auth::routes([
    'confirm' => false,
    'verification' => false
]);

/* Rotas Socialite - Essa rotas serão redirecionadas para a HOME caso ele esteja logado */
Route::middleware('guest')->prefix('login')->group(function () {
    Route::get('/{provider}/redirect', [SocialiteController::class, 'redirectToProvider'])->name('oauth');
    Route::get('/{provider}/callback', [SocialiteController::class, 'handleProviderCallback'])->name('oauth.callback');
});

/* Essa rotas serão redirecionadas para o LOGIN caso ele não esteja logado */
Route::middleware('auth')->name('admin.')->group(function () {
    Route::name('home.')->group(function () {
        Route::get('/', [HomeAdminController::class, 'index'])->name('index');
        Route::get('profile', [HomeAdminController::class, 'profile'])->name('profile');
        Route::post('profile', [HomeAdminController::class, 'profileDo'])->name('profile_do');
        Route::get('change-password', [HomeAdminController::class, 'changePassword'])->name('change_password');
        Route::post('change-password', [HomeAdminController::class, 'changePasswordDo'])->name('change_password_do');
    });

    Route::resource('log', LogController::class)->only(['index','show']);

    Route::resource('patient', PatientController::class);

    Route::resource('admin', AdminController::class);

    Route::resource('admin.permission', AdminHasPermissionController::class)->only(['index','store']);

    Route::resource('role', RoleController::class);

    Route::resource('role.permission', RoleHasPermissionController::class)->only(['index','store']);

    Route::resource('permission', PermissionController::class);
});
/* ---------- FIM - ADMINISTRADOR ---------- */