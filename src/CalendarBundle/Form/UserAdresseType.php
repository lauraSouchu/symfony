<?php

namespace CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FormBundle\Form\AdresseType;
use FormBundle\Entity\Adresse;
use Symfony\Component\Form\CallbackTransformer;

class UserAdresseType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $values = array();
        for ($i = 7; $i <= 77; $i++) {
            $values[$i] = $i;
        }

        $builder
                ->add('nom', 'text', array('required' => false, 'label' => 'Nom :', 'attr' => array('class' => 'form-control')))
                ->add('prenom', 'text', array('required' => false, 'label' => 'Prenom :', 'attr' => array('class' => 'form-control')))
                ->add('email', 'email', array('label' => 'Email :', 'translation_domain' => 'FOSUserBundle', 'attr' => array('class' => 'form-control')))
                ->add('genre', 'choice', array(
                    'label' => 'Genre :',
                    'multiple' => false,
                    'expanded' => true,
                    'choices' => array('Homme' => 'Homme', 'Femme' => 'Femme', 'Autre' => 'Autre'),
                    'attr' => array('class' => 'form-control')))
                ->add('age', 'choice', array(
                    'label' => 'Age :',
                    'choices' => $values,
                    'attr' => array('class' => 'form-control')
                ))
                ->add('commentaire', 'textarea', array('required' => false, 'label' => 'Commentaire :', 'attr' => array('class' => 'form-control')))
                ->add('listadresses', 'collection', array('entry_type' => new AdresseType(), 'label' => 'TOTO', 'data_class' => 'FormBundle\Entity\Adresse'))
                ->add('Enregistrer', 'submit', array(
                    'attr' => array('class' => 'btn btn-success'),
        ));
        ;

        /*$builder->get('listadresses')
                ->addModelTransformer(new CallbackTransformer(
                        function ($tagsAsArray) {
                    if (!empty($tagsAsArray)) {
                        // transform the array to a string
                        dump($tagsAsArray);
                        return new Adresse($tagsAsArray);
                    }
                }, function ($tagsAsString) {
                    if (!empty($tagsAsString)) {
                        // transform the string back to an array
                        return explode(', ', $tagsAsString);
                    }
                }
                ))
        ;*/
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
