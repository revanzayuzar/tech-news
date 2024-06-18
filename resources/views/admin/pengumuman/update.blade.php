@extends('admin.layouts.main')

@php
    $title = 'Pengumuman';
@endphp

@section('title')
    Dashboard | Edit Pengumuman
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-xl-10 mx-auto border border-primary" style="border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            EDIT PENGUMUMAN
        </h1>

        <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-primary mx-3 mt-3">
            <i class="bi bi-caret-left"></i>
            <span>Kembali</span>
        </a>

        <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST" class="p-3 px-sm-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="judul_pengumuman" class="form-label fw-semibold">Judul Pengumuman</label>
                <input type="text" class="form-control p-2 border border-primary" id="judul_pengumuman" name="judul_pengumuman"
                    placeholder="Masukkan Judul Pengumuman" required value="{{ $pengumuman->judul_pengumuman }}"
                    oninvalid="this.setCustomValidity('Harap Masukkan Judul Pengumuman!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="penulis" class="form-label fw-semibold">Nama Penulis</label>
                <input type="text" class="form-control p-2 border border-primary" id="penulis" name="penulis"
                    placeholder="Masukkan Nama Penulis" required value="{{ $pengumuman->penulis }}"
                    oninvalid="this.setCustomValidity('Harap Masukkan Nama Penulis!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="tanggal_upload" class="form-label fw-semibold">Tanggal Upload</label>
                <input type="datetime-local" class="form-control p-2 border border-primary" id="tanggal_upload" name="tanggal_upload"
                    placeholder="Masukkan Tanggal Upload" disabled value="{{ $pengumuman->tanggal_upload }}"
                    oninvalid="this.setCustomValidity('Harap Masukkan Tanggal Upload!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="isi_pengumuman" class="form-label fw-semibold">Isi Pengumuman</label>
                <textarea class="form-control p-2 border border-primary" id="isi_pengumuman" name="isi_pengumuman" rows="10"
                    placeholder="Masukkan Isi Pengumuman" required oninvalid="this.setCustomValidity('Harap Masukkan Isi Pengumuman!')"
                    oninput="setCustomValidity('')">{{ $pengumuman->isi_pengumuman }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary d-block mx-auto mt-5 px-5 py-2">
                <i class="bi bi-pencil-square"></i>
                Edit
            </button>
        </form>
    </div>
@endsection
