<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Portfolio::all();
        $members = Member::all();

        return view('admin.Portfolio.index', compact('portfolios', 'members'));
    }


    public function store(Request $request) {
    $validated = $request->validate([
            'member_id' => 'required',
            'judul' => 'required',
            'tag' => 'required',
            'deskripsi' => 'required',
            'vidio' => 'nullable|string',
            'image' => 'nullable'
        ], [
            'member_id.required' => 'masukkand data dengan benar',
            'judul.required' => 'masukkand data dengan benar',
            'tag.required' => 'masukkand data dengan benar',
            'deskripsi.required' => 'masukkand data dengan benar',
            // 'vidio.required' => 'masukkand data dengan benar',
            // 'image.required' => 'masukkan data dengan benar'
        ]);

    // simpan file gambar jika ada
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/portfolio'), $filename);

        $validated['image'] = 'uploads/portfolio/' . $filename;
    }

    $validated['user_id'] = 1;

    Portfolio::create($validated);

    return redirect()->route('admin.portfolio.index')
        ->with('status', 'data berhasil ditambahkan');
}



    public function edit(Request $request ,int $id) {
        $portfolio = Portfolio::find($id);
        $members = Member::all();

        return view('admin.Portfolio.edit', compact('portfolio', 'members'));
    }



    public function update(Request $request, int $id) {
        $portfolio = Portfolio::find($id);

        $validated = $request->validate([
            'member_id' => 'required',
            'judul' => 'required',
            'tag' => 'required',
            'deskripsi' => 'required',
            'vidio' => 'nullable|string',
            'image' => 'nullable'
        ], [
            'member_id.required' => 'masukkand data dengan benar',
            'judul.required' => 'masukkand data dengan benar',
            'tag.required' => 'masukkand data dengan benar',
            'deskripsi.required' => 'masukkand data dengan benar',
            // 'vidio.required' => 'masukkand data dengan benar',
            // 'image.required' => 'masukkan data dengan benar'
        ]);

         // simpan file gambar
        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($portfolio->image && file_exists(public_path($portfolio->image))) {
                unlink(public_path($portfolio->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/portfolio'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/portfolio/' . $filename;
        }


        $validated['user_id'] = 1;

        $portfolio->update($validated);

        return redirect()->route('admin.portfolio.index')->with('status', 'data berhasil di update');
    }


    public function destroy(int $id) {
        $portfolio = Portfolio::find($id);

        if($portfolio->image && file_exists(public_path($portfolio->image))) {
            unlink(public_path($portfolio->image));
        }

        $portfolio->delete();

        return redirect()
            ->route('admin.portfolio.index')
            ->with(['status_delete' => 'data berhasil dihapus']);

    }



    public function deleteImage(int $id) {
        $portfolioImage = Portfolio::find($id);

          // hapus file fisik kalau ada
        if ($portfolioImage->image && file_exists(public_path($portfolioImage->image))) {
            unlink(public_path($portfolioImage->image));
        }

        // kosongkan field image di DB
        $portfolioImage->image = null;
        $portfolioImage->save();

        return redirect()->back();
    }

}
