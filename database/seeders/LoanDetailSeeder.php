<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loan_details')->insert([

            [
                'loan_id' => 1,
                'book_id' => 1,
                'is_return' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 1,
                'book_id' => 2,
                'is_return' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 2,
                'book_id' => 3,
                'is_return' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 2,
                'book_id' => 4,
                'is_return' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 3,
                'book_id' => 5,
                'is_return' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 3,
                'book_id' => 6,
                'is_return' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 4,
                'book_id' => 7,
                'is_return' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 4,
                'book_id' => 8,
                'is_return' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 5,
                'book_id' => 9,
                'is_return' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'loan_id' => 5,
                'book_id' => 10,
                'is_return' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}