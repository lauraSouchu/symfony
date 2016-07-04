<?php

namespace FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FormBundle\Entity\Adresse;
use CalendarBundle\Entity\User;
use FormBundle\Form\AdresseType;
use CalendarBundle\Form\UserAdresseType;
use Symfony\Component\HttpFoundation\Request;

class FormController extends Controller {

    public function addUserAction(Request $request) {
        $builder = new UserAdresseType();
        $user = new User();
        $adresse = new Adresse();
        $user->addListadresses($adresse);
var_dump('toto');
        $form = $this->createForm($builder, $user, array('method' => 'POST', 'action' => $this->generateUrl('form_add_user')));

        if ($form->handleRequest($request)->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('form_success');
        }
        return $this->render('FormBundle:Form:form.html.twig', array("form" => $form->createView()));
    }

}
