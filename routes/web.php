<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;
// use Illuminate\Support\Facades\Auth;
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
Route::get('/secure/account', [Controller\AccountController::class, 'secureAccount'])->name('account.secure');
Route::get('/account/signup', [Controller\Auth\RegisterController::class, 'account'])->name('auth.signup');
Route::post('/account/create', [Controller\Auth\RegisterController::class, 'signupAccount'])->name('auth.account.signup');
Route::get('/reset-password/{token}', [Controller\Auth\ResetPasswordController::class, 'resetPassword'])->name('auth.reset-password');
Route::get('/forgot-password', [Controller\Auth\ForgotPasswordController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::post('/reset-password', [Controller\Auth\ResetPasswordController::class,'updatePassword'])->name('auth.update-password');
Route::get('/admin', [Controller\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/events', [Controller\Event\EventController::class, 'eriggaEvents'])->name('eriggalive.event');
Route::post('/admin/event/create', [Controller\Event\EventController::class, 'createErrigaEvent'])->name('event.create');
Route::post('/admin/event/update', [Controller\Event\EventController::class, 'updateEvent'])->name('event.update');
Route::post('/admin/event/delete', [Controller\Event\EventController::class, 'deleteEvent'])->name('event.delete');
Route::post('/event/update-thumbnail', [Controller\Event\EventController::class, 'changeThumbnail'])->name('event.thumbnail.change');
Route::get('/shop', [Controller\Shop\ShopController::class, 'items'])->name('eriggalive.shop');
Route::get('/settings/profile', [Controller\Settings\SettingsController::class, 'profileSettings'])->name('settings.profile');
Route::get('/events/ticket/view/{eventId}', [Controller\HomeController::class, 'eventTicket'])->name('event.ticket');
Route::get('/events/tickets', [Controller\HomeController::class, 'tickets'])->name('event.tickets');
Route::get('/ticket/payment', [Controller\HomeController::class, 'ticket'])->name('ticket');
Route::get('/ticket/payment/initialize', [Controller\Payments\PayementController::class, 'initializePaystackPayment'])->name('ticket.payment');
Route::get('/payment/callback', [Controller\Payments\PayementController::class, 'paystackCallbackURL'])->name('ticket.callback');

Route::get('/', [App\Http\Controllers\HomeController::class, 'errigaLiveHome'])->name('home');

// Auth::routes(['verify' => true]);
