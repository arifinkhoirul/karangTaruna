<?php

namespace App\Http\Controllers;

use App\Models\PemasukanEksternal;
use Illuminate\Http\Request;

class PemasukanEksternalController extends Controller
{
    public function index() {
        $allPemasukanEskternal = PemasukanEksternal::all();

        $totalPengeluaran = PemasukanEksternal::sum('jumlah');

        return view('admin.PemasukanEksternal.index', compact('allPemasukanEskternal', 'totalPengeluaran'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'bulan' => 'required',
                'tahun' => 'required',
                'jumlah' => 'required',
                'keterangan' => 'required',
                'tanggal_pemasukan' => 'required',
            ],
            [
                'bulan.required' => 'masukkan data dengan benar',
                'tahun.required' => 'masukkan data dengan benar',
                'jumlah.required' => 'masukkan data dengan benar',
                'keterangan.required' => 'masukkan data dengan benar',
                'tanggal_pemasukan.required' => 'masukkan data dengan benar',
            ],
        );

        $validated['user_id'] = session('id');

        PemasukanEksternal::create($validated);


        return redirect()->route('admin.pemasukan-eksternal.index')->with(['status' => 'data pengeluaran berhasil ditambah']);
    }


    public function edit(int $id) {
        $pemasukanEksternal = PemasukanEksternal::find($id);

        return view('admin.PemasukanEksternal.edit', compact('pemasukanEksternal'));
    }


    public function update(Request $request, int $id) {
        $pemasukanEksternal = PemasukanEksternal::find($id);

        $validated = $request->validate(
            [
                'bulan' => 'required',
                'tahun' => 'required',
                'jumlah' => 'required',
                'keterangan' => 'required',
                'tanggal_pemasukan' => 'required',
            ],
            [
                'bulan.required' => 'masukkan data dengan benar',
                'tahun.required' => 'masukkan data dengan benar',
                'jumlah.required' => 'masukkan data dengan benar',
                'keterangan.required' => 'masukkan data dengan benar',
                'tanggal_pemasukan.required' => 'masukkan data dengan benar',
            ],
        );

        $validated['user_id'] = session('id');

        $pemasukanEksternal->update($validated);

        return redirect()->route('admin.pemasukan-eksternal.index')->with(['status' => 'data pengeluarn berhasil diubah']);

    }


    public function destroy(int $id) {
        $pemasukanEksternal = PemasukanEksternal::find($id);

        $pemasukanEksternal->delete();

        return redirect()->route('admin.pemasukan-eksternal.index')->with(['status' => 'data pengeluarn berhasil dihapus']);
    }
}
