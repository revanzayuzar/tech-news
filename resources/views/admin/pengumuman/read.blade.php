@extends('admin.layouts.main')

@php
    $title = 'Pengumuman';
@endphp

@section('title')
    Dashboard | Baca Pengumuman
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-sm-9 col-xl-8 mx-auto border border-primary" style="border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-eye"></i>
            BACA PENGUMUMAN
        </h1>

        <article class="col-11 mx-auto my-4">
            <h1 class="fs-5 text-center mb-5">{{ $pengumuman->judul_pengumuman }}</h1>
            <p class="card-text mb-0"><span class="fw-semibold">Penulis :</span> {{ $pengumuman->penulis }}</p>
            <p class="card-text mb-0"><span class="fw-semibold">Tanggal Upload :</span> {{ $pengumuman->tanggal_upload }}</p>
            <p class="card-text mt-3 mb-5">{{ $pengumuman->isi_pengumuman }}</p>

            <div class="text-center mb-3 pt-3 border-top">
                <form action="{{ route('admin.pengumuman.edit', $pengumuman->id) }}" method="GET">
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                        <span>Edit Pengumuman</span>
                    </button>
                </form>
            </div>

            <div class="text-center mb-5">
                <form action="{{ route('admin.pengumuman.destroy', $pengumuman->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-trash3"></i>
                        <span>Hapus Pengumuman</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-danger border-3">
                                <div class="modal-header bg-danger text-light border-bottom-0">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        <i class="bi bi-trash3"></i>
                                        HAPUS PENGUMUMAN
                                    </h1>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <i class="bi bi-exclamation-circle text-danger" style="font-size: 50px"></i>
                                    <p>Apakah Anda yakin ingin menghapus Pengumuman?</p>
                                </div>
                                <div class="modal-footer border-top-0">
                                    <button type="button" class="btn btn-success"
                                        data-bs-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="text-center">
                <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-primary">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </article>
    </div>
@endsection
