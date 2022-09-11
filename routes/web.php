<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;
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
Route::get('/login', [Controller\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/login', [Controller\Auth\LoginController::class, 'login'])->name('auth.login.account');
Route::get('/logout', [Controller\Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::get('/reset-password/{token}', [Controller\Auth\ResetPasswordController::class, 'resetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [Controller\Auth\ResetPasswordController::class,'updatePassword'])->name('auth.update-password');
Route::get('/admin', [Controller\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/events', [Controller\Event\EventController::class, 'eriggaEvents'])->name('eriggalive.event');
Route::post('/admin/event/create', [Controller\Event\EventController::class, 'createErrigaEvent'])->name('event.create');

Route::get('/shop', [Controller\Shop\ShopController::class, 'items'])->name('eriggalive.shop');
Route::get('/settings/profile', [Controller\Settings\SettingsController::class, 'profileSettings'])->name('settings.profile');
Route::get('/events/{eventId}', [Controller\HomeController::class, 'eventTicket'])->name('event.ticket');

Route::get('/', [App\Http\Controllers\HomeController::class, 'errigaLiveHome'])->name('home');
