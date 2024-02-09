<?php

namespace App\Controller;

use App\Entity\Book; // Doğru namespace eklenmiş olmalı
use App\Entity\Borrowedbook;
use App\Form\BorrowedbookType;
use App\Repository\BorrowedbookRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/borrowedbook')]
class BorrowedbookController extends AbstractController
{
    #[Route('/', name: 'app_borrowedbook_index', methods: ['GET'])]
    public function index(BorrowedbookRepository $borrowedbookRepository): Response
    {
        return $this->render('borrowedbook/index.html.twig', [
            'borrowedbooks' => $borrowedbookRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_borrowedbook_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $borrowedbook = new Borrowedbook();
        $form = $this->createForm(BorrowedbookType::class, $borrowedbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        
            $entityManager->persist($borrowedbook);
            $entityManager->flush();

            return $this->redirectToRoute('app_borrowedbook_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('borrowedbook/new.html.twig', [
            'borrowedbook' => $borrowedbook,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_borrowedbook_show', methods: ['GET'])]
    public function show(Borrowedbook $borrowedbook): Response
    {
        return $this->render('borrowedbook/show.html.twig', [
            'borrowedbook' => $borrowedbook,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_borrowedbook_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Borrowedbook $borrowedbook, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BorrowedbookType::class, $borrowedbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_borrowedbook_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('borrowedbook/edit.html.twig', [
            'borrowedbook' => $borrowedbook,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_borrowedbook_delete', methods: ['POST'])]
    public function delete(Request $request, Borrowedbook $borrowedbook, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$borrowedbook->getId(), $request->request->get('_token'))) {
            $entityManager->remove($borrowedbook);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_borrowedbook_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/return', name: 'app_borrowedbook_return', methods: ['GET', 'POST'])]
public function returnBook(Request $request, Borrowedbook $borrowedbook, EntityManagerInterface $entityManager): Response
{
    if ($request->isMethod('POST')) {
        // Handle the form submission for returning the book
        $returnDate = new \DateTime($request->request->get('returnDate'));
        $borrowedbook->setIadeTarihi($returnDate);
        $entityManager->flush();

        return $this->redirectToRoute('app_borrowedbook_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('borrowedbook/return.html.twig', [
        'borrowedbook' => $borrowedbook,
    ]);
}

}
