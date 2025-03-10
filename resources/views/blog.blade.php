<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Management Crew</title>
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

        .blog-card {
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .category-pill {
            transition: all 0.3s ease;
        }

        .category-pill:hover {
            background-color: rgba(59, 130, 246, 0.2);
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
                    Blog <span class="gradient-text">Management Crew</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Temukan wawasan, tips, dan tren terbaru seputar manajemen tim dan teknologi
                </p>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-8 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="category-pill px-6 py-2 bg-blue-600/10 text-blue-500 rounded-full text-sm hover:bg-blue-600/20 transition">Semua</a>
                <a href="#" class="category-pill px-6 py-2 bg-blue-600/10 text-blue-500 rounded-full text-sm hover:bg-blue-600/20 transition">Manajemen Tim</a>
                <a href="#" class="category-pill px-6 py-2 bg-blue-600/10 text-blue-500 rounded-full text-sm hover:bg-blue-600/20 transition">Produktivitas</a>
                <a href="#" class="category-pill px-6 py-2 bg-blue-600/10 text-blue-500 rounded-full text-sm hover:bg-blue-600/20 transition">Remote Work</a>
                <a href="#" class="category-pill px-6 py-2 bg-blue-600/10 text-blue-500 rounded-full text-sm hover:bg-blue-600/20 transition">Teknologi</a>
                <a href="#" class="category-pill px-6 py-2 bg-blue-600/10 text-blue-500 rounded-full text-sm hover:bg-blue-600/20 transition">Tips & Trik</a>
            </div>
        </div>
    </div>

    <!-- Featured Article -->
    <div class="py-16 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <div class="bg-[#2a2a2a] rounded-2xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="relative h-64 md:h-auto">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Featured Article" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-8 md:p-12">
                        <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Manajemen Tim</span>
                        <h2 class="text-2xl md:text-3xl font-bold text-white mt-4 mb-4">7 Strategi Efektif untuk Meningkatkan Kolaborasi Tim Remote</h2>
                        <p class="text-gray-400 mb-6">Pelajari bagaimana tim-tim sukses mengatasi tantangan kolaborasi jarak jauh dan membangun budaya kerja yang produktif dalam era remote work.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Author" class="w-10 h-10 rounded-full">
                                <div class="ml-3">
                                    <p class="text-white text-sm">Sarah Diana</p>
                                    <p class="text-gray-400 text-sm">12 Mar 2024</p>
                                </div>
                            </div>
                            <a href="#" class="text-blue-500 hover:text-blue-400 transition">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Articles -->
    <div class="py-16 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-white mb-12">Artikel Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-[#2a2a2a] rounded-xl overflow-hidden blog-card">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12" alt="Article 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Produktivitas</span>
                        <h3 class="text-xl font-semibold text-white mt-4 mb-3">10 Tools Terbaik untuk Manajemen Proyek di 2024</h3>
                        <p class="text-gray-400 mb-4">Temukan tools yang dapat membantu tim Anda mencapai produktivitas maksimal.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Author" class="w-8 h-8 rounded-full">
                                <p class="text-gray-400 text-sm ml-3">10 Mar 2024</p>
                            </div>
                            <a href="#" class="text-blue-500 hover:text-blue-400 transition">Baca →</a>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-[#2a2a2a] rounded-xl overflow-hidden blog-card">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Article 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Remote Work</span>
                        <h3 class="text-xl font-semibold text-white mt-4 mb-3">Membangun Kultur Tim yang Kuat dalam Era Digital</h3>
                        <p class="text-gray-400 mb-4">Tips praktis untuk mempertahankan koneksi tim dalam lingkungan kerja remote.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Author" class="w-8 h-8 rounded-full">
                                <p class="text-gray-400 text-sm ml-3">8 Mar 2024</p>
                            </div>
                            <a href="#" class="text-blue-500 hover:text-blue-400 transition">Baca →</a>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-[#2a2a2a] rounded-xl overflow-hidden blog-card">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984" alt="Article 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Tips & Trik</span>
                        <h3 class="text-xl font-semibold text-white mt-4 mb-3">5 Cara Efektif Mengelola Konflik dalam Tim</h3>
                        <p class="text-gray-400 mb-4">Panduan praktis untuk menyelesaikan konflik dan menjaga harmoni tim.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-8 h-8 rounded-full">
                                <p class="text-gray-400 text-sm ml-3">5 Mar 2024</p>
                            </div>
                            <a href="#" class="text-blue-500 hover:text-blue-400 transition">Baca →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg transition">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <div class="bg-[#2a2a2a] rounded-2xl p-8 md:p-12">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-4">Berlangganan Newsletter</h2>
                    <p class="text-gray-400 mb-8">Dapatkan artikel terbaru dan tips eksklusif langsung di inbox Anda</p>
                    <form class="flex flex-col md:flex-row gap-4">
                        <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-6 py-3 bg-[#1a1a1a] text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg transition">
                            Berlangganan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html> 