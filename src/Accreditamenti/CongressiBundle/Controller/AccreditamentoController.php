<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Form\AccreditamentoType;
use Accreditamenti\CongressiBundle\Entity\Domanda;
use Accreditamenti\CongressiBundle\Entity\Iscritti;
use Accreditamenti\CongressiBundle\Entity\Anagrafica;
use Accreditamenti\CongressiBundle\Form\AnagraficaType;
use Accreditamenti\CongressiBundle\Entity\RispostaRepository;

/**
 * Accreditamento controller
 *
 * @Route("/accreditamento")
 */
class AccreditamentoController extends Controller {

    /**
     * Lists all Accreditamento entities.
     *
     * @Route("/", name="accreditamento")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->findAll();

        return array('entities' => $accreditamento);
    }

    /**
     * Ho creato questo metodo e relativa wview anche un po 
     * per esperimento, mi serve per far vedere o meno il 
     * link che porta all'elenco utenti 
     *
     * @Route()
     * @Template()
     */
    public function checkUtentiAction($accreditamento_id) {
        $em = $this->getDoctrine()->getEntityManager();

        $anagrafiche = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->findBy(
                array(
                    'accreditamento' => $accreditamento_id,
                ));
        $utenti = count($anagrafiche);
        return array(
            'utenti' => $utenti,
            'accreditamento_id' => $accreditamento_id);
    }

    /**
     * Lists all Accreditamento entities.
     *
     * @Route("/{accreditamento_id}/elenco/utenti", name="accreditamento_elenco_utenti")
     * @Template()
     */
    public function elencoUtentiAction($accreditamento_id) {
        $em = $this->getDoctrine()->getEntityManager();
        // Estraggo anagrafiche memorizzate le passo alla view 
        $anagrafiche = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->findBy(
                array(
                    'accreditamento' => $accreditamento_id,
                ));

        if (!$anagrafiche) {
            throw $this->createNotFoundException('Attenzione: Nessuna anagrafica con questo accreditamento!');
        }





        //echo "<br><br><br>";
        // INIZIO VEDO RISPOSTE ESATTE
        // controllo risposte esatte
        $arrayRisposteEsatte[] = array();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);
        $questionario = $accreditamento->getQuestionarioEcm();
        $domande = $em->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->findDomandeDelQuestionario($questionario[0]);
        //$percentuale_risposte_esatte = $questionario->getPercentualeRisposteEsatte();
        $percentuale_risposte_esatte = $questionario[0]->getPercentualeRisposteEsatte();
        //die($percentuale_risposte_esatte);
        $totale_risposte_esatte = 0;
        foreach ($domande as $domanda) {
            $risposte = $domanda->getRisposta();
            $idRispostaGiusta = null;
            //Ciclo tutte le risposte di questa domanda
            foreach ($risposte as $risposta) {
                //stampo solo la risposta vera
                if ($risposta->getVero() === true) {
                    $idRispostaGiusta = $risposta->getId();

                    $arrayRisposteEsatte[] .=$risposta->getId();
                }
            }

            $totale_domande_ecm = count($domande);
        }



        $utenti_abilitati[] = array();
        //var_dump($arrayRisposteEsatte);
        // Le ciclo per vedere le varie risposte degli utenti
        foreach ($anagrafiche as $anagrafica) {
            $totale_risposte_esatte = 0;
            // echo "<hr>Anagrafica: " . $anagrafica->getId() . "<BR>";

            $query = $em->createQuery(
                            'SELECT a.anagrafica_id, a.risposta_id  FROM AccreditamentiCongressiBundle:RisposteUtentiQuestionarioEcm a 
                         WHERE a.anagrafica_id = :id'
                    )->setParameter('id', $anagrafica->getId());

            $risposteEcmUtenti = $query->getResult();

            foreach ($risposteEcmUtenti as $rispostaEcmUtente) {
                // echo "Risposte utenti: " . $rispostaEcmUtente['risposta_id'] . "<BR>";

                if (in_array($rispostaEcmUtente['risposta_id'], $arrayRisposteEsatte)) {
                    $totale_risposte_esatte += 1;
                }
            }
            //echo "<b>Utente con id: " . $anagrafica->getId() . " ha risposto a " . $totale_risposte_esatte . " risposte esatte!!</b><br>";
            $percentuale_risposte_esatte = $questionario[0]->getPercentualeRisposteEsatte();
            $percentuale_da_superare = ($totale_domande_ecm * $percentuale_risposte_esatte) / 100;


            if ($totale_risposte_esatte > $percentuale_da_superare) {
                // Utenti che hanno superato con successo il questionario!!!
                $utenti_abilitati[] .=$anagrafica->getId();
            }
        }

        return array(
            'entities' => $anagrafiche,
            'utenti_abilitati' => $utenti_abilitati,
            'accreditamento_id' => $accreditamento_id
        );
    }

    /**
     * Lists all Accreditamento entities.
     *
     * @Route("/{accreditamento_id}/operazioni/utenti", name="operazioni_utente")
     * @Template()
     */
    public function operazioniUtenteAction($accreditamento_id) {

        $entityManager = $this->getDoctrine()->getEntityManager();

        $request = $this->get('request');
        $id = $request->request->get('anagrafica');

        if (is_array($id)) {
            foreach ($id as $anagrafica_id) {
                echo $anagrafica_id . "<br>";

                $anagrafica = $entityManager->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($anagrafica_id);
                $anagrafica->setAbilitaStampa(1);
                $entityManager->persist($anagrafica);

                $nome = "GIUSEPPE";
                $messaggio = \Swift_Message::newInstance()
                        ->setContentType("text/html")
                        ->setSubject('Test invio Email')
                        ->setFrom('mittente@example.com')
                        ->setTo('giuseppe.rubino@gmail.com')
                        ->setBody($this->renderView('AccreditamentiCongressiBundle:Accreditamento:email.html.twig', array('nome' => $nome)))
                ;
                if ($this->get('mailer')->send($messaggio)) {
                    $send = 'ok';
                }
            }
            $entityManager->flush();
        }



        if ($send == 'ok') {
            $this->get('session')->setFlash('notice', 'Invio email!!');
        }

        return $this->redirect($this->generateUrl('accreditamento_elenco_utenti', array(
                            'accreditamento_id' => $accreditamento_id,
                                )
                        ));
    }

    /**
     * Lists all Accreditamento entities.
     *
     * @Route("/{id}/carica/iscritti", name="carica_iscritti")
     * @Template()
     */
    public function caricaIscrittiAction($id) {

        $form = $this->createFormBuilder(null)
                ->add('file_iscritti', 'file')
                ->getForm()
                ->createView();

        return array('form' => $form, 'id' => $id);
    }

    /**
     * login Accreditamento.
     *
     * @Route("/{id}/form/iscritto", name="form_login_iscritto")
     * @Template()
     */
    public function formLoginIscrittoAction($id) {

        $form = $this->createFormBuilder(null)
                ->add('codice_fiscale', 'text')
                ->getForm()
                ->createView();

        return array('form' => $form, 'id' => $id);
    }

    /**
     * login iscritto con codice fiscale.
     *
     * @Route("/{accreditamento_id}/login/iscritto", name="login_iscritto")
     */
    public function loginIscrittoAction($accreditamento_id) {
        $form = $this->createFormBuilder(null)
                ->add('codice_fiscale', 'text')
                ->getForm();

        $form->bindRequest($this->getRequest());

        $codice_fiscale = $form['codice_fiscale']->getData();
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
                        'SELECT p.cognome, p.nome,p.codice_fiscale FROM AccreditamentiCongressiBundle:Iscritti p 
                         WHERE p.codice_fiscale = :codice_fiscale and p.accreditamento_id = :id'
                )->setParameter('codice_fiscale', $codice_fiscale)
                ->setParameter('id', $accreditamento_id);
        $iscritto = $query->getResult();

        if (!isset($iscritto[0]['nome'])) {
            $this->get('session')->setFlash('notice', 'Codice_fiscale non presente per questo accreditamento');
            return $this->redirect($this->generateUrl('form_login_iscritto', array('id' => $accreditamento_id)));
        }

        if ($form->isValid()) {
            // $user = $this->container->get('security.context')->getToken()->getUser();
            // $user->addRole('ROLE_ISCRITTO');
        }



        // controllo se l'utente ha già compilato l'anagrafica per questo accreditamento
        // se trovo un record vado alla pagina successiva
        $query = $em->createQuery(
                        'SELECT a.id, a.codice_fiscale FROM AccreditamentiCongressiBundle:Anagrafica a 
                         WHERE a.codice_fiscale = :codice_fiscale and a.accreditamento = :id'
                )->setParameter('codice_fiscale', $codice_fiscale)
                ->setParameter('id', $accreditamento_id);

        $anagrafica = $query->getResult();

        if (isset($anagrafica[0]['codice_fiscale'])) {

            $this->get('session')->setFlash('notice', 'Ben tornato ' . $iscritto[0]['nome'] . ' ' . $iscritto[0]['cognome'] . ' continua a compilare il questionario!');
            return $this->redirect($this->generateUrl('compila_ecm', array(
                                'accreditamento_id' => $accreditamento_id,
                                'anagrafica_id' => $anagrafica[0]['id'],
                            )));
        }


        //$this->get('session')->setFlash('auth', '1');

        $this->get('session')->setFlash('notice', 'Benvenuto ' . $iscritto[0]['nome'] . ' ' . $iscritto[0]['cognome'] . ' Login effettuato con successo');

        return $this->redirect($this->generateUrl('compila_anagrafica', array(
                            'accreditamento_id' => $accreditamento_id,
                            'nome' => $iscritto[0]['nome'],
                            'cognome' => $iscritto[0]['cognome'],
                            'codice_fiscale' => $iscritto[0]['codice_fiscale'],
                        )));
    }

    /**
     * Pagina dove iscritto una volta entrato compila angrafica.
     *
     * @Route("/{accreditamento_id}/compila/anagrafica/{nome}/{cognome}/{codice_fiscale}", name="compila_anagrafica")
     * @Template()
     */
    public function compilaAnagraficaAction($accreditamento_id, $nome, $cognome, $codice_fiscale) {

        $entityManager = $this->getDoctrine()->getEntityManager();
        $accreditamento = $entityManager->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);
        $anagrafica = new Anagrafica();
        $anagrafica->setAccreditamento($accreditamento);

        $anagrafica->setNome($nome);
        $anagrafica->setCognome($cognome);
        $anagrafica->setCodiceFiscale($codice_fiscale);

        $form = $this->createForm(new AnagraficaType(), $anagrafica);

        return array(
            'entity' => $anagrafica,
            'accreditamento_id' => $accreditamento_id,
            'form' => $form->createView()
        );
    }
    
    
    

   /**
     * Pagina compilo ecm.
     *
     * @Route("/{accreditamento_id}/{anagrafica_id}/compila/ecm", name="compila_ecm")
     * @Template()
     */
    public function compilaEcmAction($accreditamento_id, $anagrafica_id) {

        $entityManager = $this->getDoctrine()
                ->getEntityManager();

        //##################### INIZIO ###################################
        //controllo se già ha compilato il questionario ecm, se si
        //ridirigo l'utente al questionario di valutazione
        $query = $entityManager->createQuery(
                        'SELECT a.anagrafica_id FROM AccreditamentiCongressiBundle:RisposteUtentiQuestionarioEcm a 
                         WHERE a.anagrafica_id = :id'
                )->setParameter('id', $anagrafica_id);

        //$test = $em->createQuery(
        //    'SELECT DISTINCT d
        //    FROM AccreditamentiCongressiBundle:RisposteUtentiQuestionarioEcm d
        //    INNER JOIN d.userGruppen ug
        //    WHERE ug.userId =9
        //    '
        //);

        $risposteEcm = $query->getResult();
        //  die($risposteEcm[0]['anagrafica_id']);
        if (isset($risposteEcm[0]['anagrafica_id'])) {

            // aggiungere nome e cognome
            $this->get('session')->setFlash('notice', 'Ben tornato continua a compilare il questionario!');
            return $this->redirect($this->generateUrl('compila_valutazione', array(
                                'accreditamento_id' => $accreditamento_id,
                                'anagrafica_id' => $anagrafica_id,
                            )));
        }
        //######################## fine ################################



        $accreditamento = $entityManager
                ->getRepository('AccreditamentiCongressiBundle:Accreditamento')
                ->find($accreditamento_id);

        $formDomande = $this
                ->createQuestionarioForm($accreditamento);

        return array(
            'formDomande' => $formDomande,
            'accreditamento_id' => $accreditamento_id,
            'anagrafica_id' => $anagrafica_id,
        );
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    /**
     * Upload iscritti dal csv.
     *
     * @Route("/{id}/uoload/iscritti", name="upload_iscritti")
     */
    public function uploadIscrittiAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($id);

        $form = $this->createFormBuilder(null)
                ->add('file_iscritti', 'file')
                ->getForm();

        $form->bindRequest($this->getRequest());

        if ($form->isValid()) {
            if (!($form['file_iscritti']->getData() === NULL)) {
                $fileIscritti = date('YmdHis') . '.csv';
                $dir = $_SERVER['DOCUMENT_ROOT'] . "/resource/csv/" . $id;
                @mkdir($dir, 0775);
                $nomeFileCompleto = $dir . '/' . $fileIscritti;
                $form['file_iscritti']->getData()->move($dir, $fileIscritti);

                // Controllo se c'è il file
                if (file_exists($nomeFileCompleto)) {
                    if ($file = file($nomeFileCompleto)) {
                        foreach ($file as $riga) {

                            $riga = explode(';', $riga);
                            $iscritti = new Iscritti();
                            $iscritti->setNome($riga[0]);
                            $iscritti->setCognome($riga[1]);
                            $iscritti->setCodiceFiscale($riga[2]);
                            $iscritti->setTipologiaIscritto($riga[3]);
                            $iscritti->setAccreditamento($accreditamento);
                            $em->persist($iscritti);
                        }
                        $em->flush();
                    } else {
                        throw new \Exception("Non riesco ad aprire il file");
                    }
                    // Lo apro ...
                    // Carico nell'entità
                } else {
                    throw new \Exception("Il File {$nomeFileCompleto} non esiste");
                }
            }
        }

        $this->get('session')->setFlash('notice', 'Iscritti caricati correttamente');

        return $this->redirect($this->generateUrl('carica_iscritti', array('id' => $id)));
    }

    /**
     * Finds and displays a Accreditamento entity.
     *
     * @Route("/{id}/show", name="accreditamento_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accreditamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    /**
     * Displays a form to create a new Accreditamento entity.
     *
     * @Route("/new/{congresso_id}", name="accreditamento_new")
     * @Template()
     */
    public function newAction($congresso_id) {
//ricevo id dalla rotta e mi carico il congresso
        $em = $this->getDoctrine()->getEntityManager();
        $congresso = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->find($congresso_id);


        $accreditamento = new Accreditamento();

//In questa riga 
        $accreditamento->setCongresso($congresso);

        $form = $this->createForm(new AccreditamentoType(), $accreditamento);

        return array(
            'entity' => $accreditamento,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Accreditamento entity.
     *
     * @Route("/create", name="accreditamento_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Accreditamento:new.html.twig")
     */
    public function createAction() {
        $entity = new Accreditamento();
        $request = $this->getRequest();
        $form = $this->createForm(new AccreditamentoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();


            // upload certificato_ecm
            if (!($form['certificato_ecm']->getData() === NULL)) {
                $extension = $form['certificato_ecm']->getData()->guessExtension();
                if (!$extension) {
                    // l'estensione non può essere indovinata
                    $extension = 'bin';
                }
                //cambiare
                $certificato = $entity->getNumeroAccreditamento() . '.' . $extension;
                $dir = $_SERVER['DOCUMENT_ROOT'] . "/resource/img/" . $entity->getCongresso()->getId();
                @mkdir($dir, 0775);

                $form['certificato_ecm']->getData()->move($dir, $certificato);
                $entity->setCertificatoEcm($certificato);
            }


            $em->persist($entity);
            $em->flush();

// Imposto il flash message
            $this->get('session')->setFlash('notice', 'Accreditamento creato con successo');

            return $this->redirect($this->generateUrl('accreditamento_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Accreditamento entity.
     *
     * @Route("/{id}/edit", name="accreditamento_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accreditamento entity.');
        }

        $editForm = $this->createForm(new AccreditamentoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Accreditamento entity.
     *
     * @Route("/{id}/update", name="accreditamento_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Accreditamento:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Accreditamento entity.');
        }

        $editForm = $this->createForm(new AccreditamentoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {

            // upload certificato_ecm
            if (!($editForm['certificato_ecm']->getData() === NULL)) {
                $extension = $editForm['certificato_ecm']->getData()->guessExtension();
                if (!$extension) {
                    // l'estensione non può essere indovinata
                    $extension = 'bin';
                }
                //cambiare
                $certificato = $entity->getNumeroAccreditamento() . '.' . $extension;
                $dir = $_SERVER['DOCUMENT_ROOT'] . "/resource/img/" . $entity->getCongresso()->getId();
                @mkdir($dir, 0775);
                $editForm['certificato_ecm']->getData()->move($dir, $certificato);
                $entity->setCertificatoEcm($certificato);
            }


            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('accreditamento_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Accreditamento entity.
     *
     * @Route("/{id}/delete", name="accreditamento_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Accreditamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('accreditamento'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    /**
     * Questo metodo crea il form per un questionario a partire dal suo accretiamento.
     * 
     * @param \Accreditamenti\CongressiBundle\Entity\Accreditamento $accreditamento
     * @return form
     * @throws type
     */
    private function createQuestionarioForm(Accreditamento $accreditamento) {

        $entityManager = $this->getDoctrine()
                ->getEntityManager();

        $questionario = $accreditamento->getQuestionarioEcm();

        if (!$questionario[0]) {
            throw $this->createNotFoundException('Unable to find QuestionarioEcm entity');
        }

        $domande = $entityManager->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->findDomandeDelQuestionario($questionario[0]);

        $formBuilder = $this->createFormBuilder();

        $arrayDiDomande = array();

        /* Carico tutte quante le domande */
        /**
         * Nota: Doctrine2 non supporta l'order by rand quindi devo per forza
         * inventarmi un barbatrucco. La mia idea è quella di:
         * 
         *  - caricare tutti gli id delle domande in un array
         *  - disordinare l'array
         *  - iterare per tutto l'array ricaricando ogni volta le domande
         * 
         * PRO:
         *  funziona
         * 
         * CONTRO:
         *  la pagina fa molte query
         * 
         * RI-CONTRO:
         *  viene caricata una tantum quindi non incide sulle performance
         *  dell'applicazione.
         */
        foreach ($domande as $domanda) {
            $arrayDiDomande[] .= $domanda->getId();
        }

        /* Modifico l'ordine dell'array */
        shuffle($arrayDiDomande);

        /* Costruisco il form con domande ordinate in modo randomizzato */
        foreach ($arrayDiDomande as $domanda) {

            $domanda = $entityManager
                    ->getRepository('AccreditamentiCongressiBundle:Domanda')
                    ->find((int) $domanda);

            $formBuilder->add("domanda_" . ($domanda->getId()) . "", 'entity', array(
                'label' => $domanda->getDescrizione(),
                'class' => 'AccreditamentiCongressiBundle:Risposta',
                'multiple' => false,
                'expanded' => true,
                'query_builder' => function(RispostaRepository $risposta) use ($domanda) {

                    $ordinamento = rand(0, 1) == 0 ? 'ASC' : 'DESC';

                    $elencoRisposte = $risposta->createQueryBuilder('r')
                            ->where('r.domanda=:domanda')
                            ->setParameter('domanda', $domanda)
                            ->orderBy('r.id', $ordinamento);

                    return $elencoRisposte;
                },
            ));
        }


        return $formBuilder->getForm()
                        ->createView();
    }

    /**
     * Creates a new QuestionarioEcm entity.
     *
     * 
     * @Route("/{accreditamento_id}/{anagrafica_id}/controlla/questionario/ecm", name="controlla_questionario_ecm")
     */
    public function controllaQuestionarioEcmAction($accreditamento_id, $anagrafica_id) {

        $entityManager = $this->getDoctrine()
                ->getEntityManager();

        $accreditamento = $entityManager
                ->getRepository('AccreditamentiCongressiBundle:Accreditamento')
                ->find($accreditamento_id);

        $questionario = $accreditamento
                ->getQuestionarioEcm();

        $domande = $entityManager
                ->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->findDomandeDelQuestionario($questionario[0]);

        foreach ($domande as $domanda) {

            if (!isset($_POST['form']['domanda_' . $domanda->getId()])) {
                return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaEcmError.html.twig');
//                return $this->redirect($this->generateUrl('compila_ecm', array(
//                                    'accreditamento_id' => $accreditamento_id,
//                                    'anagrafica_id' => $anagrafica_id
//                                )));
            }

            $risposte = $domanda->getRisposta();
            $idRispostaGiusta = null;
            foreach ($risposte as $risposta) {
                if ($risposta->getVero() === true)
                    $idRispostaGiusta = $risposta->getId();
            }



            $idRispostaRicevuta = $_POST['form']['domanda_' . $domanda->getId()];

            // echo "Domanda " . $domanda->getId() . " ha come risposta giusta risposta " . $idRispostaGiusta . " ----- risposta Ricevuta: " . $idRispostaRicevuta . "<br>";

            $risposteUtenti = new \Accreditamenti\CongressiBundle\Entity\RisposteUtentiQuestionarioEcm;
            $risposteUtenti->setAnagraficaId($anagrafica_id);
            $risposteUtenti->setRispostaId($idRispostaRicevuta);
            $entityManager->persist($risposteUtenti);
        }
        //effettuo salvataggio risposte ecm 
        $entityManager->flush();

        //faccio un redirect su compila_valutazione (view che conterrà il questionario di valutazione)
        return $this->redirect($this->generateUrl('compila_valutazione', array(
                            'accreditamento_id' => $accreditamento_id,
                            'anagrafica_id' => $anagrafica_id
                        )));
    }

    /**
     * 
     * Pagina dove compilo questionario di valutazione.
     *
     * @Route("/{accreditamento_id}/{anagrafica_id}/compila/valutazione", name="compila_valutazione")
     * @Template()
     */
    public function compilaValutazioneAction($accreditamento_id, $anagrafica_id) {

        $em = $this->getDoctrine()->getEntityManager();



        //##################### INIZIO ###################################
        //controllo se già ha compilato il questionario di valutazione, se si
        //ridirigo l'utente direttamente alla pagina di stampa
        $query = $em->createQuery(
                        'SELECT a.anagrafica_id FROM AccreditamentiCongressiBundle:RisposteUtentiQuestionarioValutazione a 
                         WHERE a.anagrafica_id = :id'
                )->setParameter('id', $anagrafica_id);

        $risposteEcm = $query->getResult();
        //  die($risposteEcm[0]['anagrafica_id']);
        if (isset($risposteEcm[0]['anagrafica_id'])) {

            // aggiungere nome e cognome
            $this->get('session')->setFlash('notice', 'Ben tornato continua a compilare il questionario!');
            return $this->redirect($this->generateUrl('certificato', array(
                                'accreditamento_id' => $accreditamento_id,
                                'anagrafica_id' => $anagrafica_id,
                            )));
        }
        //######################## fine ################################


        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);
        $form = $this->createFormBuilder(null)
                ->add('rilevanza_degli_argomenti', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'Non rilevante' => 'Non rilevante',
                        'Poco rilevante' => 'Poco rilevante',
                        'Abbastanza rilevante' => 'Abbastanza rilevante',
                        'Rilevante' => 'Rilevante',
                        'Molto rilevant' => 'Molto rilevante',
                        )))
                ->add('qualita_educativa', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'Scarsa' => 'Scarsa',
                        'Mediocre' => 'Mediocre',
                        'Soddisfacente' => 'Soddisfacente',
                        'Buona' => 'Buona',
                        'Eccellentet' => 'Eccellente',
                        )))
                ->add('utilita_evento', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'Insufficiente' => 'Insufficiente',
                        'Parzialmente utile' => 'Parzialmente utile',
                        'Abbastanza utile' => 'Abbastanza utile',
                        'Utile' => 'Utile',
                        'Molto utile' => 'Molto utile',
                        )))
                ->add('influenza_sponsor', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'No' => 'No',
                        'Parzialmente' => 'Parzialmente',
                        'Abbastanza' => 'Abbastanza',
                        'Si' => 'Si',
                        'Molto e rilevante' => 'Molto e rilevante',
                        )))
                ->add('esempio_influenza_sponsor', 'text', array('required' => false))
                ->getForm()
                ->createView();

        return array(
            'form' => $form,
            'accreditamento' => $accreditamento,
            'accreditamento_id' => $accreditamento_id,
            'anagrafica_id' => $anagrafica_id,);
    }

    /**
     * Salvo il questionario di valutazione.
     *
     * @Route("/{accreditamento_id}/{anagrafica_id}/save/valutazione/", name="valutazione_save")
     * @Template()
     */
    public function saveValutazioneAction($accreditamento_id, $anagrafica_id) {
        $entityManager = $this->getDoctrine()->getEntityManager();
        $form = $this->createFormBuilder(null)
                ->add('rilevanza_degli_argomenti', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'Non rilevante' => 'Non rilevante',
                        'Poco rilevante' => 'Poco rilevante',
                        'Abbastanza rilevante' => 'Abbastanza rilevante',
                        'Rilevante' => 'Rilevante',
                        'Molto rilevant' => 'Molto rilevante',
                        )))
                ->add('qualita_educativa', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'Scarsa' => 'Scarsa',
                        'Mediocre' => 'Mediocre',
                        'Soddisfacente' => 'Soddisfacente',
                        'Buona' => 'Buona',
                        'Eccellentet' => 'Eccellente',
                        )))
                ->add('utilita_evento', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'Insufficiente' => 'Insufficiente',
                        'Parzialmente utile' => 'Parzialmente utile',
                        'Abbastanza utile' => 'Abbastanza utile',
                        'Utile' => 'Utile',
                        'Molto utile' => 'Molto utile',
                        )))
                ->add('influenza_sponsor', 'choice', array(
                    'choices' => array(
                        '' => 'Selezionare dalla lista',
                        'No' => 'No',
                        'Parzialmente' => 'Parzialmente',
                        'Abbastanza' => 'Abbastanza',
                        'Si' => 'Si',
                        'Molto e rilevante' => 'Molto e rilevante',
                        )))
                ->add('esempio_influenza_sponsor', 'text', array('required' => false))
                ->getForm();

        $form->bindRequest($this->getRequest());
        $data = $form->getData();


        //controllo se utente ha compilato questionario valutazione
        if ($data['rilevanza_degli_argomenti'] == null || $data['qualita_educativa'] == null || $data['utilita_evento'] == null || $data['influenza_sponsor'] == null) {

            //$this->get('session')->setFlash('notice', 'Attenzione è obbligatorio ripondere tutte le domande!');
            return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaEcmError.html.twig');

            
//            return $this->redirect($this->generateUrl('compila_valutazione', array(
//                                'accreditamento_id' => $accreditamento_id,
//                                'anagrafica_id' => $anagrafica_id,
//                            )));
        }





        $risposteValutazione = new \Accreditamenti\CongressiBundle\Entity\RisposteUtentiQuestionarioValutazione;
        $risposteValutazione->setAnagraficaId($anagrafica_id);
        $risposteValutazione->setAccreditamentoId($accreditamento_id);
        $risposteValutazione->setRilevanzaDegliArgomenti($data['rilevanza_degli_argomenti']);
        $risposteValutazione->setQualitaEducativa($data['qualita_educativa']);
        $risposteValutazione->setUtilitaEvento($data['utilita_evento']);
        $risposteValutazione->setInfluenzaSponsor($data['influenza_sponsor']);
        $risposteValutazione->setEsempioInfluenzaSponsor($data['esempio_influenza_sponsor']);
        $entityManager->persist($risposteValutazione);
        $entityManager->flush();
        $entityManager->persist($risposteValutazione);

        //faccio un redirect su compila_valutazione (view che conterrà il questionario di valutazione)
        return $this->redirect($this->generateUrl('certificato', array(
                            'accreditamento_id' => $accreditamento_id,
                            'anagrafica_id' => $anagrafica_id
                        )));
    }

    /**
     * Creo certificato pdf.
     *
     * @Route("/{accreditamento_id}/{anagrafica_id}/certificato/", name="certificato")
     * @Template()
     */
    public function certificatoAction($accreditamento_id, $anagrafica_id) {

        $em = $this->getDoctrine()->getEntityManager();
        $anagrafica = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($anagrafica_id);
        if (!$anagrafica) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }







        return array(
            'anagrafica' => $anagrafica,
            'accreditamento_id' => $accreditamento_id,
            'anagrafica_id' => $anagrafica_id,);
    }

    /**
     * Creo certificato pdf.
     *
     * @Route("/{accreditamento_id}/{anagrafica_id}/crea/pdf/", name="pdf_create")
     * @Template()
     */
    public function creaPdfCertificatoAction($accreditamento_id, $anagrafica_id) {
        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);
        $anagrafica = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($anagrafica_id);
        //die($anagrafica->getNome());



        $certificato = $accreditamento->getCertificatoEcm();





        $dir = $_SERVER['DOCUMENT_ROOT'] . "/resource/img/" . $accreditamento->getCongresso()->getId();
        $certificato = $dir . "/" . $certificato;
        $html = $this->renderView('AccreditamentiCongressiBundle:Accreditamento:certificato_crea.pdf.twig', array(
            'anagrafica' => $anagrafica));
        //io_tcpdf will returns Response object
        return $this->get('io_tcpdf')
                        ->quick_pdf($html, $file = "html.pdf", $format = "S", $certificato);
    }

    /**
     * Cancella il certificato ecm
     *
     * @Route("/{id}/deletecertificato", name="accreditamento_delete_certificato")
     */
    public function removeCertificatoEcmAction($id) {

        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $this->getDoctrine()
                ->getRepository('AccreditamentiCongressiBundle:Accreditamento')
                ->find($id);

        if (!$accreditamento) {
            throw $this->createNotFoundException('Nessun prodotto trovato per l\'id ' . $id);
        }

        $dir = $_SERVER['DOCUMENT_ROOT'] . "/resource/img/" . $accreditamento->getCongresso()->getId();
        unlink($dir . '/' . $accreditamento->getCertificatoEcm());
        $accreditamento->setCertificatoEcm(null);

        $em->persist($accreditamento);
        $em->flush();

        return $this->redirect($this->generateUrl('accreditamento_edit', array('id' => $id)));
    }

}
