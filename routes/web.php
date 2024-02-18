<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserNotificationsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/change-password',  [UserProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/notifications/update', [ProfileController::class, 'updateNotifications'])->name('profile.notifications.update');
});

## Admin group routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'auth.isAdmin'])
->group(function(){
    Route::resource('/users', UserController::class);
    Route::resource('/notifications', UserNotificationsController::class);
});


require __DIR__.'/auth.php';
require __DIR__.'/admin_template.php';
