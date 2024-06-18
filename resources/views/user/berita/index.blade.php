@extends('user.layouts.main')

@php
    $title = 'Berita';
@endphp

@section('title')
    Berita
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <div class="container d-flex flex-wrap justify-content-center" style="margin-top: 111px">
        @forelse ($berita as $item)
            <div class="card col-11 col-md-8 col-lg-5 mx-4 mb-4 border-primary">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" class="card-img-top"
                    style="width: 100%; height: 250px; object-fit: cover">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul_berita }}</h5>
                    <p class="card-text mb-0"><span class="fw-semibold">Sumber :</span> {{ $item->sumber }}</p>
                    <p class="card-text mb-0"><span class="fw-semibold">Penulis :</span> {{ $item->penulis }}</p>
                    <p class="card-text mb-0"><span class="fw-semibold">Tanggal Upload :</span> {{ $item->tanggal_upload }}</p>
                    <a href="{{ route('user.berita.read', $item->id) }}" class="btn btn-primary d-block col-6 mx-auto mt-3 py-2">
                        <i class="bi bi-eye"></i>
                        <span style="margin-left: 5px">Baca</span>
                    </a>
                </div>
            </div>
        @empty
            <div class="d-flex flex-column justify-content-center align-items-center py-5">
                <i class="bi bi-emoji-frown" style="font-size: 75px"></i>
                Belum Ada Berita.
            </div>
        @endforelse
    </div>
@endsection
