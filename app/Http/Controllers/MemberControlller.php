<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Teenager;
use Illuminate\Http\Request;

class MemberControlller extends Controller
{
    public function index() {
        $teenagers = Teenager::all();
        $members = Member::all();

        return view('admin.Member.index', compact('members', 'teenagers'));
    }


    public function store(Request $request) {
        $validated = $request->validate(
            [
                'teenager_id' => 'required',
                'jabatan' => 'required',
                'status' => 'required',
            ],
            [
                'teenager_id.required' => 'masukkan data dengan benar',
                'jabatan.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',
            ],
        );

        $validated['user_id'] = 1;

        Member::create($validated);

        return redirect()->route('admin.member.index')->with(['status' => 'data anggota berhasil ditambah']);
    }


    public function edit(int $id) {
        $member = Member::find($id);
        $members = Member::all();
        $teenagers = Teenager::all();

        return view('admin.Member.edit', compact('member', 'teenagers', 'members'));
    }


    public function update(Request $request, int $id) {
        $member = Member::find($id);

        $validated = $request->validate(
            [
                'teenager_id' => 'required',
                'jabatan' => 'required',
                'status' => 'required',
            ],
            [
                'teenager_id.required' => 'masukkan data dengan benar',
                'jabatan.required' => 'masukkan data dengan benar',
                'status.required' => 'masukkan data dengan benar',
            ],
        );

        $validated['user_id'] = 1;

        $member->update($validated);

        return redirect()->route('admin.member.index')->with(['status' => 'data member berhasil di edit']);
    }


    public function destroy(int $id) {
        $member = Member::find($id);

        $member->delete();

        return redirect()->route('admin.member.index')->with(['status_delete' => 'data member berhasil dihapus']);
    }
}
