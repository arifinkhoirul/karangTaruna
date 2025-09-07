<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage() {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('users.homepage_user', compact('blogs'));
    }


    public function pengurus() {
        $members = Member::all();

        return view('users.pengurus', compact('members'));
    }


    public function blog() {
        $blogs = Blog::all();

        return view('users.blog', compact('blogs'));
    }


    public function event() {
        $events = Event::all();

        return view('users.event', compact('events'));
    }


    public function documentations() {
        return view('users.documentation');
    }


    public function dataRemaja() {
        return view('users.data_remaja');
    }


    public function dataUangKas() {
        return view('users.data_uang_kas');
    }
}
