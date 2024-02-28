<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SigninController extends AbstractController
{
    #[Route('/signin', name: 'page_signin')]
    public function signin(): Response
    {
        return $this->render('signin/index.html.twig', [
            'controller_name' => 'SigninController',
            'title_page' => 'Connexion',
        ]);
    }
}
