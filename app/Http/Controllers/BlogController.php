<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        // dd($allBlogs);

        return view('admin.Blog.index', compact('blogs'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'judul' => 'required',
                'image' => 'required',
                'narasi_blog' => 'required',
                'tanggal_post' => 'required',
            ],
            [
                'judul.required' => 'masukkan data dengan benar',
                'image.required' => 'masukkan data dengan benar',
                'narasi_blog.required' => 'masukkan data dengan benar',
                'tanggal_post.required' => 'masukkan data dengan benar',
            ],
        );

        // simpan file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/blogs/' . $filename;
        }

        $validated['user_id'] = session('id');

        Blog::create($validated);

        return redirect()
            ->route('blog.index')
            ->with(['status' => 'berhasil menambahkan data blog']);
    }


    public function edit(int $id)
    {
        $blog = Blog::find($id);

        return view('admin.Blog.edit', compact('blog'));
    }


    public function update(Request $request, int $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate(
            [
                'judul' => 'required',
                // 'image' => 'required',
                'narasi_blog' => 'required',
                'tanggal_post' => 'required',
            ],
            [
                'judul.required' => 'masukkan data dengan benar',
                // 'image.required' => 'masukkan data dengan benar',
                'narasi_blog.required' => 'masukkan data dengan benar',
                'tanggal_post.required' => 'masukkan data dengan benar',
            ],
        );

        // simpan file gambar
        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/blogs/' . $filename;
        }

        $validated['user_id'] = session('id');

        $blog->update($validated);

        return redirect()
            ->route('blog.index')
            ->with(['status' => 'data berhasil di ubah']);
    }


    public function destroy(int $id)
    {
        $blog = Blog::find($id);

        if($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        $blog->delete();

        return redirect()
            ->route('blog.index')
            ->with(['status' => 'data berhasil dihapus']);
    }
}
