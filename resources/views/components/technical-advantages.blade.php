{{-- Technical Advantages Section --}}
@php
    $advantages = [
        [
            'value' => 'Tier-1',
            'label' => 'Backbone',
            'description' => 'Koneksi langsung ke backbone internet internasional',
            'iconPath' => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01'
        ],
        [
            'value' => '99.9%',
            'label' => 'Uptime SLA',
            'description' => 'Jaminan ketersediaan layanan sepanjang tahun',
            'iconPath' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
        ],
        [
            'value' => '24/7',
            'label' => 'NOC Support',
            'description' => 'Network Operation Center aktif setiap saat',
            'iconPath' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'
        ],
        [
            'value' => '< 5ms',
            'label' => 'Latency',
            'description' => 'Respon super cepat ke server lokal',
            'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z'
        ],
    ];
@endphp

<section 
    x-data="{ isVisible: false }"
    x-intersect:enter="isVisible = true"
    class="py-24 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden"
>
    {{-- Background Decoration --}}
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-cyan-100 rounded-full blur-3xl opacity-50"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div 
            :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            class="text-center max-w-3xl mx-auto mb-16 transition-all duration-1000"
        >
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 rounded-full px-4 py-2 mb-6">
                <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>
                <span class="text-sm font-medium text-blue-600">Keunggulan Teknis</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6">
                Infrastruktur <span class="text-blue-600">Kelas Enterprise</span>
            </h2>
            <p class="text-slate-600 text-lg">
                Didukung teknologi terkini dan tim ahli berpengalaman untuk menjamin kualitas layanan terbaik.
            </p>
        </div>

        {{-- Advantages grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($advantages as $index => $advantage)
                <div 
                    :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                    class="group text-center transition-all duration-700"
                    style="transition-delay: {{ $index * 100 }}ms"
                >
                    <div class="p-8 bg-white rounded-2xl border border-slate-200 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 transform-gpu hover:scale-105 hover:-translate-y-2">
                        {{-- Icon --}}
                        <div class="relative w-20 h-20 mx-auto mb-6">
                            <div class="absolute inset-0 bg-blue-100 rounded-2xl group-hover:bg-blue-600 transition-colors duration-300"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-10 h-10 text-blue-600 group-hover:text-white transition-colors z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $advantage['iconPath'] }}" />
                                </svg>
                            </div>
                            {{-- Pulse ring --}}
                            <div class="absolute inset-0 rounded-2xl bg-blue-400 opacity-0 group-hover:opacity-30 animate-ping"></div>
                        </div>

                        {{-- Value --}}
                        <div class="text-4xl font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition-colors">
                            {{ $advantage['value'] }}
                        </div>

                        {{-- Label --}}
                        <div class="text-blue-600 font-semibold mb-3">
                            {{ $advantage['label'] }}
                        </div>

                        {{-- Description --}}
                        <p class="text-slate-500 text-sm">
                            {{ $advantage['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Tech Info Section --}}
        <div 
            :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            class="mt-16 transition-all duration-1000"
            style="transition-delay: 400ms"
        >
            <div class="relative p-8 md:p-12 bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 rounded-3xl overflow-hidden">
                {{-- Background Effects --}}
                <div class="absolute inset-0">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-cyan-500/20 rounded-full blur-3xl"></div>
                </div>

                <div class="relative z-10 grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">
                            Didukung Teknologi Fiber Optic Terbaru
                        </h3>
                        <p class="text-white/70 mb-6">
                            Jaringan kami menggunakan teknologi GPON dan XGS-PON terbaru yang mampu menghadirkan kecepatan hingga 10 Gbps dengan stabilitas maksimal.
                        </p>
                        <ul class="space-y-3">
                            @foreach(['GPON Technology', 'XGS-PON Ready', 'Redundant Network', 'Multi-Path Routing'] as $item)
                                <li class="flex items-center gap-3 text-white/80 text-sm group/item">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full group-hover/item:scale-150 transition-transform"></div>
                                    <span class="group-hover/item:text-blue-400 transition-colors">{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- 3D Server Animation --}}
                    <div class="relative aspect-square max-w-sm mx-auto">
                        {{-- Orbiting rings --}}
                        <div class="absolute inset-0 rounded-full border border-blue-500/20 animate-spin" style="animation-duration: 10s"></div>
                        <div class="absolute inset-4 rounded-full border border-blue-400/20 animate-spin" style="animation-duration: 15s; animation-direction: reverse"></div>
                        <div class="absolute inset-8 rounded-full border border-cyan-500/20 animate-spin" style="animation-duration: 20s"></div>

                        {{-- Center icon --}}
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="relative">
                                <div class="w-24 h-24 md:w-32 md:h-32 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl flex items-center justify-center shadow-2xl shadow-blue-500/50 animate-pulse">
                                    <svg class="w-12 h-12 md:w-16 md:h-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                    </svg>
                                </div>
                                <div class="absolute inset-0 bg-blue-500 rounded-2xl blur-xl opacity-50"></div>
                            </div>
                        </div>

                        {{-- Floating icons --}}
                        @php
                            $floatingIcons = [
                                ['position' => 'top-4 left-1/2 -translate-x-1/2', 'delay' => '0s', 'icon' => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0'],
                                ['position' => 'bottom-4 left-1/2 -translate-x-1/2', 'delay' => '0.5s', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                                ['position' => 'left-4 top-1/2 -translate-y-1/2', 'delay' => '1s', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                                ['position' => 'right-4 top-1/2 -translate-y-1/2', 'delay' => '1.5s', 'icon' => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                            ];
                        @endphp
                        @foreach($floatingIcons as $floating)
                            <div 
                                class="absolute {{ $floating['position'] }} w-10 h-10 bg-white/10 backdrop-blur-sm rounded-lg flex items-center justify-center animate-bounce"
                                style="animation-delay: {{ $floating['delay'] }}; animation-duration: 2s"
                            >
                                <svg class="w-5 h-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $floating['icon'] }}" />
                                </svg>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
