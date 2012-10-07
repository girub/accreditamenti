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

        // risposta
        if (rtrim($pathinfo, '/') === '/risposta') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'risposta');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::indexAction',  '_route' => 'risposta',);
        }

        // risposta_show
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::showAction',)), array('_route' => 'risposta_show'));
        }

        // risposta_ecm_new
        if (0 === strpos($pathinfo, '/risposta/new/ecm') && preg_match('#^/risposta/new/ecm/(?P<domanda_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::newEcmAction',)), array('_route' => 'risposta_ecm_new'));
        }

        // risposta_customer_satisfaction_new
        if (0 === strpos($pathinfo, '/risposta/new/cs') && preg_match('#^/risposta/new/cs/(?P<domanda_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::newCustomerSatisfactionAction',)), array('_route' => 'risposta_customer_satisfaction_new'));
        }

        // risposta_ecm_create
        if ($pathinfo === '/risposta/create/ecm') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_risposta_ecm_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::createEcmAction',  '_route' => 'risposta_ecm_create',);
        }
        not_risposta_ecm_create:

        // risposta_cs_create
        if ($pathinfo === '/risposta/create/cs') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_risposta_cs_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::createCustomerSatisfactionAction',  '_route' => 'risposta_cs_create',);
        }
        not_risposta_cs_create:

        // risposta_ecm_edit
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/edit/ecm$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::editEcmAction',)), array('_route' => 'risposta_ecm_edit'));
        }

        // risposta_customer_satisfaction_edit
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/edit/customer/satisfaction$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::editCustomerSatisfactionAction',)), array('_route' => 'risposta_customer_satisfaction_edit'));
        }

        // risposta_ecm_update
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/update/ecm$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_risposta_ecm_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::updateEcmAction',)), array('_route' => 'risposta_ecm_update'));
        }
        not_risposta_ecm_update:

        // risposta_customer_satisfaction_update
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/update/customer/satisfaction$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_risposta_customer_satisfaction_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::updateCustomerSatisfactionAction',)), array('_route' => 'risposta_customer_satisfaction_update'));
        }
        not_risposta_customer_satisfaction_update:

        // risposta_ecm_delete
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/delete/ecm$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_risposta_ecm_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::deleteEcmAction',)), array('_route' => 'risposta_ecm_delete'));
        }
        not_risposta_ecm_delete:

        // risposta_customer_satisfaction_delete
        if (0 === strpos($pathinfo, '/risposta') && preg_match('#^/risposta/(?P<id>[^/]+?)/delete/customer/satisfaction$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_risposta_customer_satisfaction_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\RispostaController::deleteCustomerSatisfactionAction',)), array('_route' => 'risposta_customer_satisfaction_delete'));
        }
        not_risposta_customer_satisfaction_delete:

        // questionario_customer_satisfaction
        if (rtrim($pathinfo, '/') === '/questionario/customer/satisfaction') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'questionario_customer_satisfaction');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::indexAction',  '_route' => 'questionario_customer_satisfaction',);
        }

        // questionario_customer_satisfaction_show
        if (0 === strpos($pathinfo, '/questionario/customer/satisfaction') && preg_match('#^/questionario/customer/satisfaction/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::showAction',)), array('_route' => 'questionario_customer_satisfaction_show'));
        }

        // questionario_customer_satisfaction_new
        if (0 === strpos($pathinfo, '/questionario/customer/satisfaction/new') && preg_match('#^/questionario/customer/satisfaction/new/(?P<accreditamento_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::newAction',)), array('_route' => 'questionario_customer_satisfaction_new'));
        }

        // questionario_customer_satisfaction_create
        if ($pathinfo === '/questionario/customer/satisfaction/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionario_customer_satisfaction_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::createAction',  '_route' => 'questionario_customer_satisfaction_create',);
        }
        not_questionario_customer_satisfaction_create:

        // questionario_customer_satisfaction_edit
        if (0 === strpos($pathinfo, '/questionario/customer/satisfaction') && preg_match('#^/questionario/customer/satisfaction/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::editAction',)), array('_route' => 'questionario_customer_satisfaction_edit'));
        }

        // questionario_customer_satisfaction_update
        if (0 === strpos($pathinfo, '/questionario/customer/satisfaction') && preg_match('#^/questionario/customer/satisfaction/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionario_customer_satisfaction_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::updateAction',)), array('_route' => 'questionario_customer_satisfaction_update'));
        }
        not_questionario_customer_satisfaction_update:

        // questionario_customer_satisfaction_delete
        if (0 === strpos($pathinfo, '/questionario/customer/satisfaction') && preg_match('#^/questionario/customer/satisfaction/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionario_customer_satisfaction_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioCustomerSatisfactionController::deleteAction',)), array('_route' => 'questionario_customer_satisfaction_delete'));
        }
        not_questionario_customer_satisfaction_delete:

        // questionario_valutazione
        if (rtrim($pathinfo, '/') === '/questionario/valutazione') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'questionario_valutazione');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::indexAction',  '_route' => 'questionario_valutazione',);
        }

        // questionario_valutazione_show
        if (0 === strpos($pathinfo, '/questionario/valutazione') && preg_match('#^/questionario/valutazione/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::showAction',)), array('_route' => 'questionario_valutazione_show'));
        }

        // questionario_valutazione_new
        if (0 === strpos($pathinfo, '/questionario/valutazione/new/valutazione') && preg_match('#^/questionario/valutazione/new/valutazione/(?P<accreditamento_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::newAction',)), array('_route' => 'questionario_valutazione_new'));
        }

        // questionario_valutazione_create
        if ($pathinfo === '/questionario/valutazione/create/valutazione') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionario_valutazione_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::createAction',  '_route' => 'questionario_valutazione_create',);
        }
        not_questionario_valutazione_create:

        // questionario_valutazione_edit
        if (0 === strpos($pathinfo, '/questionario/valutazione') && preg_match('#^/questionario/valutazione/(?P<id>[^/]+?)/edit/valutazione$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::editAction',)), array('_route' => 'questionario_valutazione_edit'));
        }

        // questionario_valutazione_update
        if (0 === strpos($pathinfo, '/questionario/valutazione') && preg_match('#^/questionario/valutazione/(?P<id>[^/]+?)/update/valutazione$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionario_valutazione_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::updateAction',)), array('_route' => 'questionario_valutazione_update'));
        }
        not_questionario_valutazione_update:

        // questionario_valutazione_delete
        if (0 === strpos($pathinfo, '/questionario/valutazione') && preg_match('#^/questionario/valutazione/(?P<id>[^/]+?)/delete/valutazione$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionario_valutazione_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioValutazioneController::deleteAction',)), array('_route' => 'questionario_valutazione_delete'));
        }
        not_questionario_valutazione_delete:

        // questionarioecm
        if (rtrim($pathinfo, '/') === '/questionarioecm') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'questionarioecm');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::indexAction',  '_route' => 'questionarioecm',);
        }

        // questionarioecm_show
        if (0 === strpos($pathinfo, '/questionarioecm') && preg_match('#^/questionarioecm/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::showAction',)), array('_route' => 'questionarioecm_show'));
        }

        // questionarioecm_new
        if (0 === strpos($pathinfo, '/questionarioecm/new') && preg_match('#^/questionarioecm/new/(?P<accreditamento_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::newAction',)), array('_route' => 'questionarioecm_new'));
        }

        // questionarioecm_create
        if ($pathinfo === '/questionarioecm/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionarioecm_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::createAction',  '_route' => 'questionarioecm_create',);
        }
        not_questionarioecm_create:

        // questionarioecm_edit
        if (0 === strpos($pathinfo, '/questionarioecm') && preg_match('#^/questionarioecm/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::editAction',)), array('_route' => 'questionarioecm_edit'));
        }

        // questionarioecm_update
        if (0 === strpos($pathinfo, '/questionarioecm') && preg_match('#^/questionarioecm/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionarioecm_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::updateAction',)), array('_route' => 'questionarioecm_update'));
        }
        not_questionarioecm_update:

        // questionarioecm_delete
        if (0 === strpos($pathinfo, '/questionarioecm') && preg_match('#^/questionarioecm/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_questionarioecm_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\QuestionarioEcmController::deleteAction',)), array('_route' => 'questionarioecm_delete'));
        }
        not_questionarioecm_delete:

        // domanda
        if (rtrim($pathinfo, '/') === '/domanda') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'domanda');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::indexAction',  '_route' => 'domanda',);
        }

        // domanda_show
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::showAction',)), array('_route' => 'domanda_show'));
        }

        // domanda_ecm_new
        if (0 === strpos($pathinfo, '/domanda/new/ecm') && preg_match('#^/domanda/new/ecm/(?P<questionarioecm_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::newEcmAction',)), array('_route' => 'domanda_ecm_new'));
        }

        // domanda_customer_satisfaction_new
        if (0 === strpos($pathinfo, '/domanda/new/customer/satisfaction') && preg_match('#^/domanda/new/customer/satisfaction/(?P<questionario_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::newCustomerSatisfactionAction',)), array('_route' => 'domanda_customer_satisfaction_new'));
        }

        // domanda_valutazione_new
        if (0 === strpos($pathinfo, '/domanda/new/valutazione') && preg_match('#^/domanda/new/valutazione/(?P<questionario_valutazione_id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::newValutazioneAction',)), array('_route' => 'domanda_valutazione_new'));
        }

        // domanda_ecm_create
        if ($pathinfo === '/domanda/create/ecm') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_ecm_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::createAction',  '_route' => 'domanda_ecm_create',);
        }
        not_domanda_ecm_create:

        // domanda_customer_satisfaction_create
        if ($pathinfo === '/domanda/create/customer/satisfaction') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_customer_satisfaction_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::createCustomerSatisfactionAction',  '_route' => 'domanda_customer_satisfaction_create',);
        }
        not_domanda_customer_satisfaction_create:

        // domanda_valutazione_create
        if ($pathinfo === '/domanda/create/valutazione') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_valutazione_create;
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::createValutazioneAction',  '_route' => 'domanda_valutazione_create',);
        }
        not_domanda_valutazione_create:

        // domanda_ecm_edit
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/edit/ecm$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::editEcmAction',)), array('_route' => 'domanda_ecm_edit'));
        }

        // domanda_customer_satisfaction_edit
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/edit/customer/satisfaction$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::editCustomerSatisfactionAction',)), array('_route' => 'domanda_customer_satisfaction_edit'));
        }

        // domanda_ecm_update
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/update/ecm$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_ecm_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::updateEcmAction',)), array('_route' => 'domanda_ecm_update'));
        }
        not_domanda_ecm_update:

        // domanda_customer_satisfaction_update
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/update/customer/satisfation$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_customer_satisfaction_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::updateCustomerSatisfactionAction',)), array('_route' => 'domanda_customer_satisfaction_update'));
        }
        not_domanda_customer_satisfaction_update:

        // domanda_delete
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::deleteEcmAction',)), array('_route' => 'domanda_delete'));
        }
        not_domanda_delete:

        // domanda_customer_satisfaction_delete
        if (0 === strpos($pathinfo, '/domanda') && preg_match('#^/domanda/(?P<id>[^/]+?)/delete/customer/satisfaction$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_domanda_customer_satisfaction_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\DomandaController::deleteCustomerSatisfactionAction',)), array('_route' => 'domanda_customer_satisfaction_delete'));
        }
        not_domanda_customer_satisfaction_delete:

        // accreditamento
        if (rtrim($pathinfo, '/') === '/accreditamento') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accreditamento');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::indexAction',  '_route' => 'accreditamento',);
        }

        // carica_iscritti
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/carica/iscritti$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::caricaIscrittiAction',)), array('_route' => 'carica_iscritti'));
        }

        // form_login_iscritto
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/form/iscritto$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::formLoginIscrittoAction',)), array('_route' => 'form_login_iscritto'));
        }

        // login_iscritto
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/login/iscritto$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::loginIscrittoAction',)), array('_route' => 'login_iscritto'));
        }

        // compila_anagrafica
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<accreditamento_id>[^/]+?)/compila/anagrafica$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::compilaAnagraficaAction',)), array('_route' => 'compila_anagrafica'));
        }

        // compila_ecm
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<accreditamento_id>[^/]+?)/(?P<anagrafica_id>[^/]+?)/compila/ecm$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::compilaEcmAction',)), array('_route' => 'compila_ecm'));
        }

        // upload_iscritti
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<id>[^/]+?)/uoload/iscritti$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::uploadIscrittiAction',)), array('_route' => 'upload_iscritti'));
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

        // controlla_questionario_ecm
        if (0 === strpos($pathinfo, '/accreditamento') && preg_match('#^/accreditamento/(?P<accreditamento_id>[^/]+?)/(?P<anagrafica_id>[^/]+?)/controlla/questionario/ecm$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AccreditamentoController::controllaQuestionarioEcmAction',)), array('_route' => 'controlla_questionario_ecm'));
        }

        // anagrafica
        if (rtrim($pathinfo, '/') === '/anagrafica') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'anagrafica');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::indexAction',  '_route' => 'anagrafica',);
        }

        // anagrafica_show
        if (0 === strpos($pathinfo, '/anagrafica') && preg_match('#^/anagrafica/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::showAction',)), array('_route' => 'anagrafica_show'));
        }

        // anagrafica_new
        if ($pathinfo === '/anagrafica/new') {
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::newAction',  '_route' => 'anagrafica_new',);
        }

        // anagrafica_create
        if (0 === strpos($pathinfo, '/anagrafica/create') && preg_match('#^/anagrafica/create/(?P<accreditamento_id>[^/]+?)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_anagrafica_create;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::createAction',)), array('_route' => 'anagrafica_create'));
        }
        not_anagrafica_create:

        // anagrafica_edit
        if (0 === strpos($pathinfo, '/anagrafica') && preg_match('#^/anagrafica/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::editAction',)), array('_route' => 'anagrafica_edit'));
        }

        // anagrafica_update
        if (0 === strpos($pathinfo, '/anagrafica') && preg_match('#^/anagrafica/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_anagrafica_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::updateAction',)), array('_route' => 'anagrafica_update'));
        }
        not_anagrafica_update:

        // anagrafica_delete
        if (0 === strpos($pathinfo, '/anagrafica') && preg_match('#^/anagrafica/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_anagrafica_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\AnagraficaController::deleteAction',)), array('_route' => 'anagrafica_delete'));
        }
        not_anagrafica_delete:

        // congresso
        if (rtrim($pathinfo, '/') === '/congresso') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'congresso');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::indexAction',  '_route' => 'congresso',);
        }

        // elenco_congresso
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'elenco_congresso');
            }
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::elencoCongressiAction',  '_route' => 'elenco_congresso',);
        }

        // ultimo_congresso
        if ($pathinfo === '/congresso/ultimo') {
            return array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::UltimoCongressoCreatoAction',  '_route' => 'ultimo_congresso',);
        }

        // accreditamenti_congresso
        if (0 === strpos($pathinfo, '/congresso/mostra/accreditamenti') && preg_match('#^/congresso/mostra/accreditamenti/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Accreditamenti\\CongressiBundle\\Controller\\CongressoController::accreditamentiCongressoAction',)), array('_route' => 'accreditamenti_congresso'));
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
