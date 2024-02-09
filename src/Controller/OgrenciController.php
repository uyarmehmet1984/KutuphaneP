<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OgrenciController extends AbstractController
{
    #[Route('/ogrenci', name: 'app_ogrenci')]
    public function index(): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')&&!$this->isGranted('ROLE_STUDENT')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        return $this->render('ogrenci/index.html.twig', [
            'controller_name' => 'OgrenciController',
        ]);
    }
}
