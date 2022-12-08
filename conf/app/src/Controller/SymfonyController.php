<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SymfonyController extends AbstractController
{
    #[Route('/symfony', name: 'app_symfony')]
    public function index(): Response
    {
        return $this->render('symfony/index.html.twig', [
            'controller_name' => 'SymfonyController',
        ]);
    }
}
