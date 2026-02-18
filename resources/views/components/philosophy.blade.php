{{-- Philosophy Section with Circuit Animation --}}
@php
    $pillars = [
        [
            'title' => 'Reliability',
            'subtitle' => 'Keandalan',
            'description' => 'Redundant network & multi-path backup.',
            'color' => '#3b82f6',
            'iconPath' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
        ],
        [
            'title' => 'Performance',
            'subtitle' => 'Performa',
            'description' => 'Dedicated bandwidth & low latency access.',
            'color' => '#f59e0b',
            'iconPath' => 'M13 10V3L4 14h7v7l9-11h-7z'
        ],
        [
            'title' => 'Security',
            'subtitle' => 'Keamanan',
            'description' => 'Enterprise firewall & DDoS protection.',
            'color' => '#10b981',
            'iconPath' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'
        ],
        [
            'title' => 'Scalability',
            'subtitle' => 'Skalabilitas',
            'description' => 'Seamless upgrade without downtime.',
            'color' => '#8b5cf6',
            'iconPath' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'
        ],
    ];
@endphp

<section class="py-20 bg-[#0a0a0a] relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-6">
            <p class="text-gray-400 text-lg">Our core <span class="text-white">service philosophy</span></p>
        </div>

        {{-- Circuit Container --}}
        <div class="relative max-w-6xl mx-auto h-auto md:h-[520px]">
            {{-- SVG Circuit Lines (Desktop) --}}
            <svg class="hidden md:block absolute inset-0 w-full h-full" viewBox="0 0 800 520" preserveAspectRatio="xMidYMid meet">
                <defs>
                    <filter id="glowPhil" x="-50%" y="-50%" width="200%" height="200%">
                        <feGaussianBlur stdDeviation="4" result="blur" />
                        <feMerge>
                            <feMergeNode in="blur" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                    <filter id="glowStrongPhil" x="-100%" y="-100%" width="300%" height="300%">
                        <feGaussianBlur stdDeviation="6" result="blur" />
                        <feMerge>
                            <feMergeNode in="blur" />
                            <feMergeNode in="blur" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>

                {{-- Paths --}}
                <path id="p1" d="M400 140 L400 160 Q400 180 380 180 L140 180 Q120 180 120 200 L120 280 Q120 300 110 300 L100 300 Q90 300 90 320 L90 360" fill="none" stroke="#1e293b" stroke-width="2" />
                <path id="p2" d="M400 140 L400 190 Q400 210 380 210 L310 210 Q290 210 290 230 L290 300 Q290 320 290 340 L290 360" fill="none" stroke="#1e293b" stroke-width="2" />
                <path id="p3" d="M400 140 L400 190 Q400 210 420 210 L490 210 Q510 210 510 230 L510 300 Q510 320 510 340 L510 360" fill="none" stroke="#1e293b" stroke-width="2" />
                <path id="p4" d="M400 140 L400 160 Q400 180 420 180 L660 180 Q680 180 680 200 L680 280 Q680 300 690 300 L700 300 Q710 300 710 320 L710 360" fill="none" stroke="#1e293b" stroke-width="2" />

                {{-- Decorative dashes --}}
                <path d="M120 240 L160 240" fill="none" stroke="#1e293b" stroke-width="1.5" stroke-dasharray="4,4" />
                <path d="M680 240 L640 240" fill="none" stroke="#1e293b" stroke-width="1.5" stroke-dasharray="4,4" />

                {{-- Junction Dots --}}
                <circle cx="120" cy="240" r="3" fill="#1e293b" />
                <circle cx="680" cy="240" r="3" fill="#1e293b" />
                <circle cx="400" cy="160" r="3" fill="#1e293b" />
                <circle cx="400" cy="190" r="3" fill="#1e293b" />

                {{-- Animated Circles --}}
                <circle r="5" fill="#3b82f6" filter="url(#glowStrongPhil)">
                    <animateMotion dur="3s" repeatCount="indefinite">
                        <mpath href="#p1" />
                    </animateMotion>
                </circle>
                <circle r="3" fill="#3b82f6" opacity="0.6">
                    <animateMotion dur="3s" repeatCount="indefinite" begin="0.1s">
                        <mpath href="#p1" />
                    </animateMotion>
                </circle>

                <circle r="5" fill="#f59e0b" filter="url(#glowStrongPhil)">
                    <animateMotion dur="3.5s" repeatCount="indefinite" begin="0.5s">
                        <mpath href="#p2" />
                    </animateMotion>
                </circle>
                <circle r="3" fill="#f59e0b" opacity="0.6">
                    <animateMotion dur="3.5s" repeatCount="indefinite" begin="0.6s">
                        <mpath href="#p2" />
                    </animateMotion>
                </circle>

                <circle r="5" fill="#10b981" filter="url(#glowStrongPhil)">
                    <animateMotion dur="3.2s" repeatCount="indefinite" begin="0.2s">
                        <mpath href="#p3" />
                    </animateMotion>
                </circle>
                <circle r="3" fill="#10b981" opacity="0.6">
                    <animateMotion dur="3.2s" repeatCount="indefinite" begin="0.3s">
                        <mpath href="#p3" />
                    </animateMotion>
                </circle>

                <circle r="5" fill="#8b5cf6" filter="url(#glowStrongPhil)">
                    <animateMotion dur="3s" repeatCount="indefinite" begin="0.7s">
                        <mpath href="#p4" />
                    </animateMotion>
                </circle>
                <circle r="3" fill="#8b5cf6" opacity="0.6">
                    <animateMotion dur="3s" repeatCount="indefinite" begin="0.8s">
                        <mpath href="#p4" />
                    </animateMotion>
                </circle>

                {{-- Chip Pulse --}}
                <circle cx="400" cy="140" r="4" fill="#374151">
                    <animate attributeName="r" values="3;5;3" dur="2s" repeatCount="indefinite" />
                    <animate attributeName="opacity" values="0.5;1;0.5" dur="2s" repeatCount="indefinite" />
                </circle>

                {{-- Connection dots at bottom --}}
                <circle cx="90" cy="360" r="4" fill="#3b82f6" opacity="0.6" />
                <circle cx="290" cy="360" r="4" fill="#f59e0b" opacity="0.6" />
                <circle cx="510" cy="360" r="4" fill="#10b981" opacity="0.6" />
                <circle cx="710" cy="360" r="4" fill="#8b5cf6" opacity="0.6" />
            </svg>

            {{-- Central Chip --}}
            <div class="relative mb-8 md:mb-0 md:absolute md:left-1/2 md:-translate-x-1/2 md:top-[100px] flex justify-center">
                <div class="relative">
                    <div class="bg-[#0a0a0a] border border-gray-800 rounded-xl px-6 py-3 relative z-10 shadow-xl shadow-blue-900/10">
                        <span class="text-gray-300 text-sm font-medium flex items-center gap-2">
                            <svg class="w-4 h-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            Core Philosophy
                        </span>
                    </div>
                    {{-- Pins --}}
                    <div class="absolute -top-2 left-1/2 -translate-x-1/2 flex gap-1">
                        @for($i = 0; $i < 6; $i++)
                            <div class="w-1.5 h-2 bg-gray-700 rounded-t"></div>
                        @endfor
                    </div>
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 flex gap-1">
                        @for($i = 0; $i < 6; $i++)
                            <div class="w-1.5 h-2 bg-gray-700 rounded-b"></div>
                        @endfor
                    </div>
                    {{-- Mobile Connector --}}
                    <div class="md:hidden absolute top-full left-1/2 -translate-x-1/2 w-[2px] h-8 bg-gray-800"></div>
                </div>
            </div>

            {{-- Cards Grid --}}
            <div class="md:absolute md:bottom-0 md:left-0 md:right-0 grid grid-cols-1 md:grid-cols-4 gap-4 px-2">
                @foreach($pillars as $index => $item)
                    <div class="bg-[#0a0a0a] border border-gray-800 rounded-xl p-5 md:p-4 relative group hover:border-gray-700 transition-colors flex md:block items-center md:items-start gap-4 md:gap-0">
                        {{-- Top colored line (Desktop) --}}
                        <div 
                            class="hidden md:block absolute top-0 left-4 right-4 h-[2px] rounded-full opacity-60 group-hover:opacity-100 transition-opacity"
                            style="background-color: {{ $item['color'] }}"
                        ></div>
                        {{-- Left colored line (Mobile) --}}
                        <div 
                            class="md:hidden absolute left-0 top-4 bottom-4 w-1 rounded-r-full opacity-80"
                            style="background-color: {{ $item['color'] }}"
                        ></div>

                        {{-- Icon --}}
                        <div 
                            class="shrink-0 w-12 h-12 md:w-10 md:h-10 rounded-lg flex items-center justify-center md:mb-3"
                            style="background-color: {{ $item['color'] }}20"
                        >
                            <svg class="w-6 h-6 md:w-5 md:h-5" style="color: {{ $item['color'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['iconPath'] }}" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-white font-bold text-lg md:text-sm md:font-semibold mb-0.5 md:mb-1">{{ $item['title'] }}</h3>
                            <p class="text-xs uppercase tracking-wider font-semibold opacity-70 mb-1 md:mb-2" style="color: {{ $item['color'] }}">{{ $item['subtitle'] }}</p>
                            <p class="text-gray-500 text-sm md:text-xs leading-relaxed">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
