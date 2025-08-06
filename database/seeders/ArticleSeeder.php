<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Wedrink Indonesia',
                'slug' => 'Articles-Wedrink Indonesia',
                'content' => 'WeDrink Indonesia adalah sebuah perusahaan minuman yang hadir dengan visi untuk menjadi pelopor gaya hidup sehat dan modern di Indonesia...',
                'image' => 'images/articles/1754469071_toko.png',
                'status' => 'PUBLISH',
                'created_at' => Carbon::parse('2025-08-05 20:54:15'),
                'updated_at' => Carbon::parse('2025-08-06 02:22:46'),
            ],
            [
                'title' => 'Wedrink Jogja',
                'slug' => 'Articles-KeJogja',
                'content' => 'Kehadiran WeDrink di Jogja disambut dengan antusiasme tinggi dari para pelanggan...',
                'image' => 'images/articles/1754469440_toko2.png',
                'status' => 'PUBLISH',
                'created_at' => Carbon::parse('2025-08-05 21:52:09'),
                'updated_at' => Carbon::parse('2025-08-06 01:37:20'),
            ],
            [
                'title' => 'Semangat di Balik Layar: Potret Karyawan WeDrink Saat Bekerja',
                'slug' => 'Articles-semangat-karyawan-wedrink',
                'content' => 'Di balik setiap botol minuman segar WeDrink, ada semangat dan dedikasi dari para karyawan...',
                'image' => 'images/articles/1754470075_karyawan.jpg',
                'status' => 'PUBLISH',
                'created_at' => Carbon::parse('2025-08-06 01:47:55'),
                'updated_at' => Carbon::parse('2025-08-06 01:47:55'),
            ],
            [
                'title' => 'Antrean Panjang, Bukti WeDrink Semakin Diminati',
                'slug' => 'antrean-panjang-bukti-wedrink-semakin-diminati',
                'content' => 'Ramainya antrean pembeli di gerai WeDrink menunjukkan tingginya minat masyarakat terhadap minuman sehat...',
                'image' => 'images/articles/1754470690_pembeli.jpg',
                'status' => 'PUBLISH',
                'created_at' => Carbon::parse('2025-08-06 01:58:10'),
                'updated_at' => Carbon::parse('2025-08-06 01:58:10'),
            ],
            [
                'title' => 'WeDrink Diserbu Pengunjung! Promo Spesial Jadi Daya Tarik Utama',
                'slug' => 'Articles-wedrink-diserbu-karena-promo-spesial',
                'content' => 'Suasana gerai WeDrink semakin meriah dengan hadirnya promo spesial yang sukses menarik perhatian para pengunjung...',
                'image' => 'images/articles/1754471238_toko3.png',
                'status' => 'DRAFT',
                'created_at' => Carbon::parse('2025-08-06 02:07:18'),
                'updated_at' => Carbon::parse('2025-08-06 03:06:09'),
            ],
        ]);
    }
}
