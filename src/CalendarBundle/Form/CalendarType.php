<?php

namespace CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text', array(
                    'label' => "Nom du calendrier : ",
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('theme', 'choice', array(
                    'choices' => array(
                        'Rouge' => 'Rouge',
                        'Vert' => 'Vert',
                        'Bleu' => 'Bleu',
                        'Jaune' => 'Jaune'
                    ),
                    'label' => "Couleur du thème :",
                    'required' => false,
                    'attr' => array('class' => 'form-control')
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CalendarBundle\Entity\Calendar'
        ));
    }

}
