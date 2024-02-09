<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KutuphaneciController extends AbstractController
{
    #[Route('/kutuphaneci', name: 'app_kutuphaneci')]
    public function index(): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')&&!$this->isGranted('ROLE_KUTUPHANECI')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        return $this->render('kutuphaneci/index.html.twig', [
            'controller_name' => 'KutuphaneciController',
        ]);
    }
}
