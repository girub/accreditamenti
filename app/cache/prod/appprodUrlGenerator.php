<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'accreditamenti_congressi_default_index' => true,
       'accreditamento' => true,
       'accreditamento_show' => true,
       'accreditamento_new' => true,
       'accreditamento_create' => true,
       'accreditamento_edit' => true,
       'accreditamento_update' => true,
       'accreditamento_delete' => true,
       'congresso' => true,
       'congresso_mostra_tutti' => true,
       'congresso_show' => true,
       'congresso_new' => true,
       'congresso_create' => true,
       'congresso_edit' => true,
       'congresso_update' => true,
       'congresso_delete_manifesto' => true,
       'congresso_delete' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getaccreditamenti_congressi_default_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getaccreditamentoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/accreditamento/',  ),));
    }

    private function getaccreditamento_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getaccreditamento_newRouteInfo()
    {
        return array(array (  0 => 'congresso_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::newAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'congresso_id',  ),  1 =>   array (    0 => 'text',    1 => '/accreditamento/new',  ),));
    }

    private function getaccreditamento_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/accreditamento/create',  ),));
    }

    private function getaccreditamento_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getaccreditamento_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getaccreditamento_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getcongressoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/congresso/',  ),));
    }

    private function getcongresso_mostra_tuttiRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::mostraTuttiAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/congresso/mostraTutti',  ),));
    }

    private function getcongresso_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/congresso/mostra',  ),));
    }

    private function getcongresso_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/congresso/new',  ),));
    }

    private function getcongresso_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/congresso/create',  ),));
    }

    private function getcongresso_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/congresso',  ),));
    }

    private function getcongresso_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/congresso',  ),));
    }

    private function getcongresso_delete_manifestoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::removeManifestoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/deletemanifesto',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/congresso',  ),));
    }

    private function getcongresso_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/congresso',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }
}
