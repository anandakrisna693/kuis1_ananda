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

        $keunggulan = [
            [
                'nama' => 'Fasilitas',
                'deskripsi' => 'Memiliki fasilitas yang mendukung kegiatan belajar mahasiswa sehingga mahasiswa tidak kesulitan belajar.',
            ],
            [
                'nama' => 'Pembelajaran',
                'deskripsi' => 'Kegiatan pembelajaran menggabungkan teori dan praktik yang membuat mahasiswa jadi faham teori maupun praktik.',
            ],
            [
                'nama' => 'Lingkungan',
                'deskripsi' => 'Lingkungan kampus mendukung mahasiswa dalam belajar dan berkembang.',
            ],
            [
                'nama' => 'Dosen',
                'deskripsi' => 'Didukung oleh dosen yang membantu mahasiswa dalam proses pembelajaran.',
            ],
            [
                'nama' => 'Kerja Sama',
                'deskripsi' => 'Mendorong mahasiswa untuk bekerja sama dalam kegiatan pembelajaran dan tugas.',
            ],
            [
                'nama' => 'Pengembangan Mahasiswa',
                'deskripsi' => 'Mahasiswa dapat mengembangkan kemampuan melalui berbagai kegiatan di kampus.',
            ],
        ];

        return view('kampus', compact(
            'namaKampus',
            'deskripsi',
            'jurusan',
            'keunggulan'
        ));
    }
}
