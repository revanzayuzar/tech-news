@extends('admin.layouts.main')

@php
    $title = 'Berita';
@endphp

@section('title')
    Dashboard | Tambah Berita
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-xl-10 mx-auto border border-primary" style="border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            TAMBAHKAN BERITA
        </h1>

        <a href="{{ route('admin.berita.index') }}" class="btn btn-primary mx-3 mt-3">
            <i class="bi bi-caret-left"></i>
            <span>Kembali</span>
        </a>

        <form action="{{ route('admin.berita.store') }}" method="POST" class="p-3 px-sm-5" enctype="multipart/form-data">
            @csrf
            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="judul_berita" class="form-label fw-semibold">Judul Berita</label>
                <input type="text" class="form-control p-2 border border-primary" id="judul_berita" name="judul_berita"
                    placeholder="Masukkan Judul Berita" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Judul Berita!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="gambar" class="form-label fw-semibold">Tambahkan Gambar</label>
                <input type="file" class="form-control p-2 border border-primary" id="gambar" name="gambar"
                    placeholder="Pilih Sebuah Gambar" required
                    oninvalid="this.setCustomValidity('Harap Pilih Sebuah Gambar!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="sumber" class="form-label fw-semibold">Sumber Berita</label>
                <input type="text" class="form-control p-2 border border-primary" id="sumber" name="sumber"
                    placeholder="Masukkan Sumber Berita" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Sumber Berita!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="penulis" class="form-label fw-semibold">Nama Penulis</label>
                <input type="text" class="form-control p-2 border border-primary" id="penulis" name="penulis"
                    placeholder="Masukkan Nama Penulis" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Nama Penulis!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="tanggal_upload" class="form-label fw-semibold">Tanggal Upload</label>
                <input type="datetime-local" class="form-control p-2 border border-primary" id="tanggal_upload" name="tanggal_upload"
                    placeholder="Masukkan Tanggal Upload" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Tanggal Upload!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="isi_berita" class="form-label fw-semibold">Isi Berita</label>
                <textarea class="form-control p-2 border border-primary" id="isi_berita" name="isi_berita" rows="10"
                    placeholder="Masukkan Isi Berita" required oninvalid="this.setCustomValidity('Harap Masukkan Isi Berita!')"
                    oninput="setCustomValidity('')"></textarea>
            </div>

            <button type="submit" class="btn btn-primary d-block mx-auto mt-5 px-5 py-2">
                <i class="bi bi-upload"></i>
                Upload
            </button>
        </form>
    </div>
@endsection
