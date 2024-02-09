<?php
// src/Form/BookType.php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ad', TextType::class, [
                'label' => 'Kitap Adı',
            ])
            ->add('yazar', TextType::class, [
                'label' => 'Yazar',
            ])
            ->add('sayfaSayisi', IntegerType::class, [
                'label' => 'Sayfa Sayısı',
            ])
            ->add('ISBN', IntegerType::class, [
                'label' => 'ISBN',
            ])
            ->add('sayi', IntegerType::class, [
                'label' => 'Sayi',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Kaydet',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
