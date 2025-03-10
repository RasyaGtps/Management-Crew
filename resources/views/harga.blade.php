<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harga - Management Crew</title>
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

        .pricing-card {
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .popular-badge {
            position: absolute;
            top: 0;
            right: 2rem;
            transform: translateY(-50%);
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
                    Pilih Paket <span class="gradient-text">Terbaik</span> untuk Tim Anda
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Kami menyediakan berbagai paket yang dapat disesuaikan dengan kebutuhan dan skala tim Anda
                </p>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <!-- Pricing Toggle -->
            <div class="flex justify-center items-center space-x-4 mb-16">
                <span class="text-gray-400">Bayar Bulanan</span>
                <button class="relative w-16 h-8 rounded-full bg-blue-600 flex items-center transition duration-300 focus:outline-none">
                    <div class="absolute w-6 h-6 bg-white rounded-full transform translate-x-1 transition duration-300"></div>
                </button>
                <span class="text-gray-400">Bayar Tahunan <span class="text-blue-500">(Hemat 20%)</span></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Starter Plan -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 pricing-card relative border border-gray-800 hover:border-blue-500/50">
                    <h3 class="text-2xl font-bold text-white mb-4">Starter</h3>
                    <div class="flex items-baseline mb-8">
                        <span class="text-5xl font-bold text-white">Rp299</span>
                        <span class="text-gray-400 ml-2">/ bulan</span>
                    </div>
                    <p class="text-gray-400 mb-8">Perfect untuk tim kecil yang baru memulai</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Hingga 10 anggota tim
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            5GB penyimpanan
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Fitur dasar manajemen tugas
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Email support
                        </li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg transition">
                        Mulai Sekarang
                    </a>
                </div>

                <!-- Pro Plan -->
                <div class="bg-gradient-to-b from-[#2a2a2a] to-[#323232] rounded-xl p-8 pricing-card relative border-2 border-blue-500">
                    <div class="popular-badge bg-blue-600 text-white text-sm font-semibold px-4 py-1 rounded-full">
                        Paling Populer
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Pro</h3>
                    <div class="flex items-baseline mb-8">
                        <span class="text-5xl font-bold text-white">Rp799</span>
                        <span class="text-gray-400 ml-2">/ bulan</span>
                    </div>
                    <p class="text-gray-400 mb-8">Untuk tim yang berkembang dengan kebutuhan lebih</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Hingga 50 anggota tim
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            50GB penyimpanan
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Semua fitur manajemen tugas
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Integrasi dengan tools populer
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            24/7 prioritas support
                        </li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg transition">
                        Mulai 14 Hari Trial
                    </a>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 pricing-card relative border border-gray-800 hover:border-blue-500/50">
                    <h3 class="text-2xl font-bold text-white mb-4">Enterprise</h3>
                    <div class="flex items-baseline mb-8">
                        <span class="text-5xl font-bold text-white">Custom</span>
                    </div>
                    <p class="text-gray-400 mb-8">Solusi yang disesuaikan untuk perusahaan besar</p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Tim tak terbatas
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Penyimpanan tak terbatas
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Fitur kustom
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            API akses
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Dedicated support
                        </li>
                    </ul>
                    <a href="#contact" class="block text-center bg-transparent border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white py-3 px-6 rounded-lg transition">
                        Hubungi Sales
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Pertanyaan Umum tentang Harga</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-[#2a2a2a] rounded-lg p-6">
                    <h3 class="text-lg text-white font-semibold mb-3">Apakah ada biaya tersembunyi?</h3>
                    <p class="text-gray-400">Tidak ada biaya tersembunyi. Anda hanya membayar sesuai paket yang dipilih dan dapat mengakses semua fitur yang tercantum.</p>
                </div>
                <div class="bg-[#2a2a2a] rounded-lg p-6">
                    <h3 class="text-lg text-white font-semibold mb-3">Bisakah saya mengubah paket sewaktu-waktu?</h3>
                    <p class="text-gray-400">Ya, Anda dapat upgrade atau downgrade paket kapan saja. Perubahan akan berlaku di periode tagihan berikutnya.</p>
                </div>
                <div class="bg-[#2a2a2a] rounded-lg p-6">
                    <h3 class="text-lg text-white font-semibold mb-3">Bagaimana dengan refund?</h3>
                    <p class="text-gray-400">Kami menawarkan garansi uang kembali dalam 30 hari pertama jika Anda tidak puas dengan layanan kami.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />

    <script>
        // Toggle Pricing
        const toggle = document.querySelector('button');
        toggle.addEventListener('click', () => {
            toggle.querySelector('div').classList.toggle('translate-x-9');
            // Add logic for price switching here
        });
    </script>
</body>

</html> 