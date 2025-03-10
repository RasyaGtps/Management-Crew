<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kebijakan Privasi - Management Crew</title>
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

    <!-- Hero Section dengan Background Pattern -->
    <div class="pt-24 bg-[#1a1a1a] relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%239C92AC\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="container mx-auto px-6 py-16 relative">
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-600/10 rounded-2xl flex items-center justify-center mx-auto mb-8">
                    <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Kebijakan <span class="gradient-text">Privasi</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Kami menghargai privasi Anda. Berikut adalah penjelasan tentang bagaimana kami mengumpulkan, menggunakan, dan melindungi data Anda.
                </p>
            </div>
        </div>
        <!-- Decorative Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-12 fill-[#1f1f1f]" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </div>

    <!-- Content with Enhanced Cards -->
    <div class="py-16 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto space-y-12">
                <!-- Pengumpulan Data -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">1. Pengumpulan Data</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">Kami mengumpulkan informasi berikut:</p>
                        <ul class="text-gray-400 list-none pl-0 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Informasi yang Anda berikan saat mendaftar (nama, email, dll)
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Data penggunaan platform
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Informasi perangkat dan browser
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Cookie dan teknologi pelacakan serupa
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Penggunaan Data -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">2. Penggunaan Data</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">Kami menggunakan data Anda untuk:</p>
                        <ul class="text-gray-400 list-none pl-0 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Menyediakan dan meningkatkan layanan kami
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Personalisasi pengalaman pengguna
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Komunikasi tentang layanan dan pembaruan
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Analisis dan pengembangan produk
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Perlindungan Data -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">3. Perlindungan Data</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">Kami melindungi data Anda dengan:</p>
                        <ul class="text-gray-400 list-none pl-0 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Enkripsi data end-to-end
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Akses terbatas ke data sensitif
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Pemantauan keamanan 24/7
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Backup data reguler
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Berbagi Data -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-4">4. Berbagi Data</h2>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">Kami tidak akan pernah:</p>
                        <ul class="text-gray-400 list-disc pl-6 space-y-2">
                            <li>Menjual data pribadi Anda</li>
                            <li>Membagikan data dengan pihak ketiga tanpa izin</li>
                            <li>Menggunakan data untuk tujuan di luar yang disebutkan</li>
                        </ul>
                    </div>
                </div>

                <!-- Hak Pengguna -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-4">5. Hak Pengguna</h2>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">Anda memiliki hak untuk:</p>
                        <ul class="text-gray-400 list-disc pl-6 space-y-2">
                            <li>Mengakses data pribadi Anda</li>
                            <li>Meminta koreksi data yang tidak akurat</li>
                            <li>Meminta penghapusan data</li>
                            <li>Menolak pemrosesan data tertentu</li>
                        </ul>
                    </div>
                </div>

                <!-- Cookie -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-4">6. Cookie</h2>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">Kami menggunakan cookie untuk:</p>
                        <ul class="text-gray-400 list-disc pl-6 space-y-2">
                            <li>Mengingat preferensi Anda</li>
                            <li>Menganalisis penggunaan platform</li>
                            <li>Meningkatkan keamanan</li>
                            <li>Menyediakan fitur personalisasi</li>
                        </ul>
                    </div>
                </div>

                <!-- Perubahan Kebijakan -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-4">7. Perubahan Kebijakan</h2>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">
                            Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan akan diumumkan melalui platform dan/atau email. Penggunaan berkelanjutan atas layanan kami setelah perubahan tersebut merupakan persetujuan Anda terhadap kebijakan yang diperbarui.
                        </p>
                    </div>
                </div>

                <!-- Kontak dengan Card Design -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Kontak</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400 mb-6">
                            Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami melalui:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-[#1f1f1f] p-6 rounded-lg">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-white">Email</span>
                                </div>
                                <a href="mailto:privacy@mc.com" class="text-blue-500 hover:text-blue-400 block mt-2">privacy@mc.com</a>
                            </div>
                            <div class="bg-[#1f1f1f] p-6 rounded-lg">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span class="text-white">Telepon</span>
                                </div>
                                <a href="tel:+6281234567890" class="text-blue-500 hover:text-blue-400 block mt-2">+62 812 3456 7890</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />

    <!-- Floating Help Button -->
    <div class="fixed bottom-8 right-8">
        <button class="bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-full shadow-lg transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </button>
    </div>
</body>

</html> 