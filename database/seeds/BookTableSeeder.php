<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_name' => 'The Jungle Book',
            'author_name' => 'Jack Sparrow',
            'category_name' => 'Adventure'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Snow White',
            'author_name' => 'Anne Rose',
            'category_name' => 'Romance'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Paranormal',
            'author_name' => 'Ralph',
            'category_name' => 'Horror'
        ]);
    }
}
