<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Books;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //simple penulisan
        $author1 = author::create(['name'=>'ananda']);
        $author2 = author::create(['name'=>'kiki']);
        $author3 = author::create(['name'=>'widi']);
       

        //simple buku
        $book1 = Book::create(['title'=>'ku pinang kau dengan hamdalah','amount'=>3,'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'jalan cinta para pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'membingkai surga dalam rumah tangga','amount'=>4,'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'ku pinang kau dengan hamdalah','amount'=>3,'author_id'=>$author3->id]);


    }
}
