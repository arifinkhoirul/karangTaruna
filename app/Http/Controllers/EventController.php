<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('admin.Event.index', compact('events'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama_event' => 'required',
                'image' => 'required',
                'deskripsi' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
                'kalimat_penutup' => 'required',
                'lokasi' => 'required',
            ],
            [
                'nama_event.required' => 'masukkan data dengan benar',
                'image.required' => 'masukkan data dengan benar',
                'deskripsi.required' => 'masukkan data dengan benar',
                'tanggal_mulai.required' => 'masukkan data dengan benar',
                'tanggal_selesai.required' => 'masukkan data dengan benar',
                'kalimat_penutup.required' => 'masukkan data dengan benar',
                'lokasi.required' => 'masukkan data dengan benar',
            ],
        );


        // simpan file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/events'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/events/' . $filename;
        }


        $validated['user_id'] = session('id');

        Event::create($validated);

        return redirect()->route('admin.event.index')->with(['status' => 'anda berhasil menambahkan data event']);

    }


    public function edit(int $id) {
        $event = Event::find($id);

        return view('admin.Event.edit', compact('event'));
    }


    public function update(Request $request, int $id) {
        $event = Event::find($id);


        $validated = $request->validate(
            [
                'nama_event' => 'required',
                // 'image' => 'required',
                'deskripsi' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
                'kalimat_penutup' => 'required',
                'lokasi' => 'required',
            ],
            [
                'nama_event.required' => 'masukkan data dengan benar',
                // 'image.required' => 'masukkan data dengan benar',
                'deskripsi.required' => 'masukkan data dengan benar',
                'tanggal_mulai.required' => 'masukkan data dengan benar',
                'tanggal_selesai.required' => 'masukkan data dengan benar',
                'kalimat_penutup.required' => 'masukkan data dengan benar',
                'lokasi.required' => 'masukkan data dengan benar',
            ],
        );


        if ($request->hasFile('image')) {
            // hapus gambar lama (kalau ada)
            if ($event->image && file_exists(public_path($event->image))) {
                unlink(public_path($event->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/events'), $filename);

            // overwrite field image agar tersimpan nama filenya
            $validated['image'] = 'uploads/events/' . $filename;
        }

        $validated['user_id'] = session('id');

        $event->update($validated);

        return redirect()
            ->route('admin.event.index')
            ->with(['status' => 'data berhasil di ubah']);
    }


    public function destroy(int $id) {
        $event = Event::find($id);

        if($event->image && file_exists(public_path($event->image))) {
            unlink(public_path($event->image));
        }

        $event->delete();

        return redirect()->route('admin.event.index')->with(['status' => 'data berhasil dihapus']);
    }
}
