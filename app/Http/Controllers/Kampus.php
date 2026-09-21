<?php

namespace App\Http\Controllers;

class Kampus extends Controller
{
    public function index()
    {
        $namaKampus = 'Politeknik Negeri Malang PSDKU Pamekasan';

        $deskripsi = 'Politeknik Negeri Malang PSDKU Pamekasan merupakan salah satu kampus yang menyediakan pendidikan vokasi dengan berbagai program studi.';

        $jurusan = [
            'Manajemen Informatika',
            'Teknik Otomotif Elektronik',
            'Akuntansi Manajemen',
        ];

        return view('kampus', compact(
            'namaKampus',
            'deskripsi',
            'jurusan'
        ));
    }
}
