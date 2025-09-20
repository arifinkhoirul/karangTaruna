<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CashBook;
use App\Models\Documentation;
use App\Models\Event;
use App\Models\MainImage;
use App\Models\Member;
use App\Models\PemasukanEksternal;
use App\Models\PengeluaranKas;
use App\Models\Portfolio;
use App\Models\SocialMedias;
use App\Models\Sponsor;
use App\Models\Teenager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function homepage()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $mainImages = MainImage::take(20)->get();
        $sponsors = Sponsor::where('status', 'aktif')->get();

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.homepage_user', compact('blogs', 'mainImages', 'sponsors', 'user'));
    }

    // pengurus-----------------------------------------------
    public function pengurus()
    {
        $members = Member::take(20)->get();
        $socialMedias = SocialMedias::take(20)->get();

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.pengurus', compact('members', 'socialMedias', 'user'));
    }

    public function showPengurus(int $id)
    {
        $member = Member::find($id);
        $socialMedia = SocialMedias::where('member_id', $member->id)->first();
        $portfolios = Portfolio::where('member_id', $member->id)->get();

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        // dd($portfolios);

        return view('users.pengurus-show', compact('member', 'socialMedia', 'portfolios', 'user'));
    }
    // ------------------------------------------------------------

    // blog-----------------------------------------------------------
    public function blog()
    {
        // $blogs = Blog::take(6)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.blog', compact('blogs', 'user'));
    }

    public function showBlog(int $id)
    {
        $blog = Blog::find($id);
        $blogRekomendasi = Blog::orderBy('created_at', 'desc')->take(3)->get();

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.blog-show', compact('blog', 'blogRekomendasi', 'user'));
    }
    // -----------------------------------------------------------------

    // event----------------------------------------------------------
    public function event(Request $request)
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(3);

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.event', compact('events', 'user'));
    }

    public function showEvent(int $id)
    {
        $event = Event::find($id);
        $eventRekomendasi = Event::orderBy('created_at', 'desc')->take(3)->get();

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.event-show', compact('event', 'eventRekomendasi', 'user'));
    }

    // ---------------------------------------------------------------

    // documentations----------------------------------------------------
    public function documentations()
    {
        $documentations = Documentation::orderBy('created_at', 'desc')->paginate(3);

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.documentation', compact('documentations', 'user'));
    }

    public function showDocumentations(int $id)
    {
        $documentation = Documentation::find($id);

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.documentation-show', compact('documentation', 'user'));
    }
    // --------------------------------------------------------------------

    public function dataRemaja()
    {
        $teenagers = Teenager::take(20)->get();

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        $totalDataRemaja = Teenager::count();
        // dd($totalDataRemaja);
        return view('users.data_remaja', compact('teenagers', 'totalDataRemaja', 'user'));
    }

    public function dataUangKas(Request $request)
    {
        // $pemasukanKas = CashBook::take(20)->get();
        // $pengeluaranKas = PengeluaranKas::take(20)->get();

        // $totalPemasukan = CashBook::sum('jumlah');
        // $totalPengeluaran = PengeluaranKas::sum('jumlah');

        // $sisaSaldo = $totalPemasukan - $totalPengeluaran;

        // if (Auth::check()) {
        //     // User sudah login
        //     $user = Auth::user();
        //     // atau session('employee_id') dsb
        // } else {
        //     // Belum login
        //     $user = null;
        // }

        // return view('users.data_uang_kas', compact('pemasukanKas', 'pengeluaranKas', 'totalPemasukan', 'totalPengeluaran', 'sisaSaldo', 'user'));

        //chat gpt
        // Ambil query string bulan & tahun
        $bulan = $request->query('bulan');
        $tahun = $request->query('tahun');

        // Query dasar pemasukan
        $pemasukanQuery = CashBook::query();

        if (!empty($bulan)) {
            $pemasukanQuery->where('bulan', $bulan);
        }
        if (!empty($tahun)) {
            $pemasukanQuery->where('tahun', $tahun);
        }

        $pemasukanKas = $pemasukanQuery->get();




        // Query dasar pengeluaran
        $pemasukanEksternalQuery = PemasukanEksternal::query();

        if (!empty($bulan)) {
            $pemasukanEksternalQuery->where('bulan', $bulan);
        }
        if (!empty($tahun)) {
            $pemasukanEksternalQuery->where('tahun', $tahun);
        }

        $pemasukanEksternals = $pemasukanEksternalQuery->get();





        // Query dasar pengeluaran
        $pengeluaranQuery = PengeluaranKas::query();

        if (!empty($bulan)) {
            $pengeluaranQuery->where('bulan', $bulan);
        }
        if (!empty($tahun)) {
            $pengeluaranQuery->where('tahun', $tahun);
        }

        $pengeluaranKas = $pengeluaranQuery->get();

        // Hitung total sesuai filter
        $totalPemasukan = $pemasukanQuery->sum('jumlah');
        $totalPemasukanEksternal = $pemasukanEksternals->sum('jumlah');
        $totalPengeluaran = $pengeluaranQuery->sum('jumlah');

        $sisaSaldo = $totalPemasukan + $totalPemasukanEksternal - $totalPengeluaran;

        $user = Auth::check() ? Auth::user() : null;

        return view('users.data_uang_kas', compact('pemasukanKas', 'pengeluaranKas', 'pemasukanEksternals', 'totalPemasukanEksternal' , 'totalPemasukan', 'totalPengeluaran', 'sisaSaldo', 'user', 'bulan', 'tahun'));
    }

    public function index()
    {
        // $user = User::where('id', session('id'));
        // dd(session('id'));

        if (Auth::check()) {
            // User sudah login
            $user = Auth::user();
            // atau session('employee_id') dsb
        } else {
            // Belum login
            $user = null;
        }

        return view('users.profile.index', compact('user'));
    }

    public function store(int $id, Request $request)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            // hapus file lama kalau ada
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }

            // simpan file baru
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profile'), $filename);

            $validated['image'] = 'uploads/profile/' . $filename;
        }

        $user->update($validated);

        return redirect()->back();
        // return redirect()->route('user.profile.index')->with('status', 'data berhasil ditambahkan');
    }

    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate(
            [
                'image' => 'nullable|string',
                'name' => 'required',
            ],
            [
                'name.required' => 'masukkand data dengan benar',
            ],
        );

        // upload image
        if ($request->hasFile('image')) {
            // hapus image lama kalau ada
            if ($user->image && file_exists(public_path('uploads/profile/' . $user->image))) {
                unlink(public_path('uploads/profile/' . $user->image));
            }

            // simpan image baru
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/profile'), $imageName);

            $validated['image'] = $imageName;
        } else {
            // jika tidak ada upload baru, tetap gunakan image lama
            $validated['image'] = $user->image;
        }

        // update user
        $user->update($validated);

        return redirect()->route('user.profile.index')->with('success', 'Profile berhasil diperbarui');
    }
}
