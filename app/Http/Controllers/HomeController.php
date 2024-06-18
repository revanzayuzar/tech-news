<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // UNTUK TAMPILAN ADMIN
    public function index()
    {
        $beritas = Berita::all();
        $totalBerita = Berita::count();

        $pengumumans = Pengumuman::all();
        $totalPengumuman = Pengumuman::count();

        return view('admin.beranda.index', compact('beritas', 'totalBerita', 'pengumumans', 'totalPengumuman'));
    }

    // UNTUK TAMPILAN USER
    public function index_user()
    {
        return view('user.beranda.index');
    }
}
