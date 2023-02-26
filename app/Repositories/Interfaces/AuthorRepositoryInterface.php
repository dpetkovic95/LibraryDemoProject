<?php

namespace App\Repositories\Interfaces;

interface AuthorRepositoryInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @param string $image
     * @return void
     */
    public function add(string $name, string $surname, string $image = ''): void;

    /**
     * @return array
     */
    public function list(): array;

    /**
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $image
     * @return void
     */
    public function update(int $id, string $name, string $surname, string $image): void;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}
