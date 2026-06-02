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


