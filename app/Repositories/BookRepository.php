<?php

namespace App\Repositories;

use App\Models\Author;
use App\Models\Book;
use App\Repositories\Interfaces\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{

    /**
     * @param string $title
     * @param int $bookNumber
     * @param string $description
     * @return void
     */
    public function add(string $title, int $bookNumber, string $description): void
    {
        $book = new Book();
        $book->title = $title;
        $book->book_number = $bookNumber;
        $book->description = $description;

        $book->save();
    }

    /**
     * @return array
     */
    public function list(): array
    {
        $booksList = [];
        foreach (Book::all('title', 'book_number', 'description') as $key => $book) {
            $booksList[$key] = [
                'title' => $book->title,
                'bookNumber' => $book->book_number,
                'description' => $book->description
            ];
        }

        return $booksList;
    }

    /**
     * @param int $id
     * @param string $title
     * @param int $bookNumber
     * @param string $description
     * @return void
     */
    public function update(int $id, string $title, int $bookNumber, string $description): void
    {
        $book = Book::find($id);
        $book->title = $title;
        $book->book_number = $bookNumber;
        $book->description = $description;
        $book->save();
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $book = Book::find($id);
        $book->delete();
    }
}
