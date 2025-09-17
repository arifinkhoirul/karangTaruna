<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index() {
        $documentations = Documentation::all();


        return view('admin.Documentation.index', compact('documentations'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'judul_dokumentasi' => 'required',
                'image' => 'required',
                'link' => 'required',
            ],
            [
                'judul_dokumentasi.required' => 'masukkan data dengan benar',
                'image.required' => 'masukkan data dengan benar',
                'link.required' => 'masukkan data dengan benar',
            ],
        );


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/documentation'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/documentation/' . $filename;
        }

        $validated['user_id'] = session('id');

        Documentation::create($validated);

        return redirect()
            ->route('admin.documentation.index')
            ->with(['status' => 'data documentation berhasil ditambah']);
    }


    public function edit(int $id) {
        $documentation = Documentation::find($id);

        return view('admin.Documentation.edit', compact('documentation'));
    }


    public function update (Request $request, int $id) {
        $documentation = Documentation::find($id);
        $validated = $request->validate(
            [
                'judul_dokumentasi' => 'required',
                'link' => 'required',
            ],
            [
                'judul_dokumentasi.required' => 'masukkan data dengan benar',
                'link.required' => 'masukkan data dengan benar',
            ],
        );

         // simpan file gambar
        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($documentation->image && file_exists(public_path($documentation->image))) {
                unlink(public_path($documentation->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/documentation'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/documentation/' . $filename;
        }

        $validated['user_id'] = session('id');

        $documentation->update($validated);

        return redirect()
            ->route('admin.documentation.index')
            ->with(['status' => 'data documentation berhasil di ubah']);
    }


    public function destroy(int $id) {
        $documentation = Documentation::find($id);

        if($documentation->image && file_exists(public_path($documentation->image))) {
            unlink(public_path($documentation->image));
        }

        $documentation->delete();

        return redirect()->route('admin.documentation.index')->with(['status' => 'data main image berhasil dihapus']);
    }
}
