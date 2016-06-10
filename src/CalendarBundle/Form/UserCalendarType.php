<?php

namespace CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserCalendarType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('shared', 'entity', array(
                    'class' => 'CalendarBundle:User',
                    'property' => 'email',
                    'multiple' => true,
                    'expanded' => true,
                    'label' => "Cocher les utilisateurs avec qui vous souhaitez partager votre agenda : ",
                    'attr' => array('class' => 'checklist')))
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
