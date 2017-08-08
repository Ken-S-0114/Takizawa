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

        // top
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_top;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'top');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::indexAction',  '_route' => 'top',);
        }
        not_top:

        // search
        if ($pathinfo === '/search') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_search;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::searchAction',  '_route' => 'search',);
        }
        not_search:

        // list
        if ($pathinfo === '/list') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_list;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::listAction',  '_route' => 'list',);
        }
        not_list:

        // category
        if ($pathinfo === '/category') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_category;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::categoryAction',  '_route' => 'category',);
        }
        not_category:

        // detail
        if ($pathinfo === '/detail') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_detail;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::detailAction',  '_route' => 'detail',);
        }
        not_detail:

        // reservation
        if ($pathinfo === '/reservation') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_reservation;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::reservationAction',  '_route' => 'reservation',);
        }
        not_reservation:

        if (0 === strpos($pathinfo, '/payment')) {
            // payment
            if ($pathinfo === '/payment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_payment;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TopController::paymentAction',  '_route' => 'payment',);
            }
            not_payment:

            // payment_complete
            if ($pathinfo === '/payment/complete') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_payment_complete;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TopController::paymentCompleteAction',  '_route' => 'payment_complete',);
            }
            not_payment_complete:

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact
            if ($pathinfo === '/contact') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TopController::contactAction',  '_route' => 'contact',);
            }
            not_contact:

            // contact_do
            if ($pathinfo === '/contact/do') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_do;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TopController::DoAction',  '_route' => 'contact_do',);
            }
            not_contact_do:

        }

        // guide
        if ($pathinfo === '/guide') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_guide;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\TopController::guideAction',  '_route' => 'guide',);
        }
        not_guide:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
