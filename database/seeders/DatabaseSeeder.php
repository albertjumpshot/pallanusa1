<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Lawyer;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Services
        Service::create([
            'name' => 'Hukum Perdata',
            'description' => 'Menangani berbagai kasus hukum perdata termasuk sengketa kontrak, pengabaian janji perikatan, dan transaksi komersial.',
            'category' => 'Perdata'
        ]);

        Service::create([
            'name' => 'Hukum Pidana',
            'description' => 'Memberikan pertahanan hukum pidana yang kuat dan strategis untuk melindungi hak-hak klien kami.',
            'category' => 'Pidana'
        ]);

        Service::create([
            'name' => 'Hukum Bisnis',
            'description' => 'Memberikan konsultasi hukum bisnis komprehensif untuk membantu perusahaan berkembang dan mengelola risiko hukum.',
            'category' => 'Bisnis'
        ]);

        Service::create([
            'name' => 'Hukum Keluarga',
            'description' => 'Memahami sensitivitas masalah hukum keluarga dan memberikan solusi yang empati serta profesional.',
            'category' => 'Keluarga'
        ]);

        // Seed Lawyers
        Lawyer::create([
            'name' => 'Budi Santoso, S.H., M.H.',
            'specialization' => 'Hukum Bisnis & Perdata',
            'education' => 'S.H. Universitas Indonesia, M.H. Universitas Gadjah Mada',
            'experience' => 'Pengalaman 20+ tahun dalam praktik hukum bisnis, merger & akuisisi, dan sengketa komersial'
        ]);

        Lawyer::create([
            'name' => 'Ratna Wijaya, S.H.',
            'specialization' => 'Hukum Keluarga & Warisan',
            'education' => 'S.H. Universitas Hasanuddin',
            'experience' => 'Spesialis hukum keluarga dan warisan dengan pengalaman 15 tahun, ahli mediasi perceraian'
        ]);

        Lawyer::create([
            'name' => 'Dr. Andi Gunawan, S.H., M.H.',
            'specialization' => 'Hukum Pidana',
            'education' => 'S.H. Universitas Diponegoro, M.H. & Dr. Universitas Padjajaran',
            'experience' => 'Advokat pidana berpengalaman 18 tahun, ahli dalam kasus pidana khusus dan white-collar crime'
        ]);

        Lawyer::create([
            'name' => 'Siti Nurhaliza, S.H.',
            'specialization' => 'Hukum Perdata & Properti',
            'education' => 'S.H. Universitas Andalas',
            'experience' => 'Pengalaman 12 tahun dalam kasus properti, tanah, dan sengketa perdata lainnya'
        ]);

        Lawyer::create([
            'name' => 'Bambang Hermawan, S.H., LLM.',
            'specialization' => 'Hukum Bisnis & Investasi',
            'education' => 'S.H. Universitas Brawijaya, LLM Universitas New South Wales Australia',
            'experience' => 'Expert dalam corporate law, investasi asing, dan kontrak internasional (10 tahun pengalaman)'
        ]);

        Lawyer::create([
            'name' => 'Dewi Lestari, S.H.',
            'specialization' => 'Hukum Perburuhan & Ketenagakerjaan',
            'education' => 'S.H. Universitas Trisakti',
            'experience' => 'Spesialis hukum perburuhan dan hubungan industrial dengan pengalaman 8 tahun'
        ]);

        // Seed Articles
        Article::create([
            'title' => 'Memahami Hak-Hak Konsumen Indonesia',
            'content' => 'Sebagai konsumen, Anda memiliki hak yang dilindungi oleh undang-undang. Artikel ini menjelaskan hak-hak dasar konsumen dan cara melindunginya dari praktik bisnis yang tidak etis. Perlindungan konsumen adalah aspek penting dari sistem hukum yang adil. Klien kami telah berhasil memperjuangkan hak-haknya melalui sistem hukum yang tepat dan strategi yang matang.',
            'category' => 'Hukum Konsumen',
            'published_at' => now()->subDays(2)
        ]);

        Article::create([
            'title' => 'Langkah-Langkah Pendirian Perusahaan PT di Indonesia',
            'content' => 'Mengurus pendirian perusahaan PT memerlukan beberapa tahapan penting. Panduan lengkap ini menjelaskan prosedur, dokumen yang diperlukan, dan waktu yang dibutuhkan untuk mendirikan PT yang sah menurut hukum Indonesia. Tim kami siap membantu Anda menjalani setiap tahap dengan lancar dan sesuai regulasi terbaru.',
            'category' => 'Hukum Bisnis',
            'published_at' => now()->subDays(7)
        ]);

        Article::create([
            'title' => 'Hak dan Kewajiban dalam Kontrak Kerja',
            'content' => 'Banyak pekerja yang tidak memahami hak dan kewajiban mereka berdasarkan kontrak kerja. Artikel ini membahas poin-poin penting dalam kontrak kerja yang harus Anda perhatikan untuk melindungi kepentingan Anda sebagai pekerja. Jangan tanda tangani kontrak tanpa memahami setiap klausulanya. Kami dapat membantu Anda melakukan review kontrak kerja sebelum penandatanganan.',
            'category' => 'Hukum Ketenagakerjaan',
            'published_at' => now()->subDays(14)
        ]);

        Article::create([
            'title' => 'Prosedur Perceraian Menurut Hukum Islam dan Sipil',
            'content' => 'Perceraian adalah permasalahan sensitif yang perlu ditangani dengan hati-hati. Kami menjelaskan perbedaan prosedur perceraian menurut hukum Islam dan hukum perdata sipil Indonesia, serta hak-hak yang perlu Anda lindungi. Baik Anda mengikuti hukum Islam maupun hukum sipil, kami siap memberikan konsultasi dan pendampingan hukum yang komprehensif.',
            'category' => 'Hukum Keluarga',
            'published_at' => now()->subDays(21)
        ]);

        Article::create([
            'title' => 'Pentingnya Dokumentasi Dalam Transaksi Bisnis',
            'content' => 'Dokumentasi yang baik adalah kunci untuk melindungi kepentingan bisnis Anda. Artikel ini menjelaskan mengapa dokumentasi penting, jenis-jenis dokumen bisnis yang perlu Anda miliki, dan bagaimana cara menyimpannya dengan aman. Tanpa dokumentasi yang kuat, bisnis Anda rentan terhadap sengketa dan kerugian finansial yang signifikan.',
            'category' => 'Hukum Bisnis',
            'published_at' => now()->subDays(30)
        ]);

        Article::create([
            'title' => 'Memahami Hukum Warisan di Indonesia',
            'content' => 'Hukum warisan di Indonesia mengikuti berbagai sistem tergantung agama dan adat. Panduan ini menjelaskan cara pembagian warisan, hak-hak ahli waris, dan prosedur administrasi yang diperlukan untuk mencegah sengketa warisan di kemudian hari. Sengketa warisan dapat merusak hubungan keluarga dan menghabiskan waktu serta biaya yang besar. Konsultasi dengan kami untuk merencanakan warisan dengan baik.',
            'category' => 'Hukum Keluarga',
            'published_at' => now()->subDays(35)
        ]);

        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );
    }
}
