<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CodeOfConductController extends AbstractController
{
    #[Route('/code-of-conduct', name: 'app_code_of_conduct')]
    public function index(): Response
    {
        return $this->render('page/code_of_conduct.html.twig', [
            'pageTitle' => 'Code of conduct'
        ]);
    }
}
