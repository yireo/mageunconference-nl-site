<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ProgramService;

class ScheduleWallController extends AbstractController
{
    #[Route('/schedule-wall', name: 'app_schedule_wall')]
    public function index(ProgramService $programService): Response
    {
        $program = $programService->getProgram();

        return $this->render('page/schedule_wall.html.twig', [
            'pageTitle' => 'Schedule Wall',
            'program' => $program,
        ]);
    }
}
