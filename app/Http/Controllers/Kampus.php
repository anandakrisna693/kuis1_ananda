<?php

namespace App\Http\Controllers;

class Kampus extends Controller
{
    public function index()
    {
        $namaKampus = 'Politeknik Negeri Malang PSDKU Pamekasan';

        $deskripsi = 'Politeknik Negeri Malang PSDKU Pamekasan merupakan salah satu kampus yang menyediakan pendidikan vokasi dengan berbagai program studi.';

        $jurusan = [
            [
                'nama' => 'Manajemen Informatika',
                'deskripsi' => 'Mempelajari teknologi informasi, pemrograman, dan pengelolaan sistem informasi.',
            ],
            [
                'nama' => 'Teknik Otomotif Elektronik',
                'deskripsi' => 'Mempelajari teknologi otomotif dan sistem elektronik yang digunakan pada kendaraan.',
            ],
            [
                'nama' => 'Akuntansi Manajemen',
                'deskripsi' => 'Mempelajari pencatatan keuangan dan pengelolaan informasi untuk membantu kegiatan bisnis.',
            ],
        ];

        return view('kampus', compact(
            'namaKampus',
            'deskripsi',
            'jurusan'
        ));
    }
}
