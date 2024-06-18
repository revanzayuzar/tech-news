@extends('user.layouts.main')

@php
    $title = 'Pengumuman';
@endphp

@section('title')
    Baca Pengumuman
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 mx-auto mb-5 border border-primary"
        style="margin-top: 125px; border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            BACA PENGUMUMAN
        </h1>

        <article class="col-10 mx-auto my-4">
            <h1 class="fs-5 text-center mb-5">{{ $pengumuman->judul_pengumuman }}</h1>
            <p class="card-text mb-0"><span class="fw-semibold">Penulis :</span> {{ $pengumuman->penulis }}</p>
            <p class="card-text mb-0"><span class="fw-semibold">Tanggal Upload :</span> {{ $pengumuman->tanggal_upload }}</p>
            <p class="card-text mt-3 mb-5">{{ $pengumuman->isi_pengumuman }}</p>

            <div class="text-center">
                <a href="{{ route('user.pengumuman.index') }}" class="btn btn-primary">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </article>
    </div>
@endsection
