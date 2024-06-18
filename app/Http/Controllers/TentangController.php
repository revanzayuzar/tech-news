<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    // UNTUK TAMPILAN ADMIN
    public function index()
    {
        return view('admin.tentang.index');
    }

    // UNTUK TAMPILAN USER
    public function index_user()
    {
        return view('user.tentang.index');
    }
}
