<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PYController extends AbstractController
{
    #[Route('/py', name: 'py_home')]
    public function home(): Response
    {
        return $this->render('py/home.html.twig');
    }

    #[Route('/py/the-lion', name: 'py_lion')]
    public function lion(): Response
    {
        return $this->render('py/lion.html.twig');
    }

    #[Route('/py/accessibilite', name: 'py_accessibility')]
    public function accessibility(): Response
    {
        return $this->render('py/accessibility.html.twig');
    }

    #[Route('/py/confidentiel', name: 'py_confidential')]
    public function confidential(): Response
    {
        return $this->render('py/confidential.html.twig');
    }
}
