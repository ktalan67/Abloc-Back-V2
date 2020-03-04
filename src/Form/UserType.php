<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('account_name')
            ->add('img_path')
            ->add('available_time')
            ->add('score')
            ->add('created_at')
            ->add('updated_at')
            ->add('program_bookmarks')
            ->add('exercise_bookmarks')
            ->add('followed_programs')
            ->add('access_level')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
