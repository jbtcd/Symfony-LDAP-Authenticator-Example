<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DefaultController extends AbstractController
{
    #[Route(path: '/', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render(
            'index.html.twig'
        );
    }

    #[Route(path: '/secret', name: 'secret', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function secret(): Response
    {
        return $this->render(
            'secret.html.twig'
        );
    }
}