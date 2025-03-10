<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - Management Crew</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1a1a1a;
        }

        .gradient-text {
            background: linear-gradient(to right, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .team-card {
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .achievement-card {
            transition: all 0.3s ease;
        }

        .achievement-card:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body class="antialiased">
    @include('layouts.navigation')

    <!-- Hero Section -->
    <div class="pt-24 bg-[#1a1a1a]">
        <div class="container mx-auto px-6 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Tentang <span class="gradient-text">Management Crew</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Membangun masa depan manajemen tim yang lebih baik melalui teknologi dan inovasi
                </p>
            </div>
        </div>
    </div>

    <!-- Story Section with Stats -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">Perjalanan Kami</h2>
                    <div class="space-y-6 text-gray-400">
                        <p class="leading-relaxed">
                            Management Crew lahir dari visi untuk merevolusi cara tim bekerja sama. Didirikan pada tahun 2023, kami memulai dengan misi sederhana: membuat manajemen tim lebih efisien dan menyenangkan.
                        </p>
                        <p class="leading-relaxed">
                            Dalam perjalanan kami, kami telah belajar bahwa kesuksesan tim tidak hanya tentang alat yang tepat, tetapi juga tentang membangun budaya kolaborasi yang kuat.
                        </p>
                        <div class="grid grid-cols-2 gap-6 mt-8">
                            <div class="bg-[#2a2a2a] p-6 rounded-lg achievement-card">
                                <div class="text-3xl font-bold text-blue-500 mb-2">10K+</div>
                                <div class="text-gray-300">Tim Aktif</div>
                            </div>
                            <div class="bg-[#2a2a2a] p-6 rounded-lg achievement-card">
                                <div class="text-3xl font-bold text-blue-500 mb-2">95%</div>
                                <div class="text-gray-300">Tingkat Kepuasan</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="bg-[#2a2a2a] p-4 rounded-lg">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Team Collaboration" class="rounded-lg w-full h-40 object-cover">
                        </div>
                        <div class="bg-[#2a2a2a] p-4 rounded-lg">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf" alt="Office Culture" class="rounded-lg w-full h-48 object-cover">
                        </div>
                    </div>
                    <div class="space-y-4 mt-8">
                        <div class="bg-[#2a2a2a] p-4 rounded-lg">
                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4" alt="Team Meeting" class="rounded-lg w-full h-48 object-cover">
                        </div>
                        <div class="bg-[#2a2a2a] p-4 rounded-lg">
                            <img src="https://images.unsplash.com/photo-1552581234-26160f608093" alt="Work Environment" class="rounded-lg w-full h-40 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Visi</h3>
                    <p class="text-gray-400">
                        Menjadi platform manajemen tim terdepan yang memungkinkan setiap organisasi mencapai potensi maksimal mereka melalui kolaborasi yang efektif.
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Misi</h3>
                    <ul class="text-gray-400 space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Mengembangkan solusi inovatif untuk manajemen tim
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Meningkatkan produktivitas dan efisiensi kerja
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Mendorong kolaborasi yang lebih baik antar tim
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Perjalanan Kami</h2>
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Timeline Item 1 -->
                    <div class="bg-[#2a2a2a] p-6 rounded-lg">
                        <div class="text-blue-500 font-semibold mb-2">2023 Q1</div>
                        <h3 class="text-white font-bold mb-2">Awal Mula</h3>
                        <p class="text-gray-400">Management Crew didirikan dengan visi mengubah cara tim berkolaborasi.</p>
                    </div>
                    <!-- Timeline Item 2 -->
                    <div class="bg-[#2a2a2a] p-6 rounded-lg md:mt-12">
                        <div class="text-blue-500 font-semibold mb-2">2023 Q2</div>
                        <h3 class="text-white font-bold mb-2">Peluncuran Beta</h3>
                        <p class="text-gray-400">Versi beta diluncurkan dengan fitur-fitur dasar manajemen tim.</p>
                    </div>
                    <!-- Timeline Item 3 -->
                    <div class="bg-[#2a2a2a] p-6 rounded-lg">
                        <div class="text-blue-500 font-semibold mb-2">2023 Q3</div>
                        <h3 class="text-white font-bold mb-2">Ekspansi Tim</h3>
                        <p class="text-gray-400">Tim berkembang dan mencapai 1000+ pengguna aktif pertama.</p>
                    </div>
                    <!-- Timeline Item 4 -->
                    <div class="bg-[#2a2a2a] p-6 rounded-lg md:mt-12">
                        <div class="text-blue-500 font-semibold mb-2">2023 Q4</div>
                        <h3 class="text-white font-bold mb-2">Inovasi Baru</h3>
                        <p class="text-gray-400">Peluncuran fitur-fitur baru dan peningkatan performa platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Tim Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-[#2a2a2a] rounded-xl p-6 team-card">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="CEO" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-white text-center mb-2">Ahmad Rizki</h3>
                    <p class="text-blue-500 text-center mb-4">CEO & Founder</p>
                    <p class="text-gray-400 text-center">Memimpin visi dan strategi Management Crew sejak awal.</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-[#2a2a2a] rounded-xl p-6 team-card">
                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="CTO" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-white text-center mb-2">Sarah Diana</h3>
                    <p class="text-blue-500 text-center mb-4">CTO</p>
                    <p class="text-gray-400 text-center">Mengawasi pengembangan teknologi dan inovasi produk.</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-[#2a2a2a] rounded-xl p-6 team-card">
                    <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="COO" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-white text-center mb-2">Rudi Hartono</h3>
                    <p class="text-blue-500 text-center mb-4">COO</p>
                    <p class="text-gray-400 text-center">Mengelola operasional dan pertumbuhan bisnis.</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Nilai-Nilai Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Kolaborasi</h3>
                    <p class="text-gray-400">Kami percaya kekuatan tim lebih besar dari individu</p>
                </div>

                <!-- Value 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Inovasi</h3>
                    <p class="text-gray-400">Selalu mencari cara baru untuk berkembang</p>
                </div>

                <!-- Value 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Kepercayaan</h3>
                    <p class="text-gray-400">Membangun hubungan berdasarkan kepercayaan</p>
                </div>

                <!-- Value 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Dampak</h3>
                    <p class="text-gray-400">Membuat perubahan positif bagi pengguna</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-8">Bergabung dengan Kami</h2>
                <p class="text-gray-400 mb-8">
                    Kami selalu mencari talenta berbakat yang ingin membuat dampak positif. Lihat posisi yang tersedia atau hubungi kami untuk informasi lebih lanjut.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('karir') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg transition-colors">
                        Lihat Karir
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white px-8 py-3 rounded-lg transition-colors">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html> 