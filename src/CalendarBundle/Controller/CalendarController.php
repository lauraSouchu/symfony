<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CalendarBundle\Entity\Calendar;
use Symfony\Component\HttpFoundation\Request;
use CalendarBundle\Form\CalendarType;
use CalendarBundle\Form\UserCalendarType;

class CalendarController extends Controller {

    public function indexAction() {
        $usr = $this->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        
        if ($usr->getCalendar() == null) {
            $calendar = new Calendar();
            $calendar->setUser($usr);
            $calendar->setNom('Mon Agenda');

            $em->persist($calendar);
            $em->flush();
        } else {
            $calendar = $em->getRepository("CalendarBundle:Calendar")->findOneByUser($usr->getId());
        }
        
        
        return $this->render('CalendarBundle:Calendar:index.html.twig', array("calendar" => $calendar));
    }

    public function configCalendarAction(Request $request) {
        $calendar = $this->get('security.token_storage')->getToken()->getUser()->getCalendar();

        $builder = new CalendarType();

        $form = $this->createForm($builder, $calendar, array('method' => 'POST', 'action' => $this->generateUrl('calendar_config', array('calendar' => $calendar->getId()))));

        if ($form->handleRequest($request)->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();
            return $this->redirectToRoute('calendar_homepage');
        }

        return $this->render('CalendarBundle:Calendar:config.html.twig', array("form" => $form->createView(), 'calendar' => $calendar));
    }

    public function shareAgendaAction(Request $request) {
        $calendar = $this->get('security.token_storage')->getToken()->getUser()->getCalendar();
        
        $builder = new UserCalendarType();

        $form = $this->createForm($builder, $calendar, array('method' => 'POST', 'action' => $this->generateUrl('calendar_share')));

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();
            
            return $this->redirectToRoute('calendar_homepage');
        }

        return $this->render('CalendarBundle:Calendar:share.html.twig', array("form" => $form->createView()));
    }

}
