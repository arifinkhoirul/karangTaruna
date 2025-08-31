<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




// ------------------ADMIN----------------------------------------------------------------
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboad.index');
Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog.index');
Route::post('/admin/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/admin/blog/upadate/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
