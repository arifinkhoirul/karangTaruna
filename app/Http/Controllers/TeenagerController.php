<?php

namespace App\Http\Controllers;

use App\Models\Teenager;
use Illuminate\Http\Request;

class TeenagerController extends Controller
{
    public function index() {
        $teenagers = Teenager::all();

        return view('admin.Teenagers.index', compact('teenagers'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'name' => 'required',
                // 'image' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required',
                'minat_bakat' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'masukkan data dengan benar',
                // 'image.required' => 'masukkan data dengan benar',
                'jenis_kelamin.required' => 'masukkan data dengan benar',
                'tanggal_lahir.required' => 'masukkan data dengan benar',
                'alamat.required' => 'masukkan data dengan benar',
                'minat_bakat.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',
            ],
        );

        // simpan file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/teenagers'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/teenagers/' . $filename;
        }


        $validated['user_id'] = 1;

        Teenager::create($validated);

        return redirect()->route('admin.data-remaja.index')->with(['status' => 'data remaja berhasil ditambah']);
    }


    public function edit(int $id) {
        $teenager = Teenager::find($id);

        return view('admin.Teenagers.edit', compact('teenager'));
    }


    public function update(Request $request, int $id) {
        $teenager = Teenager::find($id);

        $validated = $request->validate(
            [
                'name' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required',
                'minat_bakat' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'masukkan data dengan benar',
                'jenis_kelamin.required' => 'masukkan data dengan benar',
                'tanggal_lahir.required' => 'masukkan data dengan benar',
                'alamat.required' => 'masukkan data dengan benar',
                'minat_bakat.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',
            ],
        );

        // simpan file gambar
        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($teenager->image && file_exists(public_path($teenager->image))) {
                unlink(public_path($teenager->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/teenagers'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/teenagers/' . $filename;
        }

        $validated['user_id'] = 1;

        $teenager->update($validated);

        return redirect()->route('admin.data-remaja.index')->with(['status' => 'data berhasil di ubah']);
    }


    public function destroy(int $id) {
        $teenager = Teenager::find($id);

        if($teenager->image && file_exists(public_path($teenager->image))) {
            unlink(public_path($teenager->image));
        }

        $teenager->delete();

        return redirect()->route('admin.data-remaja.index')->with(['status_delete' => 'data berhasil di hapus']);
    }
}
