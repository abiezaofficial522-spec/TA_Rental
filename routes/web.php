<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
});

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::view('/profile/jule', 'jule')->name('profile.jule');
Route::view('/lucinta', 'identitas.lucinta')->name('lucinta');
Route::view('/cecep', 'identitas.cecep')->name('cecep');

// Protected admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'showDashboard'])->name('admin.dashboard');
});

// Route for Jule page
Route::get('/jule', function () {
    return view('identitas.jule');
})->name('jule');

// Route for Order page
Route::get('/order/{pacar_id}', [App\Http\Controllers\OrderController::class, 'showOrderForm'])->name('order');

// Route for storing order
Route::post('/order', [App\Http\Controllers\OrderController::class, 'storeOrder'])->name('order.store');

// Route for updating order
Route::put('/order/{id}', [App\Http\Controllers\OrderController::class, 'updateOrder'])->name('order.update');

// Route for getting order data for edit
Route::get('/admin/dashboard/edit/{id}', [App\Http\Controllers\AuthController::class, 'getOrder'])->name('admin.order.edit');

// Route for deleting order
Route::delete('/order/{id}', [App\Http\Controllers\OrderController::class, 'deleteOrder'])->name('order.delete');

// Route for Cecep page
Route::get('/cecep', function () {
    return view('identitas.cecep');
})->name('cecep');

// --- TEMPORARY ROUTE (HAPUS NANTI) ---
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::get('/buat-admin-darurat', function () {
    try {
        // Cek apakah user sudah ada biar tidak error duplikat
        if (User::where('email', 'admin@admin.com')->exists()) {
            return 'User admin sudah ada! Silakan login.';
        }

        // Buat User Baru
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Passwordnya: password
        ]);

        return 'Sukses! Admin berhasil dibuat. Email: admin@admin.com | Pass: password';
    } catch (\Exception $e) {
        return 'Gagal: ' . $e->getMessage();
    }
});