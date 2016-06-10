<?php

namespace CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CalendarBundle\Entity\Calendar;
use CalendarBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;
use CalendarBundle\Form\EventType;

class EventController extends Controller {

    public function addEventAction(Request $request) {
        $calendar = $this->get('security.token_storage')->getToken()->getUser()->getCalendar();
        $builder = new EventType();
        $event = new Event();

        $form = $this->createForm($builder, $event, array('method' => 'POST', 'action' => $this->generateUrl('calendar_add_event', array('calendar' => $calendar->getId()))));

        if ($form->handleRequest($request)->isSubmitted()) {
            $event->setCalendar($calendar);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('calendar_homepage');
        }
        return $this->render('CalendarBundle:Event:addEvent.html.twig', array("form" => $form->createView()));
    }

    public function editEventAction(Event $event, Request $request) {
        $builder = new EventType();

        $form = $this->createForm($builder, $event, array('method' => 'POST', 'action' => $this->generateUrl('calendar_edit_event', array('event' => $event->getId()))));

        if ($form->handleRequest($request)->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('calendar_detail_event', array('id_event' => $event->getId()));
        }

        return $this->render('CalendarBundle:Event:editEvent.html.twig', array("form" => $form->createView(), 'event' => $event));
    }

    public function delEventAction(Event $event) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('calendar_homepage');
    }

    public function detailEventAction(Event $event) {
        return $this->render('CalendarBundle:Event:detailEvent.html.twig', array('event' => $event));
    }

}
