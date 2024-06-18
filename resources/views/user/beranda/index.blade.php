@extends('user.layouts.main')

@php
    $title = 'Beranda';
@endphp

@section('title')
    Beranda
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-6">
            <h1>Selamat Datang</h1>
            <p class="fw-semibold mt-3 mb-5">Apakah Anda sedang bersantai? Agar lebih bermanfaat yuk baca berita seputar
                Perkembangan Teknologi yang ada di seluruh dunia
            </p>
            <a href="{{ route('user.berita.index') }}" class="btn btn-primary btn-lg">
                <span>Baca Berita</span>
            </a>
        </div>

        <div class="col-6">
            <h1 class="text-primary fs-1 fw-bold text-center mx-auto p-3 p-sm-5 shadow-lg"
                style="width: max-content; border-radius: 10px; transform: rotate(352deg)">
                TECH <br> NEWS
            </h1>
        </div>
    </div>
@endsection
