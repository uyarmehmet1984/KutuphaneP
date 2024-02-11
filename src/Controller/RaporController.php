<?php

namespace App\Controller;

use App\Repository\BookRepository;
use App\Repository\BorrowedbookRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaporController extends AbstractController
{
    // #[Route('/rapor', name: 'app_rapor')]
    // public function index(): Response
    // {
    //     return $this->render('rapor/index.html.twig', [
    //         'controller_name' => 'RaporController',
    //     ]);
    // }
    #[Route('/rapor', name: 'reports')]
    public function reports(BookRepository $bookRepository, BorrowedbookRepository $borrowedbookRepository): Response
    {
        $totalBookCount = $bookRepository->getTotalBookCount();
        $borrowedBookCount = $borrowedbookRepository->getBorrowedBookCount();
        $lateReturnsCount = $borrowedbookRepository->getLateReturnsCount();
    
        return $this->render('rapor/index.html.twig', [
            'totalBookCount' => $totalBookCount,
            'borrowedBookCount' => $borrowedBookCount,
            'lateReturnsCount' => $lateReturnsCount,
        ]);
    }
    #[Route('/rapor/most-readers', name: 'most_readers')]
public function mostReaders(UserRepository $userRepository, BorrowedbookRepository $borrowedbookRepository): Response
{
    $users = $userRepository->getUsersOrderedByBorrowedBookCount();

    return $this->render('rapor/most_readers.html.twig', [
        'users' => $users,
    ]);
}
}
