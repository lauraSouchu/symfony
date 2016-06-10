<?php

namespace CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class EventType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre', 'text', array(
                    'label' => "Titre : ",
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('description', 'textarea', array(
                    'label' => "Description : ",
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('lieu', 'text', array(
                    'label' => "Lieu : ",
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control')))
                ->add('dateDebut', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'dd/MM/yyyy',
                    'label' => 'Date de début : ',
                    'attr' => array('class' => 'form-control datepicker')))
                ->add('dateFin', 'date', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'dd/MM/yyyy',
                    'label' => 'Date de fin : ',
                    'attr' => array('class' => 'form-control datepicker')))
                ->add('heureDebut', 'datetime', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'HH:mm',
                    'label' => 'Heure de début : ',
                    'attr' => array('class' => 'form-control timepicker')))
                ->add('heureFin', 'datetime', array(
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'HH:mm',
                    'label' => 'Heure de fin : ',
                    'attr' => array('class' => 'form-control timepicker')))

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CalendarBundle\Entity\Event'
        ));
    }

}
