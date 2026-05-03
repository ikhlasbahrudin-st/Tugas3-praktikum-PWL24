<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('returns')->insert([

            [
                'loan_detail_id' => 1,
                'charge' => false,
                'amount' => 0,
            ],

            [
                'loan_detail_id' => 2,
                'charge' => true,
                'amount' => 5000,
            ],

            [
                'loan_detail_id' => 3,
                'charge' => false,
                'amount' => 0,
            ],

            [
                'loan_detail_id' => 4,
                'charge' => true,
                'amount' => 10000,
            ],

            [
                'loan_detail_id' => 5,
                'charge' => false,
                'amount' => 0,
            ],

            [
                'loan_detail_id' => 6,
                'charge' => true,
                'amount' => 3000,
            ],

            [
                'loan_detail_id' => 7,
                'charge' => false,
                'amount' => 0,
            ],

            [
                'loan_detail_id' => 8,
                'charge' => true,
                'amount' => 7000,
            ],

            [
                'loan_detail_id' => 9,
                'charge' => false,
                'amount' => 0,
            ],

            [
                'loan_detail_id' => 10,
                'charge' => true,
                'amount' => 15000,
            ],

        ]);
    }
}