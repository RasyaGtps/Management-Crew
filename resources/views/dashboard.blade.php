<x-app-layout>
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endpush

    <div class="min-h-screen bg-[#0f1117] pt-28 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Message -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-white mb-2">Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
                <p class="text-gray-400">Berikut adalah ringkasan aktivitas tim Anda hari ini</p>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-blue-500/10 rounded-lg p-3">
                        <p class="text-blue-400 text-sm">Tugas Hari Ini</p>
                        <p class="text-white text-lg font-semibold">12 Tugas</p>
                    </div>
                    <div class="bg-green-500/10 rounded-lg p-3">
                        <p class="text-green-400 text-sm">Meeting</p>
                        <p class="text-white text-lg font-semibold">3 Jadwal</p>
                    </div>
                    <div class="bg-purple-500/10 rounded-lg p-3">
                        <p class="text-purple-400 text-sm">Deadline</p>
                        <p class="text-white text-lg font-semibold">2 Proyek</p>
                    </div>
                    <div class="bg-yellow-500/10 rounded-lg p-3">
                        <p class="text-yellow-400 text-sm">Tim Online</p>
                        <p class="text-white text-lg font-semibold">8 Anggota</p>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Tim -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-500/10">
                            <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-400 text-sm font-medium">Total Tim</h2>
                            <p class="text-2xl font-semibold text-white">15</p>
                        </div>
                    </div>
                </div>

                <!-- Proyek Aktif -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-500/10">
                            <svg class="h-8 w-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-400 text-sm font-medium">Proyek Aktif</h2>
                            <p class="text-2xl font-semibold text-white">8</p>
                        </div>
                    </div>
                </div>

                <!-- Tugas Selesai -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-500/10">
                            <svg class="h-8 w-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-400 text-sm font-medium">Tugas Selesai</h2>
                            <p class="text-2xl font-semibold text-white">45</p>
                        </div>
                    </div>
                </div>

                <!-- Produktivitas -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-500/10">
                            <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-400 text-sm font-medium">Produktivitas</h2>
                            <p class="text-2xl font-semibold text-white">85%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mb-8">
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Aksi Cepat</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <button class="bg-[#0f1117] hover:bg-[#161923] p-4 rounded-lg text-center transition-all">
                            <svg class="w-6 h-6 text-blue-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">Buat Tugas</span>
                        </button>
                        <button class="bg-[#0f1117] hover:bg-[#161923] p-4 rounded-lg text-center transition-all">
                            <svg class="w-6 h-6 text-green-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">Meeting</span>
                        </button>
                        <button class="bg-[#0f1117] hover:bg-[#161923] p-4 rounded-lg text-center transition-all">
                            <svg class="w-6 h-6 text-purple-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">Undang Tim</span>
                        </button>
                        <button class="bg-[#0f1117] hover:bg-[#161923] p-4 rounded-lg text-center transition-all">
                            <svg class="w-6 h-6 text-yellow-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span class="text-gray-300 text-sm">Laporan</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project Overview & Deadlines -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                <!-- Project Overview -->
                <div class="lg:col-span-2">
                    <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold text-white">Project Overview</h3>
                            <button class="text-sm text-blue-500 hover:text-blue-400">Lihat Semua</button>
                        </div>
                        <div class="space-y-6">
                            <!-- Project 1 -->
                            <div class="bg-[#0f1117] p-4 rounded-lg">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h4 class="text-white font-medium mb-1">Redesign Dashboard</h4>
                                        <p class="text-gray-400 text-sm">UI/UX Improvement</p>
                                    </div>
                                    <span class="px-3 py-1 text-sm text-yellow-200 bg-yellow-900/50 rounded-full">In Progress</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                        <img src="https://randomuser.me/api/portraits/women/1.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                        <img src="https://randomuser.me/api/portraits/men/2.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-32 bg-gray-700 rounded-full h-2 mr-3">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="text-gray-400 text-sm">75%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div class="bg-[#0f1117] p-4 rounded-lg">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h4 class="text-white font-medium mb-1">API Integration</h4>
                                        <p class="text-gray-400 text-sm">Backend Development</p>
                                    </div>
                                    <span class="px-3 py-1 text-sm text-green-200 bg-green-900/50 rounded-full">Completed</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/men/3.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                        <img src="https://randomuser.me/api/portraits/women/2.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-32 bg-gray-700 rounded-full h-2 mr-3">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                        </div>
                                        <span class="text-gray-400 text-sm">100%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Project 3 -->
                            <div class="bg-[#0f1117] p-4 rounded-lg">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h4 class="text-white font-medium mb-1">Mobile App Development</h4>
                                        <p class="text-gray-400 text-sm">React Native</p>
                                    </div>
                                    <span class="px-3 py-1 text-sm text-red-200 bg-red-900/50 rounded-full">Delayed</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2">
                                        <img src="https://randomuser.me/api/portraits/women/3.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                        <img src="https://randomuser.me/api/portraits/men/4.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                        <img src="https://randomuser.me/api/portraits/women/4.jpg" class="w-7 h-7 rounded-full border-2 border-[#1a1f2c]">
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-32 bg-gray-700 rounded-full h-2 mr-3">
                                            <div class="bg-red-500 h-2 rounded-full" style="width: 45%"></div>
                                        </div>
                                        <span class="text-gray-400 text-sm">45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Deadlines -->
                <div class="lg:col-span-1">
                    <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold text-white">Deadline Terdekat</h3>
                            <button class="text-sm text-blue-500 hover:text-blue-400">Lihat Semua</button>
                        </div>
                        <div class="space-y-4">
                            <!-- Deadline 1 -->
                            <div class="bg-[#0f1117] p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-white font-medium">UI Dashboard</h4>
                                    <span class="text-sm text-red-400">2 hari lagi</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-3">Finalisasi desain dan implementasi</p>
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-6 h-6 rounded-full">
                                    <span class="text-gray-400 text-sm ml-2">Ahmad Rizki</span>
                                </div>
                            </div>

                            <!-- Deadline 2 -->
                            <div class="bg-[#0f1117] p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-white font-medium">Testing API</h4>
                                    <span class="text-sm text-yellow-400">5 hari lagi</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-3">Unit testing dan integrasi</p>
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/men/2.jpg" class="w-6 h-6 rounded-full">
                                    <span class="text-gray-400 text-sm ml-2">Rudi Hartono</span>
                                </div>
                            </div>

                            <!-- Deadline 3 -->
                            <div class="bg-[#0f1117] p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="text-white font-medium">Frontend Update</h4>
                                    <span class="text-sm text-green-400">1 minggu lagi</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-3">Implementasi fitur baru</p>
                                <div class="flex items-center">
                                    <img src="https://randomuser.me/api/portraits/women/1.jpg" class="w-6 h-6 rounded-full">
                                    <span class="text-gray-400 text-sm ml-2">Sarah Diana</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Meeting Schedule -->
            <div class="mb-8">
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-white">Jadwal Meeting Hari Ini</h3>
                        <button class="text-sm text-blue-500 hover:text-blue-400">+ Tambah Meeting</button>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                    <h4 class="text-white font-medium">Daily Standup</h4>
                                </div>
                                <span class="text-sm text-green-400">09:00 - 09:30</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400 text-sm">Tim Development</p>
                                <span class="px-2 py-1 text-xs bg-green-500/10 text-green-400 rounded">Berlangsung</span>
                            </div>
                        </div>

                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                                    <h4 class="text-white font-medium">Sprint Planning</h4>
                                </div>
                                <span class="text-sm text-yellow-400">11:00 - 12:00</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400 text-sm">Semua Tim</p>
                                <span class="px-2 py-1 text-xs bg-yellow-500/10 text-yellow-400 rounded">1 jam lagi</span>
                            </div>
                        </div>

                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                                    <h4 class="text-white font-medium">Design Review</h4>
                                </div>
                                <span class="text-sm text-blue-400">14:00 - 15:00</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-gray-400 text-sm">Tim UI/UX</p>
                                <span class="px-2 py-1 text-xs bg-blue-500/10 text-blue-400 rounded">4 jam lagi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafik dan Tugas -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Grafik Aktivitas -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Aktivitas Tim</h3>
                    <div class="h-64 bg-[#0f1117] rounded-lg p-4 relative">
                        <canvas id="activityChart" class="w-full h-full"></canvas>
                    </div>
                </div>

                <!-- Daftar Tugas -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Tugas Terbaru</h3>
                    <div class="space-y-4">
                        <!-- Tugas 1 -->
                        <div class="flex items-center justify-between p-4 bg-[#0f1117] rounded-lg">
                            <div class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-700 text-blue-600 bg-gray-900">
                                <span class="ml-3 text-gray-300">Desain UI Dashboard</span>
                            </div>
                            <span class="px-3 py-1 text-sm text-yellow-200 bg-yellow-900/50 rounded-full">In Progress</span>
                        </div>

                        <!-- Tugas 2 -->
                        <div class="flex items-center justify-between p-4 bg-[#0f1117] rounded-lg">
                            <div class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-700 text-blue-600 bg-gray-900">
                                <span class="ml-3 text-gray-300">Implementasi API</span>
                            </div>
                            <span class="px-3 py-1 text-sm text-green-200 bg-green-900/50 rounded-full">Completed</span>
                        </div>

                        <!-- Tugas 3 -->
                        <div class="flex items-center justify-between p-4 bg-[#0f1117] rounded-lg">
                            <div class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-700 text-blue-600 bg-gray-900">
                                <span class="ml-3 text-gray-300">Testing Fitur Baru</span>
                            </div>
                            <span class="px-3 py-1 text-sm text-red-200 bg-red-900/50 rounded-full">Pending</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tim dan Aktivitas -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Anggota Tim -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Anggota Tim</h3>
                    <div class="space-y-4">
                        <!-- Anggota 1 -->
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-white">Ahmad Rizki</p>
                                <p class="text-sm text-gray-400">UI/UX Designer</p>
                            </div>
                            <div class="flex-1 text-right">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-900/50 text-green-200">
                                    Online
                                </span>
                            </div>
                        </div>

                        <!-- Anggota 2 -->
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Team Member" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-white">Sarah Diana</p>
                                <p class="text-sm text-gray-400">Frontend Developer</p>
                            </div>
                            <div class="flex-1 text-right">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-900/50 text-gray-300">
                                    Offline
                                </span>
                            </div>
                        </div>

                        <!-- Anggota 3 -->
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Team Member" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-white">Rudi Hartono</p>
                                <p class="text-sm text-gray-400">Backend Developer</p>
                            </div>
                            <div class="flex-1 text-right">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-900/50 text-green-200">
                                    Online
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aktivitas Terbaru -->
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Aktivitas Terbaru</h3>
                    <div class="space-y-4">
                        <!-- Aktivitas 1 -->
                        <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full bg-blue-500/50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm text-gray-200">
                                    <span class="font-medium">Ahmad Rizki</span> menambahkan tugas baru
                                </p>
                                <p class="text-sm text-gray-400">5 menit yang lalu</p>
                            </div>
                        </div>

                        <!-- Aktivitas 2 -->
                        <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full bg-green-500/50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm text-gray-200">
                                    <span class="font-medium">Sarah Diana</span> menyelesaikan tugas
                                </p>
                                <p class="text-sm text-gray-400">10 menit yang lalu</p>
                            </div>
                        </div>

                        <!-- Aktivitas 3 -->
                        <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full bg-yellow-500/50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-yellow-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm text-gray-200">
                                    <span class="font-medium">Rudi Hartono</span> mengupdate status proyek
                                </p>
                                <p class="text-sm text-gray-400">15 menit yang lalu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Metrics -->
            <div class="mt-8">
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-white mb-6">Performa Tim</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Metric 1 -->
                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-gray-400">Sprint Completion</span>
                                <span class="text-green-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>

                        <!-- Metric 2 -->
                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-gray-400">Bug Resolution</span>
                                <span class="text-blue-400">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <!-- Metric 3 -->
                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-gray-400">Code Review</span>
                                <span class="text-purple-400">78%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full" style="width: 78%"></div>
                            </div>
                        </div>

                        <!-- Metric 4 -->
                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-gray-400">Team Velocity</span>
                                <span class="text-yellow-400">88%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Files -->
            <div class="mt-8">
                <div class="bg-[#1a1f2c] overflow-hidden shadow-sm rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-white">File Terbaru</h3>
                        <button class="text-sm text-blue-500 hover:text-blue-400">Lihat Semua</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center mb-3">
                                <svg class="w-8 h-8 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <h4 class="text-white text-sm font-medium">Design System.fig</h4>
                                    <p class="text-gray-400 text-xs">12 MB</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-xs">Diperbarui 2 jam lalu</span>
                                <button class="text-blue-500 hover:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center mb-3">
                                <svg class="w-8 h-8 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <div>
                                    <h4 class="text-white text-sm font-medium">Sprint Report.xlsx</h4>
                                    <p class="text-gray-400 text-xs">4.2 MB</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-xs">Diperbarui 5 jam lalu</span>
                                <button class="text-blue-500 hover:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="bg-[#0f1117] p-4 rounded-lg">
                            <div class="flex items-center mb-3">
                                <svg class="w-8 h-8 text-purple-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                </svg>
                                <div>
                                    <h4 class="text-white text-sm font-medium">API Documentation.pdf</h4>
                                    <p class="text-gray-400 text-xs">8.5 MB</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400 text-xs">Diperbarui 1 hari lalu</span>
                                <button class="text-blue-500 hover:text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts-body')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('activityChart');
            if (!ctx) {
                console.error('Canvas element not found');
                return;
            }

            const data = {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [
                    {
                        label: 'Tugas Selesai',
                        data: [15, 22, 28, 25, 32, 28, 20],
                        borderColor: '#818CF8',
                        backgroundColor: 'rgba(129, 140, 248, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#818CF8',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#818CF8',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    },
                    {
                        label: 'Tugas Aktif',
                        data: [20, 18, 25, 30, 25, 23, 18],
                        borderColor: '#34D399',
                        backgroundColor: 'rgba(52, 211, 153, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#34D399',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: '#34D399',
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }
                ]
            };

            try {
                const chart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                top: 10,
                                right: 25,
                                bottom: 10,
                                left: 25
                            }
                        },
                        interaction: {
                            intersect: false,
                            mode: 'index'
                        },
                        animations: {
                            tension: {
                                duration: 1000,
                                easing: 'linear'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: 'rgba(255, 255, 255, 0.1)',
                                    drawBorder: false
                                },
                                border: {
                                    display: false
                                },
                                ticks: {
                                    color: '#9CA3AF',
                                    padding: 10,
                                    font: {
                                        size: 11,
                                        family: "'Poppins', sans-serif"
                                    },
                                    callback: function(value) {
                                        return value + ' tugas';
                                    }
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                border: {
                                    display: false
                                },
                                ticks: {
                                    color: '#9CA3AF',
                                    padding: 10,
                                    font: {
                                        size: 11,
                                        family: "'Poppins', sans-serif"
                                    }
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'top',
                                align: 'end',
                                labels: {
                                    color: '#9CA3AF',
                                    font: {
                                        size: 12,
                                        family: "'Poppins', sans-serif"
                                    },
                                    padding: 20,
                                    usePointStyle: true,
                                    pointStyle: 'circle'
                                }
                            },
                            tooltip: {
                                backgroundColor: '#1F2937',
                                titleColor: '#F3F4F6',
                                bodyColor: '#D1D5DB',
                                borderColor: '#374151',
                                borderWidth: 1,
                                padding: 12,
                                displayColors: true,
                                callbacks: {
                                    label: function(context) {
                                        return context.dataset.label + ': ' + context.parsed.y + ' tugas';
                                    }
                                },
                                titleFont: {
                                    size: 14,
                                    family: "'Poppins', sans-serif"
                                },
                                bodyFont: {
                                    size: 13,
                                    family: "'Poppins', sans-serif"
                                }
                            }
                        }
                    }
                });

                // Tambahkan efek hover
                chart.options.plugins.hover = {
                    id: 'hover',
                    beforeDraw: (chart, args, options) => {
                        const { ctx, tooltip } = chart;
                        if (tooltip.opacity === 0) return;

                        ctx.save();
                        ctx.globalAlpha = 0.2;
                        ctx.fillStyle = '#1F2937';
                        ctx.fillRect(tooltip.caretX, 0, 2, chart.height);
                        ctx.restore();
                    }
                };

                console.log('Chart initialized successfully');
            } catch (error) {
                console.error('Error initializing chart:', error);
            }
        });
    </script>
    @endpush
</x-app-layout>
