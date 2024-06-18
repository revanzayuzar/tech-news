<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;

class BeritaController extends Controller
{
    // UNTUK TAMPILAN ADMIN
    public function index()
    {
        $berita = Berita::all();

        return view('admin.berita.index')->with('berita', $berita);
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sumber' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            'isi_berita' => 'required|string',
        ]);

        $gambarPath = $request->file('gambar')->store('gambar_berita', 'public');

        $berita = new Berita();
        $berita->judul_berita = $request->input('judul_berita');
        $berita->gambar = $gambarPath;
        $berita->sumber = $request->input('sumber');
        $berita->penulis = $request->input('penulis');
        $berita->tanggal_upload = $request->input('tanggal_upload');
        $berita->isi_berita = $request->input('isi_berita');
        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupload.');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.read', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.update', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sumber' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isi_berita' => 'required|string',
        ]);

        $berita = Berita::findOrFail($id);

        $berita->judul_berita = $validatedData['judul_berita'];
        $berita->sumber = $validatedData['sumber'];
        $berita->penulis = $validatedData['penulis'];
        $berita->isi_berita = $validatedData['isi_berita'];

        // Menghandle upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            // Simpan gambar baru
            $gambarPath = $request->file('gambar')->store('gambar_berita', 'public');
            $berita->gambar = $gambarPath;
        }

        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diedit.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    // UNTUK TAMPILAN USER
    public function index_user()
    {
        $berita = Berita::all();

        return view('user.berita.index')->with('berita', $berita);
    }

    public function show_user($id)
    {
        $berita = Berita::findOrFail($id);

        return view('user.berita.read', compact('berita'));
    }
}
