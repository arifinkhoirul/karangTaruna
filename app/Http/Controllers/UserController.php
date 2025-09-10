<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CashBook;
use App\Models\Documentation;
use App\Models\Event;
use App\Models\MainImage;
use App\Models\Member;
use App\Models\PengeluaranKas;
use App\Models\Teenager;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function homepage() {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $mainImages = MainImage::all();
        return view('users.homepage_user', compact('blogs', 'mainImages'));
    }



    // pengurus-----------------------------------------------
    public function pengurus() {
        $members = Member::all();

        return view('users.pengurus', compact('members'));
    }

    public function showPengurus(int $id) {
        $member = Member::find($id);

        return view('users.pengurus-show', compact('member'));
    }
    // ------------------------------------------------------------


    // blog-----------------------------------------------------------
    public function blog() {
        $blogs = Blog::take(9)->get();

        return view('users.blog', compact('blogs'));
    }

    public function showBlog(int $id) {
        $blog = Blog::find($id);

        return view('users.blog-show',compact('blog'));
    }
    // -----------------------------------------------------------------



    // event----------------------------------------------------------
    public function event() {
        $events = Event::all();

        return view('users.event', compact('events'));
    }

    public function showEvent(int $id) {
        $event = Event::find($id);

        return view('users.event-show', compact('event'));
    }

    // ---------------------------------------------------------------



    // documentations----------------------------------------------------
    public function documentations() {
        $documentations = Documentation::all();

        return view('users.documentation', compact('documentations'));
    }

    public function showDocumentations(int $id) {
        $documentation = Documentation::find($id);

        return view('users.documentation-show', compact('documentation'));
    }
    // --------------------------------------------------------------------


    public function dataRemaja() {
        $teenagers = Teenager::all();

        return view('users.data_remaja', compact('teenagers'));
    }


    public function dataUangKas() {
        $pemasukanKas = CashBook::all();
        $pengeluaranKas = PengeluaranKas::all();

        $totalPemasukan = CashBook::sum('jumlah');
        $totalPengeluaran = PengeluaranKas::sum('jumlah');

        $sisaSaldo = $totalPemasukan - $totalPengeluaran;

        return view('users.data_uang_kas', compact('pemasukanKas', 'pengeluaranKas', 'totalPemasukan', 'totalPengeluaran', 'sisaSaldo'));
    }
}
