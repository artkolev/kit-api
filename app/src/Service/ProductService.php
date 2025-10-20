<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\ProductRepository;

class ProductService {
    private $repository;
    public function __construct(ProductRepository $repository) {
        $this->repository = $repository;
    }
}
