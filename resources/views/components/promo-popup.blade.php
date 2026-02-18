{{-- Promo Popup --}}
<div 
    x-data="{ 
        isOpen: false, 
        hasShown: false,
        init() {
            // Show popup after 5 seconds if not already shown
            setTimeout(() => {
                if (!this.hasShown && !localStorage.getItem('promoPopupClosed')) {
                    this.isOpen = true;
                    this.hasShown = true;
                }
            }, 5000);
        }
    }"
    x-show="isOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 flex items-center justify-center p-4"
    @keydown.escape.window="isOpen = false; localStorage.setItem('promoPopupClosed', 'true')"
>
    {{-- Backdrop --}}
    <div 
        class="absolute inset-0 bg-black/60 backdrop-blur-sm" 
        @click="isOpen = false; localStorage.setItem('promoPopupClosed', 'true')"
    ></div>
    
    {{-- Popup Content --}}
    <div 
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 rounded-3xl shadow-2xl w-full max-w-md overflow-hidden"
        @click.stop
    >
        {{-- Decorative Elements --}}
        <div class="absolute top-0 right-0 w-40 h-40 bg-blue-500/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-cyan-500/30 rounded-full blur-3xl"></div>
        
        {{-- Close Button --}}
        <button 
            @click="isOpen = false; localStorage.setItem('promoPopupClosed', 'true')"
            class="absolute top-4 right-4 p-2 rounded-full bg-white/20 hover:bg-white/30 transition-colors z-10"
        >
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="relative p-8 text-center">
            {{-- Icon --}}
            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                </svg>
            </div>
            
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-4 py-1.5 mb-4">
                <svg class="w-4 h-4 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                </svg>
                <span class="text-sm font-medium text-white">Promo Eksklusif</span>
            </div>
            
            {{-- Title --}}
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">
                Gratis Biaya Instalasi!
            </h3>
            
            {{-- Description --}}
            <p class="text-white/80 mb-6">
                Daftar sekarang dan dapatkan <span class="font-semibold text-white">GRATIS biaya instalasi</span> senilai Rp 100.000. Promo terbatas!
            </p>
            
            {{-- CTA Button --}}
            <button 
                @click="isOpen = false; localStorage.setItem('promoPopupClosed', 'true'); openRegister()"
                class="w-full bg-white text-blue-600 font-bold py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2"
            >
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                </svg>
                Klaim Promo Sekarang
            </button>
            
            {{-- Dismiss Text --}}
            <button 
                @click="isOpen = false; localStorage.setItem('promoPopupClosed', 'true')"
                class="mt-4 text-sm text-white/60 hover:text-white/80 transition-colors"
            >
                Nanti saja, terima kasih
            </button>
        </div>
    </div>
</div>
