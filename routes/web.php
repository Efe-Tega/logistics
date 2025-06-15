<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeNavigateController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tracking\TrackingController;
use App\Http\Controllers\Tracking\TrackingDetailsController;
use Illuminate\Support\Facades\Route;

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

// Frontend Routes
Route::controller(HomeNavigateController::class)->group(function () {
    Route::get('/', 'Home')->name('home');
    Route::get('/about', 'About')->name('about');
    Route::get('/service', 'Service')->name('service');
    Route::get('/contact', 'Contact')->name('contact');
    Route::get('/track', 'Track')->name('track');
});




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Profile Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/profile/page', 'ProfilePage')->name('page.profile');
    Route::post('/update/profile', 'UpdateProfile')->name('update.profile');
    Route::get('/password/page', 'PasswordPage')->name('password.page');
    Route::post('/change/password', 'ChangePassword')->name('change.password');
    Route::get('/page/logout', 'Destroy')->name('page.logout');

    // Route::get('/admin/login', 'AdminLogin')->name('admin.login');
});

// Admin Tracking Routes

Route::middleware('auth')->group(function () {
    Route::controller(TrackingController::class)->group(function () {
        Route::get('/create/shipment', 'CreateShipment')->name('create.shipment');
        Route::get('/all/shipment', 'AllShipment')->name('all.shipment');
        Route::get('/edit/shipment/{id}', 'EditShipment')->name('edit.shipment');
        Route::get('/delete/shipment/{id}', 'DeleteShipment')->name('delete.shipment');
        Route::get('/edit/status', 'EditStatus')->name('edit.status');
        Route::get('/new/status/{id}', 'NewShipmentStatus')->name('new.status');
        Route::get('/travel/history', 'TravelHistory')->name('travel.history');
        Route::get('/edit/history/{travel_history_id}', 'EditHistory')->name('edit.history');
        Route::get('/delete/history/{id}', 'DeleteHistory')->name('delete.history');
        Route::get('/add/history/{id}', 'AddHistory')->name('add.history');

        Route::post('/store/shipment', 'StoreShipment')->name('store.shipment');
        Route::post('/update/shipment', 'UpdateShipment')->name('update.shipment');
        Route::post('/update/status', 'UpdateStatus')->name('update.status');
        // Route::post('/find/shipment', 'FindShipment')->name('find.shipment');
        Route::post('/update/history', 'UpdateHistory')->name('update.history');
        Route::post('/insert/history', 'insertHistory')->name('insert.history');
    });

    Route::controller(InvoiceController::class)->group(function () {
        Route::get('/generate/invoice', 'generateInvoice')->name('generate.invoice');
        Route::get('/edit/invoice/{id}', 'editInvoice')->name('edit.invoice');
        Route::get('/delete/invoice/{id}', 'deleteInvoice')->name('delete.invoice');

        Route::post('/add/invoice', 'addInvoice')->name('add.invoice');
        Route::post('/update/invoice', 'updateInvoice')->name('update.invoice');
    });
});

Route::controller(TrackingDetailsController::class)->group(function () {
    // Route::get('/tracking/info', 'TrackingInfo')->name('tracking.info');
    Route::get('/invoice/{id}', 'Invoice')->name('invoice');

    Route::post('/tracking/details', 'TrackShipment')->name('track.shipment');
});

Route::get('download-pdf', [InvoiceController::class, 'downloadPDF']);

require __DIR__ . '/auth.php';
