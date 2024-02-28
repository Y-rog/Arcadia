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
    #[Route('/habitats/animal', name: 'page_animal')]
    public function animal(): Response
    {
        return $this->render('habitats/animal/index.html.twig', [
            'controller_name' => 'HabitatsController',
            'title_page' => '$animal->getName()', // A remplacer par le nom de l'animal
        ]);
    }
}
