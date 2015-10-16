<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'text')
            ->add('user_id', 'text')
            ->add('title', 'text')
            ->add('summary', 'text')
            ->add('description', 'text')
            ->add('creation_date', 'datetime')
            ->add('image', 'image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Story'
        ));
    }

    public function getName()
    {
        return 'article';
    }
}