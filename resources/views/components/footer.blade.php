<!-- Footer with Enhanced Design -->
<footer class="bg-[#1a1a1a] py-16">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <div>
                <span class="text-3xl font-bold text-white mb-6 block">MC</span>
                <p class="text-gray-400">Platform manajemen crew terbaik untuk mengatur dan mengelola tim Anda.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Produk</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('fitur') }}" class="text-gray-400 hover:text-white transition">Fitur</a></li>
                    <li><a href="{{ route('harga') }}" class="text-gray-400 hover:text-white transition">Harga</a></li>
                    <li><a href="{{ route('tutorial') }}" class="text-gray-400 hover:text-white transition">Tutorial</a></li>
                    <li><a href="{{ route('updates') }}" class="text-gray-400 hover:text-white transition">Updates</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Perusahaan</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('tentang') }}" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="{{ route('karir') }}" class="text-gray-400 hover:text-white transition">Karir</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-white transition">Blog</a></li>
                    <li><a href="{{ route('press') }}" class="text-gray-400 hover:text-white transition">Press Kit</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Kontak</h4>
                <ul class="space-y-4">
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        contact@mc.com
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        +62 123 4567 890
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 mb-4 md:mb-0">© 2024 Management Crew. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="{{ route('kebijakan-privasi') }}" class="text-gray-400 hover:text-white transition">Kebijakan Privasi</a>
                    <a href="{{ route('syarat-ketentuan') }}" class="text-gray-400 hover:text-white transition">Syarat & Ketentuan</a>
                    <a href="{{ route('cookies') }}" class="text-gray-400 hover:text-white transition">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</footer> 