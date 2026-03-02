<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BecomeSponsorController extends AbstractController
{
    #[Route('/become-sponsor', name: 'app_become_sponsor')]
    public function index(): Response
    {
        return $this->render('page/become_sponsor.html.twig',[
            'pageTitle' => 'Become a sponsor'
        ]);
    }
}
