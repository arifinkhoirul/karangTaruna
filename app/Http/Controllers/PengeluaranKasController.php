<?php

namespace App\Http\Controllers;

use App\Models\PengeluaranKas;
use Illuminate\Http\Request;

class PengeluaranKasController extends Controller
{
    public function index() {
        $allPengeluaranKas = PengeluaranKas::all();

        $totalPengeluaran = PengeluaranKas::sum('jumlah');

        return view('admin.PengeluaranKas.index', compact('allPengeluaranKas', 'totalPengeluaran'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'bulan' => 'required',
                'tahun' => 'required',
                'jumlah' => 'required',
                'keterangan' => 'required',
                'tanggal_pengeluaran' => 'required',
            ],
            [
                'bulan.required' => 'masukkan data dengan benar',
                'tahun.required' => 'masukkan data dengan benar',
                'jumlah.required' => 'masukkan data dengan benar',
                'keterangan.required' => 'masukkan data dengan benar',
                'tanggal_pengeluaran.required' => 'masukkan data dengan benar',
            ],
        );

        $validated['user_id'] = session('id');

        PengeluaranKas::create($validated);


        return redirect()->route('admin.pengeluaran-kas.index')->with(['status' => 'data pengeluaran berhasil ditambah']);
    }


    public function edit(int $id) {
        $pengeluaranKas = PengeluaranKas::find($id);

        return view('admin.PengeluaranKas.edit', compact('pengeluaranKas'));
    }


    public function update(Request $request, int $id) {
        $pengeluaranKas = PengeluaranKas::find($id);

        $validated = $request->validate(
            [
                'bulan' => 'required',
                'tahun' => 'required',
                'jumlah' => 'required',
                'keterangan' => 'required',
                'tanggal_pengeluaran' => 'required',
            ],
            [
                'bulan.required' => 'masukkan data dengan benar',
                'tahun.required' => 'masukkan data dengan benar',
                'jumlah.required' => 'masukkan data dengan benar',
                'keterangan.required' => 'masukkan data dengan benar',
                'tanggal_pengeluaran.required' => 'masukkan data dengan benar',
            ],
        );

        $validated['user_id'] = session('id');

        $pengeluaranKas->update($validated);

        return redirect()->route('admin.pengeluaran-kas.index')->with(['status' => 'data pengeluarn berhasil diubah']);

    }


    public function destroy(int $id) {
        $pengeluaranKas = PengeluaranKas::find($id);

        $pengeluaranKas->delete();

        return redirect()->route('admin.pengeluaran-kas.index')->with(['status' => 'data pengeluarn berhasil dihapus']);
    }

}
