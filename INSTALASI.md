## PANDUAN INSTALASI CEPAT

### Prerequisites
- PHP 8.1+
- Composer
- MySQL Server (Laragon sudah include)
- Web Server (Laragon sudah include)

### Langkah-Langkah Instalasi

#### 1. Setup Laravel Project
```bash
cd c:\laragon\www\pallanusa1
composer install
php artisan key:generate
```

#### 2. Konfigurasi Database
Edit file `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pallanusa_law
DB_USERNAME=root
DB_PASSWORD=
```

#### 3. Buat Database
Menggunakan Laragon atau CLI MySQL:
```bash
mysql -u root -p
CREATE DATABASE pallanusa_law;
EXIT;
```

#### 4. Jalankan Migrations
```bash
php artisan migrate
```

#### 5. Jalankan Development Server
```bash
php artisan serve --host=localhost --port=8000
```

Atau gunakan Laragon built-in server untuk domain seperti `pallanusa1.local`

#### 6. Akses Website
- **Frontend**: http://localhost:8000
- **Home Page**: http://localhost:8000/
- **About Page**: http://localhost:8000/about
- **Services**: http://localhost:8000/services
- **Team**: http://localhost:8000/team
- **Blog**: http://localhost:8000/blog
- **Contact**: http://localhost:8000/contact

### Struktur File yang Dibuat

#### Controllers (7 file)
✅ app/Http/Controllers/HomeController.php
✅ app/Http/Controllers/AboutController.php
✅ app/Http/Controllers/TeamController.php
✅ app/Http/Controllers/ServicesController.php
✅ app/Http/Controllers/BlogController.php
✅ app/Http/Controllers/ContactController.php
✅ app/Http/Controllers/ChatController.php

#### Models (3 file)
✅ app/Models/Article.php
✅ app/Models/Lawyer.php
✅ app/Models/Service.php

#### Views (8 file)
✅ resources/views/home.blade.php
✅ resources/views/about.blade.php
✅ resources/views/services.blade.php
✅ resources/views/team.blade.php
✅ resources/views/blog.blade.php
✅ resources/views/blog-show.blade.php
✅ resources/views/contact.blade.php
✅ resources/views/components/app-layout.blade.php

#### Migrations (3 file)
✅ database/migrations/2024_03_06_000000_create_articles_table.php
✅ database/migrations/2024_03_06_000001_create_lawyers_table.php
✅ database/migrations/2024_03_06_000002_create_services_table.php

#### Routes
✅ routes/web.php (Semua rute publik sudah dikonfigurasi)

#### Configuration
✅ .env (Konfigurasi database)
✅ README.md (Dokumentasi)

### Fitur-Fitur yang Sudah Diimplementasikan

#### 1. Home Page ✅
- Hero section dengan tagline profesional
- Why Choose Us section (3 keunggulan)
- Services preview (4 layanan)
- Call-to-Action section

#### 2. About Page ✅
- Sejarah firma
- Visi dan misi
- Core values (4 nilai profesional)

#### 3. Services Page ✅
- Hukum Perdata (Civil Law)
- Hukum Pidana (Criminal Law)
- Hukum Bisnis (Business Law)
- Hukum Keluarga (Family Law)
- Deskripsi detail untuk setiap layanan

#### 4. Team Page ✅
- Tim pengacara dengan card design
- Informasi: Nama, Spesialisasi, Pendidikan, Pengalaman
- Sample data 6 pengacara
- Statistik firma

#### 5. Blog Page ✅
- Daftar artikel dengan kategori
- Sample 6 artikel hukum
- Link ke detail artikel
- Pagination ready

#### 6. Blog Detail Page ✅
- Tampilan detail artikel
- Artikel terkait
- CTA konsultasi

#### 7. Contact Page ✅
- Form kontak lengkap (Nama, Email, Subjek, Pesan)
- Informasi kontak (Alamat, Telepon, Email)
- Jam operasional
- Google Maps embed
- Form validation

#### 8. AI Chatbot Placeholder ✅
- Floating button di sudut kanan bawah
- Modal dialog yang interaktif
- Route POST /chat siap untuk integrasi
- ChatController kosong siap untuk logic AI

### Styling & Design ✅

#### Color Scheme
- Primary: #0A0A0A (Hitam - Profesional)
- Accent: #C9A84C (Emas - Elegant)
- Background: #FFFFFF (Putih)
- Text: Gray scale

#### Typography
- Heading: Lora (Serif) - Formal
- Body: Poppins (Sans-serif) - Readable
- Font via Google Fonts

#### Responsive
- ✅ Mobile First Design
- ✅ Tablet Optimization
- ✅ Desktop Full Layout
- ✅ Flexbox & Grid Layout

### Customization Tips

#### Mengubah Nama Firma
1. Edit `resources/views/components/app-layout.blade.php`
2. Ganti "Pallanusa Darmasastra" dengan nama firma Anda

#### Mengubah Warna
1. Di `app-layout.blade.php`, update Tailwind config:
```javascript
colors: {
    'gold': '#C9A84C',  // Ganti dengan hex color baru
    'dark': '#0A0A0A',
}
```

#### Menambah Menu Navigasi
1. Edit navbar di `resources/views/components/app-layout.blade.php`
2. Tambah link baru di `<nav>`

#### Menambah Halaman Baru
1. Buat Controller: `php artisan make:controller NamaController`
2. Buat View: `resources/views/nama.blade.php`
3. Tambah Route di `routes/web.php`
4. Gunakan layout: `<x-app-layout>...</x-app-layout>`

### Troubleshooting

#### 1. Database Error
```bash
# Pastikan MySQL running
# Buat database baru
mysql -u root
CREATE DATABASE pallanusa_law;
# Jalankan migration
php artisan migrate
```

#### 2. Migration Error
```bash
# Reset database
php artisan migrate:reset
# Jalankan ulang
php artisan migrate
```

#### 3. Route Not Found
```bash
# Clear route cache
php artisan route:clear
# Jalankan server ulang
php artisan serve
```

#### 4. Assets Not Loading
```bash
# Update Tailwind CSS
# Sudah menggunakan CDN, tidak perlu build
```

### Next Steps

1. ✅ Customisasi konten sesuai firma Anda
2. ⏳ Tambahkan foto pengacara di `/public/images/`
3. ⏳ Buat admin dashboard untuk CRUD
4. ⏳ Setup email notification
5. ⏳ Integrasikan OpenAI API untuk chatbot

### Support Documentation

- **Laravel Official**: https://laravel.com/docs
- **Blade Templating**: https://laravel.com/docs/blade
- **Eloquent ORM**: https://laravel.com/docs/eloquent
- **Tailwind CSS**: https://tailwindcss.com/docs
- **Laragon**: https://laragon.org/docs

---

**Dibuat**: 6 Maret 2024
**Status**: Production Ready