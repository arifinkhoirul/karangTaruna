<?php

namespace App\Http\Controllers;

use App\Models\CashBook;
use App\Models\Teenager;
use Illuminate\Http\Request;

class CashBookController extends Controller
{
    public function index() {
        $teenagers = Teenager::all();
        $cashBooks = CashBook::all();

        $totalPemasukan = CashBook::where('status', 'sudah bayar')->sum('jumlah');

        return view('admin.CashBook.index', compact('cashBooks', 'teenagers', 'totalPemasukan'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'teenager_id' => 'required',
                'bulan' => 'required',
                'tahun' => 'required',
                'jumlah' => 'required',
                'tanggal_bayar' => 'required',
                'status' => 'required',
            ],
            [
                'teenager_id.required' => 'masukkan data dengan benar',
                'bulan.required' => 'masukkan data dengan benar',
                'tahun.required' => 'masukkan data dengan benar',
                'jumlah.required' => 'masukkan data dengan benar',
                'tanggal_bayar.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',
            ],
        );


        $validated['user_id'] = session('id');

        CashBook::create($validated);

        return redirect()->route('admin.pemasukan-kas.index')->with(['status' => 'data berhasil di tambah']);
    }


    public function edit(int $id) {
        $teenagers = Teenager::all();
        $cashBook = CashBook::find($id);

        return view('admin.CashBook.edit', compact('cashBook', 'teenagers'));
    }


    public function update(Request $request, int $id) {
        $cashBook = CashBook::find($id);

        $validated = $request->validate(
            [
                'teenager_id' => 'required',
                'bulan' => 'required',
                'tahun' => 'required',
                'jumlah' => 'required',
                'tanggal_bayar' => 'required',
                'status' => 'required',
            ],
            [
                'teenager_id.required' => 'masukkan data dengan benar',
                'bulan.required' => 'masukkan data dengan benar',
                'tahun.required' => 'masukkan data dengan benar',
                'jumlah.required' => 'masukkan data dengan benar',
                'tanggal_bayar.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',
            ],
        );


        $validated['user_id'] = session('id');

        $cashBook->update($validated);

        return redirect()->route('admin.pemasukan-kas.index')->with(['status' => 'data berhasil diubah']);
    }


    public function destroy(int $id) {
        $cashBook = CashBook::find($id);

        $cashBook->delete();

        return redirect()->route('admin.pemasukan-kas.index')->with(['status' => 'data berhasil dihapus']);
    }
}
