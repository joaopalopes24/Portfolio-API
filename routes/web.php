<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHasPermissionController;
use App\Http\Controllers\Admin\HomeAdminController;
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
    'register' => false,
    'confirm' => false,
    'verification' => false
]);
/* Essa rotas serão redirecionadas para a HOME caso ele esteja logado */
Route::middleware('auth')->name('admin.')->group(function () {
    Route::name('home.')->group(function () {
        Route::get('/', [HomeAdminController::class, 'index'])->name('index');
        Route::get('profile', [HomeAdminController::class, 'profile'])->name('profile');
        Route::get('change-password', [HomeAdminController::class, 'changePassword'])->name('change_password');
        Route::post('change-password', [HomeAdminController::class, 'changePasswordDo'])->name('change_password_do');
    });

    Route::resource('log', LogController::class)->only(['index','show']);

    /* Route::resource('client', ClientController::class); */

    Route::resource('admin', AdminController::class);

    Route::resource('admin.permission', AdminHasPermissionController::class)->only(['index','store']);

    Route::resource('role', RoleController::class);

    Route::resource('role.permission', RoleHasPermissionController::class)->only(['index','store']);

    Route::resource('permission', PermissionController::class);
});
/* ---------- FIM - ADMINISTRADOR ---------- */