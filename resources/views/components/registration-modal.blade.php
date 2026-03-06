{{-- Registration Modal --}}
@php
    $packageData = [
        'Paket 15 Mbps' => ['speed' => '15 Mbps', 'price' => 'Rp 120.000'],
        'Paket 20 Mbps' => ['speed' => '20 Mbps', 'price' => 'Rp 150.000'],
        'Paket 25 Mbps' => ['speed' => '25 Mbps', 'price' => 'Rp 180.000'],
    ];
@endphp

<div 
    x-show="isRegisterOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 flex items-center justify-center p-4"
    @keydown.escape.window="closeRegister()"
>
    {{-- Backdrop --}}
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" @click="closeRegister()"></div>
    
    {{-- Modal Content --}}
    <div 
        x-show="isRegisterOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        x-data="registrationForm()"
        class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto"
        @click.stop
    >
        {{-- Close Button --}}
        <button 
            @click="closeRegister()"
            class="absolute top-4 right-4 p-2 rounded-full hover:bg-slate-100 transition-colors z-10"
        >
            <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-6">
            {{-- Header --}}
            <div class="mb-6">
                <h2 class="text-xl font-bold text-slate-800">Form Pendaftaran Layanan</h2>
                <p class="text-sm text-slate-500">Lengkapi data berikut untuk mendaftar</p>
            </div>

            <div class="space-y-4">
                {{-- Package Selection --}}
                <div class="p-4 bg-blue-50 rounded-xl border border-blue-200 space-y-3">
                    <label class="flex items-center gap-2 text-sm font-medium text-slate-700">
                        <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        Pilih Paket <span class="text-red-500">*</span>
                    </label>
                    
                    <template x-if="selectedPackage && packages[selectedPackage]">
                        <div class="flex items-center justify-between bg-white/70 rounded-lg px-4 py-3">
                            <div>
                                <p class="font-semibold text-blue-600" x-text="selectedPackage"></p>
                                <p class="text-xs text-slate-500" x-text="packages[selectedPackage]?.speed"></p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-blue-600" x-text="packages[selectedPackage]?.price"></p>
                                <p class="text-xs text-slate-500">/bulan</p>
                            </div>
                        </div>
                    </template>
                    
                    <template x-if="!selectedPackage">
                        <select 
                            x-model="formData.paket"
                            @change="updatePackagePrice()"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                        >
                            <option value="">Pilih paket internet</option>
                            @foreach($packageData as $name => $info)
                                <option value="{{ $name }}">{{ $name }} - {{ $info['speed'] }} - {{ $info['price'] }}</option>
                            @endforeach
                        </select>
                    </template>
                </div>

                {{-- Personal Data --}}
                <div class="space-y-3">
                    <h3 class="font-semibold text-sm text-slate-700">Data Diri</h3>
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input 
                            type="text" 
                            x-model="formData.nama"
                            placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                        >
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm text-slate-600 mb-1">No. WhatsApp <span class="text-red-500">*</span></label>
                            <input 
                                type="text" 
                                x-model="formData.nomorWA"
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                            >
                        </div>
                        <div>
                            <label class="block text-sm text-slate-600 mb-1">No. Telepon</label>
                            <input 
                                type="text" 
                                x-model="formData.nomorTelp"
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                            >
                        </div>
                    </div>
                </div>

                {{-- Address --}}
                <div class="space-y-3">
                    <h3 class="font-semibold text-sm text-slate-700">Alamat Pemasangan</h3>
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">Alamat Jalan <span class="text-red-500">*</span></label>
                        <input 
                            type="text" 
                            x-model="formData.alamatJalan"
                            placeholder="Jl. Contoh No. 123"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                        >
                    </div>
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">RT / RW <span class="text-red-500">*</span></label>
                        <div class="flex items-center gap-2">
                            <input type="text" x-model="formData.rt" placeholder="001" maxlength="3"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm text-center font-mono">
                            <span class="text-lg font-bold text-slate-400">/</span>
                            <input type="text" x-model="formData.rw" placeholder="002" maxlength="3"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm text-center font-mono">
                        </div>
                    </div>

                    {{-- Provinsi Searchable --}}
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">Provinsi <span class="text-red-500">*</span></label>
                        <div class="relative" x-data="{ open: false, search: '' }" @click.outside="open = false">
                            <button type="button" @click="open = !open; if(open) $nextTick(() => $refs.searchProv.focus())"
                                :disabled="loadingProvinces"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg text-sm text-left flex items-center justify-between bg-white disabled:bg-slate-100 disabled:cursor-wait focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                :class="formData.provinsi ? 'text-slate-800' : 'text-slate-400'">
                                <span x-text="formData.provinsi || '-- Pilih Provinsi --'"></span>
                                <svg x-show="!loadingProvinces" class="w-4 h-4 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                <svg x-show="loadingProvinces" class="w-4 h-4 text-blue-500 animate-spin flex-shrink-0" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                            </button>
                            <div x-show="open" x-transition class="absolute z-50 w-full mt-1 bg-white border border-slate-200 rounded-lg shadow-lg">
                                <div class="p-2 border-b border-slate-100">
                                    <input x-ref="searchProv" type="text" x-model="search" placeholder="Cari provinsi..." class="w-full px-3 py-1.5 text-sm border border-slate-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                </div>
                                <ul class="max-h-48 overflow-y-auto py-1">
                                    <template x-for="prov in provinces.filter(p => p.name.toLowerCase().includes(search.toLowerCase()))" :key="prov.id">
                                        <li @click="selectedProvinceId = prov.id; formData.provinsi = prov.name; open = false; search = ''; onProvinceChange(prov.id)"
                                            class="px-4 py-2 text-sm cursor-pointer hover:bg-blue-50 hover:text-blue-700"
                                            :class="selectedProvinceId === prov.id ? 'bg-blue-50 text-blue-700 font-medium' : 'text-slate-700'"
                                            x-text="prov.name"></li>
                                    </template>
                                    <li x-show="provinces.filter(p => p.name.toLowerCase().includes(search.toLowerCase())).length === 0" class="px-4 py-2 text-sm text-slate-400 text-center">Tidak ditemukan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Kabupaten/Kota Searchable --}}
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">Kabupaten/Kota <span class="text-red-500">*</span></label>
                        <div class="relative" x-data="{ open: false, search: '' }" @click.outside="open = false">
                            <button type="button" @click="if(selectedProvinceId && !loadingRegencies) { open = !open; if(open) $nextTick(() => $refs.searchReg.focus()) }"
                                :disabled="!selectedProvinceId || loadingRegencies"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg text-sm text-left flex items-center justify-between bg-white disabled:bg-slate-100 disabled:cursor-not-allowed focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                :class="formData.kabupaten ? 'text-slate-800' : 'text-slate-400'">
                                <span x-text="formData.kabupaten || '-- Pilih Kabupaten/Kota --'"></span>
                                <svg x-show="!loadingRegencies" class="w-4 h-4 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                <svg x-show="loadingRegencies" class="w-4 h-4 text-blue-500 animate-spin flex-shrink-0" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                            </button>
                            <div x-show="open" x-transition class="absolute z-50 w-full mt-1 bg-white border border-slate-200 rounded-lg shadow-lg">
                                <div class="p-2 border-b border-slate-100">
                                    <input x-ref="searchReg" type="text" x-model="search" placeholder="Cari kabupaten/kota..." class="w-full px-3 py-1.5 text-sm border border-slate-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                </div>
                                <ul class="max-h-48 overflow-y-auto py-1">
                                    <template x-for="reg in regencies.filter(r => r.name.toLowerCase().includes(search.toLowerCase()))" :key="reg.id">
                                        <li @click="selectedRegencyId = reg.id; formData.kabupaten = reg.name; open = false; search = ''; onRegencyChange(reg.id)"
                                            class="px-4 py-2 text-sm cursor-pointer hover:bg-blue-50 hover:text-blue-700"
                                            :class="selectedRegencyId === reg.id ? 'bg-blue-50 text-blue-700 font-medium' : 'text-slate-700'"
                                            x-text="reg.name"></li>
                                    </template>
                                    <li x-show="regencies.filter(r => r.name.toLowerCase().includes(search.toLowerCase())).length === 0" class="px-4 py-2 text-sm text-slate-400 text-center">Tidak ditemukan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Kecamatan Searchable --}}
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">Kecamatan <span class="text-red-500">*</span></label>
                        <div class="relative" x-data="{ open: false, search: '' }" @click.outside="open = false">
                            <button type="button" @click="if(selectedRegencyId && !loadingDistricts) { open = !open; if(open) $nextTick(() => $refs.searchDist.focus()) }"
                                :disabled="!selectedRegencyId || loadingDistricts"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg text-sm text-left flex items-center justify-between bg-white disabled:bg-slate-100 disabled:cursor-not-allowed focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                :class="formData.kecamatan ? 'text-slate-800' : 'text-slate-400'">
                                <span x-text="formData.kecamatan || '-- Pilih Kecamatan --'"></span>
                                <svg x-show="!loadingDistricts" class="w-4 h-4 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                <svg x-show="loadingDistricts" class="w-4 h-4 text-blue-500 animate-spin flex-shrink-0" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                            </button>
                            <div x-show="open" x-transition class="absolute z-50 w-full mt-1 bg-white border border-slate-200 rounded-lg shadow-lg">
                                <div class="p-2 border-b border-slate-100">
                                    <input x-ref="searchDist" type="text" x-model="search" placeholder="Cari kecamatan..." class="w-full px-3 py-1.5 text-sm border border-slate-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                </div>
                                <ul class="max-h-48 overflow-y-auto py-1">
                                    <template x-for="dist in districts.filter(d => d.name.toLowerCase().includes(search.toLowerCase()))" :key="dist.id">
                                        <li @click="selectedDistrictId = dist.id; formData.kecamatan = dist.name; open = false; search = ''; onDistrictChange(dist.id)"
                                            class="px-4 py-2 text-sm cursor-pointer hover:bg-blue-50 hover:text-blue-700"
                                            :class="selectedDistrictId === dist.id ? 'bg-blue-50 text-blue-700 font-medium' : 'text-slate-700'"
                                            x-text="dist.name"></li>
                                    </template>
                                    <li x-show="districts.filter(d => d.name.toLowerCase().includes(search.toLowerCase())).length === 0" class="px-4 py-2 text-sm text-slate-400 text-center">Tidak ditemukan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Kelurahan/Desa Searchable --}}
                    <div>
                        <label class="block text-sm text-slate-600 mb-1">Kelurahan/Desa <span class="text-red-500">*</span></label>
                        <div class="relative" x-data="{ open: false, search: '' }" @click.outside="open = false">
                            <button type="button" @click="if(selectedDistrictId && !loadingVillages) { open = !open; if(open) $nextTick(() => $refs.searchVil.focus()) }"
                                :disabled="!selectedDistrictId || loadingVillages"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg text-sm text-left flex items-center justify-between bg-white disabled:bg-slate-100 disabled:cursor-not-allowed focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                :class="formData.kelurahan ? 'text-slate-800' : 'text-slate-400'">
                                <span x-text="formData.kelurahan || '-- Pilih Kelurahan/Desa --'"></span>
                                <svg x-show="!loadingVillages" class="w-4 h-4 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                <svg x-show="loadingVillages" class="w-4 h-4 text-blue-500 animate-spin flex-shrink-0" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                            </button>
                            <div x-show="open" x-transition class="absolute z-50 w-full mt-1 bg-white border border-slate-200 rounded-lg shadow-lg">
                                <div class="p-2 border-b border-slate-100">
                                    <input x-ref="searchVil" type="text" x-model="search" placeholder="Cari kelurahan/desa..." class="w-full px-3 py-1.5 text-sm border border-slate-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                </div>
                                <ul class="max-h-48 overflow-y-auto py-1">
                                    <template x-for="vil in villages.filter(v => v.name.toLowerCase().includes(search.toLowerCase()))" :key="vil.id">
                                        <li @click="selectedVillageId = vil.id; formData.kelurahan = vil.name; open = false; search = ''"
                                            class="px-4 py-2 text-sm cursor-pointer hover:bg-blue-50 hover:text-blue-700"
                                            :class="selectedVillageId === vil.id ? 'bg-blue-50 text-blue-700 font-medium' : 'text-slate-700'"
                                            x-text="vil.name"></li>
                                    </template>
                                    <li x-show="villages.filter(v => v.name.toLowerCase().includes(search.toLowerCase())).length === 0" class="px-4 py-2 text-sm text-slate-400 text-center">Tidak ditemukan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Submit Button --}}
                <button 
                    @click="submitForm()"
                    :disabled="!isFormValid()"
                    :class="isFormValid() ? 'bg-blue-600 hover:bg-blue-500' : 'bg-slate-300 cursor-not-allowed'"
                    class="w-full py-3 text-white font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    Kirim Pendaftaran
                </button>
                <p class="text-xs text-slate-500 text-center">Dengan mendaftar, Anda menyetujui Syarat & Ketentuan kami.</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function registrationForm() {
    const API_BASE = '/api/wilayah';

    return {
        packages: @json($packageData),
        formData: {
            nama: '',
            nomorWA: '',
            nomorTelp: '',
            alamatJalan: '',
            rt: '',
            rw: '',
            kelurahan: '',
            kecamatan: '',
            kabupaten: '',
            provinsi: '',
            paket: '',
            harga: ''
        },

        // Region data arrays
        provinces: [],
        regencies: [],
        districts: [],
        villages: [],

        // Selected IDs for cascading
        selectedProvinceId: '',
        selectedRegencyId: '',
        selectedDistrictId: '',
        selectedVillageId: '',

        // Loading states
        loadingProvinces: false,
        loadingRegencies: false,
        loadingDistricts: false,
        loadingVillages: false,

        init() {
            this.$watch('selectedPackage', (value) => {
                if (value && this.packages[value]) {
                    this.formData.paket = value;
                    this.formData.harga = this.packages[value].price;
                }
            });
            this.fetchProvinces();
        },

        async fetchProvinces() {
            this.loadingProvinces = true;
            try {
                const res = await fetch(`${API_BASE}/provinces`);
                const data = await res.json();
                this.provinces = Array.isArray(data) ? data : [];
            } catch (e) {
                console.error('Gagal memuat provinsi:', e);
                this.provinces = [];
            } finally {
                this.loadingProvinces = false;
            }
        },

        async fetchRegencies(provinceId) {
            this.loadingRegencies = true;
            try {
                const res = await fetch(`${API_BASE}/regencies/${provinceId}`);
                const data = await res.json();
                this.regencies = Array.isArray(data) ? data : [];
            } catch (e) {
                console.error('Gagal memuat kabupaten:', e);
                this.regencies = [];
            } finally {
                this.loadingRegencies = false;
            }
        },

        async fetchDistricts(regencyId) {
            this.loadingDistricts = true;
            try {
                const res = await fetch(`${API_BASE}/districts/${regencyId}`);
                const data = await res.json();
                this.districts = Array.isArray(data) ? data : [];
            } catch (e) {
                console.error('Gagal memuat kecamatan:', e);
                this.districts = [];
            } finally {
                this.loadingDistricts = false;
            }
        },

        async fetchVillages(districtId) {
            this.loadingVillages = true;
            try {
                const res = await fetch(`${API_BASE}/villages/${districtId}`);
                const data = await res.json();
                this.villages = Array.isArray(data) ? data : [];
            } catch (e) {
                console.error('Gagal memuat kelurahan:', e);
                this.villages = [];
            } finally {
                this.loadingVillages = false;
            }
        },

        // Called from searchable dropdown buttons (receives id directly)
        onProvinceChange(provinceId) {
            this.selectedProvinceId = provinceId;
            this.selectedRegencyId = '';
            this.selectedDistrictId = '';
            this.selectedVillageId = '';
            this.regencies = [];
            this.districts = [];
            this.villages = [];
            this.formData.kabupaten = '';
            this.formData.kecamatan = '';
            this.formData.kelurahan = '';
            if (provinceId) this.fetchRegencies(provinceId);
        },

        onRegencyChange(regencyId) {
            this.selectedRegencyId = regencyId;
            this.selectedDistrictId = '';
            this.selectedVillageId = '';
            this.districts = [];
            this.villages = [];
            this.formData.kecamatan = '';
            this.formData.kelurahan = '';
            if (regencyId) this.fetchDistricts(regencyId);
        },

        onDistrictChange(districtId) {
            this.selectedDistrictId = districtId;
            this.selectedVillageId = '';
            this.villages = [];
            this.formData.kelurahan = '';
            if (districtId) this.fetchVillages(districtId);
        },

        updatePackagePrice() {
            if (this.formData.paket && this.packages[this.formData.paket]) {
                this.formData.harga = this.packages[this.formData.paket].price;
            }
        },

        isFormValid() {
            const pkg = this.selectedPackage || this.formData.paket;
            return this.formData.nama &&
                   this.formData.nomorWA &&
                   this.formData.alamatJalan &&
                   this.formData.rt &&
                   this.formData.rw &&
                   this.formData.kelurahan &&
                   this.formData.kecamatan &&
                   this.formData.kabupaten &&
                   this.formData.provinsi &&
                   pkg;
        },

        submitForm() {
            const pkg = this.selectedPackage || this.formData.paket;
            const pkgData = this.packages[pkg];

            const message = `Halo Admin JMK, saya ingin mendaftar layanan internet baru.

*Data Pendaftaran:*
Nama: ${this.formData.nama}
No. HP: ${this.formData.nomorWA}
Alamat: ${this.formData.alamatJalan}, RT ${this.formData.rt}/RW ${this.formData.rw}
Lokasi: ${this.formData.kelurahan}, ${this.formData.kecamatan}, ${this.formData.kabupaten}, ${this.formData.provinsi}

*Pilihan Paket:*
Paket: ${pkg}
Kecepatan: ${pkgData?.speed || '-'}
Harga: ${pkgData?.price || '-'}/bulan

_Mohon pesanan ini segera diproses. (Pesan otomatis, mohon jangan dihapus)_`;

            const encodedMessage = encodeURIComponent(message);
            window.open(`https://wa.me/6281234567890?text=${encodedMessage}`, '_blank');
            this.closeRegister();
        }
    }
}
</script>
@endpush
