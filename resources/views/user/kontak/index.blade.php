@extends('user.layouts.main')

@php
    $title = 'Kontak';
@endphp

@section('title')
    Kontak Website
@endsection

@section('navbar')
    @include('user.partials.navbar')
@endsection

@section('content')
    <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 mx-auto mb-5 border border-primary"
        style="margin-top: 125px; border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-person-circle"></i>
            KONTAK WEBSITE
        </h1>

        <article class="col-10 mx-auto my-4">
            <h1 class="text-primary fs-3 fw-bold text-center mx-auto my-5 p-3 shadow-lg"
                style="width: max-content; border-radius: 10px; transform: rotate(352deg)">
                TECH <br> NEWS
            </h1>
            <p class="card-text mb-1">
                <span class="fw-semibold">Nama Website :</span>
                <span class="fw-semibold text-primary">TECH NEWS</span>
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Pendiri :</span>
                M. Revanza Yuzar
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Negara :</span>
                Indonesia
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Provinsi :</span>
                Aceh
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Kabupaten :</span>
                Pidie Jaya
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Kecamatan :</span>
                Meurah Dua
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Desa :</span>
                Beuringen
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Email :</span>
                tech_news@gmail.com
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Admin 1 :</span>
                0852-0001-0001
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Admin 2 :</span>
                0852-0002-0002
            </p>
            <p class="card-text mb-1">
                <span class="fw-semibold">Admin 3 :</span>
                0852-0003-0003
            </p>
        </article>
    </div>
@endsection
