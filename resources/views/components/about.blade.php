{{-- About Section --}}
@php
    $stats = [
        ['number' => '2005', 'label' => 'Tahun Berdiri'],
        ['number' => '500+', 'label' => 'Proyek Selesai'],
        ['number' => '100+', 'label' => 'Klien Enterprise'],
        ['number' => '24/7', 'label' => 'Dukungan Teknis'],
    ];

    $services = [
        [
            'title' => 'Instalasi Jaringan',
            'description' => 'Pembangunan dan instalasi infrastruktur jaringan profesional',
            'iconPath' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'
        ],
        [
            'title' => 'Konfigurasi Jaringan',
            'description' => 'Konfigurasi routing, switching, dan pengaturan jaringan optimal',
            'iconPath' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'
        ],
        [
            'title' => 'Infrastruktur Jaringan',
            'description' => 'Pembangunan infrastruktur jaringan dengan perangkat terbaik',
            'iconPath' => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01'
        ],
        [
            'title' => 'Maintenance',
            'description' => 'Pemeliharaan dan monitoring jaringan 24/7 dengan SLA 99%',
            'iconPath' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065zM15 12a3 3 0 11-6 0 3 3 0 016 0z'
        ],
    ];
@endphp

<section id="tentang" class="py-16 lg:py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-600 font-medium text-sm px-4 py-1.5 rounded-full mb-4 border border-blue-200">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                Provider WiFi Klaten Terpercaya
            </span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-800 mb-4">
                PT <span class="text-blue-600">Jernih Multi Komunikasi</span>
            </h2>
            <p class="text-slate-600">
                Provider ISP dan jasa pasang WiFi murah di Klaten sejak 2005. Melayani internet fiber optik untuk rumah, kantor, dan perusahaan di Klaten dan sekitarnya.
            </p>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
            @foreach($stats as $stat)
                <div class="bg-white border border-slate-200 rounded-xl p-4 text-center shadow-sm hover:shadow-md hover:border-blue-200 transition-all">
                    <div class="text-2xl md:text-3xl font-bold text-blue-600 mb-1">{{ $stat['number'] }}</div>
                    <p class="text-slate-500 text-sm">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="grid lg:grid-cols-2 gap-8 items-start mb-12">
            {{-- Company Info --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 lg:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500">Lokasi Operasional</p>
                        <p class="font-semibold text-slate-700 text-sm">Klaten, Jawa Tengah - Indonesia</p>
                    </div>
                </div>

                <div class="space-y-4 text-sm">
                    <p class="text-slate-700 leading-relaxed">
                        <strong class="text-blue-600">JMK Jernih Multi Komunikasi</strong> (ejpmedia network) merupakan perusahaan yang bergerak di bidang jasa Teknologi Informasi, khususnya pada bagian jaringan. Berdiri sejak <strong>Oktober 2005</strong>, kami telah membantu berbagai klien dari perumahan hingga perusahaan berskala besar.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Perusahaan kami memiliki team dengan kemampuan individual dan kerjasama yang handal. Kami juga telah bekerja sama dengan <strong class="text-slate-700">vendor terkemuka seperti CISCO, ORACLE, dan SAP</strong> untuk memberikan solusi terbaik.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Kami menggunakan perangkat router seri <strong class="text-slate-700">M3200</strong> dengan keunggulan routing table yang andal menggunakan metode algoritma <strong class="text-slate-700">Malfo-IA01</strong> untuk mem-backup jalur layanan.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2 mt-6">
                    <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-600 text-xs font-medium px-3 py-1.5 rounded-full border border-blue-200">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Oktober 2005
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-green-50 text-green-600 text-xs font-medium px-3 py-1.5 rounded-full border border-green-200">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        SLA 95-99%
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-slate-50 text-slate-600 text-xs font-medium px-3 py-1.5 rounded-full border border-slate-200">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Klaten, Indonesia
                    </span>
                </div>
            </div>

            {{-- Services Grid --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach($services as $service)
                    <div class="bg-white border border-slate-200 rounded-xl p-4 hover:border-blue-300 hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-3 border border-blue-100">
                            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['iconPath'] }}" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-slate-700 text-sm mb-1">{{ $service['title'] }}</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        
        {{-- Visi Misi Section --}}
        <div class="grid md:grid-cols-2 gap-6 mb-12">
            <div class="bg-blue-600 rounded-2xl p-6 text-white">
                <h3 class="text-xl font-bold mb-3">Visi</h3>
                <p class="text-blue-100 leading-relaxed">
                    Menjadi perusahaan sistem integrator jaringan yang terbaik dan terkemuka di Indonesia
                </p>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <h3 class="text-xl font-bold text-slate-800 mb-3">Misi</h3>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                        Menyediakan layanan integrasi sistem jaringan terbaik kepada semua pelanggan
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                        Menjadi perusahaan terdepan dalam perkembangan Teknologi Informasi
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mt-2 flex-shrink-0"></span>
                        Menjalin kerjasama dengan berbagai vendor terkemuka di dunia
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-center">
            <a href="#kontak" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-medium px-6 py-3 rounded-full transition-all duration-300 text-sm shadow-lg shadow-blue-600/25 hover:shadow-xl hover:shadow-blue-500/30">
                Hubungi Kami
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
