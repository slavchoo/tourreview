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
            ->add('first_name', 'text')
            ->add('last_name', 'text')
            ->add('registration_date', 'date')
            ->add('photo', 'file')
            ->add('personal_data', 'text')
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