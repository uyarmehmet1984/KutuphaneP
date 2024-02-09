<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OgretmenController extends AbstractController
{
    #[Route('/ogretmen', name: 'app_ogretmen')]
    public function index(): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')&&!$this->isGranted('ROLE_TEACHER')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        return $this->render('ogretmen/index.html.twig', [
            'controller_name' => 'OgretmenController',
        ]);
    }
}
