<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index() {
        $sponsors = Sponsor::all();

        return view('admin.Sponsor.index', compact('sponsors'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'nama_perusahaan' => 'required',
                'image' => 'required',
                'status' => 'required',
            ],[
                'nama_perusahaan.required' => 'masukkan data dengan benar',
                'image.required' => 'masukkan data dengan benar',
                'twitter.required' => 'masukkan data dengan benar',
            ]
        );

         // simpan file gambar jika ada
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/sponsor'), $filename);

        $validated['image'] = 'uploads/sponsor/' . $filename;
    }

    $validated['user_id'] = session('id');

    Sponsor::create($validated);

    return redirect()->route('admin.sponsor.index')
        ->with('status', 'data berhasil ditambahkan');
    }


    public function edit(int $id) {
        $sponsor = Sponsor::find($id);

        return view('admin.Sponsor.edit', compact('sponsor'));
    }


    public function update(Request $request, int $id) {
        $sponsor = Sponsor::find($id);

        $validated = $request->validate(
            [
                'nama_perusahaan' => 'required',
                // 'image' => 'required',
                'status' => 'required',
            ],[
                'nama_perusahaan.required' => 'masukkan data dengan benar',
                // 'image.required' => 'masukkan data dengan benar',
                'twitter.required' => 'masukkan data dengan benar',
            ]
        );


        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($sponsor->image && file_exists(public_path($sponsor->image))) {
                unlink(public_path($sponsor->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sponsor'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/sponsor/' . $filename;
        }

        $validated['user_id'] = session('id');

        $sponsor->update($validated);

        return redirect()->route('admin.sponsor.index')
            ->with('status', 'data berhasil diupdate');
    }


    public function destroy(int $id) {
        $sponsor = Sponsor::find($id);

        if($sponsor->image && file_exists(public_path($sponsor->image))) {
            unlink(public_path($sponsor->image));
        }

        $sponsor->delete();

        return redirect()
            ->route('admin.sponsor.index')
            ->with(['status' => 'data berhasil dihapus']);

    }
}
