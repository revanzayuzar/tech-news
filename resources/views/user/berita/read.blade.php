@extends('user.layouts.main')

@php
    $title = 'Berita';
@endphp

@section('title')
    Baca Berita
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 mx-auto mb-5 border border-primary"
        style="margin-top: 125px; border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            BACA BERITA
        </h1>

        <article class="col-10 mx-auto my-4">
            <h1 class="fs-5 text-center mb-0">{{ $berita->judul_berita }}</h1>
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar" class="my-3"
                style="width: 100%; height: 300px; object-fit: cover">
            <p class="card-text mb-0"><span class="fw-semibold">Sumber :</span> {{ $berita->sumber }}</p>
            <p class="card-text mb-0"><span class="fw-semibold">Penulis :</span> {{ $berita->penulis }}</p>
            <p class="card-text mb-0"><span class="fw-semibold">Tanggal Upload :</span> {{ $berita->tanggal_upload }}</p>
            <p class="card-text mt-3 mb-5">{{ $berita->isi_berita }}</p>

            <div class="text-center">
                <a href="{{ route('user.berita.index') }}" class="btn btn-primary">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </article>
    </div>
@endsection
