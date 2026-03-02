<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VenueController extends AbstractController
{
    #[Route('/venue', name: 'app_venue')]
    public function index(): Response
    {
        return $this->render('page/venue.html.twig', [
            'pageTitle' => 'Venue'
        ]);
    }
}
