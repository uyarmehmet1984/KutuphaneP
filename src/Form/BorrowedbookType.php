<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\Borrowedbook;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BorrowedbookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('alisTarihi')
            ->add('iadeTarihi')
            ->add('BarkodNo')
            ->add('book', EntityType::class, [
                'class' => Book::class,
'choice_label' => 'ad',
'multiple' => true,
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
'choice_label' => 'ad',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Borrowedbook::class,
        ]);
    }
}
