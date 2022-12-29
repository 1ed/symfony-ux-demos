<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LiveChildParamIssueController extends AbstractController
{
    #[Route('/live-child-param-issue', name: 'app_live_child_param_issue')]
    public function index(): Response
    {
        return $this->render('live_child_param_issue/index.html.twig', [
            'controller_name' => 'LiveChildParamIssueController',
        ]);
    }
}
