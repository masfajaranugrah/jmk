@extends('layouts.app')

@section('title', 'Bidang IT - PT Jernih Multi Komunikasi')
@section('meta_description', 'Layanan IT profesional dari PT Jernih Multi Komunikasi: instalasi jaringan, konfigurasi, pembangunan infrastruktur, dan maintenance 24/7.')

@section('content')
<div class="min-h-screen bg-white">
    {{-- Navigation --}}
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('images/logo-jmk.png') }}" alt="JMK" class="h-8 w-auto">
                </a>
                <a href="{{ url('/') }}" class="text-slate-600 hover:text-blue-600 flex items-center gap-2 text-sm">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-cyan-500/20 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-blue-500/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <svg class="w-4 h-4 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                    <span class="text-sm font-medium text-blue-300">Layanan IT Profesional</span>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                    Solusi <span class="text-blue-400">Teknologi Informasi</span> Terpadu
                </h1>
                <p class="text-white/70 text-lg">
                    Kami menyediakan layanan IT lengkap untuk kebutuhan bisnis Anda, dari instalasi hingga maintenance 24/7.
                </p>
            </div>
        </div>
    </section>

    @php
        $services = [
            [
                'title' => 'Instalasi Jaringan',
                'description' => 'Layanan instalasi jaringan komputer profesional untuk kantor, gedung, dan industri. Menggunakan peralatan berkualitas tinggi dan standar internasional.',
                'features' => ['Pemasangan kabel UTP/Fiber Optic', 'Instalasi access point', 'Setup switch & router', 'Testing & dokumentasi'],
                'iconPath' => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0',
                'gradient' => 'from-blue-500 to-blue-600'
            ],
            [
                'title' => 'Konfigurasi Jaringan',
                'description' => 'Konfigurasi jaringan enterprise dengan keamanan tingkat tinggi. Termasuk VLAN, firewall, VPN, dan load balancing.',
                'features' => ['Setup VLAN & segmentasi jaringan', 'Konfigurasi firewall', 'Setup VPN site-to-site', 'Load balancing & failover'],
                'iconPath' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                'gradient' => 'from-emerald-500 to-green-600'
            ],
            [
                'title' => 'Pembangunan Infrastruktur',
                'description' => 'Pembangunan infrastruktur jaringan dari nol hingga siap operasi. Termasuk desain, pengadaan, dan implementasi.',
                'features' => ['Survey & desain jaringan', 'Pengadaan perangkat', 'Implementasi & rollout', 'Training & knowledge transfer'],
                'iconPath' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'gradient' => 'from-purple-500 to-violet-600'
            ],
            [
                'title' => 'Maintenance & Support',
                'description' => 'Layanan pemeliharaan dan support 24/7 untuk memastikan jaringan Anda selalu optimal dan aman.',
                'features' => ['Monitoring 24/7', 'Backup & recovery', 'Security patching', 'Performance optimization'],
                'iconPath' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'gradient' => 'from-orange-500 to-red-500'
            ],
        ];
    @endphp

    {{-- Services Grid --}}
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Layanan Kami</h2>
                <p class="text-slate-600">Solusi lengkap untuk kebutuhan jaringan dan IT perusahaan Anda</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($services as $service)
                    <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-200 hover:border-blue-300">
                        <div class="w-14 h-14 bg-gradient-to-br {{ $service['gradient'] }} rounded-xl flex items-center justify-center mb-6 shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['iconPath'] }}" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-600 mb-6">{{ $service['description'] }}</p>
                        <ul class="space-y-2">
                            @foreach($service['features'] as $feature)
                                <li class="flex items-center gap-2 text-sm text-slate-600">
                                    <svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-16 bg-blue-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Butuh Konsultasi IT?</h2>
            <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
                Tim ahli kami siap membantu Anda menemukan solusi terbaik untuk kebutuhan IT perusahaan Anda.
            </p>
            <a 
                href="https://wa.me/6281234567890?text=Halo, saya ingin konsultasi layanan IT"
                target="_blank"
                class="inline-flex items-center gap-2 bg-white text-blue-600 font-semibold px-8 py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 shadow-lg"
            >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
                Hubungi Kami via WhatsApp
            </a>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-slate-900 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-slate-400 text-sm">© 2025 PT Jernih Multi Komunikasi. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>
</div>
@endsection
