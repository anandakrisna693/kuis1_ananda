@extends('layouts.app')

@section('title', 'Kampus')

@section('content')

{{-- Atas --}}
<section class="bg-primary text-white py-5">
    <div class="container py-4">
        <div class="row align-items-center">

            <div class="col-lg-8">
                <h1 class="display-5 fw-bold mb-3">
                    {{ $namaKampus }}
                </h1>

                <p class="lead mb-0">
                    Selamat datang di website resmi
                    Politeknik Negeri Malang PSDKU Pamekasan.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- Isi utama --}}
<div class="container py-5">

    {{-- Foto utama + Tentang Kampus --}}
    <div class="row align-items-center g-5 mb-5">

        <div class="col-lg-6">
            <img
                src="{{ asset('images/kampus2.jpeg') }}"
                alt="Foto Kampus"
                class="img-fluid rounded-4 shadow w-100"
            >
        </div>

        <div class="col-lg-6">

            <h2 class="fw-bold mb-3">
                Tentang Kampus
            </h2>

            <div class="border-start border-white border-4 ps-3">
                <p class="text-secondary mb-0">
                    {{ $deskripsi }}
                </p>
            </div>

        </div>

    </div>


    {{-- Foto gedung --}}
    <div class="row g-4 mb-5">

        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <img
                    src="{{ asset('images/gedung.jpeg') }}"
                    alt="Gedung Kampus"
                    class="card-img-top rounded-3"
                >
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <img
                    src="{{ asset('images/gedung1.jpeg') }}"
                    alt="Gedung Kampus"
                    class="card-img-top rounded-3"
                >
            </div>
        </div>

    </div>


    {{-- Program Studi --}}
    <section class="mb-5">

        <div class="text-center mb-4">

            <h2 class="fw-bold">
                Program Studi
            </h2>

            <p class="text-secondary">
                Berikut beberapa program studi yang tersedia:
            </p>

        </div>


        <div class="row g-4">

            @foreach ($jurusan as $j)

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center mb-3">

                                <span class="badge bg-primary rounded-circle p-2 me-3">
                                    {{ $loop->iteration }}
                                </span>

                                <h5 class="card-title fw-bold mb-0">
                                    {{ $j['nama'] }}
                                </h5>

                            </div>

                            <p class="card-text text-secondary mb-0">
                                {{ $j['deskripsi'] }}
                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </section>


    {{-- Keunggulan Kampus --}}
    <section>

        <div class="text-center mb-4">

            <h2 class="fw-bold">
                Keunggulan Kampus
            </h2>

            <p class="text-secondary">
                Beberapa keunggulan yang dimiliki kampus.
            </p>

        </div>


        <div class="row g-4">

            @foreach ($keunggulan as $k)

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body p-4">

                            <h5 class="fw-bold text-primary mb-3">
                                {{ $k['nama'] }}
                            </h5>

                            <p class="text-secondary mb-0">
                                {{ $k['deskripsi'] }}
                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

</div>

@endsection