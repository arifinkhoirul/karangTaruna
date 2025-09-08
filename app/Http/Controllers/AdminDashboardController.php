<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CashBook;
use App\Models\Event;
use App\Models\PengeluaranKas;
use App\Models\Teenager;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {
        $totalRemaja = Teenager::where('status', 'aktif')->count();

        $totalPemasukan = CashBook::where('status', 'sudah bayar')->sum('jumlah');

        $totalPengeluaran = PengeluaranKas::sum('jumlah');

        $sisaSaldo =  $totalPemasukan - $totalPengeluaran;

        $totalEvent = Event::count();

        $totalBlog = Blog::count();

        // dd($sisaSaldo);

        return view('admin.dashboard', compact('totalRemaja', 'sisaSaldo', 'totalEvent', 'totalBlog'));
    }
}
