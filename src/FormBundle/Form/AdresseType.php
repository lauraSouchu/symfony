<?php

namespace FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('adresse', 'text', array('required' => false, 'label' => 'Adresse :', 'attr' => array('class' => 'form-control')))
                ->add('cp', 'text', array('required' => false, 'label' => 'Code Postal :', 'attr' => array('class' => 'form-control')))
                ->add('ville', 'text', array('required' => false, 'label' => 'Ville :', 'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormBundle\Entity\Adresse'
        ));
    }
}
