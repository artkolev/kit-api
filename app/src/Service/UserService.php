<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\UserRepository;

class UserService {

    private $userRepository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }
}
