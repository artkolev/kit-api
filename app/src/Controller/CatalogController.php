<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Price;
use App\Entity\Post;
use App\Entity\User;
use App\Event\CommentCreatedEvent;
use App\Form\CommentType;
use App\Repository\PriceRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\Cache;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/')]
final class CatalogController extends AbstractController
{
    #[Route('/', name: 'catalog_index', defaults: ['page' => '1', '_format' => 'html'], methods: ['GET'])]
    public function index(Request $request, ProductRepository $productRepository): Response
    {

        return new Response('Success');
    }
}
