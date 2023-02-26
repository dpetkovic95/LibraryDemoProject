<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @param string $email
     * @param string $password
     * @param bool $isAdmin
     * @return void
     */
    public function add(string $name, string $surname, string $email, string $password, bool $isAdmin): void;

    /**
     * @return array
     */
    public function list(): array;

    /**
     * @param int $id
     * @param string $name
     * @param string $username
     * @param string $email
     * @param bool $isAdmin
     * @return void
     */
    public function update(int $id, string $name, string $username, string $email, bool $isAdmin): void;

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id): void;
}
