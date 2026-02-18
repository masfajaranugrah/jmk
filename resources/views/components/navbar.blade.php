{{-- Navbar Component --}}
<nav 
    x-data="{ isScrolled: false, isMobileMenuOpen: false }"
    x-init="window.addEventListener('scroll', () => isScrolled = window.scrollY > 50)"
    :class="isScrolled ? 'bg-white/95 backdrop-blur-md shadow-lg border-b border-slate-200' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center">
                <img 
                    src="{{ asset('images/logo-jmk.png') }}" 
                    alt="PT Jernih Multi Komunikasi"
                    :class="isScrolled ? '' : 'brightness-0 invert'"
                    class="h-10 md:h-12 w-auto transition-all"
                >
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ url('/') }}" 
                   :class="isScrolled ? 'text-slate-700' : 'text-white/80 hover:text-white'"
                   class="font-medium transition-colors hover:text-blue-600">
                    Beranda
                </a>
                <button @click="document.getElementById('tentang')?.scrollIntoView({ behavior: 'smooth' })"
                        :class="isScrolled ? 'text-slate-700' : 'text-white/80 hover:text-white'"
                        class="font-medium transition-colors hover:text-blue-600">
                    Tentang
                </button>
                <button @click="document.getElementById('paket')?.scrollIntoView({ behavior: 'smooth' })"
                        :class="isScrolled ? 'text-slate-700' : 'text-white/80 hover:text-white'"
                        class="font-medium transition-colors hover:text-blue-600">
                    Paket
                </button>
                <a href="{{ route('bidang-it') }}" 
                   :class="isScrolled ? 'text-slate-700' : 'text-white/80 hover:text-white'"
                   class="font-medium transition-colors hover:text-blue-600">
                    Bidang IT
                </a>
                <button @click="document.getElementById('kontak')?.scrollIntoView({ behavior: 'smooth' })"
                        :class="isScrolled ? 'text-slate-700' : 'text-white/80 hover:text-white'"
                        class="font-medium transition-colors hover:text-blue-600">
                    Kontak
                </button>
            </div>

            {{-- CTA Button --}}
            <div class="hidden md:block">
                <button 
                    @click="openRegister()"
                    class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-6 py-2.5 rounded-lg shadow-lg shadow-blue-600/25 transition-all duration-300"
                >
                    Daftar Sekarang
                </button>
            </div>

            {{-- Mobile Menu Button --}}
            <button 
                @click="isMobileMenuOpen = !isMobileMenuOpen"
                class="md:hidden p-2"
                aria-label="Toggle menu"
            >
                <template x-if="isMobileMenuOpen">
                    <svg :class="isScrolled ? 'text-slate-700' : 'text-white'" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </template>
                <template x-if="!isMobileMenuOpen">
                    <svg :class="isScrolled ? 'text-slate-700' : 'text-white'" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </template>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div 
            x-show="isMobileMenuOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden absolute top-20 left-0 right-0 bg-white border-b border-slate-200 shadow-lg"
        >
            <div class="container mx-auto px-4 py-4 space-y-4">
                <a href="{{ url('/') }}" class="block w-full text-left py-2 text-slate-700 font-medium hover:text-blue-600 transition-colors">
                    Beranda
                </a>
                <button @click="document.getElementById('tentang').scrollIntoView({ behavior: 'smooth' }); isMobileMenuOpen = false"
                        class="block w-full text-left py-2 text-slate-700 font-medium hover:text-blue-600 transition-colors">
                    Tentang
                </button>
                <button @click="document.getElementById('paket').scrollIntoView({ behavior: 'smooth' }); isMobileMenuOpen = false"
                        class="block w-full text-left py-2 text-slate-700 font-medium hover:text-blue-600 transition-colors">
                    Paket
                </button>
                <a href="{{ route('bidang-it') }}" class="block w-full text-left py-2 text-slate-700 font-medium hover:text-blue-600 transition-colors">
                    Bidang IT
                </a>
                <button @click="document.getElementById('kontak').scrollIntoView({ behavior: 'smooth' }); isMobileMenuOpen = false"
                        class="block w-full text-left py-2 text-slate-700 font-medium hover:text-blue-600 transition-colors">
                    Kontak
                </button>
                <button 
                    @click="openRegister(); isMobileMenuOpen = false"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg transition-all"
                >
                    Daftar Sekarang
                </button>
            </div>
        </div>
    </div>
</nav>
