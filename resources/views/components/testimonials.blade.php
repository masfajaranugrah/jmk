{{-- Testimonials Section --}}
@php
    $testimonials = [
        [
            'name' => 'Ahmad Hidayat',
            'avatar' => 'AH',
            'content' => 'Sejak beralih ke JMK, produktivitas tim kami meningkat drastis. Koneksi stabil 24/7 tanpa gangguan. Highly recommended!',
            'rating' => 5,
            'gradient' => 'from-blue-500 to-blue-600',
        ],
        [
            'name' => 'Sari Dewi',
            'avatar' => 'SD',
            'content' => 'Pelanggan kafe saya sangat puas dengan WiFi yang cepat dan stabil. Support team JMK juga sangat responsif saat ada kendala.',
            'rating' => 5,
            'gradient' => 'from-purple-500 to-violet-600',
        ],
        [
            'name' => 'Budi Santoso',
            'avatar' => 'BS',
            'content' => 'Untuk kebutuhan enterprise, JMK memberikan SLA yang sangat memuaskan. Dedicated support mereka luar biasa.',
            'rating' => 5,
            'gradient' => 'from-emerald-500 to-green-600',
        ],
    ];
@endphp

<section 
    x-data="{ isVisible: false }"
    x-intersect:enter="isVisible = true"
    class="py-24 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden"
>
    {{-- Background decoration --}}
    <div class="absolute inset-0">
        <div class="absolute top-20 right-20 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-purple-100 rounded-full blur-3xl opacity-30"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div 
            :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
            class="text-center max-w-3xl mx-auto mb-16 transition-all duration-1000"
        >
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 rounded-full px-4 py-2 mb-6">
                <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="text-sm font-medium text-blue-600">Testimoni</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6">
                Dipercaya <span class="text-blue-600">Ribuan</span> Pelanggan
            </h2>
            <p class="text-slate-600 text-lg">
                Dengarkan langsung dari pelanggan kami yang telah merasakan kualitas layanan JMK Jernih Multi Komunikasi.
            </p>
        </div>

        {{-- Testimonials grid --}}
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            @foreach($testimonials as $index => $testimonial)
                <div 
                    :class="isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'"
                    class="group transition-all duration-700"
                    style="transition-delay: {{ $index * 150 }}ms"
                >
                    <div class="relative p-8 bg-white rounded-3xl border border-slate-200 hover:border-blue-300 hover:shadow-2xl hover:shadow-blue-100/50 transition-all duration-500 transform-gpu hover:scale-105 hover:-translate-y-2">
                        {{-- Quote icon --}}
                        <div class="absolute top-6 right-6">
                            <svg class="w-8 h-8 text-blue-100 group-hover:text-blue-200 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>

                        {{-- Decorative gradient line --}}
                        <div class="absolute top-0 left-8 right-8 h-1 bg-gradient-to-r {{ $testimonial['gradient'] }} rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>

                        {{-- Rating --}}
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < $testimonial['rating']; $i++)
                                <svg class="w-5 h-5 fill-amber-400 text-amber-400 transition-transform hover:scale-125" viewBox="0 0 24 24">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                </svg>
                            @endfor
                        </div>

                        {{-- Content --}}
                        <p class="text-slate-700 mb-6 leading-relaxed text-lg">
                            "{{ $testimonial['content'] }}"
                        </p>

                        {{-- Author --}}
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-gradient-to-br {{ $testimonial['gradient'] }} rounded-2xl flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                {{ $testimonial['avatar'] }}
                            </div>
                            <div>
                                <div class="font-semibold text-slate-800">{{ $testimonial['name'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
