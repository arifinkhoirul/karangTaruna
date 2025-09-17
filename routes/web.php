<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CashBookController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MainImageController;
use App\Http\Controllers\MemberControlller;
use App\Http\Controllers\PengeluaranKasController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TeenagerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// ----------------------------USER---------------------------------------------------------------------


    Route::get('/', [UserController::class, 'homepage'])->name('user.homepage');



    Route::get('/pengurus', [UserController::class, 'pengurus'])->name('user.pengurus');
    Route::get('/pengurus/show/{id}', [UserController::class, 'showPengurus'])->name('user.pengurus.show');



    Route::get('/blogs', [UserController::class, 'blog'])->name('user.blog');
    Route::get('/blogs/show/{id}', [UserController::class, 'showBlog'])->name('user.blog.show');



    Route::get('/events', [UserController::class, 'event'])->name('user.event');
    Route::get('/events/show/{id}', [UserController::class, 'showEvent'])->name('user.event.show');



    Route::get('/documentations', [UserController::class, 'documentations'])->name('user.documentation');
    Route::get('/documentations/show/{id}', [UserController::class, 'showDocumentations'])->name('user.documentation.show');



Route::middleware(['auth', 'verified', 'role:USR,ketua,dokumentasi,sekre,bendahara'])->group(function() {

    Route::get('/profile-user', [UserController::class, 'index'])->name('user.profile.index');
    Route::post('/profile-user/image/{id}', [UserController::class, 'store'])->name('user.profile.store');
    Route::put('/profile-user/update/{id}', [UserController::class, 'update'])->name('user.profile.update');


    Route::get('/data-remaja', [UserController::class, 'dataRemaja'])->name('user.data-remaja');


    Route::get('/data-uang-kas', [UserController::class, 'dataUangKas'])->name('user.data-uang-kas');
});

















// ------------------------------------------------------------------------------------------------------





// ------------------ADMIN----------------------------------------------------------------

Route::middleware(['auth', 'verified'])->group(function() {

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboad.index')->middleware('role:sekre,ketua,dokumentasi,bendahara');


    Route::middleware('role:sekre,ketua')->group(function() {

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


        Route::get('admin/main-images', [MainImageController::class, 'index'])->name('admin.main-image.index');
        Route::post('admin/main-images', [MainImageController::class, 'store'])->name('admin.main-image.store');
        Route::get('admin/main-images/edit/{id}', [MainImageController::class, 'edit'])->name('admin.main-images.edit');
        Route::put('admin/main-images/update/{id}', [MainImageController::class, 'update'])->name('admin.main-images.update');
        Route::delete('admin/main-images/delete/{id}', [MainImageController::class, 'destroy'])->name('admin.main-images.destroy');


        Route::get('admin/social-media', [SocialMediaController::class, 'index'])->name('admin.social-media.index');
        Route::post('admin/social-media', [SocialMediaController::class, 'store'])->name('admin.social-media.store');
        Route::get('admin/social-media/edit/{id}', [SocialMediaController::class, 'edit'])->name('admin.social-media.edit');
        Route::put('admin/social-media/update/{id}', [SocialMediaController::class, 'update'])->name('admin.social-media.update');
        Route::delete('admin/social-media/delete/{id}', [SocialMediaController::class, 'destroy'])->name('admin.social-media.destroy');


        Route::get('admin/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio.index');
        Route::post('admin/portfolio', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
        Route::get('admin/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
        Route::put('admin/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
        Route::delete('admin/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.destroy');
        Route::put('admin/portfolio/delete/gambar/{id}', [PortfolioController::class, 'deleteImage'])->name('admin.portfolio.deleteImage');


        Route::get('admin/sponsor', [SponsorController::class, 'index'])->name('admin.sponsor.index');
        Route::post('admin/sponsor', [SponsorController::class, 'store'])->name('admin.sponsor.store');
        Route::get('admin/sponsor/edit/{id}', [SponsorController::class, 'edit'])->name('admin.sponsor.edit');
        Route::put('admin/sponsor/update/{id}', [SponsorController::class, 'update'])->name('admin.sponsor.update');
        Route::delete('admin/sponsor/delete/{id}', [SponsorController::class, 'destroy'])->name('admin.sponsor.destroy');
    });



    Route::middleware('role:bendahara,ketua')->group(function() {

        Route::get('admin/pemasukan-kas', [CashBookController::class, 'index'])->name('admin.pemasukan-kas.index');
        Route::post('admin/pemasukan-kas', [CashBookController::class, 'store'])->name('admin.pemasukan-kas.store');
        Route::get('admin/pemasukan-kas/edit/{id}', [CashBookController::class, 'edit'])->name('admin.pemasukan-kas.edit');
        Route::put('admin/pemasukan-kas/update/{id}', [CashBookController::class, 'update'])->name('admin.pemasukan-kas.update');
        Route::delete('/admin/pemasukan-kas/delete/{id}', [CashBookController::class, 'destroy'])->name('admin.pemasukan-kas.destroy');



        Route::get('admin/pengeluaran-kas', [PengeluaranKasController::class, 'index'])->name('admin.pengeluaran-kas.index');
        Route::post('admin/pengeluaran-kas', [PengeluaranKasController::class, 'store'])->name('admin.pengeluaran-kas.store');
        Route::get('admin/pengeluaran-kas/edit/{id}', [PengeluaranKasController::class, 'edit'])->name('admin.pengeluaran-kas.edit');
        Route::put('admin/pengeluaran-kas/update/{id}', [PengeluaranKasController::class, 'update'])->name('admin.pengeluaran-kas.update');
        Route::delete('admin/pengeluaran-kas/delete/{id}', [PengeluaranKasController::class, 'destroy'])->name('admin.pengeluaran-kas.destroy');
    });




    Route::middleware('role:dokumentasi,ketua')->group(function() {

        Route::get('admin/documentation', [DocumentationController::class, 'index'])->name('admin.documentation.index');
        Route::post('admin/documentation', [DocumentationController::class, 'store'])->name('admin.documentation.store');
        Route::get('admin/documentation/edit/{id}', [DocumentationController::class, 'edit'])->name('admin.documentation.edit');
        Route::put('admin/documentation/update/{id}', [DocumentationController::class, 'update'])->name('admin.documentation.update');
        Route::delete('admin/documentation/delete/{id}', [DocumentationController::class, 'destroy'])->name('admin.documentation.destroy');

    });




});





// ----------------------------------------------------------------------------------------------------------------------------------------




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
