<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // accreditamenti_congressi_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accreditamenti_congressi_default_index');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accreditamenti_congressi_default_index',);
        }

        // accreditamento
        if (rtrim($pathinfo, '/') === '/accreditamento') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accreditamento');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::indexAction',  '_route' => 'accreditamento',);
        }

        // accreditamento_show
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::showAction',)), array('_route' => 'accreditamento_show'));
        }

        // accreditamento_new
        if (0 === strpos($pathinfo, '/accreditamento/new') && preg_match('#^/accreditamento/new/(?P<congresso_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::newAction',)), array('_route' => 'accreditamento_new'));
        }

        // accreditamento_create
        if ($pathinfo === '/accreditamento/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_accreditamento_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::createAction',  '_route' => 'accreditamento_create',);
        }
        not_accreditamento_create:

        // accreditamento_edit
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::editAction',)), array('_route' => 'accreditamento_edit'));
        }

        // accreditamento_update
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_accreditamento_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::updateAction',)), array('_route' => 'accreditamento_update'));
        }
        not_accreditamento_update:

        // accreditamento_delete
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_accreditamento_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::deleteAction',)), array('_route' => 'accreditamento_delete'));
        }
        not_accreditamento_delete:

        // congresso
        if (rtrim($pathinfo, '/') === '/congresso') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'congresso');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::indexAction',  '_route' => 'congresso',);
        }

        // congresso_mostra_tutti
        if ($pathinfo === '/congresso/mostraTutti') {
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::mostraTuttiAction',  '_route' => 'congresso_mostra_tutti',);
        }

        // congresso_show
        if (0 === strpos($pathinfo, '/congresso/mostra') && preg_match('#^/congresso/mostra/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::showAction',)), array('_route' => 'congresso_show'));
        }

        // congresso_new
        if ($pathinfo === '/congresso/new') {
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::newAction',  '_route' => 'congresso_new',);
        }

        // congresso_create
        if ($pathinfo === '/congresso/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_congresso_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::createAction',  '_route' => 'congresso_create',);
        }
        not_congresso_create:

        // congresso_edit
        if (0 === strpos($pathinfo, '/congresso') && preg_match('#^/congresso/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::editAction',)), array('_route' => 'congresso_edit'));
        }

        // congresso_update
        if (0 === strpos($pathinfo, '/congresso') && preg_match('#^/congresso/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_congresso_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::updateAction',)), array('_route' => 'congresso_update'));
        }
        not_congresso_update:

        // congresso_delete_manifesto
        if (0 === strpos($pathinfo, '/congresso') && preg_match('#^/congresso/(?P<id>[^/]+?)/deletemanifesto$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::removeManifestoAction',)), array('_route' => 'congresso_delete_manifesto'));
        }

        // congresso_delete
        if (0 === strpos($pathinfo, '/congresso') && preg_match('#^/congresso/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_congresso_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::deleteAction',)), array('_route' => 'congresso_delete'));
        }
        not_congresso_delete:

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
