<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    private $kuhpData = [
        [
            'pasal' => 'Pasal 362',
            'judul' => 'Pencurian Biasa',
            'kategori' => 'Pencurian',
            'isi_pasal' => 'Barang siapa mengambil barang sesuatu yang seluruhnya atau sebagian kepunyaan orang lain dengan maksud untuk dimiliki secara melawan hukum diancam karena pencurian dengan pidana penjara paling lama 5 tahun atau denda paling banyak Rp 900 ribu.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 5 tahun atau denda paling banyak Rp 900.000',
            'kata_kunci' => 'pencurian,mencuri,mengambil barang,ambil barang orang lain'
        ],
        [
            'pasal' => 'Pasal 363',
            'judul' => 'Pencurian dengan Pemberatan',
            'kategori' => 'Pencurian',
            'isi_pasal' => 'Diancam dengan pidana penjara paling lama 7 tahun: 1. Pencurian ternak; 2. Pencurian pada waktu kebakaran, banjir, gempa bumi; 3. Pencurian pada malam hari; 4. Pencurian oleh dua orang atau lebih; 5. Pencurian yang untuk masuk ke tempat kejahatan atau untuk sampai pada barang yang diambilnya dilakukan dengan merusak, memotong atau memanjat.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 7 tahun',
            'kata_kunci' => 'pencurian berat,pencurian malam,pencurian bersama,pencurian dengan kerusakan'
        ],
        [
            'pasal' => 'Pasal 365',
            'judul' => 'Pencurian dengan Kekerasan',
            'kategori' => 'Pencurian',
            'isi_pasal' => 'Diancam dengan pidana penjara paling lama 9 tahun, pencurian yang didahului, disertai atau diikuti dengan kekerasan atau ancaman kekerasan terhadap orang dengan maksud untuk mempersiapkan atau mempermudah pencurian itu.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 9 tahun',
            'kata_kunci' => 'pencurian kekerasan,rampok,begal,perampokan'
        ],
        [
            'pasal' => 'Pasal 368',
            'judul' => 'Pemerasan',
            'kategori' => 'Pemerasan',
            'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum memaksa orang lain dengan kekerasan atau ancaman kekerasan untuk memberikan sesuatu barang yang seluruhnya atau sebagian adalah milik orang itu atau orang ketiga.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 9 tahun',
            'kata_kunci' => 'pemerasan,memeras,paksa,ancaman paksa berikan uang'
        ],
        [
            'pasal' => 'Pasal 369',
            'judul' => 'Pemerasan dengan Ancaman',
            'kategori' => 'Pemerasan',
            'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum memaksa orang dengan ancaman pencemaran nama baik atau dengan ancaman akan membuka rahasia untuk memberikan sesuatu barang.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 4 tahun',
            'kata_kunci' => 'ancaman pencemaran nama,blackmail,ancaman rahasia'
        ],
        [
            'pasal' => 'Pasal 378',
            'judul' => 'Penipuan',
            'kategori' => 'Penipuan',
            'isi_pasal' => 'Barang siapa dengan maksud untuk menguntungkan diri sendiri atau orang lain secara melawan hukum dengan memakai nama palsu atau martabat palsu, dengan tipu muslihat ataupun rangkaian kebohongan, menggerakkan orang lain untuk menyerahkan barang sesuatu kepadanya.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 4 tahun',
            'kata_kunci' => 'penipuan,tipu,bohong,nama palsu,muslihat'
        ],
        [
            'pasal' => 'Pasal 372',
            'judul' => 'Penggelapan',
            'kategori' => 'Penggelapan',
            'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum memiliki barang sesuatu yang seluruhnya atau sebagian adalah kepunyaan orang lain tetapi yang ada dalam kekuasaannya bukan karena kejahatan diancam karena penggelapan.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 4 tahun atau denda paling banyak Rp 900.000',
            'kata_kunci' => 'penggelapan,menggelapkan,kuasai barang orang lain'
        ],
        [
            'pasal' => 'Pasal 374',
            'judul' => 'Penggelapan dalam Jabatan',
            'kategori' => 'Penggelapan',
            'isi_pasal' => 'Penggelapan yang dilakukan oleh orang yang memegang barang itu berhubungan dengan pekerjaannya atau jabatannya atau karena mendapat upah uang diancam dengan pidana penjara paling lama 5 tahun.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 5 tahun',
            'kata_kunci' => 'penggelapan jabatan,korupsi kecil,penggelapan pegawai'
        ],
        [
            'pasal' => 'Pasal 338',
            'judul' => 'Pembunuhan',
            'kategori' => 'Kekerasan',
            'isi_pasal' => 'Barang siapa dengan sengaja merampas nyawa orang lain diancam karena pembunuhan dengan pidana penjara paling lama 15 tahun.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 15 tahun',
            'kata_kunci' => 'pembunuhan,membunuh,nyawa,merampas nyawa'
        ],
        [
            'pasal' => 'Pasal 339',
            'judul' => 'Pembunuhan Diikuti Kejahatan Lain',
            'kategori' => 'Kekerasan',
            'isi_pasal' => 'Pembunuhan yang diikuti, disertai atau didahului oleh sesuatu perbuatan pidana yang dilakukan dengan maksud untuk mempersiapkan atau mempermudah pelaksanaannya.',
            'ancaman_hukuman' => 'Pidana penjara seumur hidup atau sementara paling lama 20 tahun',
            'kata_kunci' => 'pembunuhan berencana,pembunuhan disertai kejahatan'
        ],
        [
            'pasal' => 'Pasal 340',
            'judul' => 'Pembunuhan Berencana',
            'kategori' => 'Kekerasan',
            'isi_pasal' => 'Barang siapa dengan sengaja dan dengan rencana lebih dahulu merampas nyawa orang lain diancam karena pembunuhan dengan rencana dengan pidana mati atau pidana penjara seumur hidup atau selama waktu tertentu paling lama 20 tahun.',
            'ancaman_hukuman' => 'Pidana mati atau penjara seumur hidup atau paling lama 20 tahun',
            'kata_kunci' => 'pembunuhan berencana,rencanakan pembunuhan'
        ],
        [
            'pasal' => 'Pasal 351',
            'judul' => 'Penganiayaan',
            'kategori' => 'Kekerasan',
            'isi_pasal' => 'Penganiayaan diancam dengan pidana penjara paling lama dua tahun delapan bulan atau denda paling banyak Rp 4.500. Jika perbuatan mengakibatkan luka-luka berat, yang bersalah dikenakan pidana penjara paling lama 5 tahun.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 2 tahun 8 bulan',
            'kata_kunci' => 'penganiayaan,aniaya,pukul,menyiksa,menyakiti'
        ],
        [
            'pasal' => 'Pasal 285',
            'judul' => 'Pemerkosaan',
            'kategori' => 'Kesusilaan',
            'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan memaksa perempuan yang bukan istrinya bersetubuh dengan dia diancam karena melakukan perkosaan dengan pidana penjara paling lama 12 tahun.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 12 tahun',
            'kata_kunci' => 'pemerkosaan,perkosa,kekerasan seksual'
        ],
        [
            'pasal' => 'Pasal 289',
            'judul' => 'Perbuatan Cabul dengan Kekerasan',
            'kategori' => 'Kesusilaan',
            'isi_pasal' => 'Barang siapa dengan kekerasan atau ancaman kekerasan memaksa orang untuk melakukan atau membiarkan dilakukan perbuatan cabul diancam karena melakukan perbuatan yang menyerang kehormatan kesusilaan.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 9 tahun',
            'kata_kunci' => 'pelecehan seksual,cabul,perbuatan tidak senonoh'
        ],
        [
            'pasal' => 'Pasal 263',
            'judul' => 'Pemalsuan Surat',
            'kategori' => 'Pemalsuan',
            'isi_pasal' => 'Barang siapa membuat surat palsu atau memalsukan surat yang dapat menerbitkan sesuatu hak, sesuatu perjanjian (kewajiban) atau sesuatu pembebasan hutang diancam karena pemalsuan surat.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 6 tahun',
            'kata_kunci' => 'pemalsuan,memalsukan,surat palsu,dokumen palsu'
        ],
        [
            'pasal' => 'Pasal 310',
            'judul' => 'Pencemaran Nama Baik',
            'kategori' => 'Kehormatan',
            'isi_pasal' => 'Barang siapa sengaja menyerang kehormatan atau nama baik seseorang dengan menuduhkan sesuatu hal yang maksudnya terang supaya hal itu diketahui umum.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 9 bulan atau denda paling banyak Rp 4.500',
            'kata_kunci' => 'pencemaran nama baik,fitnah,menuduh,reputasi'
        ],
        [
            'pasal' => 'Pasal 311',
            'judul' => 'Fitnah',
            'kategori' => 'Kehormatan',
            'isi_pasal' => 'Jika yang melakukan kejahatan pencemaran atau pencemaran tertulis dibolehkan untuk membuktikan tuduhannya itu, jika ia tidak dapat membuktikan dan jika tuduhan dilakukan bertentangan dengan apa yang diketahuinya.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 4 tahun',
            'kata_kunci' => 'fitnah,menfitnah,tuduhan palsu'
        ],
        [
            'pasal' => 'Pasal 406',
            'judul' => 'Pengerusakan Barang',
            'kategori' => 'Pengerusakan',
            'isi_pasal' => 'Barang siapa dengan sengaja dan melawan hukum menghancurkan, merusakkan, membuat sehingga tidak dapat dipakai lagi atau menghilangkan sesuatu barang yang seluruhnya atau sebagian milik orang lain.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 2 tahun 8 bulan atau denda',
            'kata_kunci' => 'perusakan,merusak,vandalisme,menghancurkan barang'
        ],
        [
            'pasal' => 'Pasal 170',
            'judul' => 'Pengeroyokan',
            'kategori' => 'Kekerasan',
            'isi_pasal' => 'Barang siapa yang di muka umum bersama-sama melakukan kekerasan terhadap orang atau barang diancam dengan pidana penjara paling lama 5 tahun 6 bulan.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 5 tahun 6 bulan',
            'kata_kunci' => 'pengeroyokan,keroyok,massa menyerang,kekerasan massal'
        ],
        [
            'pasal' => 'Pasal 335',
            'judul' => 'Perbuatan Tidak Menyenangkan',
            'kategori' => 'Kekerasan',
            'isi_pasal' => 'Barang siapa secara melawan hukum memaksa orang lain supaya melakukan tidak melakukan atau membiarkan sesuatu dengan memakai kekerasan atau dengan memakai ancaman kekerasan.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 1 tahun atau denda paling banyak Rp 4.500',
            'kata_kunci' => 'ancaman,intimidasi,paksa,tidak menyenangkan'
        ],
        [
            'pasal' => 'Pasal 480',
            'judul' => 'Penadahan',
            'kategori' => 'Penadahan',
            'isi_pasal' => 'Diancam dengan pidana penjara paling lama 4 tahun atau denda: barang siapa membeli, menyewa, menukar, menerima gadai, menerima hadiah atau untuk menarik keuntungan, menjual, menyewakan, menukarkan, menggadaikan, mengangkut, menyimpan atau menyembunyikan sesuatu benda yang diketahuinya atau sepatutnya harus diduganya bahwa diperoleh dari kejahatan.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 4 tahun atau denda',
            'kata_kunci' => 'penadahan,barang curian,hasil kejahatan,menyembunyikan barang curian'
        ],
        [
            'pasal' => 'Pasal 242',
            'judul' => 'Sumpah Palsu',
            'kategori' => 'Persidangan',
            'isi_pasal' => 'Barang siapa dalam keadaan di mana undang-undang menentukan supaya memberi keterangan di atas sumpah atau mengadakan akibat hukum pada keterangan yang demikian dengan sengaja memberi keterangan palsu di atas sumpah.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 7 tahun',
            'kata_kunci' => 'sumpah palsu,kesaksian palsu,berbohong di pengadilan'
        ],
        [
            'pasal' => 'Pasal 156',
            'judul' => 'Penodaan SARA',
            'kategori' => 'SARA',
            'isi_pasal' => 'Barang siapa di muka umum menyatakan perasaan permusuhan, kebencian atau penghinaan terhadap suatu atau beberapa golongan rakyat Indonesia.',
            'ancaman_hukuman' => 'Pidana penjara paling lama 4 tahun atau denda',
            'kata_kunci' => 'penodaan agama,SARA,ujaran kebencian,hate speech'
        ]
    ];

    public function index()
    {
        return view('chatbot');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = $this->searchPasal($query);

        return response()->json([
            'results' => $results,
            'query' => $query
        ]);
    }

    private function normalizeText($text)
    {
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9\s]/', ' ', $text);
        return $text;
    }

    private function searchPasal($query, $topK = 3)
    {
        $queryNormalized = $this->normalizeText($query);
        $queryWords = array_unique(explode(' ', $queryNormalized));
        $results = [];

        foreach ($this->kuhpData as $row) {
            $score = 0;

            $keywords = $this->normalizeText($row['kata_kunci']);
            $keywordList = array_map('trim', explode(',', $keywords));
            foreach ($keywordList as $kw) {
                $kwWords = array_unique(explode(' ', $kw));
                if (count(array_intersect($kwWords, $queryWords)) > 0) {
                    $score += 3;
                }
                if (strpos($queryNormalized, $kw) !== false) {
                    $score += 5;
                }
            }

            $judul = $this->normalizeText($row['judul']);
            foreach ($queryWords as $word) {
                if (strpos($judul, $word) !== false && strlen($word) > 3) {
                    $score += 2;
                }
            }

            $isi = $this->normalizeText($row['isi_pasal']);
            foreach ($queryWords as $word) {
                if (strpos($isi, $word) !== false && strlen($word) > 4) {
                    $score += 1;
                }
            }

            $kategori = $this->normalizeText($row['kategori']);
            foreach ($queryWords as $word) {
                if (strlen($word) > 3 && strpos($kategori, $word) !== false) {
                    $score += 2;
                }
            }

            if ($score > 0) {
                $results[] = array_merge($row, ['score' => $score]);
            }
        }

        usort($results, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        return array_slice($results, 0, $topK);
    }
}