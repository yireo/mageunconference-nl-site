<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgencyOwnersController extends AbstractController
{
    #[Route('/agency-owners', name: 'app_agency_owners')]
    public function index(): Response
    {
        return $this->render('page/agency_owners.html.twig', [
            'pageTitle' => 'Agency Owners'
        ]);
    }
}
