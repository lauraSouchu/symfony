<?php

namespace CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', null, array('label' => "Nom d'utilisateur :", 'translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')))
                ->add('nom', 'text', array('required' => false, 'label' => 'Nom :', 'attr' => array('class' => 'form-control')))
                ->add('prenom', 'text', array('required' => false, 'label' => 'Prenom :', 'attr' => array('class' => 'form-control')))
                ->add('phonenumber', 'text', array('required' => false, 'label' => 'Numéro de téléphone :', 'attr' => array('class' => 'form-control')))
                ->add('email', 'email', array('label' => 'Email :', 'translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'Mot de passe :', 'attr' => array('class' => 'form-control')),
                    'second_options' => array('label' => 'Confirmation :', 'attr' => array('class' => 'form-control')),
                    'invalid_message' => 'Les deux champs ne se correspondent pas !',
                    'required' => false
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'CalendarBundle\Entity\User'
        ));
    }

}
