<?php
// src/Controller/BookController.php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use App\Repository\BorrowedbookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\AsyncHttpClientInterface;

class BookController extends AbstractController
{
    #[Route('/book', name: 'book_list')]
    public function index(EntityManagerInterface $em,HttpClientInterface $httpClient): Response
    {
        
        if (!$this->isGranted('ROLE_ADMIN')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        $books = $em->getRepository(Book::class)->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);


        
    }

   
     #[Route("/book/new", name:"book_new")]
  
    public function new(Request $request,EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('book_list');
        }

        return $this->render('book/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

   
     #[Route("/book/{id}/edit", name:"book_edit")]
    
    public function edit(Request $request, Book $book,EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        $form = $this->createForm(BookType::class, $book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         $em->flush();

            return $this->redirectToRoute('book_list');
        }

        return $this->render('book/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

  
    
    #[Route("/book/{id}/delete", name:"book_delete")]
    public function delete(Request $request, Book $book,EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            // Kullanıcı ROLE_ADMIN rolüne sahipse, yönlendirme yap
            return $this->render('error/403.html.twig');
        }
        if ($this->isCsrfTokenValid('delete'.$book->getId(), $request->request->get('_token'))) {
            $entityManager = $this->$em->getManager();
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return $this->redirectToRoute('book_list');
    }
    #[Route('/raporlar', name: 'reports')]
public function reports(BookRepository $bookRepository, BorrowedbookRepository $borrowedbookRepository): Response
{
    $totalBookCount = $bookRepository->getTotalBookCount();
    $borrowedBookCount = $borrowedbookRepository->getBorrowedBookCount();
    $lateReturnsCount = $borrowedbookRepository->getLateReturnsCount();

    return $this->render('raporlar/index.html.twig', [
        'totalBookCount' => $totalBookCount,
        'borrowedBookCount' => $borrowedBookCount,
        'lateReturnsCount' => $lateReturnsCount,
    ]);
}
}
