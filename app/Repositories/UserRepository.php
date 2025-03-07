<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        $users = User::paginate(10);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function paginate($perPage)
    {
        return User::paginate($perPage);
    }
}
