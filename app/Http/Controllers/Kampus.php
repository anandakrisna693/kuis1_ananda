<?php

namespace App\Http\Controllers;

class Kampus extends Controller
{
    public function index()
    {
        $namaKampus = 'Politeknik Negeri Malang PSDKU Pamekasan';

        $deskripsi = 'Politeknik Negeri Malang PSDKU Pamekasan merupakan salah satu kampus yang menyediakan pendidikan vokasi dengan berbagai program studi yang dirancang untuk membekali mahasiswa dengan pengetahuan dan keterampilan sesuai dengan kebutuhan dunia kerja. Proses pembelajaran tidak hanya berfokus pada teori, tetapi juga memberikan kesempatan kepada mahasiswa untuk mengembangkan kemampuan praktis melalui berbagai kegiatan pembelajaran dan praktik.
         Dengan lingkungan akademik yang mendukung, kampus ini menjadi salah satu pilihan bagi mahasiswa yang ingin meningkatkan kemampuan, pengalaman, serta kompetensi di bidang yang diminati. Melalui pendidikan yang diberikan, mahasiswa diharapkan mampu menjadi lulusan yang kompeten, mandiri, dan siap menghadapi berbagai tantangan di dunia kerja maupun perkembangan teknologi di masa depan.';

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
