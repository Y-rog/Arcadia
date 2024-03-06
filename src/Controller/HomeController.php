<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'page_home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'title_page' => 'Bienvenue au zoo',
        ]);
    }
    #[Route('/reviews', name: 'page_reviews')]
    public function reviews(): Response
    {
        return $this->render('reviews/index.html.twig', [
            'controller_name' => 'HomeController',
            'title_page' => 'Avis des visiteurs',
        ]);
    }
}
