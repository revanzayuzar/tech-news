@extends('admin.layouts.main')

@php
    $title = 'Berita';
@endphp

@section('title')
    Dashboard | Baca Berita
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-sm-9 col-xl-8 mx-auto border border-primary" style="border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-eye"></i>
            BACA BERITA
        </h1>

        <article class="col-11 mx-auto my-4">
            <h1 class="fs-5 text-center mb-0">{{ $berita->judul_berita }}</h1>
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar" class="my-3"
                style="width: 100%; height: 300px; object-fit: cover">
            <p class="card-text mb-0"><span class="fw-semibold">Sumber :</span> {{ $berita->sumber }}</p>
            <p class="card-text mb-0"><span class="fw-semibold">Penulis :</span> {{ $berita->penulis }}</p>
            <p class="card-text mb-0"><span class="fw-semibold">Tanggal Upload :</span> {{ $berita->tanggal_upload }}</p>
            <p class="card-text mt-3 mb-5">{{ $berita->isi_berita }}</p>

            <div class="text-center mb-3 pt-3 border-top">
                <form action="{{ route('admin.berita.edit', $berita->id) }}" method="GET">
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                        <span>Edit Berita</span>
                    </button>
                </form>
            </div>

            <div class="text-center mb-5">
                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-trash3"></i>
                        <span>Hapus Berita</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border border-danger">
                                <div class="modal-header bg-danger text-light border-bottom-0">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        <i class="bi bi-trash3"></i>
                                        HAPUS BERITA
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <i class="bi bi-exclamation-circle text-danger" style="font-size: 50px"></i>
                                    <p>Apakah Anda yakin ingin menghapus Berita?</p>
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
                <a href="{{ route('admin.berita.index') }}" class="btn btn-primary">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </article>
    </div>
@endsection
