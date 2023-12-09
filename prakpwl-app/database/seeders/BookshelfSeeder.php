<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert(
            [
                [
                    'code' => 'BKSSH001',
                    'name' => 'Malioboro at night'
                ],
                [
                    'code' => 'BKSSH002',
                    'name' => 'Samantha'
                    
                ],
                [
                    'code' => 'BKSSH03',
                    'name' => 'Dilan 1990'
                ],
            ]
            );
    }
}
