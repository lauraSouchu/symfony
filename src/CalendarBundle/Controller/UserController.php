<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CalendarBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use CalendarBundle\Form\UserType;

class UserController extends Controller {

    public function editProfilAction(Request $request) {
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $builder = new UserType();

        $form = $this->createForm($builder, $usr, array('method' => 'POST', 'action' => $this->generateUrl('calendar_edit_profil')));

        if ($form->handleRequest($request)->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($usr);
            $em->flush();
            return $this->redirectToRoute('calendar_homepage');
        }

        return $this->render('CalendarBundle:User:editProfil.html.twig', array("form" => $form->createView(), 'user' => $usr));
    }

}
