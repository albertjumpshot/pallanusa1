<?php

/**
 * Konfigurasi Informasi Kontak Perusahaan
 * 
 * Gunakan config('contact.email.primary') di view atau controller
 */

return [
    'email' => [
        'primary' => 'albertmantiri2000@gmail.com',  // Main contact email
        'secondary' => 'konsultasi@pallanusa.com',   // Backup/consultation email
        'admin' => 'admin@pallanusa.com',            // Admin email
    ],

    'phone' => [
        'primary' => '0895600544942',                 // Nomor utama
        'formatted' => '0895-600-544942',            // Format display
    ],

    'address' => [
        'street' => 'Jl. Sudirman No. 123',
        'city' => 'Batam',
        'postal_code' => '29100',
        'country' => 'Indonesia',
        'full' => 'Jl. Sudirman No. 123, Batam 29100, Indonesia',
    ],

    'company' => [
        'name' => 'Pallanusa Darmasastra Law Firm',
        'description' => 'Firma Hukum Profesional dengan Keunggulan dalam Praktik Hukum Modern',
    ],
];
