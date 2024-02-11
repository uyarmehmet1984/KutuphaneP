<?php
// src/Controller/UserProfileController.php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordProfileType;
use App\Form\UserProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserProfileController extends AbstractController
{
    
    #[Route('/profile', name: 'user_profile')]   
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('user_profile/index.html.twig', [
            'user' => $user,
        ]);
    }


    #[Route('/profile/edit', name: 'user_profile_edit')] 
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $form = $this->createForm(UserProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            $this->addFlash('success', 'Profile updated successfully.');

            return $this->redirectToRoute('user_profile');
        }

        return $this->render('user_profile/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/profile/change-password', name: 'change_password_profile')]
    public function changePasswordProfile(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, PasswordHasherInterface $hasherInterface): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        
        $form = $this->createForm(ChangePasswordProfileType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $oldPassword = $form->get('oldPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();
        
            if ($passwordHasher->isPasswordValid($user, $oldPassword)) {
                $encodedPassword = $passwordHasher->hashPassword($user, $newPassword);
                $user->setPassword($encodedPassword);
            
                $entityManager->flush();
                $this->addFlash('success', 'Password updated successfully.');
            
                return $this->redirectToRoute('user_profile');
            } else {
                $this->addFlash('error', 'Invalid current password.');
            }
            
        }
        
        return $this->render('user_profile/change_password_profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    
}
