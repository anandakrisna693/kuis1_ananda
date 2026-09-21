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

            </div>

        </div>

        </div>

    </div>

@endsection