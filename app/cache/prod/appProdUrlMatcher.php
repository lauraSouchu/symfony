<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // calendar_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'calendar_homepage');
            }

            return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::indexAction',  '_route' => 'calendar_homepage',);
        }

        // calendar_add_event
        if (0 === strpos($pathinfo, '/addEvent') && preg_match('#^/addEvent/(?P<calendar>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_add_event')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::addEventAction',));
        }

        // calendar_edit_event
        if (0 === strpos($pathinfo, '/editEvent') && preg_match('#^/editEvent/(?P<event>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_edit_event')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::editEventAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            // calendar_del_event
            if (0 === strpos($pathinfo, '/delEvent') && preg_match('#^/delEvent/(?P<id_event>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_del_event')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::delEventAction',));
            }

            // calendar_detail_event
            if (0 === strpos($pathinfo, '/detailEvent') && preg_match('#^/detailEvent/(?P<id_event>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_detail_event')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::detailEventAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
