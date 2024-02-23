<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HabitatsController extends AbstractController
{
    #[Route('/habitats', name: 'page_habitats')]
    public function habitats(): Response
    {
        return $this->render('habitats/index.html.twig', [
            'controller_name' => 'HabitatsController',
            'title_page' => 'Les habitats du zoo',
        ]);
    }
}
