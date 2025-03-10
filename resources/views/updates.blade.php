<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Updates - Management Crew</title>
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

        .update-card {
            transition: all 0.3s ease;
        }

        .update-card:hover {
            transform: translateY(-5px);
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #3b82f6, transparent);
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
                    Pembaruan <span class="gradient-text">Platform</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Temukan fitur-fitur terbaru dan perbaikan yang kami lakukan untuk meningkatkan pengalaman Anda
                </p>
            </div>
        </div>
    </div>

    <!-- Latest Update -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <div class="bg-[#2a2a2a] p-8 rounded-xl border border-blue-500/30">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mr-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-blue-500 font-semibold">Versi Terbaru</span>
                        <h2 class="text-2xl font-bold text-white">v2.5.0 - Maret 2024</h2>
                    </div>
                </div>
                <div class="space-y-4 text-gray-400">
                    <p class="text-lg">Pembaruan besar dengan fitur-fitur baru yang ditunggu-tunggu!</p>
                    <ul class="space-y-2 ml-6">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Integrasi dengan Google Calendar dan Outlook
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Sistem notifikasi yang ditingkatkan
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Peningkatan performa dashboard
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Timeline -->
    <div class="py-20 bg-[#1a1a1a] relative">
        <div class="container mx-auto px-6">
            <div class="relative">
                <div class="timeline-line"></div>
                
                <!-- Update March 2024 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                        <div class="flex items-center mb-6">
                            <span class="text-sm text-blue-500">1 Maret 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4">v2.4.0 - Peningkatan UI/UX</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li>• Desain antarmuka yang lebih modern</li>
                            <li>• Navigasi yang lebih intuitif</li>
                            <li>• Mode gelap yang diperbarui</li>
                        </ul>
                    </div>
                    <div></div>
                </div>

                <!-- Update February 2024 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    <div></div>
                    <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                        <div class="flex items-center mb-6">
                            <span class="text-sm text-blue-500">15 Februari 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4">v2.3.0 - Fitur Kolaborasi</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li>• Chat tim real-time</li>
                            <li>• Berbagi file yang ditingkatkan</li>
                            <li>• Komentar pada tugas</li>
                        </ul>
                    </div>
                </div>

                <!-- Update January 2024 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                        <div class="flex items-center mb-6">
                            <span class="text-sm text-blue-500">30 Januari 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4">v2.2.0 - Analitik & Laporan</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li>• Dashboard analitik baru</li>
                            <li>• Laporan kinerja tim</li>
                            <li>• Ekspor data ke Excel</li>
                        </ul>
                    </div>
                    <div></div>
                </div>

                <!-- Update December 2023 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div></div>
                    <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                        <div class="flex items-center mb-6">
                            <span class="text-sm text-blue-500">15 Desember 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4">v2.1.0 - Keamanan</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li>• Autentikasi dua faktor</li>
                            <li>• Enkripsi end-to-end</li>
                            <li>• Log aktivitas yang ditingkatkan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coming Soon -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Akan Datang</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Aplikasi Mobile</h3>
                    <p class="text-gray-400">Akses Management Crew dari perangkat mobile Anda dengan aplikasi native untuk iOS dan Android.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">AI Assistant</h3>
                    <p class="text-gray-400">Asisten AI pintar untuk membantu mengoptimalkan alur kerja dan produktivitas tim.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl update-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Marketplace</h3>
                    <p class="text-gray-400">Ekosistem plugin dan integrasi untuk memperluas kemampuan platform sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Tetap Update</h2>
            <p class="text-gray-400 mb-10 max-w-2xl mx-auto">
                Berlangganan newsletter kami untuk mendapatkan informasi terbaru tentang pembaruan dan fitur yang akan datang
            </p>
            <form class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input type="email" placeholder="Email Anda" class="flex-1 bg-[#2a2a2a] text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html> 