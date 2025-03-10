<x-app-layout>
    <div class="min-h-screen bg-[#0f1117] pt-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Profile Section -->
            <div class="bg-[#1a1f2c] overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <div class="flex flex-col md:flex-row">
                        <!-- Avatar Section -->
                        <div class="md:w-1/3 flex flex-col items-center space-y-4">
                            <div class="relative group">
                                @if(Auth::user()->avatar)
                                    <img src="{{ Storage::url('avatars/'.Auth::user()->avatar) }}" 
                                         alt="Profile Picture" 
                                         class="w-40 h-40 rounded-full object-cover ring-4 ring-blue-500/30 transition-all duration-300 group-hover:ring-blue-500/50">
                                @else
                                    <div class="w-40 h-40 rounded-full bg-[#0f1117] flex items-center justify-center ring-4 ring-blue-500/30 transition-all duration-300 group-hover:ring-blue-500/50">
                                        <svg class="w-20 h-20 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                @endif
                                <label for="avatar" class="absolute bottom-0 right-0 bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-full cursor-pointer transition-all transform hover:scale-110 hover:shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </label>
                            </div>
                            <p class="text-xl font-semibold text-white">{{ Auth::user()->name }}</p>
                            <p class="text-gray-400">{{ Auth::user()->email }}</p>
                        </div>

                        <!-- Profile Form -->
                        <div class="md:w-2/3 mt-8 md:mt-0 md:pl-8">
                            <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data" class="space-y-6">
                                @csrf
                                <input type="file" name="avatar" id="avatar" class="hidden" accept="image/*">

                                @if (session('success'))
                                    <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-lg relative mb-6" role="alert">
                                        <span class="block sm:inline">{{ session('success') }}</span>
                                    </div>
                                @endif

                                <!-- Name -->
                                <div class="group">
                                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nama</label>
                                    <div class="relative">
                                        <input type="text" 
                                               name="name" 
                                               id="name" 
                                               value="{{ old('name', Auth::user()->name) }}" 
                                               class="block w-full bg-[#0f1117] border border-gray-700 rounded-lg py-2.5 px-4 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none opacity-0 group-focus-within:opacity-100 transition-opacity duration-300">
                                            <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="group">
                                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                                    <div class="relative">
                                        <input type="email" 
                                               name="email" 
                                               id="email" 
                                               value="{{ old('email', Auth::user()->email) }}" 
                                               class="block w-full bg-[#0f1117] border border-gray-700 rounded-lg py-2.5 px-4 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none opacity-0 group-focus-within:opacity-100 transition-opacity duration-300">
                                            <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-end pt-4">
                                    <button type="submit" 
                                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center space-x-2 font-medium">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>Simpan Perubahan</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Activity -->
                <div class="bg-[#1a1f2c] p-6 rounded-lg transform transition-all duration-300 hover:scale-[1.02] hover:shadow-xl">
                    <h3 class="text-lg font-semibold text-white mb-4">Aktivitas Terakhir</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center transform transition-all duration-300 hover:scale-110">
                                <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-300">Menambahkan tugas baru</p>
                                <p class="text-xs text-gray-500">2 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-green-500/10 flex items-center justify-center transform transition-all duration-300 hover:scale-110">
                                <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-300">Menyelesaikan proyek</p>
                                <p class="text-xs text-gray-500">1 hari yang lalu</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="bg-[#1a1f2c] p-6 rounded-lg transform transition-all duration-300 hover:scale-[1.02] hover:shadow-xl">
                    <h3 class="text-lg font-semibold text-white mb-4">Statistik</h3>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Tugas Selesai</span>
                                <span class="text-sm text-blue-400">85%</span>
                            </div>
                            <div class="w-full bg-[#0f1117] rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Produktivitas</span>
                                <span class="text-sm text-green-400">92%</span>
                            </div>
                            <div class="w-full bg-[#0f1117] rounded-full h-2 overflow-hidden">
                                <div class="bg-green-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team -->
                <div class="bg-[#1a1f2c] p-6 rounded-lg transform transition-all duration-300 hover:scale-[1.02] hover:shadow-xl">
                    <h3 class="text-lg font-semibold text-white mb-4">Tim Saya</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 group">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" 
                                 alt="Team Member" 
                                 class="w-8 h-8 rounded-full ring-2 ring-transparent group-hover:ring-blue-500/50 transition-all duration-300">
                            <div>
                                <p class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">Ahmad Rizki</p>
                                <p class="text-xs text-gray-500">UI Designer</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" 
                                 alt="Team Member" 
                                 class="w-8 h-8 rounded-full ring-2 ring-transparent group-hover:ring-blue-500/50 transition-all duration-300">
                            <div>
                                <p class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">Sarah Diana</p>
                                <p class="text-xs text-gray-500">Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts-body')
    <script>
        // Preview avatar sebelum upload
        document.getElementById('avatar').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.querySelector('.relative.group img');
                    if (img) {
                        img.src = e.target.result;
                    } else {
                        const div = document.querySelector('.relative.group div');
                        const newImg = document.createElement('img');
                        newImg.src = e.target.result;
                        newImg.className = 'w-40 h-40 rounded-full object-cover ring-4 ring-blue-500/30 transition-all duration-300 group-hover:ring-blue-500/50';
                        div.parentNode.replaceChild(newImg, div);
                    }
                }
                reader.readAsDataURL(file);
            }
        });

        // Animasi untuk progress bars
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.bg-blue-600, .bg-green-500');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                }, 300);
            });
        });
    </script>
    @endpush
</x-app-layout> 