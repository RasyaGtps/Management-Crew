<!-- Navigation Component -->
<nav x-data="{ open: false, profileDropdown: false }" class="fixed top-0 w-full z-50 bg-[#1a1a1a]/80 backdrop-blur-sm border-b border-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Logo & Brand -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3">
                    <span class="text-2xl font-bold text-white">MC</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('fitur') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm font-medium">Fitur</a>
                <a href="{{ route('harga') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm font-medium">Harga</a>
                <a href="{{ route('tutorial') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm font-medium">Tutorial</a>
                <a href="{{ route('blog') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm font-medium">Blog</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm font-medium">Dashboard</a>
                    
                    <!-- Profile Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center space-x-2 text-gray-300 hover:text-white transition-colors duration-300">
                            @if(Auth::user()->avatar)
                                <img src="{{ Storage::url('avatars/'.Auth::user()->avatar) }}" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                            @else
                                <div class="w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center border border-blue-500/30">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            @endif
                            <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-95"
                             class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-[#1a1f2c] ring-1 ring-black ring-opacity-5">
                            <div class="py-1">
                                <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-blue-500/10 hover:text-white transition-colors duration-200">
                                    Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-blue-500/10 hover:text-white transition-colors duration-200">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm font-medium">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                            Register
                        </a>
                    @endif
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-gray-300 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="open" class="md:hidden" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('fitur') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Fitur</a>
                <a href="{{ route('harga') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Harga</a>
                <a href="{{ route('tutorial') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Tutorial</a>
                <a href="{{ route('blog') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Blog</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Dashboard</a>
                    <a href="{{ route('profile') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:text-white block w-full text-left px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-300 mt-2">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
