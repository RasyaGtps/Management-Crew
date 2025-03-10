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
    </style>
</head>

<body class="antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-[#1a1a1a]/80 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-white">MC</a>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-300 hover:text-white transition">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Register</a>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>

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

    <!-- Story Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-8">Cerita Kami</h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    Management Crew didirikan pada tahun 2023 dengan visi untuk memudahkan tim dan organisasi dalam mengelola pekerjaan mereka. Kami percaya bahwa setiap tim memiliki potensi untuk mencapai hasil luar biasa dengan alat yang tepat.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    Sejak awal, kami telah membantu ribuan tim meningkatkan produktivitas dan kolaborasi mereka. Kami terus berinovasi dan mengembangkan platform kami berdasarkan masukan dari pengguna setia kami.
                </p>
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

    <!-- Team Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Tim Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-[#2a2a2a] rounded-xl p-6 team-card">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="CEO" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-white text-center mb-2">Ahmad Rizki</h3>
                    <p class="text-blue-500 text-center mb-4">CEO & Founder</p>
                    <p class="text-gray-400 text-center">Memimpin visi dan strategi Management Crew sejak awal.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-[#2a2a2a] rounded-xl p-6 team-card">
                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="CTO" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-white text-center mb-2">Sarah Diana</h3>
                    <p class="text-blue-500 text-center mb-4">CTO</p>
                    <p class="text-gray-400 text-center">Mengawasi pengembangan teknologi dan inovasi produk.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-[#2a2a2a] rounded-xl p-6 team-card">
                    <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="COO" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-white text-center mb-2">Rudi Hartono</h3>
                    <p class="text-blue-500 text-center mb-4">COO</p>
                    <p class="text-gray-400 text-center">Mengelola operasional dan pertumbuhan bisnis.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="py-20 bg-[#1a1a1a]">
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

    <!-- Footer -->
    <x-footer />
</body>

</html> 