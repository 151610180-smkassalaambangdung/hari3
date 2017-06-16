<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

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
        $author1 = Author::create(['name'=>'Mohammad Fauzi Adhim']);
        $author2 = Author::create(['name'=>'Salim A. Fillah']);
        $author3 = Author::create(['name'=>'Aam Amiruddin']);
       

        //simple buku
        $book1 = Book::create(['title'=>'ku pinang kau dengan hamdalah','amount'=>3,'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'jalan cinta para pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'membingkai surga dalam rumah tangga','amount'=>4,'author_id'=>$author3->id]);

    }
}
