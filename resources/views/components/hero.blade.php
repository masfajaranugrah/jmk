{{-- Hero Section --}}
@php
    $heroSlides = [
        ['image' => 'images/hero/slide1.png', 'title' => 'Data Center', 'subtitle' => 'Enterprise-grade infrastructure'],
        ['image' => 'images/hero/slide2.png', 'title' => 'Global Network', 'subtitle' => 'Worldwide connectivity'],
        ['image' => 'images/hero/slide3.png', 'title' => 'Fiber Optic', 'subtitle' => 'Lightning-fast speeds'],
    ];
    
    $services = [
        'Service Instalasi Jaringan',
        'Service Konfigurasi Jaringan',
        'Service Pembangunan Infrastruktur Jaringan',
        'Maintenance atau Pemeliharaan',
    ];
@endphp

<section 
    x-data="{ 
        currentSlide: 0, 
        isTransitioning: false,
        slides: {{ Js::from($heroSlides) }},
        nextSlide() {
            if (!this.isTransitioning) {
                this.isTransitioning = true;
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                setTimeout(() => this.isTransitioning = false, 800);
            }
        },
        goToSlide(index) {
            if (!this.isTransitioning && index !== this.currentSlide) {
                this.isTransitioning = true;
                this.currentSlide = index;
                setTimeout(() => this.isTransitioning = false, 800);
            }
        },
        init() {
            setInterval(() => this.nextSlide(), 6000);
        }
    }"
    class="relative min-h-screen flex items-center justify-center overflow-hidden bg-slate-950"
>
    {{-- Background Image Slider --}}
    <div class="absolute inset-0">
        @foreach($heroSlides as $index => $slide)
            <div 
                x-show="currentSlide === {{ $index }}"
                x-transition:enter="transition-all duration-1000 ease-in-out"
                x-transition:enter-start="opacity-0 scale-110"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition-all duration-1000 ease-in-out"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-110"
                class="absolute inset-0"
            >
                <img 
                    src="{{ asset($slide['image']) }}" 
                    alt="{{ $slide['title'] }}"
                    class="w-full h-full object-cover opacity-60"
                >
                <div class="absolute inset-0 animate-ken-burns bg-slate-900/40 mix-blend-multiply"></div>
            </div>
        @endforeach
        
        {{-- Cyber Grid Overlay --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute inset-0 bg-cyber-grid animate-cyber-grid opacity-30"></div>
        </div>

        {{-- Scanline Effect --}}
        <div class="absolute inset-x-0 h-32 bg-gradient-to-b from-transparent via-blue-400/10 to-transparent animate-scanline pointer-events-none"></div>

        {{-- Floating Particles --}}
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            @for($i = 0; $i < 15; $i++)
                <div 
                    class="absolute bg-blue-400 rounded-full opacity-0 animate-float-particle"
                    style="
                        width: {{ rand(2, 6) }}px;
                        height: {{ rand(2, 6) }}px;
                        left: {{ rand(0, 100) }}%;
                        top: {{ rand(0, 100) }}%;
                        animation-delay: -{{ rand(0, 10) }}s;
                        animation-duration: {{ rand(10, 25) }}s;
                    "
                ></div>
            @endfor
        </div>
    </div>

    {{-- Overlay Gradients --}}
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/60 via-slate-950/40 to-slate-950"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950/70 via-slate-950/20 to-slate-950/70"></div>

    {{-- Main Content --}}
    <div class="container mx-auto px-4 relative z-10 py-20 flex flex-col items-center justify-center text-center">
        {{-- Slide Indicator Label --}}
        <div class="mb-6 overflow-hidden h-8">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="currentSlide === index" x-transition:enter="transition-all duration-500 ease-out" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <span class="inline-flex items-center gap-2 bg-blue-900/50 border border-blue-700/50 rounded-full px-4 py-1.5 backdrop-blur-sm">
                        <span class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></span>
                        <span class="text-xs font-medium text-blue-200 uppercase tracking-wider" x-text="slide.subtitle"></span>
                    </span>
                </div>
            </template>
        </div>

        {{-- Main Heading --}}
        <div class="relative mb-6">
            <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight tracking-tight">
                <span class="block mb-1">PT Jernih</span>
                <span class="block text-blue-400">Multi Komunikasi</span>
            </h1>
        </div>

        {{-- Subheading --}}
        <p class="text-base md:text-lg lg:text-xl text-slate-300/90 mb-8 max-w-2xl leading-relaxed font-light">
            Provider ISP Klaten terpercaya sejak 2005. Internet fiber optik cepat, stabil, dan murah mulai 
            <span class="text-blue-400 font-semibold">Rp 120.000/bulan</span>. 
            Langganan WiFi Klaten dengan support 24/7.
        </p>

        {{-- Services List --}}
        <div class="mb-10">
            <p class="text-sm uppercase tracking-widest text-slate-400 mb-4 font-medium">
                Layanan Kami
            </p>
            <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
                @foreach($services as $service)
                    <div class="px-4 py-2 bg-blue-900/30 border border-blue-500/30 rounded-full backdrop-blur-sm">
                        <span class="text-sm md:text-base font-medium text-blue-300">{{ $service }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- CTA Buttons --}}
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button
                @click="openRegister()"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-10 py-4 text-lg rounded-xl shadow-lg shadow-blue-900/30 hover:shadow-blue-900/50 transition-all duration-300 hover:scale-105 flex items-center gap-2"
            >
                Daftar Sekarang
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </button>
            <button
                @click="scrollToPackages()"
                class="bg-transparent border-2 border-white/30 hover:border-white/60 hover:bg-white/10 text-white px-10 py-4 text-lg rounded-xl transition-all duration-300 hover:scale-105 flex items-center gap-2"
            >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <polygon points="5 3 19 12 5 21 5 3"/>
                </svg>
                Lihat Paket
            </button>
        </div>

        {{-- Slide Indicators --}}
        <div class="flex items-center gap-3 mb-12">
            @foreach($heroSlides as $index => $slide)
                <button 
                    @click="goToSlide({{ $index }})"
                    :class="currentSlide === {{ $index }} ? 'w-12' : 'w-3'"
                    class="group relative transition-all duration-300"
                    aria-label="Go to slide {{ $index + 1 }}: {{ $slide['title'] }}"
                >
                    <div 
                        :class="currentSlide === {{ $index }} ? 'bg-blue-500' : 'bg-white/20 hover:bg-white/40'"
                        class="h-3 rounded-full transition-all duration-300"
                    ></div>
                </button>
            @endforeach
        </div>
    </div>

    {{-- Bottom Partners Bar --}}
    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-950 via-slate-950/90 to-transparent py-6">
        <div class="container mx-auto px-4 flex items-center justify-center gap-6 md:gap-8 overflow-hidden">
            <span class="text-xs text-slate-500 uppercase tracking-wider whitespace-nowrap">Didukung Oleh</span>
            <div class="w-px h-4 bg-slate-700"></div>
            <div class="flex items-center gap-6">
                <div class="relative h-6 w-auto">
                    <img 
                        src="{{ asset('images/logo-apjii.png') }}" 
                        alt="APJII"
                        class="h-full w-auto object-contain brightness-0 invert opacity-60 hover:opacity-100 transition-opacity"
                    >
                </div>
                <div class="relative h-6 w-auto">
                    <img 
                        src="{{ asset('images/logo-kominfo.png') }}" 
                        alt="Kominfo"
                        class="h-full w-auto object-contain brightness-0 invert opacity-60 hover:opacity-100 transition-opacity"
                    >
                </div>
                <div class="relative h-6 w-auto">
                    <img 
                        src="{{ asset('images/logo-bakti.png') }}" 
                        alt="BAKTI"
                        class="h-full w-auto object-contain brightness-0 invert opacity-60 hover:opacity-100 transition-opacity"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
