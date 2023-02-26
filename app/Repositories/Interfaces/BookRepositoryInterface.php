<?php

namespace App\Repositories\Interfaces;

interface BookRepositoryInterface
{
    /**
     * @param string $title
     * @param int $bookNumber
     * @param string $description
     * @return void
     */
    public function add(string $title, int $bookNumber, string $description): void;

    /**
     * @return array
     */
    public function list(): array;

    /**
     * @param int $id
     * @param string $title
     * @param int $bookNumber
     * @param string $description
     * @return void
     */
    public function update(int $id, string $title, int $bookNumber, string $description): void;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}
