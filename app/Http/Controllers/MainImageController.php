<?php

namespace App\Http\Controllers;

use App\Models\MainImage;
use Illuminate\Http\Request;

class MainImageController extends Controller
{
    public function index() {
        $mainImages = MainImage::all();

        return view('admin.MainImage.index', compact('mainImages'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'image' => 'required',
                'status' => 'required',

            ],
            [
                'image.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',

            ],
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/mainImages'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/mainImages/' . $filename;
        }

        $validated['user_id'] = session('id');

        MainImage::create($validated);

        return redirect()
            ->route('admin.main-image.index')
            ->with(['status' => ' data main image berhasil ditambah']);
    }


    public function edit(int $id) {
        $mainImage = MainImage::find($id);

        return view('admin.MainImage.edit', compact('mainImage'));
    }


    public function update(Request $request, int $id) {
        $mainImage = MainImage::find($id);
        $validated = $request->validate(
            [
                'status' => 'required',

            ],
            [
                'status.required' => 'masukkan data dengan benar',
            ],
        );

        // simpan file gambar
        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($mainImage->image && file_exists(public_path($mainImage->image))) {
                unlink(public_path($mainImage->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/mainImages'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/mainImages/' . $filename;
        }

        $validated['user_id'] = session('id');

        $mainImage->update($validated);

        return redirect()
            ->route('admin.main-image.index')
            ->with(['status' => 'data main image berhasil di ubah']);
    }


    public function destroy(int $id) {
        $mainImage = MainImage::find($id);

        if($mainImage->image && file_exists(public_path($mainImage->image))) {
            unlink(public_path($mainImage->image));
        }

        $mainImage->delete();

        return redirect()->route('admin.main-image.index')->with(['status' => 'data main image berhasil dihapus']);
    }
}
