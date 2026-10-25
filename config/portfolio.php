<?php

/*
 * Semua isi ECV ada di sini. Ubah angka/teks di file ini saja,
 * tampilannya ikut berubah (pengganti ecv_data.xlsx di versi Streamlit).
 */
return [
    'name'    => 'Muhammad Rafly Ajiansyah',
    'role'    => 'Fullstack Developer',
    'title'   => 'Information Systems Student & Fullstack Developer',
    'tagline' => 'Empowering Future Digital Professionals',
    'badge'   => 'SISTECH Portfolio Expo 2026',
    'photo'   => 'images/profile.jpg',          // taruh foto di public/images/profile.jpg
    'cv_file' => 'files/cv-alif-amunawwar.pdf', // taruh CV di public/files/

    'about' => 'Saya adalah mahasiswa Sistem Informasi semester 7 yang fokus pada pengembangan backend menggunakan framework Laravel dan Python, serta memiliki minat mendalam pada optimasi database. Saya berdedikasi untuk menciptakan arsitektur kode yang bersih, aman, dan efisien untuk mendukung performa sistem terbaik.',

    // Kartu "Core Tech Stack" (di screenshot terlihat Laravel 12 & Flutter; sisanya silakan sesuaikan)
    'core_stack' => [
        ['name' => 'Laravel 12', 'desc' => 'Backend API Architecture', 'icon' => 'laravel/laravel-original.svg', 'color' => '239,68,68'],
        ['name' => 'Flutter',    'desc' => 'Cross-platform Mobile',    'icon' => 'flutter/flutter-original.svg', 'color' => '56,189,248'],
        ['name' => 'Python',     'desc' => 'Data & Scripting',         'icon' => 'python/python-original.svg',   'color' => '250,204,21'],
        ['name' => 'MySQL',      'desc' => 'Database Optimization',    'icon' => 'mysql/mysql-original.svg',     'color' => '56,189,248'],
    ],

    'contacts' => [
        ['icon' => 'fa-brands fa-whatsapp',  'text' => '0812-8422-9918',        'url' => 'https://wa.me/6281284229918'],
        ['icon' => 'fa-solid fa-envelope',   'text' => 'raplyajiansyah@gmail.com', 'url' => 'mailto:alifamunawwar16@gmail.com'],
        ['icon' => 'fa-brands fa-github',    'text' => 'Raplyyzz',               'url' => 'https://github.com/alip2216'],
        ['icon' => 'fa-brands fa-instagram', 'text' => '@rplyjii',            'url' => 'https://instagram.com/rplyjii'],
        ['icon' => 'fa-brands fa-linkedin', 'text' => 'Muhammad Rafly Ajiansyah', 'url' => 'https://www.linkedin.com/in/muhammad-rafly-ajiansyah-73a3a4278?utm_source=share_via&utm_content=profile&utm_medium=member_android'],
    ],

    'skills' => ['Laravel 12', 'Python', 'MySQL', 'SQLite', 'AJAX'],

    // IPK per semester
    'ipk' => [
        'semesters' => [1 => 3.22, 2 => 3.68, 3 => 3.35, 4 => 3.22, 5 => 3.24, 6=> 2.96],
        'status'    => 'Stabil',
    ],

    'transcripts' => [
        1 => '#', // ganti dengan link transkrip (Google Drive dll)
        2 => '#',
        3 => '#',
    ],

    'projects' => [
        [
            'title' => 'Kedai Kopi',
            'badge' => 'PROYEK UTAMA',
            'desc'  => 'Sistem informasi kedai kopi berbasis web.',
            'tags'  => ['Laravel', 'MySQL', 'AJAX', 'Javascript'],
            'url'   => null,
        ],
    ],

        // Portofolio Proyek Lainnya (grid 2 kolom)
    'other_projects' => [
        [
            'title' => 'Kalkulator BMI & Rekomendasi Produk',
            'tags'  => ['Python', 'Algoritma'],
            'desc'  => 'Mengembangkan aplikasi kalkulator BMI yang dilengkapi sistem rekomendasi produk berbasis hasil perhitungan.',
        ],
        [
            'title' => 'Sistem Database Inventaris',
            'tags'  => ['MySQL', 'ERD', 'LRS'],
            'desc'  => 'Merancang dan mengimplementasikan basis data untuk pengelolaan inventaris barang dengan model data yang relasional.',
        ],
        [
            'title' => 'Admin Dashboard Master CRUD',
            'tags'  => ['Laravel 12', 'MySQL'],
            'desc'  => 'Membangun dashboard admin untuk manajemen data utama dengan fitur Create, Read, Update, Delete (CRUD).',
        ],
        [
            'title' => 'Afsan Klinik & API Integration',
            'tags'  => ['Laravel 11', 'REST API', 'VS Code'],
            'desc'  => 'Mengembangkan sistem manajemen klinik dengan backend Laravel 12 yang menyediakan API untuk aplikasi mobile.',
        ],
        [
            'title' => 'SIKAHIL (Sistem Kendaraan Hilang)',
            'tags'  => ['Laravel 12', 'Flutter', 'REST API'],
            'desc'  => 'Sistem pelaporan kendaraan hilang berbasis web dan mobile untuk mempermudah masyarakat dan pihak kepolisian.',
        ],
        [
            'title' => 'Sistem Informasi Hotel',
            'tags'  => ['Laravel 12', 'Vue.js', 'MySQL', 'REST API'],
            'desc'  => 'Membangun sistem reservasi hotel real-time dengan arsitektur Decoupled (SPA).',
        ],
    ],

        // Lisensi & Sertifikasi (isi 'url' dengan link sertifikat, mis. Google Drive)
    'certificates' => [
        [
            'title'  => 'Workshop dan Uji Kompetensi Basis Data',
            'issuer' => 'G2 Academy',
            'year'   => 2025,
            'desc'   => 'Lulus uji kompetensi sistem basis data berbasis industri.',
            'url'    => '#',
        ],
        [
            'title'  => 'Webinar Edukasi & Inklusi Pasar Modal',
            'issuer' => 'UBSI',
            'year'   => 2024,
            'desc'   => 'Partisipasi aktif dalam webinar mengenai edukasi dan inklusi pasar modal.',
            'url'    => '#',
        ],
        [
            'title'  => 'Kunjungan Peneliti Muda BRIN',
            'issuer' => 'BRIN',
            'year'   => 2025,
            'desc'   => 'Partisipasi dalam program Kunjungan Peneliti Muda di Kawasan Sains & Teknologi Samaun Samadikun.',
            'url'    => '#',
        ],
        [
            'title'  => 'Seminar Akselerasi Transformasi Digital',
            'issuer' => 'UBSI',
            'year'   => 2024,
            'desc'   => 'Partisipasi dalam seminar mengenai peran transformasi digital bagi kemajuan Indonesia.',
            'url'    => '#',
        ],
    ],
];
