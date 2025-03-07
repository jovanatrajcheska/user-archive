<?php


namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use Carbon\Carbon;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function getPaginatedUsers($perPage = 10)
    {
        $users = $this->userRepository->paginate($perPage);

        return $users->map(function ($user) {
            $user->age = Carbon::parse($user->date_of_birth)->age;
            return $user;
        });
    }
}
