<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karir - Management Crew</title>
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

        .job-card {
            transition: all 0.3s ease;
        }

        .job-card:hover {
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
                    Bergabung dengan <span class="gradient-text">Management Crew</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Mari bersama-sama membangun masa depan manajemen tim yang lebih baik
                </p>
            </div>
        </div>
    </div>

    <!-- Culture Section -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Budaya Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Culture Card 1 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Fleksibilitas</h3>
                    <p class="text-gray-400">
                        Kami mendukung work-life balance dengan jadwal kerja yang fleksibel dan kebijakan remote work.
                    </p>
                </div>

                <!-- Culture Card 2 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Pembelajaran</h3>
                    <p class="text-gray-400">
                        Kami mendorong pertumbuhan profesional melalui pelatihan dan pengembangan berkelanjutan.
                    </p>
                </div>

                <!-- Culture Card 3 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Kolaborasi</h3>
                    <p class="text-gray-400">
                        Kami menghargai kerja tim dan mendorong kolaborasi lintas departemen.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Benefit</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Asuransi Kesehatan</h3>
                    <p class="text-gray-400">Paket asuransi kesehatan komprehensif</p>
                </div>

                <!-- Benefit 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Cuti Fleksibel</h3>
                    <p class="text-gray-400">Kebijakan cuti yang fleksibel</p>
                </div>

                <!-- Benefit 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Remote Work</h3>
                    <p class="text-gray-400">Pilihan bekerja dari mana saja</p>
                </div>

                <!-- Benefit 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Pengembangan</h3>
                    <p class="text-gray-400">Dana pengembangan profesional</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Open Positions -->
    <div class="py-20 bg-[#1f1f1f]">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Posisi Tersedia</h2>
            <div class="grid grid-cols-1 gap-6">
                <!-- Position 1 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl job-card">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Senior Full Stack Developer</h3>
                            <p class="text-gray-400 mb-4">Jakarta, Indonesia (Remote)</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Full-time</span>
                                <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">5+ tahun</span>
                            </div>
                        </div>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">Apply Now</a>
                    </div>
                </div>

                <!-- Position 2 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl job-card">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">UI/UX Designer</h3>
                            <p class="text-gray-400 mb-4">Jakarta, Indonesia (Remote)</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Full-time</span>
                                <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">3+ tahun</span>
                            </div>
                        </div>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">Apply Now</a>
                    </div>
                </div>

                <!-- Position 3 -->
                <div class="bg-[#2a2a2a] p-8 rounded-xl job-card">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Product Manager</h3>
                            <p class="text-gray-400 mb-4">Jakarta, Indonesia (Remote)</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">Full-time</span>
                                <span class="px-3 py-1 bg-blue-600/10 text-blue-500 rounded-full text-sm">4+ tahun</span>
                            </div>
                        </div>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html> 