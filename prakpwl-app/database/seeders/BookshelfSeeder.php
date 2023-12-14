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
                    'name' => 'Action',
                    'created_at' => now(),
                    'updated_at' => now()
                    
                    

                ],
                [
                    'code' => 'BKSSH002',
                    'name' => 'comedy',
                    'created_at' => now(),
                    'updated_at' => now()
                    
                ],
                [
                    'code' => 'BKSSH03',
                    'name' => 'Horror',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
            );
    }
}
