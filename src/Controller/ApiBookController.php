<?php
// src/Controller/ApiBookController.php

namespace App\Controller;

use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiBookController extends AbstractController
{
    #[Route('/api/books', name: 'api_book_list', methods: ['GET'])]
    public function list(EntityManagerInterface $em): JsonResponse
    {
        $books = $em->getRepository(Book::class)->findAll();

        $data = [];
        foreach ($books as $book) {
            $data[] = [
                'id' => $book->getId(),
                'ad' => $book->getAd(),
                'yazar' => $book->getYazar(),
                'sayfaSayisi' => $book->getSayfaSayisi(),
                'ISBN' => $book->getISBN(),
            ];
        }

        return new JsonResponse($data);
    }
}
