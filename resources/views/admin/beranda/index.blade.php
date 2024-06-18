@extends('admin.layouts.main')

@php
    $title = 'Beranda';
@endphp

@section('title')
    Dashboard | Beranda
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-evenly align-items-md-start">
        <div class="card col-9 col-sm-7 col-md-3 d-flex mb-5 mb-md-0 border-info shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-info"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-layout-text-sidebar-reverse" style="font-size: 100px"></i>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Total Berita : {{ $totalBerita }}</h5>
                <p class="card-text text-center">Silahkan klik tombol di bawah untuk melihat semua berita yang telah di upload</p>
                <a href="{{ route('admin.berita.index') }}" class="btn btn-info d-block col-6 mx-auto">Lihat</a>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-3 d-flex mb-5 mb-md-0 border-info shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-info"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-megaphone" style="font-size: 100px"></i>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Total Pengumuman : {{ $totalPengumuman }}</h5>
                <p class="card-text text-center">Silahkan klik tombol di bawah untuk melihat semua pengumuman yang telah di upload</p>
                <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-info d-block col-6 mx-auto">Lihat</a>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-3 d-flex mb-5 mb-md-0 border-info shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-info"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-eye" style="font-size: 100px"></i>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Lihat Sebagai User</h5>
                <p class="card-text text-center">Silahkan klik tombol di bawah untuk melihat tampilan website sebagai user</p>
                <a href="{{ route('user.beranda.index') }}" class="btn btn-info d-block col-6 mx-auto">Lihat</a>
            </div>
        </div>
    </div>
@endsection
