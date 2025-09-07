<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CashBookController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberControlller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeenagerController;
use App\Http\Controllers\UserController;
use App\Models\CashBook;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// ----------------------------USER---------------------------------------------------------------------

Route::get('/', [UserController::class, 'homepage'])->name('user.homepage');

Route::get('/pengurus', [UserController::class, 'pengurus'])->name('user.pengurus');

Route::get('/blogs', [UserController::class, 'blog'])->name('user.blog');

Route::get('/events', [UserController::class, 'event'])->name('user.event');

Route::get('/documentations', [UserController::class, 'documentations'])->name('user.documentation');

Route::get('/data-remaja', [UserController::class, 'dataRemaja'])->name('user.data-remaja');

Route::get('/data-uang-kas', [UserController::class, 'dataUangKas'])->name('user.data-uang-kas');















// ------------------------------------------------------------------------------------------------------





// ------------------ADMIN----------------------------------------------------------------
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboad.index');


Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog.index');
Route::post('/admin/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/admin/blog/upadate/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');


Route::get('/admin/event', [EventController::class, 'index'])->name('admin.event.index');
Route::post('/admin/event', [EventController::class, 'store'])->name('admin.event.store');
Route::get('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');
Route::put('/admin/event/update/{id}', [EventController::class, 'update'])->name('admin.event.update');
Route::delete('/admin/event/delete/{id}', [EventController::class, 'destroy'])->name('admin.event.delete');


Route::get('/admin/data-remaja', [TeenagerController::class, 'index'])->name('admin.data-remaja.index');
Route::post('/admin/data-remaja', [TeenagerController::class, 'store'])->name('admin.data-remaja.store');
Route::get('/admin/data-remaja/edit/{id}', [TeenagerController::class, 'edit'])->name('admin.data-remaja.edit');
Route::put('/admin/data-remaja/update/{id}', [TeenagerController::class, 'update'])->name('admin.data-remaja.update');
Route::delete('/admin/data-remaja/delete/{id}', [TeenagerController::class, 'destroy'])->name('admin.data-remaja.destroy');



Route::get('/admin/member', [MemberControlller::class, 'index'])->name('admin.member.index');
Route::post('/admin/member', [MemberControlller::class, 'store'])->name('admin.member.store');
Route::get('/admin/member/edit/{id}', [MemberControlller::class, 'edit'])->name('admin.member.edit');
Route::put('/admin/member/update/{id}', [MemberControlller::class, 'update'])->name('admin.member.update');
Route::delete('/admin/member/delete/{id}', [MemberControlller::class, 'destroy'])->name('admin.member.destroy');



Route::get('admin/pemasukan-kas', [CashBookController::class, 'index'])->name('admin.pemasukan-kas.index');
Route::post('admin/pemasukan-kas', [CashBookController::class, 'store'])->name('admin.pemasukan-kas.store');
Route::get('admin/pemasukan-kas/edit/{id}', [CashBookController::class, 'edit'])->name('admin.pemasukan-kas.edit');
Route::put('admin/pemasukan-kas/update/{id}', [CashBookController::class, 'update'])->name('admin.pemasukan-kas.update');
Route::delete('/admin/pemasukan-kas/delete/{id}', [CashBookController::class, 'destroy'])->name('admin.pemasukan-kas.destroy');

// ----------------------------------------------------------------------------------------------------------------------------------------




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
