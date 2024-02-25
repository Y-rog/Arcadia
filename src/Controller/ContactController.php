<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'page_contact')]
    public function contatct(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'title_page' => 'Contact',
        ]);
    }
}
