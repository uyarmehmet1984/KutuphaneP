<?php 
// src/Form/ChangePasswordProfileType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class ChangePasswordProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, [
                'label' => 'Current Password',
                'mapped' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your current password.']),
                ],
                'attr' => [
                    'name' => 'oldPassword', // Bu satırı ekleyin
                ],
            ])
            ->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options' => [
                    'label' => 'New Password',
                    'attr' => [
                        'name' => 'newPassword', // Bu satırı ekleyin
                    ],
                ],
                'second_options' => [
                    'label' => 'Repeat New Password',
                    'attr' => [
                        'name' => 'newPassword_confirmation', // Bu satırı ekleyin
                    ],
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a new password.']),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your new password should be at least {{ limit }} characters',
                        // Symfony'nin güvenlik nedenleriyle izin verdiği maksimum uzunluk
                        'max' => 4096,
                    ]),
                ],
            ]);
    }
    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

