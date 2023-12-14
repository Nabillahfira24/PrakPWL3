<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                [
                    'title' => 'One Piece',
                    'author' => 'Eiichiro Oda',
                    'year' => '1999',
                    'publisher' => 'Shuesha',
                    'city' => 'Jepang',
                    'cover' => 'Onepiece.jpg',
                    'qty' => '20',
                    'bookshelf_id' => '1',

                ],
                [
                    'title' => 'Cinta Brontosaurus',
                    'author' => 'Raditya Dika',
                    'year' => '2006',
                    'publisher' => 'GagasMedia',
                    'city' => 'Indonesia',
                    'cover' => 'Cintabrountosaurus.jpg',
                    'qty' => '20',
                    'bookshelf_id' => '2',

                ],
                [
                    'title' => 'Samantha',
                    'author' => 'Risa Saraswati',
                    'year' => '2018',
                    'publisher' => 'Bukune',
                    'city' => 'Jakarta',
                    'cover' => 'Samantha.jpg',
                    'qty' => '10',
                    'bookshelf_id' => '3',

                ],
            ]
        );
    }
}
