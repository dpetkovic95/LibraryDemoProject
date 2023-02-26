<?php

namespace App\Repositories;

use App\Models\Author;
use App\Repositories\Interfaces\AuthorRepositoryInterface;

class AuthorRepository implements AuthorRepositoryInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @param string $image
     * @return void
     */
    public function add(string $name, string $surname, string $image = ''): void
    {
        $author = new Author();
        $author->name = $name;
        $author->surname = $surname;
        $author->image = $image;
        $author->save();
    }

    /**
     * @return array
     */
    public function list(): array
    {
        $authorsList = [];
        foreach (Author::all('name', 'surname', 'image') as $key => $author) {
            $authorsList[$key] = [
                'name' => $author->name,
                'surname' => $author->surname,
                'image' => $author->image
            ];
        }

        return $authorsList;
    }

    /**
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $image
     * @return void
     */
    public function update(int $id, string $name, string $surname, string $image): void
    {
        $author = Author::find($id);
        $author->name = $name;
        $author->surname = $surname;
        $author->image = $image;
        $author->save();
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $author = Author::find($id);
        $author->delete();
    }
}
