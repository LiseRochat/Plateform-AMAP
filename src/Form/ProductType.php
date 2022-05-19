<?php

namespace App\Form;
use App\Entity\Product;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('text')
            ->add('pictureFile', FileType::class, ['required'=>false])
            ->add('price')
            ->add('category', EntityType::class, [
                'class'  => Category::class,
                'choice_label' => 'name'          
            ])
            ->add('size', ChoiceType::class, [
                'choices'  => [
                    '1 personne' => '1 personne',
                    '2 personnes' => '2 personnes',
                    'Famille' => 'Famille',
                ],
            ])
            ->add('description')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
