<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request,
     UserPasswordHasherInterface $userPasswordHasher, 
     EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
             // Eklenen alanları kullanıcı nesnesine ekleyin
             $user->setAd($form->get('ad')->getData());
             $user->setSoyad($form->get('soyad')->getData());
             $user->setAddress($form->get('address')->getData());

            //  // Add roles to the user bu kod eklenen her kullanıcıya user olrak ekler
            // $user->setRoles(['ROLE_USER']); // You can customize the roles as needed
            // Set roles based on the selected role in the form
            $selectedRole = $form->get('roles')->getData();
            $user->setRoles($selectedRole);

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    
}
