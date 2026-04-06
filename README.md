# Pallanusa Darmasastra Law Firm - Laravel Website

Website
 profesional untuk firma hukum **Pallanusa Darmasastra Law Firm** yang dibangun dengan Laravel Fullstack Framework.

## 📋 Fitur Utama

- **Home Page** - Hero section, keunggulan firma, preview layanan, dan CTA
- **About Page** - Sejarah, visi, misi, dan nilai-nilai profesional
- **Services Page** - Daftar lengkap layanan hukum (Perdata, Pidana, Bisnis, Keluarga)
- **Team Page** - Profil pengacara dengan foto, spesialisasi, pendidikan, dan pengalaman
- **Blog Page** - Artikel hukum dengan kategori dan detail view
- **Contact Page** - Form kontak, informasi kantor, jam operasional, dan embed Google Maps
- **AI Chatbot Placeholder** - Tombol floating untuk fitur AI legal assistant (siap untuk integrasi)

## 🔧 Teknologi Yang Digunakan

- **Framework**: Laravel 11
- **Database**: MySQL
- **Template Engine**: Blade
- **Styling**: Tailwind CSS
- **Authentication**: Laravel Breeze (optional)
- **Arsitektur**: MVC (Model, View, Controller)

## 📁 Struktur Direktori

```
pallanusa1/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── AboutController.php
│   │       ├── TeamController.php
│   │       ├── ServicesController.php
│   │       ├── BlogController.php
│   │       ├── ContactController.php
│   │       ├── ChatController.php
│   │       └── Admin/
│   │           ├── ArticleController.php
│   │           ├── LawyerController.php
│   │           └── ServiceController.php
│   └── Models/
│       ├── Article.php
│       ├── Lawyer.php
│       └── Service.php
├── resources/
│   └── views/
│       ├── components/
│       │   └── app-layout.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── services.blade.php
│       ├── team.blade.php
│       ├── blog.blade.php
│       ├── blog-show.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── database/
│   └── migrations/
│       ├── 2024_03_06_000000_create_articles_table.php
│       ├── 2024_03_06_000001_create_lawyers_table.php
│       └── 2024_03_06_000002_create_services_table.php
├── .env
├── composer.json
└── artisan
```

## 🚀 Cara Memulai

### 1. Clone atau Setup Project

```bash
cd c:\laragon\www\pallanusa1
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Setup Environment

```bash
copy .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database di `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pallanusa_law
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Migrations

```bash
php artisan migrate
```

### 6. (Opsional) Seed Database dengan Sample Data

```bash
php artisan db:seed
```

### 7. Jalankan Development Server

```bash
php artisan serve
```

Buka browser di `http://localhost:8000`

## 📄 Rute-Rute yang Tersedia

| Rute | Controller | Fungsi |
|------|-----------|--------|
| `/` | HomeController@index | Halaman utama |
| `/about` | AboutController@index | Tentang firma |
| `/team` | TeamController@index | Tim pengacara |
| `/services` | ServicesController@index | Layanan hukum |
| `/blog` | BlogController@index | Daftar artikel |
| `/blog/{article}` | BlogController@show | Detail artikel |
| `/contact` | ContactController@index | Formulir kontak |
| `POST /contact` | ContactController@store | Pemrosesan form kontak |
| `POST /chat` | ChatController@store | Placeholder AI chatbot |

## 🎨 Desain & Warna

### Palet Warna
- **Hitam**: `#0A0A0A` (Primary - Profesional)
- **Emas**: `#C9A84C` (Accent - Elegant)
- **Putih**: `#FFFFFF` (Background)
- **Abu-abu**: Gray scale untuk teks body

### Typography
- **Heading**: Serif (Lora) - Formal & Elegant
- **Body**: Sans-serif (Poppins) - Clean & Readable

## 💾 Database Models

### Article Model
```php
- id
- title
- content
- category
- published_at
- timestamps
```

### Lawyer Model
```php
- id
- name
- specialization
- education
- experience
- photo (nullable)
- timestamps
```

### Service Model
```php
- id
- name
- description
- category
- timestamps
```

## 🤖 AI Chatbot Placeholder

Website ini dilengkapi dengan placeholder untuk integrasi AI chatbot hukum di masa depan:

- **Floating Button** - Tombol di sudut kanan bawah halaman
- **Modal Dialog** - Interface chat yang siap untuk aksi
- **Route POST /chat** - Endpoint untuk API integration
- **ChatController** - Controller kosong siap untuk logika AI

### Cara Mengintegrasikan OpenAI API (Nanti)

1. Install OpenAI PHP SDK:
```bash
composer require openai-php/client
```

2. Update `.env`:
```env
OPENAI_API_KEY=your_api_key_here
```

3. Implementasi di `ChatController@store`

## 👥 Admin Dashboard (Coming Soon)

Struktur untuk admin dashboard sudah disiapkan:

- **Route Prefix**: `/admin`
- **Middleware**: `auth` (authentication)
- **Resources**:
  - `/admin/articles` - CRUD Artikel
  - `/admin/lawyers` - CRUD Tim Pengacara
  - `/admin/services` - CRUD Layanan Hukum

## 📋 Checklist Pengembangan

### Fase 1 (Selesai ✅)
- ✅ Setup Laravel project
- ✅ Membuat Models (Article, Lawyer, Service)
- ✅ Membuat Controllers (publik)
- ✅ Membuat Blade Views
- ✅ Konfigurasi Routes
- ✅ Desain responsive dengan Tailwind CSS
- ✅ Placeholder AI Chatbot

### Fase 2 (Coming Soon)
- ⏳ Admin Dashboard
- ⏳ Authentication sistem
- ⏳ Database seeding
- ⏳ Email notification untuk form kontak
- ⏳ Image upload untuk tim & artikel

### Fase 3 (Coming Soon)
- ⏳ Integrasi OpenAI API untuk chatbot
- ⏳ Analytics dashboard
- ⏳ SEO optimization
- ⏳ Multi-language support (ID/EN)

## 📱 Responsive Design

Website ini responsif untuk:
- ✅ Desktop (1024px+)
- ✅ Tablet (768px - 1023px)
- ✅ Mobile (320px - 767px)

## 🔒 Keamanan

- CSRF Protection (Laravel built-in)
- SQL Injection Prevention (Eloquent ORM)
- Input Validation di Controller
- Environment variables untuk sensitive data

## 📞 Kontak & Support

**Alamat**: Jl. Sudirman No. 123, Jakarta Pusat 12190, Indonesia  
**Telepon**: +62 (21) 1234-5678  
**Email**: info@pallanusa.com

## 📄 Lisensi

Hak Cipta © 2024 Pallanusa Darmasastra Law Firm. Semua hak dilindungi.

## 🤝 Kontribusi

Untuk request fitur atau laporan bug, silakan hubungi tim development kami.

---

**Terakhir diupdate**: 6 Maret 2024  
**Versi**: 1.0.0
