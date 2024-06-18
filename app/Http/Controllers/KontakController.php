<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    // UNTUK TAMPILAN ADMIN
    public function index()
    {
        return view('admin.kontak.index');
    }

    // UNTUK TAMPILAN USER
    public function index_user()
    {
        return view('user.kontak.index');
    }
}
