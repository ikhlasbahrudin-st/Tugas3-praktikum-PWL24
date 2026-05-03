<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert([

            // =========================
            // TEKNOLOGI & KOMPUTER
            // =========================

            [
                'code' => 'A1',
                'name' => 'Rak Teknologi',
            ],

            [
                'code' => 'A2',
                'name' => 'Rak Pemrograman',
            ],

            [
                'code' => 'A3',
                'name' => 'Rak Jaringan Komputer',
            ],

            [
                'code' => 'A4',
                'name' => 'Rak Basis Data',
            ],

            [
                'code' => 'A5',
                'name' => 'Rak Kecerdasan Buatan',
            ],

            [
                'code' => 'A6',
                'name' => 'Rak Cyber Security',
            ],

            [
                'code' => 'A7',
                'name' => 'Rak Data Science',
            ],

            [
                'code' => 'A8',
                'name' => 'Rak Web Development',
            ],

            [
                'code' => 'A9',
                'name' => 'Rak Mobile Development',
            ],

            [
                'code' => 'A10',
                'name' => 'Rak UI UX Design',
            ],

            // =========================
            // NOVEL & SASTRA
            // =========================

            [
                'code' => 'B1',
                'name' => 'Rak Novel',
            ],

            [
                'code' => 'B2',
                'name' => 'Rak Komik',
            ],

            [
                'code' => 'B3',
                'name' => 'Rak Cerpen',
            ],

            [
                'code' => 'B4',
                'name' => 'Rak Sastra',
            ],

            [
                'code' => 'B5',
                'name' => 'Rak Puisi',
            ],

            [
                'code' => 'B6',
                'name' => 'Rak Dongeng',
            ],

            [
                'code' => 'B7',
                'name' => 'Rak Biografi',
            ],

            [
                'code' => 'B8',
                'name' => 'Rak Motivasi',
            ],

            // =========================
            // PENDIDIKAN
            // =========================

            [
                'code' => 'C1',
                'name' => 'Rak Pendidikan',
            ],

            [
                'code' => 'C2',
                'name' => 'Rak Matematika',
            ],

            [
                'code' => 'C3',
                'name' => 'Rak Bahasa Indonesia',
            ],

            [
                'code' => 'C4',
                'name' => 'Rak Bahasa Inggris',
            ],

            [
                'code' => 'C5',
                'name' => 'Rak Fisika',
            ],

            [
                'code' => 'C6',
                'name' => 'Rak Kimia',
            ],

            [
                'code' => 'C7',
                'name' => 'Rak Biologi',
            ],

            [
                'code' => 'C8',
                'name' => 'Rak Ekonomi',
            ],

            [
                'code' => 'C9',
                'name' => 'Rak Akuntansi',
            ],

            // =========================
            // UMUM
            // =========================

            [
                'code' => 'D1',
                'name' => 'Rak Agama',
            ],

            [
                'code' => 'D2',
                'name' => 'Rak Sejarah',
            ],

            [
                'code' => 'D3',
                'name' => 'Rak Geografi',
            ],

            [
                'code' => 'D4',
                'name' => 'Rak Politik',
            ],

            [
                'code' => 'D5',
                'name' => 'Rak Hukum',
            ],

            [
                'code' => 'D6',
                'name' => 'Rak Sosial',
            ],

            // =========================
            // PENELITIAN
            // =========================

            [
                'code' => 'E1',
                'name' => 'Rak Majalah',
            ],

            [
                'code' => 'E2',
                'name' => 'Rak Jurnal',
            ],

            [
                'code' => 'E3',
                'name' => 'Rak Penelitian',
            ],

            [
                'code' => 'E4',
                'name' => 'Rak Skripsi',
            ],

            [
                'code' => 'E5',
                'name' => 'Rak Thesis',
            ],

            [
                'code' => 'E6',
                'name' => 'Rak Disertasi',
            ],

        ]);
    }
}