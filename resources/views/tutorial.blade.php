<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial - Management Crew</title>
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

        .tutorial-card {
            transition: all 0.3s ease;
        }

        .tutorial-card:hover {
            transform: translateY(-5px);
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
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
                    Panduan <span class="gradient-text">Lengkap</span> Management Crew
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Pelajari cara menggunakan Management Crew untuk mengoptimalkan kinerja tim Anda
                </p>
            </div>
        </div>
    </div>

    <!-- Quick Start Guide -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Panduan Cepat</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl tutorial-card">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mb-6 text-white text-xl font-bold">
                        1
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Buat Akun Tim</h3>
                    <p class="text-gray-400">Daftar dan buat akun tim Anda dalam hitungan menit. Atur profil dan preferensi dasar.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl tutorial-card">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mb-6 text-white text-xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Undang Anggota Tim</h3>
                    <p class="text-gray-400">Kirim undangan ke anggota tim dan atur peran serta akses masing-masing.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl tutorial-card">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mb-6 text-white text-xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Mulai Kolaborasi</h3>
                    <p class="text-gray-400">Buat proyek pertama, tetapkan tugas, dan mulai berkolaborasi dengan tim Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Tutorials -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Video Tutorial</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Video 1 -->
                <div class="bg-[#2a2a2a] rounded-xl overflow-hidden tutorial-card">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/placeholder1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl text-white font-semibold mb-2">Memulai dengan Management Crew</h3>
                        <p class="text-gray-400">Panduan dasar untuk pengguna baru dalam menggunakan platform.</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="bg-[#2a2a2a] rounded-xl overflow-hidden tutorial-card">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/placeholder2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl text-white font-semibold mb-2">Fitur-Fitur Lanjutan</h3>
                        <p class="text-gray-400">Pelajari fitur-fitur canggih untuk meningkatkan produktivitas tim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Guides -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Panduan Detail</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Guide 1 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl tutorial-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Pengaturan Tim</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li>• Struktur organisasi</li>
                        <li>• Peran dan izin</li>
                        <li>• Konfigurasi workspace</li>
                    </ul>
                    <a href="#" class="inline-block mt-6 text-blue-500 hover:text-blue-400">Baca selengkapnya →</a>
                </div>

                <!-- Guide 2 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl tutorial-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Manajemen Proyek</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li>• Membuat proyek baru</li>
                        <li>• Tracking progress</li>
                        <li>• Laporan dan analitik</li>
                    </ul>
                    <a href="#" class="inline-block mt-6 text-blue-500 hover:text-blue-400">Baca selengkapnya →</a>
                </div>

                <!-- Guide 3 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl tutorial-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Kolaborasi Tim</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li>• Komunikasi efektif</li>
                        <li>• Berbagi dokumen</li>
                        <li>• Meeting virtual</li>
                    </ul>
                    <a href="#" class="inline-block mt-6 text-blue-500 hover:text-blue-400">Baca selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Pertanyaan Umum</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-[#2a2a2a] rounded-lg p-6">
                    <h3 class="text-lg text-white font-semibold mb-3">Bagaimana cara mengundang anggota tim?</h3>
                    <p class="text-gray-400">Klik tombol "Undang Anggota" di dashboard, masukkan email mereka, dan tentukan peran. Mereka akan menerima email undangan dengan instruksi bergabung.</p>
                </div>
                <div class="bg-[#2a2a2a] rounded-lg p-6">
                    <h3 class="text-lg text-white font-semibold mb-3">Bagaimana cara mengatur notifikasi?</h3>
                    <p class="text-gray-400">Buka menu Pengaturan, pilih "Notifikasi", dan sesuaikan preferensi notifikasi Anda untuk email, desktop, dan mobile.</p>
                </div>
                <div class="bg-[#2a2a2a] rounded-lg p-6">
                    <h3 class="text-lg text-white font-semibold mb-3">Apakah ada aplikasi mobile?</h3>
                    <p class="text-gray-400">Ya, aplikasi mobile tersedia untuk iOS dan Android. Unduh dari App Store atau Play Store dan login dengan akun yang sama.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-8">Butuh Bantuan Lebih?</h2>
            <p class="text-gray-400 mb-10 max-w-2xl mx-auto">
                Tim support kami siap membantu Anda 24/7. Hubungi kami melalui chat atau email.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition">
                    Live Chat
                </a>
                <a href="mailto:support@mc.com" class="bg-transparent border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition">
                    Email Support
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html> 