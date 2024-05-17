<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Admin Account routes
Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home') ->middleware(['isAdmin','auth']);


// user account routes
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home')->middleware('auth');

Route::get('/page', [HomeController::class, 'page'])->name('page');


//Appointment
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointment.index')->middleware('auth');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create')->middleware('auth');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store')->middleware('auth');
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show')->middleware('auth');
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit')->middleware('auth');
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update')->middleware('auth');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy')->middleware('auth');

//Services
Route::get('/services', [ServicesController::class, 'index'])->name('services.index')->middleware('auth');
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create')->middleware('auth');
Route::post('/services', [ServicesController::class, 'store'])->name('services.store')->middleware('auth');
Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit')->middleware('auth');
Route::put('/services/{id}', [ServicesController::class, 'update'])->name('services.update')->middleware('auth');
Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('services.destroy')->middleware('auth');


//Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index')->middleware('auth');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create')->middleware('auth');
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store')->middleware('auth');
Route::delete('/gallery/{photo}', [GalleryController::class, 'destroy'])->name('gallery.destroy')->middleware('auth');

//User Profile
Route::get('/profile', [App\Http\Controllers\User\HomeController::class,  'profile'])->name('profile')->middleware('auth');
Route::post('/profile/update-picture', [App\Http\Controllers\User\HomeController::class,  'updateProfilePicture'])->name('updateProfilePicture')->middleware('auth');
Route::post('/profile/updateUser', [App\Http\Controllers\User\HomeController::class,  'update'])->name('updateUser')->middleware('auth');

//payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index')->middleware('auth');
Route::post('/payment/add-to-bill/{service}', [PaymentController::class, 'addToBill'])->name('payment.add_to_bill')->middleware('auth');
Route::delete('/payment/remove-from-bill/{paymentBill}', [PaymentController::class, 'removeFromBill'])->name('payment.remove_from_bill')->middleware('auth');
Route::post('/payment/submit', [PaymentController::class, 'submitPayment'])->name('payment.submit');

//Contacts Report
Route::post('/report', [ReportController::class, 'store'])->name('reports.store')->middleware('auth');
Route::get('/reportindex', [ReportController::class, 'index'])->name('reports.index')->middleware('auth');
Route::get('/reportget', [ReportController::class, 'get'])->name('reports.get')->middleware('auth');
