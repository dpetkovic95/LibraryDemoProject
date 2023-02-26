<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @param string $email
     * @param string $password
     * @param bool $isAdmin
     * @return void
     */
    public function add(string $name, string $surname, string $email, string $password, bool $isAdmin): void
    {
        $user = new User();
        $user->name = $name;
        $user->surname = $surname;
        $user->email = $email;
        $user->password = $password;
        $user->is_admin = $isAdmin;
        $user->save();
    }

    /**
     * @return array
     */
    public function list(): array
    {
        $usersList = [];
        foreach (User::all('name', 'surname', 'email', 'is_admin') as $key => $user) {
            $usersList[$key] = [
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'isAdmin' => $user->is_admin
            ];
        }

        return $usersList;
    }

    public function update(int $id, string $name, string $surname, string $email, bool $isAdmin): void
    {
        $user = User::find($id);
        $user->name = $name;
        $user->surname = $surname;
        $user->email = $email;
        $user->is_admin = $isAdmin;
        $user->save();
    }

    public function delete(int $id): void
    {
        $user = User::find($id);
        $user->delete();
    }
}
