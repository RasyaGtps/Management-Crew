<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Crew</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700" rel="stylesheet" />
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>
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

        .text-glow {
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }

        .card-glow:hover {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }

        .wrapper {
            width: 80vw;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            gap: 10px;
            padding: 2rem 0;
        }

        .stat-box {
            width: 28vmin;
            height: 28vmin;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 1em 0;
            position: relative;
            font-size: 16px;
            border-radius: 1rem;
            background: linear-gradient(145deg, #1e2028, #23252f);
            border: 2px solid transparent;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .stat-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.2),
                    transparent);
            transition: 0.5s;
        }

        .stat-box:hover {
            transform: translateY(-15px);
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
        }

        .stat-box:hover::before {
            left: 100%;
        }

        .stat-icon-wrapper {
            position: relative;
            width: 80px;
            height: 80px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-box i {
            font-size: 2.5em;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 1;
        }

        .stat-icon-glow {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
            filter: blur(10px);
            animation: pulse-glow 2s infinite;
        }

        .stat-box-glow {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
                    rgba(59, 130, 246, 0.1) 0%,
                    transparent 50%);
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
        }

        .stat-box:hover .stat-box-glow {
            opacity: 1;
        }

        .stat-box .num {
            font-size: 3.5em;
            font-weight: 700;
            background: linear-gradient(45deg, #60a5fa, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
            position: relative;
            display: inline-block;
        }

        .stat-box .text {
            color: #94a3b8;
            font-size: 1.2em;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
        }

        .stat-box .static-number {
            font-size: 3.5em;
            font-weight: 700;
            background: linear-gradient(45deg, #60a5fa, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 0;
            animation: fadeIn 0.5s ease-out forwards;
        }

        @keyframes pulse-glow {
            0% {
                transform: scale(0.95);
                opacity: 0.5;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }

            100% {
                transform: scale(0.95);
                opacity: 0.5;
            }
        }

        @keyframes gradient-x {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient-x {
            background-size: 400% 400%;
            animation: gradient-x 15s ease infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .stat-box {
            animation: float 6s ease-in-out infinite;
            animation-delay: calc(var(--animation-order) * 0.2s);
        }

        @keyframes number-increment {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .num.animate {
            animation: number-increment 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }

        .counter-wrapper {
            display: inline-flex;
            align-items: baseline;
        }

        .counter-suffix {
            margin-left: 1px;
        }

        .static-number {
            opacity: 0;
            animation: fadeIn 0.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media screen and (max-width: 1024px) {
            .wrapper {
                width: 85vw;
            }

            .stat-box {
                height: 26vmin;
                width: 26vmin;
                font-size: 12px;
            }
        }

        @media screen and (max-width: 768px) {
            .wrapper {
                width: 90vw;
                flex-wrap: wrap;
                gap: 30px;
            }

            .stat-box {
                width: calc(50% - 40px);
                height: 30vmin;
                font-size: 14px;
            }
        }

        @media screen and (max-width: 480px) {
            .wrapper {
                gap: 15px;
            }

            .stat-box {
                width: 100%;
                height: 25vmin;
                font-size: 8px;
            }
        }
            </style>
    </head>

<body class="antialiased">
    <div class="relative min-h-screen bg-[#1a1a1a]">
        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Hero Section with Animation -->
        <div class="relative pt-24">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 opacity-30"></div>
            <div class="container mx-auto px-6 py-20 relative">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <div class="w-full lg:w-1/2 mb-12 lg:mb-0 animate-fade-in-up">
                        <h1 class="text-5xl lg:text-7xl font-bold text-white mb-8 leading-tight">
                            Manajemen Crew<br>
                            <span class="gradient-text">Lebih Efisien</span>
                        </h1>
                        <p class="text-xl text-gray-400 mb-10">
                            Platform manajemen crew terbaik untuk mengatur dan mengelola tim Anda dengan lebih efektif.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#features" class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                                Mulai Sekarang
                            </a>
                            <a href="#learn-more" class="border border-gray-600 hover:border-blue-500 text-gray-300 hover:text-blue-500 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="relative animate-float">
                            <div class="absolute inset-0 bg-blue-500 rounded-full opacity-20 blur-3xl"></div>
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80"
                                alt="Team Management"
                                class="relative rounded-lg shadow-2xl transform transition hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section with Animation -->
        <div class="py-16 bg-[#121317] relative overflow-hidden">
            <div class="container mx-auto px-6 relative">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4">
                        <span class="text-white">Pencapaian Kami</span>
                    </h2>
                    <p class="text-gray-400 text-lg">Dipercaya oleh berbagai tim di Indonesia</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-[#1e2028] p-6 rounded-lg">
                        <div class="flex items-center justify-center mb-4">
                            <i class="fas fa-users text-blue-500 text-3xl"></i>
                        </div>
                        <div class="text-center">
                            <span class="num block text-4xl font-bold text-white mb-2" data-val="1500">0</span>
                            <span class="text-gray-400">Tim Aktif</span>
                        </div>
                    </div>
                    <div class="bg-[#1e2028] p-6 rounded-lg">
                        <div class="flex items-center justify-center mb-4">
                            <i class="fas fa-user-check text-blue-500 text-3xl"></i>
                        </div>
                        <div class="text-center">
                            <span class="num block text-4xl font-bold text-white mb-2" data-val="25000">0</span>
                            <span class="text-gray-400">Pengguna</span>
                        </div>
                    </div>
                    <div class="bg-[#1e2028] p-6 rounded-lg">
                        <div class="flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-blue-500 text-3xl"></i>
                        </div>
                        <div class="text-center">
                            <span class="num block text-4xl font-bold text-white mb-2" data-val="99">0</span>
                            <span class="text-gray-400">Kepuasan</span>
                        </div>
                    </div>
                    <div class="bg-[#1e2028] p-6 rounded-lg">
                        <div class="flex items-center justify-center mb-4">
                            <i class="fas fa-headset text-blue-500 text-3xl"></i>
                        </div>
                        <div class="text-center">
                            <span class="static-number block text-4xl font-bold text-white mb-2">24/7</span>
                            <span class="text-gray-400">Dukungan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Section: Latest Blog Posts -->
        <div class="py-20 bg-[#1a1a1a]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">
                    <span class="text-white">Blog Terbaru</span>
                </h2>
                <p class="text-gray-400 text-center mb-12">Tips dan wawasan untuk meningkatkan produktivitas tim Anda</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Blog Post 1 -->
                    <div class="bg-[#1e2028] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0" alt="Blog 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-blue-500 mb-2">12 Maret 2024</div>
                            <h3 class="text-xl text-white font-semibold mb-2">7 Cara Efektif Memimpin Tim Remote</h3>
                            <p class="text-gray-400 mb-4">Pelajari strategi terbaik untuk mengelola tim yang bekerja dari jarak jauh...</p>
                            <a href="#" class="text-blue-500 hover:text-blue-400">Baca selengkapnya →</a>
                        </div>
                    </div>

                    <!-- Blog Post 2 -->
                    <div class="bg-[#1e2028] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984" alt="Blog 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-blue-500 mb-2">10 Maret 2024</div>
                            <h3 class="text-xl text-white font-semibold mb-2">Mengoptimalkan Produktivitas dengan Agile</h3>
                            <p class="text-gray-400 mb-4">Implementasi metodologi Agile untuk meningkatkan efisiensi tim...</p>
                            <a href="#" class="text-blue-500 hover:text-blue-400">Baca selengkapnya →</a>
                        </div>
                    </div>

                    <!-- Blog Post 3 -->
                    <div class="bg-[#1e2028] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Blog 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-blue-500 mb-2">8 Maret 2024</div>
                            <h3 class="text-xl text-white font-semibold mb-2">Tips Komunikasi Efektif dalam Tim</h3>
                            <p class="text-gray-400 mb-4">Panduan lengkap untuk meningkatkan komunikasi dalam tim Anda...</p>
                            <a href="#" class="text-blue-500 hover:text-blue-400">Baca selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Section: FAQ -->
        <div class="py-20 bg-[#121317]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">
                    <span class="text-white">Pertanyaan Umum</span>
                </h2>
                <p class="text-gray-400 text-center mb-12">Jawaban untuk pertanyaan yang sering diajukan</p>

                <div class="max-w-3xl mx-auto space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-[#1e2028] rounded-lg p-6">
                        <h3 class="text-lg text-white font-semibold mb-3">Bagaimana cara memulai dengan Management Crew?</h3>
                        <p class="text-gray-400">Anda dapat memulai dengan mendaftar akun gratis. Setelah itu, Anda dapat mengundang anggota tim dan mulai menggunakan fitur-fitur yang tersedia.</p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-[#1e2028] rounded-lg p-6">
                        <h3 class="text-lg text-white font-semibold mb-3">Apakah ada batasan jumlah anggota tim?</h3>
                        <p class="text-gray-400">Tidak ada batasan jumlah anggota tim. Anda dapat menambahkan anggota sesuai kebutuhan dengan biaya yang disesuaikan.</p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-[#1e2028] rounded-lg p-6">
                        <h3 class="text-lg text-white font-semibold mb-3">Apakah data kami aman?</h3>
                        <p class="text-gray-400">Ya, kami menggunakan enkripsi end-to-end dan menyimpan data di server yang aman. Kami juga melakukan backup rutin untuk menjaga keamanan data Anda.</p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-[#1e2028] rounded-lg p-6">
                        <h3 class="text-lg text-white font-semibold mb-3">Apakah ada aplikasi mobile?</h3>
                        <p class="text-gray-400">Ya, kami memiliki aplikasi mobile untuk iOS dan Android yang dapat diunduh gratis di App Store dan Play Store.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Section: Our Clients -->
        <div class="py-20 bg-[#1a1a1a]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">
                    <span class="text-white">Fitur Detail</span>
                </h2>
                <p class="text-gray-400 text-center mb-12">Eksplorasi fitur lengkap untuk tim Anda</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Task Management -->
                    <div class="bg-[#1e2028] p-8 rounded-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Manajemen Tugas</h3>
                        </div>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Buat dan kelola tugas dengan mudah
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Atur prioritas dan deadline
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Tracking progress real-time
                            </li>
                        </ul>
                    </div>

                    <!-- Team Collaboration -->
                    <div class="bg-[#1e2028] p-8 rounded-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Kolaborasi Tim</h3>
                        </div>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Chat tim real-time
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Video conference terintegrasi
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Berbagi file dengan aman
                            </li>
                        </ul>
                    </div>

                    <!-- Time Management -->
                    <div class="bg-[#1e2028] p-8 rounded-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Manajemen Waktu</h3>
                        </div>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Time tracking otomatis
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                Laporan produktivitas
                        </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                Integrasi kalender
                        </li>
                    </ul>
                    </div>

                    <!-- Analytics -->
                    <div class="bg-[#1e2028] p-8 rounded-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2m0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Analitik & Laporan</h3>
                        </div>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Dashboard kinerja tim
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Analisis tren & prediksi
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Laporan kustom
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Section: Case Studies -->
        <div class="py-20 bg-[#121317]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">
                    <span class="text-white">Studi Kasus</span>
                </h2>
                <p class="text-gray-400 text-center mb-12">Bagaimana tim lain memanfaatkan Management Crew</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Case Study 1 -->
                    <div class="bg-[#1e2028] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Case Study 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-blue-500 mb-2">Teknologi</div>
                            <h3 class="text-xl text-white font-semibold mb-2">PT Tech Solutions</h3>
                            <p class="text-gray-400 mb-4">Meningkatkan produktivitas tim development sebesar 60% dalam 3 bulan</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-500">Baca selengkapnya →</span>
                                <span class="text-gray-500">5 menit</span>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 2 -->
                    <div class="bg-[#1e2028] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7" alt="Case Study 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-blue-500 mb-2">E-commerce</div>
                            <h3 class="text-xl text-white font-semibold mb-2">Toko Online Express</h3>
                            <p class="text-gray-400 mb-4">Mengoptimalkan manajemen 100+ karyawan dengan sistem shift</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-500">Baca selengkapnya →</span>
                                <span class="text-gray-500">4 menit</span>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study 3 -->
                    <div class="bg-[#1e2028] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692" alt="Case Study 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="text-sm text-blue-500 mb-2">Startup</div>
                            <h3 class="text-xl text-white font-semibold mb-2">Digital Creative</h3>
                            <p class="text-gray-400 mb-4">Mengelola tim remote dari 5 negara berbeda dengan efektif</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-500">Baca selengkapnya →</span>
                                <span class="text-gray-500">6 menit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Section: Integration -->
        <div class="py-20 bg-[#1a1a1a]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">
                    <span class="text-white">Integrasi</span>
                </h2>
                <p class="text-gray-400 text-center mb-12">Terhubung dengan tools yang Anda gunakan sehari-hari</p>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Integration Item -->
                    <div class="bg-[#1e2028] p-6 rounded-lg flex flex-col items-center">
                        <div class="w-16 h-16 bg-blue-600/10 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-2">Google Calendar</h3>
                        <p class="text-gray-400 text-center text-sm">Sinkronisasi jadwal otomatis</p>
                    </div>

                    <!-- More Integration Items -->
                    <div class="bg-[#1e2028] p-6 rounded-lg flex flex-col items-center">
                        <div class="w-16 h-16 bg-blue-600/10 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-2">Gmail</h3>
                        <p class="text-gray-400 text-center text-sm">Integrasi email langsung</p>
                    </div>

                    <div class="bg-[#1e2028] p-6 rounded-lg flex flex-col items-center">
                        <div class="w-16 h-16 bg-blue-600/10 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-2">Slack</h3>
                        <p class="text-gray-400 text-center text-sm">Notifikasi real-time</p>
                    </div>

                    <div class="bg-[#1e2028] p-6 rounded-lg flex flex-col items-center">
                        <div class="w-16 h-16 bg-blue-600/10 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2m0 0V9a2 2 0 012-2h2a2 2 0 012 2m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-2">Jira</h3>
                        <p class="text-gray-400 text-center text-sm">Tracking tugas terintegrasi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section with Hover Effects -->
        <div id="features" class="py-20 bg-[#222222]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl lg:text-5xl font-bold text-center mb-4">
                    <span class="gradient-text">Fitur Unggulan</span>
                </h2>
                <p class="text-gray-400 text-center mb-16 text-lg">Tingkatkan produktivitas tim Anda dengan fitur-fitur canggih</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Feature 1 -->
                    <div class="bg-gradient-to-br from-[#2a2a2a] to-[#323232] p-8 rounded-xl hover:transform hover:-translate-y-2 transition duration-300 border border-gray-800 hover:border-blue-500/50 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-blue-400 transition">Manajemen Tim</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition">Kelola tim Anda dengan mudah dan efisien. Atur jadwal, tugas, dan kolaborasi dalam satu platform.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-gradient-to-br from-[#2a2a2a] to-[#323232] p-8 rounded-xl hover:transform hover:-translate-y-2 transition duration-300 border border-gray-800 hover:border-blue-500/50 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-blue-400 transition">Tracking Tugas</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition">Pantau progress tugas secara real-time. Dapatkan laporan dan analisis kinerja tim Anda.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-gradient-to-br from-[#2a2a2a] to-[#323232] p-8 rounded-xl hover:transform hover:-translate-y-2 transition duration-300 border border-gray-800 hover:border-blue-500/50 group">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4 group-hover:text-blue-400 transition">Penjadwalan</h3>
                        <p class="text-gray-400 group-hover:text-gray-300 transition">Buat dan kelola jadwal dengan mudah. Sinkronisasi otomatis dengan kalender tim Anda.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Section -->
        <div class="py-20 bg-[#1f1f1f]">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl lg:text-5xl font-bold text-center mb-4">
                    <span class="gradient-text">Testimoni</span>
                </h2>
                <p class="text-gray-400 text-center mb-16 text-lg">Apa kata mereka tentang Management Crew</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-[#2a2a2a] p-8 rounded-xl border border-gray-800">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Ahmad Rizki" class="w-12 h-12 rounded-full object-cover">
                            <div class="ml-4">
                                <div class="text-white font-semibold">Ahmad Rizki</div>
                                <div class="text-gray-400">Project Manager</div>
                            </div>
                        </div>
                        <p class="text-gray-300">"Platform ini sangat membantu tim kami dalam mengelola proyek. Fitur-fiturnya lengkap dan mudah digunakan."</p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-[#2a2a2a] p-8 rounded-xl border border-gray-800">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah Diana" class="w-12 h-12 rounded-full object-cover">
                            <div class="ml-4">
                                <div class="text-white font-semibold">Sarah Diana</div>
                                <div class="text-gray-400">Team Leader</div>
                            </div>
                        </div>
                        <p class="text-gray-300">"Tracking tugas menjadi lebih mudah dan transparan. Tim kami menjadi lebih produktif."</p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-[#2a2a2a] p-8 rounded-xl border border-gray-800">
                        <div class="flex items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rudi Hartono" class="w-12 h-12 rounded-full object-cover">
                            <div class="ml-4">
                                <div class="text-white font-semibold">Rudi Hartono</div>
                                <div class="text-gray-400">CEO</div>
                            </div>
                        </div>
                        <p class="text-gray-300">"Investasi terbaik untuk manajemen tim. ROI yang kami dapatkan sangat memuaskan."</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="py-20 bg-gradient-to-r from-blue-600 to-blue-700">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl lg:text-5xl font-bold text-white mb-8">Siap Untuk Memulai?</h2>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Bergabunglah dengan ribuan tim yang telah meningkatkan produktivitas mereka dengan Management Crew
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-blue-50 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                        Daftar Sekarang
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white hover:bg-white/10 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

        <x-footer />
    </div>

    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }

        .counter-wrapper {
            display: inline-flex;
            align-items: baseline;
        }

        .counter-suffix {
            margin-left: 1px;
        }

        .static-number {
            opacity: 0;
            animation: fadeIn 0.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.stat-box').forEach((box, index) => {
                box.style.setProperty('--animation-order', index);

                box.addEventListener('mousemove', (e) => {
                    const rect = box.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / box.offsetWidth) * 100;
                    const y = ((e.clientY - rect.top) / box.offsetHeight) * 100;
                    box.style.setProperty('--mouse-x', `${x}%`);
                    box.style.setProperty('--mouse-y', `${y}%`);
                });
            });

            let valueDisplays = document.querySelectorAll(".num");
            let interval = 2000;

            valueDisplays.forEach((valueDisplay) => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                let steps = 60;
                let increment = endValue / steps;
                let duration = interval / steps;

                let counter = setInterval(function() {
                    startValue += increment;
                    if (startValue > endValue) {
                        startValue = endValue;
                    }

                    let formattedNumber = Math.floor(startValue).toLocaleString('id-ID');
                    valueDisplay.textContent = formattedNumber;
                    valueDisplay.classList.add('animate');

                    if (startValue >= endValue) {
                        if (valueDisplay.closest('.stat-box').querySelector('.text').textContent !== 'Kepuasan') {
                            valueDisplay.textContent = endValue.toLocaleString('id-ID') + '+';
                        } else {
                            valueDisplay.textContent = endValue.toLocaleString('id-ID') + '%';
                        }
                        clearInterval(counter);
                        valueDisplay.style.textShadow = '0 0 20px rgba(59, 130, 246, 0.5)';w
                        setTimeout(() => {
                            valueDisplay.style.textShadow = '';
                        }, 500);
                    }
                }, duration);
            });
        });
    </script>
    </body>

</html>