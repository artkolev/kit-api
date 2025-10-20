<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\RegionRepository;

class RegionService {
    private $repository;

    public function __construct(RegionRepository $repository) {
        $this->repository = $repository;
    }
}
