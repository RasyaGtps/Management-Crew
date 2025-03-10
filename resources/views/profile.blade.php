<x-app-layout>
    <div class="min-h-screen bg-[#0f1117] pt-16">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
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
                                         class="w-40 h-40 rounded-full object-cover border-4 border-blue-500/30">
                                @else
                                    <div class="w-40 h-40 rounded-full bg-blue-500/10 flex items-center justify-center border-4 border-blue-500/30">
                                        <svg class="w-20 h-20 text-blue-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                @endif
                                <label for="avatar" class="absolute bottom-0 right-0 bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-full cursor-pointer transition-all transform hover:scale-110">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </label>
                            </div>
                            <p class="text-lg font-semibold text-white">{{ Auth::user()->name }}</p>
                            <p class="text-gray-400">{{ Auth::user()->email }}</p>
                        </div>

                        <!-- Profile Form -->
                        <div class="md:w-2/3 mt-8 md:mt-0">
                            <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data" class="space-y-6">
                                @csrf
                                <input type="file" name="avatar" id="avatar" class="hidden" accept="image/*">

                                @if (session('success'))
                                    <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded relative" role="alert">
                                        <span class="block sm:inline">{{ session('success') }}</span>
                                    </div>
                                @endif

                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-300">Nama</label>
                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" 
                                           class="mt-1 block w-full bg-[#0f1117] border border-gray-700 rounded-md shadow-sm py-2 px-3 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" 
                                           class="mt-1 block w-full bg-[#0f1117] border border-gray-700 rounded-md shadow-sm py-2 px-3 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md transition-colors duration-200">
                                        Simpan Perubahan
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
                <div class="bg-[#1a1f2c] p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-white mb-4">Aktivitas Terakhir</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center">
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
                            <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center">
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
                <div class="bg-[#1a1f2c] p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-white mb-4">Statistik</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Tugas Selesai</span>
                                <span class="text-sm text-blue-400">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Produktivitas</span>
                                <span class="text-sm text-green-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team -->
                <div class="bg-[#1a1f2c] p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-white mb-4">Tim Saya</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member" class="w-8 h-8 rounded-full">
                            <div>
                                <p class="text-sm text-gray-300">Ahmad Rizki</p>
                                <p class="text-xs text-gray-500">UI Designer</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Team Member" class="w-8 h-8 rounded-full">
                            <div>
                                <p class="text-sm text-gray-300">Sarah Diana</p>
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
                        newImg.className = 'w-40 h-40 rounded-full object-cover border-4 border-blue-500/30';
                        div.parentNode.replaceChild(newImg, div);
                    }
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    @endpush
</x-app-layout> 