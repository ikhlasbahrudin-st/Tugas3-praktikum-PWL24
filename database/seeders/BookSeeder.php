<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([

            // =========================
            // TEKNOLOGI
            // =========================

            [
                'title' => 'Laravel Dasar',
                'author' => 'John Doe',
                'year' => 2023,
                'publisher' => 'Gramedia',
                'city' => 'Bandung',
                'cover' => 'laravel.jpg',
                'bookshelf_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Mastering PHP 8',
                'author' => 'Rizky Pratama',
                'year' => 2024,
                'publisher' => 'Informatika',
                'city' => 'Jakarta',
                'cover' => 'php8.jpg',
                'bookshelf_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Jaringan Komputer Modern',
                'author' => 'Andi Saputra',
                'year' => 2021,
                'publisher' => 'Elex Media',
                'city' => 'Surabaya',
                'cover' => 'jaringan.jpg',
                'bookshelf_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Machine Learning Fundamental',
                'author' => 'Budi Santoso',
                'year' => 2023,
                'publisher' => 'DeepTech',
                'city' => 'Bandung',
                'cover' => 'ml.jpg',
                'bookshelf_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Cyber Security untuk Pemula',
                'author' => 'Dimas Arya',
                'year' => 2022,
                'publisher' => 'Cyber Media',
                'city' => 'Jakarta',
                'cover' => 'cyber.jpg',
                'bookshelf_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // NOVEL & SASTRA
            // =========================

            [
                'title' => 'Novel Senja',
                'author' => 'Jane Doe',
                'year' => 2022,
                'publisher' => 'Erlangga',
                'city' => 'Jakarta',
                'cover' => 'novel.jpg',
                'bookshelf_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Hujan di Balik Jendela',
                'author' => 'Tere Liye',
                'year' => 2021,
                'publisher' => 'Republika',
                'city' => 'Jakarta',
                'cover' => 'hujan.jpg',
                'bookshelf_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Dunia Imajinasi',
                'author' => 'Andrea Hirata',
                'year' => 2020,
                'publisher' => 'Bentang',
                'city' => 'Yogyakarta',
                'cover' => 'imajinasi.jpg',
                'bookshelf_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // PENDIDIKAN
            // =========================

            [
                'title' => 'Matematika SMA',
                'author' => 'Siti Aminah',
                'year' => 2023,
                'publisher' => 'Yudhistira',
                'city' => 'Bandung',
                'cover' => 'mtk.jpg',
                'bookshelf_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Fisika Dasar',
                'author' => 'Albert Wijaya',
                'year' => 2021,
                'publisher' => 'Airlangga',
                'city' => 'Malang',
                'cover' => 'fisika.jpg',
                'bookshelf_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Belajar Bahasa Inggris Cepat',
                'author' => 'Nurhaliza',
                'year' => 2022,
                'publisher' => 'Oxford Indo',
                'city' => 'Jakarta',
                'cover' => 'english.jpg',
                'bookshelf_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // UMUM
            // =========================

            [
                'title' => 'Sejarah Dunia',
                'author' => 'Ahmad Fauzi',
                'year' => 2020,
                'publisher' => 'History Press',
                'city' => 'Jakarta',
                'cover' => 'sejarah.jpg',
                'bookshelf_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pendidikan Agama Islam',
                'author' => 'Ustadz Rahman',
                'year' => 2023,
                'publisher' => 'Mizan',
                'city' => 'Bandung',
                'cover' => 'pai.jpg',
                'bookshelf_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // PENELITIAN
            // =========================

            [
                'title' => 'Metodologi Penelitian',
                'author' => 'Sugiyono',
                'year' => 2022,
                'publisher' => 'Alfabeta',
                'city' => 'Bandung',
                'cover' => 'penelitian.jpg',
                'bookshelf_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Jurnal Artificial Intelligence',
                'author' => 'IEEE',
                'year' => 2024,
                'publisher' => 'IEEE Press',
                'city' => 'New York',
                'cover' => 'ai-journal.jpg',
                'bookshelf_id' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}