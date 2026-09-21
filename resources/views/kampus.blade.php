@extends('layouts.app')

@section('title', 'Kampus')

@section('content')

    <div class="bagian-atas">

        <h1>{{ $namaKampus }}</h1>

        <p>
            Selamat datang di website resmi
            Politeknik Negeri Malang PSDKU Pamekasan.
        </p>

    </div>


    <div class="isi">

<div class="foto-kampus">

    <img src="{{ asset('images/kampus2.jpeg') }}" alt="Foto Kampus">

</div>

        <div class="tentang">

            <h2>Tentang Kampus</h2>

            <p>
                {{ $deskripsi }}
            </p>

        </div>

        <div class="foto-kampus-dua">

        <div class="foto1">
            <img src="{{ asset('images/gedung.jpeg') }}" alt="Foto Kampus">
        </div>

        <div class="foto2">
            <img src="{{ asset('images/gedung1.jpeg') }}" alt="Foto Kampus">
        </div>

        </div>


        <div class="program">

            <h2>Program Studi</h2>

            <p>
                Berikut beberapa program studi yang tersedia:
            </p>

            <div class="daftar">

               @foreach ($jurusan as $j)

    <div class="card">

        <h3>
            {{ $loop->iteration }}. {{ $j['nama'] }}
        </h3>

        <p>
            {{ $j['deskripsi'] }}
        </p>

    </div>

@endforeach

<div class="keunggulan">

    <h2>Keunggulan Kampus</h2>

    <div class="daftar">

        @foreach ($keunggulan as $k)

            <div class="card">

                <h3>{{ $k['nama'] }}</h3>

                <p>
                    {{ $k['deskripsi'] }}
                </p>

            </div>

        @endforeach

    </div>

</div>

            </div>

        </div>

        </div>

    </div>
    <main>

    <div class="main">
    </div>

    @yield('content')

</main>

@endsection