<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\SocialMedias;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index() {
        $socialMedias = SocialMedias::all();
        $members = Member::all();

        return view('admin.socialMedia.index', compact('socialMedias', 'members'));
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'member_id' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'twitter' => 'required',
        ], [
            'member_id.required' => 'masukkan data dengan benar',
            'instagram.required' => 'masukkan data dengan benar',
            'tiktok.required' => 'masukkan data dengan benar',
            'twitter.required' => 'masukkan data dengan benar',
        ]);

        $validated['user_id'] = 1;

        SocialMedias::create($validated);

        return redirect()->route('admin.social-media.index')->with(['status', 'data berhasil ditambahkan']);
    }



    public function edit(int $id) {
        $socialMedia = SocialMedias::find($id);
        $members = Member::all();

        return view('admin.socialMedia.edit', compact('socialMedia', 'members'));
    }


    public function update(Request $request, int $id) {
        $socialMedia = SocialMedias::find($id);
        $validated = $request->validate([
            'member_id' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'twitter' => 'required',
        ], [
            'member_id.required' => 'masukkan data dengan benar',
            'instagram.required' => 'masukkan data dengan benar',
            'tiktok.required' => 'masukkan data dengan benar',
            'twitter.required' => 'masukkan data dengan benar',
        ]);

        $validated['user_id'] = 1;

        $socialMedia->update($validated);

        return redirect()->route('admin.social-media.index')->with(['status', 'data berhasil diubah']);

    }



    public function destroy(int $id) {
        $socialMedia = SocialMedias::find($id);

        $socialMedia->delete();

        return redirect()->route('admin.social-media.index')->with(['status_delete', 'data berhasil diubah']);

    }

}
