# JMK Jernih Multi Komunikasi - Landing Page (Laravel 11)

Aplikasi landing page untuk PT Jernih Multi Komunikasi, provider ISP terpercaya di Klaten.

## Requirements

- PHP 8.2+
- Composer 2.0+
- Node.js 18+
- npm atau yarn

## Instalasi

```bash
# Clone atau masuk ke folder proyek
cd laravel-app

# Install dependencies PHP
composer install

# Install dependencies Node.js
npm install

# Copy file environment
cp .env.example .env

# Generate app key
php artisan key:generate

# Build assets untuk production
npm run build

# Atau jalankan development server dengan hot reload
npm run dev
```

## Menjalankan Aplikasi

### Development Mode

```bash
# Terminal 1 - Jalankan Laravel
php artisan serve

# Terminal 2 - Jalankan Vite untuk hot reload (opsional)
npm run dev
```

Akses aplikasi di: http://localhost:8000

### Production Mode

```bash
# Build assets
npm run build

# Jalankan server
php artisan serve --host=0.0.0.0 --port=8000
```

## Struktur Proyek

```
laravel-app/
├── app/                          # Logic aplikasi
├── public/                       # Assets publik
│   ├── images/                   # Gambar-gambar
│   │   ├── hero/                 # Gambar slider hero
│   │   ├── logo-jmk.png          # Logo JMK
│   │   ├── logo-apjii.png        # Partner logo
│   │   ├── logo-kominfo.png      # Partner logo
│   │   └── logo-bakti.png        # Partner logo
│   └── build/                    # Compiled assets
├── resources/
│   ├── css/
│   │   └── app.css               # Main CSS dengan Tailwind
│   ├── js/
│   │   └── app.js                # Alpine.js setup
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php     # Layout utama
│       ├── components/           # Blade components
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── packages.blade.php
│       │   ├── philosophy.blade.php
│       │   ├── about.blade.php
│       │   ├── technical-advantages.blade.php
│       │   ├── testimonials.blade.php
│       │   ├── footer.blade.php
│       │   ├── registration-modal.blade.php
│       │   └── promo-popup.blade.php
│       ├── home.blade.php        # Halaman utama
│       └── bidang-it.blade.php   # Halaman Bidang IT
├── routes/
│   └── web.php                   # Web routes
├── tailwind.config.js            # Tailwind configuration
└── vite.config.js                # Vite configuration
```

## Teknologi yang Digunakan

- **Laravel 11** - Backend PHP Framework
- **Blade Templates** - Templating engine
- **Alpine.js** - Reactive JavaScript framework
- **Tailwind CSS** - Utility-first CSS
- **Vite** - Build tool

## Fitur

- ✅ Landing page responsive
- ✅ Hero slider dengan auto-slide
- ✅ Pricing packages dengan hover animations
- ✅ Philosophy section dengan SVG circuit animation
- ✅ About section dengan company info
- ✅ Technical advantages dengan animated icons
- ✅ Testimonials section
- ✅ Footer dengan social links
- ✅ Registration modal dengan WhatsApp integration
- ✅ Promo popup dengan localStorage persistence
- ✅ Halaman Bidang IT
- ✅ Mobile-friendly responsive design
- ✅ SEO optimized meta tags

## Customization

### Mengubah Nomor WhatsApp

Edit file `resources/views/components/registration-modal.blade.php`:
```php
window.open('https://wa.me/6281234567890?text=...')
```

Ganti `6281234567890` dengan nomor WhatsApp Anda.

### Mengubah Paket Internet

Edit array `$packages` di file `resources/views/components/packages.blade.php`.

### Mengubah Logo dan Gambar

Ganti file-file di folder `public/images/`.

## License

© 2025 PT Jernih Multi Komunikasi. All rights reserved.
