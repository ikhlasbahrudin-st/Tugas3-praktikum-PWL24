<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([

            [
                'category' => 'Teknologi',
            ],

            [
                'category' => 'Pemrograman',
            ],

            [
                'category' => 'Jaringan Komputer',
            ],

            [
                'category' => 'Basis Data',
            ],

            [
                'category' => 'Kecerdasan Buatan',
            ],

            [
                'category' => 'Cyber Security',
            ],

            [
                'category' => 'Novel',
            ],

            [
                'category' => 'Komik',
            ],

            [
                'category' => 'Cerpen',
            ],

            [
                'category' => 'Sastra',
            ],

            [
                'category' => 'Pendidikan',
            ],

            [
                'category' => 'Matematika',
            ],

            [
                'category' => 'Bahasa Indonesia',
            ],

            [
                'category' => 'Bahasa Inggris',
            ],

            [
                'category' => 'Agama',
            ],

            [
                'category' => 'Sejarah',
            ],

            [
                'category' => 'Geografi',
            ],

            [
                'category' => 'Sains',
            ],

            [
                'category' => 'Fisika',
            ],

            [
                'category' => 'Kimia',
            ],

            [
                'category' => 'Biologi',
            ],

            [
                'category' => 'Penelitian',
            ],

            [
                'category' => 'Jurnal',
            ],

            [
                'category' => 'Majalah',
            ],

        ]);
    }
}