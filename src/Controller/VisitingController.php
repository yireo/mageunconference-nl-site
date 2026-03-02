<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisitingController extends AbstractController
{
    #[Route('/visiting', name: 'app_visiting')]
    public function index(): Response
    {
        return $this->render('page/visiting.html.twig', [
            'pageTitle' => 'Visiting'
        ]);
    }
}
