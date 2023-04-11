<?php

namespace App\Form;
use App\Entity\Tests;
use App\Entity\TestQs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestQsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('questionNumber')
            ->add('optiona')
            ->add('optionb')
            ->add('optionc')
            ->add('optiond')
            ->add('correctOption')
            ->add('question')
            ->add('test', EntityType::class, [
               'class' => Tests::class ,
               'choice_label' => 'id'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TestQs::class,
        ]);
    }
}
