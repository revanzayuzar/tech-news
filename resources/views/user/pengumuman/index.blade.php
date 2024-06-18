@extends('user.layouts.main')

@php
    $title = 'Pengumuman';
@endphp

@section('title')
    Pengumuman
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <style>
        .pengumuman {
            background-color: rgb(250, 250, 250);
        }

        .pengumuman:hover {
            background-color: rgb(240, 240, 240);
            transition: all 0.1s ease-out;
        }
    </style>

    <div class="container" style="margin-top: 111px">
        @forelse ($pengumuman as $item)
            <a href="{{ route('user.pengumuman.read', $item->id) }}" class="pengumuman d-block col-11 mx-auto mb-3 p-3 border border-primary text-dark text-decoration-none"
                style="border-radius: 10px">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-primary">
                            <i class="bi bi-megaphone"></i>
                            <span style="margin-left: 5px">Pengumuman</span>
                        </h5>
                        <p class="fw-semibold mt-3 mb-1">{{ $item->judul_pengumuman }}</p>
                        <small>{{ $item->tanggal_upload }}</small>
                    </div>
                    <i class="bi bi-eye" style="font-size: 25px"></i>
                </div>
            </a>
        @empty
            <div class="d-flex flex-column justify-content-center align-items-center py-5">
                <i class="bi bi-megaphone" style="font-size: 75px"></i>
                Belum Ada Pengumuman.
            </div>
        @endforelse
    </div>
@endsection
