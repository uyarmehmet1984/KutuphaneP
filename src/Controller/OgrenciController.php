<?php

namespace App\Controller;

use App\Entity\Borrowedbook;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OgrenciController extends AbstractController
{
    #[Route('/ogrenci', name: 'app_ogrenci')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')&&!$this->isGranted('ROLE_STUDENT')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        $user = $this->getUser();
        $borrowedBooks = $entityManager->getRepository(Borrowedbook::class)->findBy(['user' => $user]);

        return $this->render('ogrenci/index.html.twig', [
            'borrowedBooks' => $borrowedBooks,
        ]);
    }
   
}
