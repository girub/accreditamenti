<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'questionario_customer_satisfaction' => true,
       'questionario_customer_satisfaction_show' => true,
       'questionario_customer_satisfaction_new' => true,
       'questionario_customer_satisfaction_create' => true,
       'questionario_customer_satisfaction_edit' => true,
       'questionario_customer_satisfaction_update' => true,
       'questionario_customer_satisfaction_delete' => true,
       'accreditamento' => true,
       'carica_iscritti' => true,
       'form_login_iscritto' => true,
       'login_iscritto' => true,
       'compila_anagrafica' => true,
       'compila_ecm' => true,
       'upload_iscritti' => true,
       'accreditamento_show' => true,
       'accreditamento_new' => true,
       'accreditamento_create' => true,
       'accreditamento_edit' => true,
       'accreditamento_update' => true,
       'accreditamento_delete' => true,
       'controlla_questionario_ecm' => true,
       'congresso' => true,
       'elenco_congresso' => true,
       'ultimo_congresso' => true,
       'accreditamenti_congresso' => true,
       'congresso_mostra_tutti' => true,
       'congresso_show' => true,
       'congresso_new' => true,
       'congresso_create' => true,
       'congresso_edit' => true,
       'congresso_update' => true,
       'congresso_delete_manifesto' => true,
       'congresso_delete' => true,
       'domanda' => true,
       'domanda_show' => true,
       'domanda_ecm_new' => true,
       'domanda_customer_satisfaction_new' => true,
       'domanda_valutazione_new' => true,
       'domanda_ecm_create' => true,
       'domanda_customer_satisfaction_create' => true,
       'domanda_valutazione_create' => true,
       'domanda_ecm_edit' => true,
       'domanda_customer_satisfaction_edit' => true,
       'domanda_ecm_update' => true,
       'domanda_customer_satisfaction_update' => true,
       'domanda_delete' => true,
       'domanda_customer_satisfaction_delete' => true,
       'questionarioecm' => true,
       'questionarioecm_show' => true,
       'questionarioecm_new' => true,
       'questionarioecm_create' => true,
       'questionarioecm_edit' => true,
       'questionarioecm_update' => true,
       'questionarioecm_delete' => true,
       'risposta' => true,
       'risposta_show' => true,
       'risposta_ecm_new' => true,
       'risposta_customer_satisfaction_new' => true,
       'risposta_ecm_create' => true,
       'risposta_cs_create' => true,
       'risposta_ecm_edit' => true,
       'risposta_customer_satisfaction_edit' => true,
       'risposta_ecm_update' => true,
       'risposta_customer_satisfaction_update' => true,
       'risposta_ecm_delete' => true,
       'risposta_customer_satisfaction_delete' => true,
       'questionario_valutazione' => true,
       'questionario_valutazione_show' => true,
       'questionario_valutazione_new' => true,
       'questionario_valutazione_create' => true,
       'questionario_valutazione_edit' => true,
       'questionario_valutazione_update' => true,
       'questionario_valutazione_delete' => true,
       'anagrafica' => true,
       'anagrafica_show' => true,
       'anagrafica_new' => true,
       'anagrafica_create' => true,
       'anagrafica_edit' => true,
       'anagrafica_update' => true,
       'anagrafica_delete' => true,
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

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getquestionario_customer_satisfactionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction/',  ),));
    }

    private function getquestionario_customer_satisfaction_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction',  ),));
    }

    private function getquestionario_customer_satisfaction_newRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::newAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  1 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction/new',  ),));
    }

    private function getquestionario_customer_satisfaction_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction/create',  ),));
    }

    private function getquestionario_customer_satisfaction_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction',  ),));
    }

    private function getquestionario_customer_satisfaction_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction',  ),));
    }

    private function getquestionario_customer_satisfaction_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/customer/satisfaction',  ),));
    }

    private function getaccreditamentoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/accreditamento/',  ),));
    }

    private function getcarica_iscrittiRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::caricaIscrittiAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/carica/iscritti',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getform_login_iscrittoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::formLoginIscrittoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/form/iscritto',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getlogin_iscrittoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::loginIscrittoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login/iscritto',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getcompila_anagraficaRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::compilaAnagraficaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/compila/anagrafica',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getcompila_ecmRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',  1 => 'anagrafica_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::compilaEcmAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/compila/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'anagrafica_id',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  3 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getupload_iscrittiRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::uploadIscrittiAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/uoload/iscritti',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
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

    private function getcontrolla_questionario_ecmRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',  1 => 'anagrafica_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::controllaQuestionarioEcmAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/controlla/questionario/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'anagrafica_id',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  3 =>   array (    0 => 'text',    1 => '/accreditamento',  ),));
    }

    private function getcongressoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/congresso/',  ),));
    }

    private function getelenco_congressoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::elencoCongressiAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getultimo_congressoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::UltimoCongressoCreatoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/congresso/ultimo',  ),));
    }

    private function getaccreditamenti_congressoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::accreditamentiCongressoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/congresso/mostra/accreditamenti',  ),));
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

    private function getdomandaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/domanda/',  ),));
    }

    private function getdomanda_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getdomanda_ecm_newRouteInfo()
    {
        return array(array (  0 => 'questionarioecm_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::newEcmAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'questionarioecm_id',  ),  1 =>   array (    0 => 'text',    1 => '/domanda/new/ecm',  ),));
    }

    private function getdomanda_customer_satisfaction_newRouteInfo()
    {
        return array(array (  0 => 'questionario_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::newCustomerSatisfactionAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'questionario_id',  ),  1 =>   array (    0 => 'text',    1 => '/domanda/new/customer/satisfaction',  ),));
    }

    private function getdomanda_valutazione_newRouteInfo()
    {
        return array(array (  0 => 'questionario_valutazione_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::newValutazioneAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'questionario_valutazione_id',  ),  1 =>   array (    0 => 'text',    1 => '/domanda/new/valutazione',  ),));
    }

    private function getdomanda_ecm_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/domanda/create/ecm',  ),));
    }

    private function getdomanda_customer_satisfaction_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::createCustomerSatisfactionAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/domanda/create/customer/satisfaction',  ),));
    }

    private function getdomanda_valutazione_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::createValutazioneAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/domanda/create/valutazione',  ),));
    }

    private function getdomanda_ecm_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::editEcmAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getdomanda_customer_satisfaction_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::editCustomerSatisfactionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit/customer/satisfaction',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getdomanda_ecm_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::updateEcmAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getdomanda_customer_satisfaction_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::updateCustomerSatisfactionAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update/customer/satisfation',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getdomanda_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::deleteEcmAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getdomanda_customer_satisfaction_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::deleteCustomerSatisfactionAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete/customer/satisfaction',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/domanda',  ),));
    }

    private function getquestionarioecmRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionarioecm/',  ),));
    }

    private function getquestionarioecm_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionarioecm',  ),));
    }

    private function getquestionarioecm_newRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::newAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  1 =>   array (    0 => 'text',    1 => '/questionarioecm/new',  ),));
    }

    private function getquestionarioecm_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/questionarioecm/create',  ),));
    }

    private function getquestionarioecm_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionarioecm',  ),));
    }

    private function getquestionarioecm_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionarioecm',  ),));
    }

    private function getquestionarioecm_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionarioecm',  ),));
    }

    private function getrispostaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/risposta/',  ),));
    }

    private function getrisposta_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getrisposta_ecm_newRouteInfo()
    {
        return array(array (  0 => 'domanda_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::newEcmAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'domanda_id',  ),  1 =>   array (    0 => 'text',    1 => '/risposta/new/ecm',  ),));
    }

    private function getrisposta_customer_satisfaction_newRouteInfo()
    {
        return array(array (  0 => 'domanda_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::newCustomerSatisfactionAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'domanda_id',  ),  1 =>   array (    0 => 'text',    1 => '/risposta/new/cs',  ),));
    }

    private function getrisposta_ecm_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::createEcmAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/risposta/create/ecm',  ),));
    }

    private function getrisposta_cs_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::createCustomerSatisfactionAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/risposta/create/cs',  ),));
    }

    private function getrisposta_ecm_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::editEcmAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getrisposta_customer_satisfaction_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::editCustomerSatisfactionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit/customer/satisfaction',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getrisposta_ecm_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::updateEcmAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getrisposta_customer_satisfaction_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::updateCustomerSatisfactionAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update/customer/satisfaction',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getrisposta_ecm_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::deleteEcmAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete/ecm',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getrisposta_customer_satisfaction_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::deleteCustomerSatisfactionAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete/customer/satisfaction',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/risposta',  ),));
    }

    private function getquestionario_valutazioneRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/questionario/valutazione/',  ),));
    }

    private function getquestionario_valutazione_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/valutazione',  ),));
    }

    private function getquestionario_valutazione_newRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::newAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  1 =>   array (    0 => 'text',    1 => '/questionario/valutazione/new/valutazione',  ),));
    }

    private function getquestionario_valutazione_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/questionario/valutazione/create/valutazione',  ),));
    }

    private function getquestionario_valutazione_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit/valutazione',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/valutazione',  ),));
    }

    private function getquestionario_valutazione_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update/valutazione',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/valutazione',  ),));
    }

    private function getquestionario_valutazione_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete/valutazione',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/questionario/valutazione',  ),));
    }

    private function getanagraficaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/anagrafica/',  ),));
    }

    private function getanagrafica_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anagrafica',  ),));
    }

    private function getanagrafica_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/anagrafica/new',  ),));
    }

    private function getanagrafica_createRouteInfo()
    {
        return array(array (  0 => 'accreditamento_id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'accreditamento_id',  ),  1 =>   array (    0 => 'text',    1 => '/anagrafica/create',  ),));
    }

    private function getanagrafica_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anagrafica',  ),));
    }

    private function getanagrafica_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anagrafica',  ),));
    }

    private function getanagrafica_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/anagrafica',  ),));
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
