{{-- Packages Section --}}
@php
    $packages = [
        [
            'name' => 'Paket 15 Mbps',
            'speed' => '15 Mbps',
            'price' => '120.000',
            'installationCost' => '100.000',
            'description' => 'Cocok untuk kebutuhan dasar internet rumahan dan browsing',
            'features' => ['Biaya Instalasi Rp 100.000', 'Support 24/7'],
            'popular' => false,
            'gradient' => 'from-slate-600 to-slate-700',
            'glow' => 'shadow-slate-500/30',
            'iconPath' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
        ],
        [
            'name' => 'Paket 20 Mbps',
            'speed' => '20 Mbps',
            'price' => '150.000',
            'installationCost' => '100.000',
            'description' => 'Ideal untuk streaming HD dan gaming online dengan lancar',
            'features' => ['Biaya Instalasi Rp 100.000', 'Support 24/7'],
            'popular' => true,
            'gradient' => 'from-blue-600 to-blue-700',
            'glow' => 'shadow-blue-500/50',
            'iconPath' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
        ],
        [
            'name' => 'Paket 25 Mbps',
            'speed' => '25 Mbps',
            'price' => '180.000',
            'installationCost' => '100.000',
            'description' => 'Performa maksimal untuk aktivitas banyak perangkat sekaligus',
            'features' => ['Biaya Instalasi Rp 100.000', 'Support 24/7'],
            'popular' => false,
            'gradient' => 'from-blue-700 to-blue-800',
            'glow' => 'shadow-blue-600/30',
            'iconPath' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z',
        ],
    ];
@endphp

<section 
    x-data="{ isVisible: false, hoveredIndex: null }"
    x-intersect:enter="isVisible = true"
    id="paket"
    class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden"
>
    {{-- Background decoration --}}
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div 
            :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            class="text-center max-w-3xl mx-auto mb-16 transition-all duration-1000"
        >
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 rounded-full px-4 py-2 mb-6">
                <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
                <span class="text-sm font-medium text-blue-600">Paket WiFi Murah Klaten</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6">
                Pasang Internet <span class="text-blue-600">Klaten</span> Murah
            </h2>
            <p class="text-slate-600 text-lg">
                Langganan WiFi Klaten dengan harga terjangkau. Semua paket termasuk instalasi Rp 100.000 dan dukungan teknis 24/7.
            </p>
        </div>

        {{-- Packages grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
            @foreach($packages as $index => $pkg)
                <div 
                    :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                    class="relative transition-all duration-700"
                    style="transition-delay: {{ $index * 150 }}ms"
                    @mouseenter="hoveredIndex = {{ $index }}"
                    @mouseleave="hoveredIndex = null"
                >
                    {{-- 3D Card --}}
                    <div 
                        :class="[
                            '{{ $pkg['popular'] ? 'border-blue-500 shadow-2xl shadow-blue-500/20 scale-100 md:scale-105 z-20' : 'border-slate-200 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-100 z-10' }}',
                            hoveredIndex === {{ $index }} ? 'scale-105 -translate-y-4' : ''
                        ]"
                        class="relative p-8 bg-white rounded-3xl border-2 transition-all duration-500 transform-gpu cursor-default"
                    >
                        @if($pkg['popular'])
                            {{-- Popular badge --}}
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 flex items-center gap-1.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white px-4 py-1.5 rounded-full text-sm font-semibold shadow-lg shadow-blue-500/30">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Paling Populer
                            </div>
                            {{-- Glow effect --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-3xl pointer-events-none"></div>
                        @endif

                        {{-- Icon --}}
                        <div 
                            :class="hoveredIndex === {{ $index }} ? 'rotate-6 scale-110' : ''"
                            class="relative w-16 h-16 bg-gradient-to-br {{ $pkg['gradient'] }} rounded-2xl flex items-center justify-center mb-6 shadow-lg {{ $pkg['glow'] }} transform transition-transform duration-300"
                        >
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $pkg['iconPath'] }}" />
                            </svg>
                        </div>

                        {{-- Package info --}}
                        <h3 class="text-xl font-bold text-slate-800 mb-2">{{ $pkg['name'] }}</h3>
                        <p class="text-slate-500 text-sm mb-4">{{ $pkg['description'] }}</p>

                        {{-- Speed --}}
                        <div class="mb-6">
                            <span class="text-4xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">
                                {{ $pkg['speed'] }}
                            </span>
                        </div>

                        {{-- Price --}}
                        <div class="mb-6 pb-6 border-b border-slate-200">
                            <span class="text-slate-400 text-sm">Mulai dari</span>
                            <div class="flex items-baseline gap-1">
                                <span class="text-sm text-slate-600">Rp</span>
                                <span class="text-3xl font-bold text-slate-800">{{ $pkg['price'] }}</span>
                                <span class="text-slate-400 text-sm">/bulan</span>
                            </div>
                        </div>

                        {{-- Features --}}
                        <ul class="space-y-3 mb-8">
                            @foreach($pkg['features'] as $feature)
                                <li class="flex items-center gap-3 text-sm group/feature">
                                    <div class="{{ $pkg['popular'] ? 'bg-blue-100' : 'bg-slate-100 group-hover/feature:bg-blue-100' }} w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 transition-colors">
                                        <svg class="w-3 h-3 {{ $pkg['popular'] ? 'text-blue-600' : 'text-slate-600 group-hover/feature:text-blue-600' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-700">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        {{-- CTA Button --}}
                        <button
                            @click="openRegister('{{ $pkg['name'] }}')"
                            class="w-full py-4 font-semibold rounded-xl transition-all duration-300 {{ $pkg['popular'] ? 'bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50' : 'bg-slate-100 hover:bg-blue-600 text-slate-700 hover:text-white' }}"
                        >
                            Pilih Paket
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
