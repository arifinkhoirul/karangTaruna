<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CashBook;
use App\Models\Documentation;
use App\Models\Event;
use App\Models\MainImage;
use App\Models\Member;
use App\Models\PengeluaranKas;
use App\Models\Portfolio;
use App\Models\SocialMedias;
use App\Models\Sponsor;
use App\Models\Teenager;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function homepage() {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $mainImages = MainImage::all();
        $sponsors = Sponsor::where('status', 'aktif')->get();

        return view('users.homepage_user', compact('blogs', 'mainImages', 'sponsors'));
    }



    // pengurus-----------------------------------------------
    public function pengurus() {
        $members = Member::all();
        $socialMedias = SocialMedias::all();

        return view('users.pengurus', compact('members', 'socialMedias'));
    }



    public function showPengurus(int $id) {
        $member = Member::find($id);
        $socialMedia = SocialMedias::where('member_id', $member->id)->first();
        $portfolios = Portfolio::where('member_id', $member->id)->get();

        // dd($portfolios);

        return view('users.pengurus-show', compact('member', 'socialMedia', 'portfolios'));
    }
    // ------------------------------------------------------------


    // blog-----------------------------------------------------------
    public function blog() {
        // $blogs = Blog::take(6)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);

        return view('users.blog', compact('blogs'));
    }

    public function showBlog(int $id) {
        $blog = Blog::find($id);
        $blogRekomendasi = Blog::orderBy('created_at', 'desc')->take(3)->get();


        return view('users.blog-show',compact('blog', 'blogRekomendasi'));
    }
    // -----------------------------------------------------------------



    // event----------------------------------------------------------
    public function event(Request $request) {
        $events = Event::orderBy('created_at', 'desc')->paginate(3);


        return view('users.event', compact('events'));
    }



    public function showEvent(int $id) {
        $event = Event::find($id);
        $eventRekomendasi = Event::orderBy('created_at', 'desc')->take(3)->get();

        return view('users.event-show', compact('event', 'eventRekomendasi'));
    }

    // ---------------------------------------------------------------



    // documentations----------------------------------------------------
    public function documentations() {
        $documentations = Documentation::orderBy('created_at', 'desc')->paginate(3);

        return view('users.documentation', compact('documentations'));
    }

    public function showDocumentations(int $id) {
        $documentation = Documentation::find($id);

        return view('users.documentation-show', compact('documentation'));
    }
    // --------------------------------------------------------------------


    public function dataRemaja() {
        $teenagers = Teenager::all();

        $totalDataRemaja = Teenager::count();
        // dd($totalDataRemaja);
        return view('users.data_remaja', compact('teenagers', 'totalDataRemaja'));
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
