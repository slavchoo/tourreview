<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'text')
            ->add('username', 'text')
            ->add('password', 'password')
            ->add('email', 'email')
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('registrationDate', 'date')
            ->add('photo', 'file')
            ->add('personalData', 'text')
            ->add('phone', 'text')
            ->add('location', 'country')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UserClass'
        ));
    }

    public function getName()
    {
        return 'user';
    }
}