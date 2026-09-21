<div>
  @extends('layouts.app')

@section('title', 'Kampus')

@section('content')

    <h2>Selamat Datang di {{ $namaKampus }}</h2>

    <p>
        Selamat datang di website resmi kampus polinema.
        Website ini menyediakan informasi mengenai
        kampus dan program studi yang tersedia.
    </p>

    <h3>Program Studi </h3>
     @foreach ($jurusan as $j)
    <h3>{{ $j }}</h3>
    <p>Program studi yang dirancang untuk
        mengembangkan pengetahuan dan keterampilan
        mahasiswa.</p>
</div>
