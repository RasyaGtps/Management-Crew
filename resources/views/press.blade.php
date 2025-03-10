<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Press Kit - Management Crew</title>
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

        .resource-card {
            transition: all 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
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
                    Press <span class="gradient-text">Kit</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Sumber daya lengkap untuk media dan jurnalis yang ingin menulis tentang Management Crew
                </p>
            </div>
        </div>
    </div>

    <!-- Quick Facts -->
    <div class="py-16 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12">Fakta Singkat</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-[#2a2a2a] p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-2">100K+</h3>
                    <p class="text-gray-400">Pengguna Aktif</p>
                </div>

                <div class="bg-[#2a2a2a] p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-2">50K+</h3>
                    <p class="text-gray-400">Proyek Selesai</p>
                </div>

                <div class="bg-[#2a2a2a] p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-2">20+</h3>
                    <p class="text-gray-400">Negara</p>
                </div>

                <div class="bg-[#2a2a2a] p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-2">50+</h3>
                    <p class="text-gray-400">Karyawan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Press Releases -->
    <div class="py-16 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12">Siaran Pers Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Press Release 1 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl resource-card">
                    <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Pengumuman</span>
                    <h3 class="text-xl font-semibold text-white mt-4 mb-3">Management Crew Mencapai 100.000 Pengguna Aktif</h3>
                    <p class="text-gray-400 mb-4">Platform manajemen tim terkemuka mencapai tonggak penting dalam pertumbuhan pengguna global.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-400 text-sm">15 Mar 2024</p>
                        <a href="#" class="text-blue-500 hover:text-blue-400 transition">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- Press Release 2 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl resource-card">
                    <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Produk</span>
                    <h3 class="text-xl font-semibold text-white mt-4 mb-3">Peluncuran Fitur AI Assistant untuk Manajemen Tim</h3>
                    <p class="text-gray-400 mb-4">Inovasi terbaru dalam platform yang mengintegrasikan kecerdasan buatan untuk meningkatkan produktivitas tim.</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-400 text-sm">10 Mar 2024</p>
                        <a href="#" class="text-blue-500 hover:text-blue-400 transition">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Assets -->
    <div class="py-16 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12">Aset Brand</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Logo Pack -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl resource-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Logo Pack</h3>
                    <p class="text-gray-400 mb-6">Logo dalam berbagai format dan ukuran (AI, SVG, PNG)</p>
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition inline-block">Download</a>
                </div>

                <!-- Brand Guidelines -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl resource-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Brand Guidelines</h3>
                    <p class="text-gray-400 mb-6">Panduan lengkap penggunaan brand Management Crew (PDF)</p>
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition inline-block">Download</a>
                </div>

                <!-- Product Screenshots -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl resource-card">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Screenshot Pack</h3>
                    <p class="text-gray-400 mb-6">Koleksi screenshot produk berkualitas tinggi (PNG, JPG)</p>
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition inline-block">Download</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="py-16 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <div class="bg-[#2a2a2a] rounded-2xl p-8 md:p-12">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-4">Kontak Media</h2>
                    <p class="text-gray-400 mb-8">Untuk pertanyaan media dan permintaan wawancara, silakan hubungi tim kami</p>
                    <div class="flex flex-col md:flex-row justify-center gap-6">
                        <div class="flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:press@mc.com" class="text-blue-500 hover:text-blue-400 transition">press@mc.com</a>
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <a href="tel:+6281234567890" class="text-blue-500 hover:text-blue-400 transition">+62 812 3456 7890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html> 