<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'calendar_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_add_event' => array (  0 =>   array (    0 => 'calendar',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::addEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'calendar',    ),    1 =>     array (      0 => 'text',      1 => '/addEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_edit_event' => array (  0 =>   array (    0 => 'event',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::editEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'event',    ),    1 =>     array (      0 => 'text',      1 => '/editEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_del_event' => array (  0 =>   array (    0 => 'id_event',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::delEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_event',    ),    1 =>     array (      0 => 'text',      1 => '/delEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_detail_event' => array (  0 =>   array (    0 => 'id_event',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::detailEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_event',    ),    1 =>     array (      0 => 'text',      1 => '/detailEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
