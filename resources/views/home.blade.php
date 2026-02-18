@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white" x-data="{ 
        isRegisterOpen: false, 
        selectedPackage: '',
        scrollToPackages() {
            document.getElementById('paket').scrollIntoView({ behavior: 'smooth' });
        },
        openRegister(packageName = '') {
            this.selectedPackage = packageName;
            this.isRegisterOpen = true;
            document.body.style.overflow = 'hidden';
        },
        closeRegister() {
            this.isRegisterOpen = false;
            this.selectedPackage = '';
            document.body.style.overflow = '';
        }
    }">
        {{-- Navbar --}}
        @include('components.navbar')
        
        {{-- Main Content --}}
        <main id="main-content">
            {{-- Hero Section --}}
            @include('components.hero')
            
            {{-- Packages Section --}}
            <div id="paket">
                @include('components.packages')
            </div>
            
            {{-- Philosophy Section --}}
            @include('components.philosophy')
            
            {{-- About Section --}}
            <div id="tentang">
                @include('components.about')
            </div>
            
            {{-- Technical Advantages --}}
            @include('components.technical-advantages')
            
            {{-- Testimonials --}}
            @include('components.testimonials')
            
            {{-- Footer --}}
            <div id="kontak">
                @include('components.footer')
            </div>
        </main>
        
        {{-- Registration Modal --}}
        @include('components.registration-modal')
        
        {{-- Promo Popup --}}
        @include('components.promo-popup')
    </div>
@endsection
