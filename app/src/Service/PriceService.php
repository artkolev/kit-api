<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\PriceRepository;

class PriceService {
    private $repository;

    public function __construct(PriceRepository $repository) {
        $this->repository = $repository;
    }
}
