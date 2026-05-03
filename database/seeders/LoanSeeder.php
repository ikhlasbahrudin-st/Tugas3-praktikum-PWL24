<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([

            [
                'user_npm' => 12345,
                'loan_at' => now(),
                'return_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_npm' => 67890,
                'loan_at' => now(),
                'return_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_npm' => 12345,
                'loan_at' => now(),
                'return_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_npm' => 67890,
                'loan_at' => now(),
                'return_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_npm' => 12345,
                'loan_at' => now(),
                'return_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}