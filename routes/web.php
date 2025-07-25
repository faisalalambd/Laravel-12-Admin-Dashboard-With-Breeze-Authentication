<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    // Admin Profile
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

    // DataTable
    Route::get('/custom-table', [AdminController::class, 'CustomTable'])->name('custom.table');

    // Forms
    Route::get('/custom-form', [AdminController::class, 'CustomForm'])->name('custom.form');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/login/submit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/admin/forget/password', [AdminController::class, 'AdminForgetPassword'])->name('admin.forget.password');
Route::post('/admin/forget/password/submit', [AdminController::class, 'AdminForgetPasswordSubmit'])->name('admin.forget.password.submit');
Route::get('/admin/reset/password/{token}/{email}', [AdminController::class, 'AdminResetPassword']);
Route::post('/admin/forget/reset/submit', [AdminController::class, 'AdminResetPasswordSubmit'])->name('admin.reset.password.submit');
