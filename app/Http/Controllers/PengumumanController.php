<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    // UNTUK TAMPILAN ADMIN
    public function index()
    {
        $pengumuman = Pengumuman::all();

        return view('admin.pengumuman.index')->with('pengumuman', $pengumuman);
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_pengumuman' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            'isi_pengumuman' => 'required|string',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->judul_pengumuman = $request->input('judul_pengumuman');
        $pengumuman->penulis = $request->input('penulis');
        $pengumuman->tanggal_upload = $request->input('tanggal_upload');
        $pengumuman->isi_pengumuman = $request->input('isi_pengumuman');
        $pengumuman->save();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diupload.');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.read', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.update', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul_pengumuman' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isi_pengumuman' => 'required|string',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->judul_pengumuman = $validatedData['judul_pengumuman'];
        $pengumuman->penulis = $validatedData['penulis'];
        $pengumuman->isi_pengumuman = $validatedData['isi_pengumuman'];
        $pengumuman->save();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diedit.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }

    // UNTUK TAMPILAN USER
    public function index_user()
    {
        $pengumuman = Pengumuman::all();

        return view('user.pengumuman.index')->with('pengumuman', $pengumuman);
    }

    public function show_user($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('user.pengumuman.read', compact('pengumuman'));
    }
}
