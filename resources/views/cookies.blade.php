<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kebijakan Cookies - Management Crew</title>
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
    @include('layouts.navigation')

    <!-- Hero Section dengan Background Pattern -->
    <div class="pt-24 bg-[#1a1a1a] relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%239C92AC\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="container mx-auto px-6 py-16 relative">
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-600/10 rounded-2xl flex items-center justify-center mx-auto mb-8">
                    <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Kebijakan <span class="gradient-text">Cookies</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Memahami bagaimana kami menggunakan cookies untuk meningkatkan pengalaman Anda
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
                <!-- Apa itu Cookies -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Apa itu Cookies?</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400">
                            Cookies adalah file teks kecil yang disimpan di perangkat Anda saat mengunjungi website. Cookies membantu kami mengingat preferensi Anda dan meningkatkan pengalaman pengguna secara keseluruhan.
                        </p>
                    </div>
                </div>

                <!-- Jenis Cookies -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Jenis Cookies yang Kami Gunakan</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <div class="space-y-6">
                            <div class="bg-[#1f1f1f] p-6 rounded-lg">
                                <h3 class="text-xl font-semibold text-white mb-3">Cookies Esensial</h3>
                                <p class="text-gray-400">Diperlukan agar website dapat berfungsi dengan baik. Termasuk cookies untuk login dan manajemen sesi.</p>
                            </div>
                            <div class="bg-[#1f1f1f] p-6 rounded-lg">
                                <h3 class="text-xl font-semibold text-white mb-3">Cookies Analitik</h3>
                                <p class="text-gray-400">Membantu kami memahami bagaimana pengunjung berinteraksi dengan website melalui pengumpulan dan pelaporan informasi secara anonim.</p>
                            </div>
                            <div class="bg-[#1f1f1f] p-6 rounded-lg">
                                <h3 class="text-xl font-semibold text-white mb-3">Cookies Fungsional</h3>
                                <p class="text-gray-400">Memungkinkan website mengingat pilihan yang Anda buat dan menyediakan fitur yang lebih personal.</p>
                            </div>
                            <div class="bg-[#1f1f1f] p-6 rounded-lg">
                                <h3 class="text-xl font-semibold text-white mb-3">Cookies Performa</h3>
                                <p class="text-gray-400">Membantu meningkatkan kinerja dan kecepatan website.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Penggunaan Cookies -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Bagaimana Kami Menggunakan Cookies</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <ul class="text-gray-400 list-none pl-0 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Menyimpan preferensi login dan pengaturan</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Menganalisis penggunaan website</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Meningkatkan keamanan</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Menyediakan fitur personalisasi</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kontrol Cookies -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Mengontrol Cookies</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400 mb-6">
                            Anda dapat mengontrol dan/atau menghapus cookies sesuai keinginan. Anda dapat menghapus semua cookies yang sudah ada di perangkat dan mengatur browser untuk mencegah pemasangan cookies.
                        </p>
                        <div class="bg-[#1f1f1f] p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-white mb-4">Pengaturan Browser</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <a href="https://support.google.com/chrome/answer/95647" target="_blank" class="flex items-center p-4 bg-[#2a2a2a] rounded-lg hover:bg-[#333333] transition">
                                    <span class="text-white">Google Chrome</span>
                                    <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                                <a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank" class="flex items-center p-4 bg-[#2a2a2a] rounded-lg hover:bg-[#333333] transition">
                                    <span class="text-white">Mozilla Firefox</span>
                                    <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="bg-[#2a2a2a] rounded-xl p-8 transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Pertanyaan?</h2>
                    </div>
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-400 mb-6">
                            Jika Anda memiliki pertanyaan tentang penggunaan cookies kami, silakan hubungi:
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