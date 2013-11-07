<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Anagrafica;
use Accreditamenti\CongressiBundle\Form\AnagraficaType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Anagrafica controller.
 *
 * @Route("/anagrafica")
 */
class AnagraficaController extends Controller {

    /**
     * Lists all Anagrafica entities.
     *
     * @Route("/", name="anagrafica")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Anagrafica entity.
     *
     * @Route("/{id}/show", name="anagrafica_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    /**
     * Displays a form to create a new Anagrafica entity.
     *
     * @Route("/new", name="anagrafica_new")
     * @Template()
     */
    public function newAction() {
        $entity = new Anagrafica();
        $form = $this->createForm(new AnagraficaType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    //"AccreditamentiCongressiBundle:Anagrafica:new.html.twig"

    /**
     * Creates a new Anagrafica entity.
     *
     * @Route("/create/{accreditamento_id}", name="anagrafica_create")
     * @Method("post")
     * @Template()
     */
    public function createAction($accreditamento_id) {
        $anagrafica = new Anagrafica();
        $request = $this->getRequest();
        $form = $this->createForm(new AnagraficaType(), $anagrafica);

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);
            $em = $this->getDoctrine()->getEntityManager();
            //controllo se sto cercando di inserire un cf già presente nel sistema
            $codice_fiscale = $form['codice_fiscale']->getData();
            if ($this->controlloCodiceFiscale($codice_fiscale)) {
                $this->get('session')->setFlash('notice', "Attenzione il codice fiscale:" . $codice_fiscale . " è già presente nel sistema");
                // qui devo svuotare il campo codice fiscale
                return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaAnagrafica.html.twig', array(
                            'entity' => $anagrafica,
                            'accreditamento_id' => $accreditamento_id,
                            'form' => $form->createView()
                ));
            }

            //controllo se il codice fiscale inserito è valido
            if (!$this->codiceFiscaleCheck($codice_fiscale)) {
                $this->get('session')->setFlash('notice', "Attenzione il codice fiscale:" . $codice_fiscale . " non è valido!");
                // qui devo svuotare il campo codice fiscale
                return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaAnagrafica.html.twig', array(
                            'entity' => $anagrafica,
                            'accreditamento_id' => $accreditamento_id,
                            'form' => $form->createView()
                ));
            }


            // controllo se dichiaro si
            //AUTOCERTIFICAZIONE
            //(ART. 46 D.P.R. 445 del 28.12.2000)
            //a conoscenza di quanto prescritto dall’art. 76 del D.P.R. 445 del 28.12.2000 sulla responsabilità penale cui può andare incontro in caso di dichiarazioni mendaci, sotto la propria personale responsabilità
            //il campo siccessivo "inviato da" deve essere pieno
            $dichiara_sponsor_azienda_flag = $form['dichiara_sponsor_azienda_flag']->getData();
            $dichiara_sponsor_azienda  = $form['dichiara_sponsor_azienda']->getData();

           // exit($dichiara_sponsor_azienda_flag . "--" . $dichiara_sponsor_azienda);
            if($dichiara_sponsor_azienda_flag == "Si" and !isset($dichiara_sponsor_azienda)){

               $this->get('session')->setFlash('notice', 'Attenzione: il campo "Di esserre stato inviato" è vuoto');



                return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaAnagrafica.html.twig', array(
                    'entity' => $anagrafica,
                    'accreditamento_id' => $accreditamento_id,
                    'form' => $form->createView()
                ));
            }












            // exit("FORM: " . $form->isValid());
            //exit($form['privacy']->getData());


            if ($form->isValid()) {
                $dataPrimoAccesso = \DateTime::createFromFormat('Y-m-d', date('Y-m-d'));
                $anagrafica->setDataPrimoAccesso($dataPrimoAccesso);
                $em->persist($anagrafica);
                $em->flush();

                return $this->redirect($this->generateUrl('compila_ecm', array(
                                    'anagrafica_id' => $anagrafica->getId(),
                                    'accreditamento_id' => $accreditamento_id,
                )));
            }
        }

        return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaAnagrafica.html.twig', array(
                    'entity' => $anagrafica,
                    'accreditamento_id' => $accreditamento_id,
                    'form' => $form->createView()
        ));
    }

    /*
      $anagrafica = new Anagrafica();
      $request = $this->getRequest();
      $form = $this->createForm(new AnagraficaType(), $anagrafica);

      $form->bindRequest($request);

      //cotrollo lato server dei dati compilati in anagrafica
      $data_nascita = $form['data_nascita']->getData();
      $luogo_nascita = $form['luogo_nascita']->getData();
      $ordine_numero = $form['ordine_numero']->getData();
      $ordine_citta = $form['ordine_citta']->getData();
      $indirizzo_via = $form['indirizzo_via']->getData();
      $indirizzo_numero_civico = $form['indirizzo_numero_civico']->getData();
      $indirizzo_cap = $form['indirizzo_cap']->getData();
      $indirizzo_citta = $form['indirizzo_citta']->getData();
      $indirizzo_provincia = $form['indirizzo_provincia']->getData();
      $telefono = $form['telefono']->getData();
      $email = $form['email']->getData();
      $informazioni_veritiere = $form['informazioni_veritiere']->getData();
      $privacy = $form['privacy']->getData();

      // In caso di campi lasciati vuoti (con Internet Explorer) faccio il render di
      // una pagina che mi fa tornare indietro con  history.go(-1)
      if ($data_nascita == null || $luogo_nascita == null || $ordine_numero == null || $ordine_citta == null ||
      $indirizzo_via == null || $indirizzo_numero_civico == null || $indirizzo_cap == null || $indirizzo_citta == null
      || $indirizzo_provincia == null || $telefono == null || $email == null || $privacy == null || $informazioni_veritiere==null) {

      return $this->render('AccreditamentiCongressiBundle:Accreditamento:compilaAnagraficaError.html.twig');

      }


      if ($form->isValid()) {
      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($anagrafica);
      $em->flush();

      return $this->redirect($this->generateUrl('compila_ecm', array(
      'anagrafica_id' => $anagrafica->getId(),
      'accreditamento_id' => $accreditamento_id,
      )));
      }

      return array(
      'entity' => $anagrafica,
      'form' => $form->createView()
      );

     */
    //} fine

    /**
     * Displays a form to edit an existing Anagrafica entity.
     *
     * @Route("/{id}/edit/{accreditamento_id}", name="anagrafica_edit")
     * @Template()
     */
    public function editAction($accreditamento_id, $id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $editForm = $this->createForm(new AnagraficaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'accreditamento_id' => $accreditamento_id,
            'entity' => $entity,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Anagrafica entity.
     *
     * @Route("/{id}/update/{accreditamento_id}", name="anagrafica_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Anagrafica:edit.html.twig")
     */
    public function updateAction($accreditamento_id, $id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $editForm = $this->createForm(new AnagraficaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anagrafica_edit', array(
                                'id' => $id,
                                'accreditamento_id' => $accreditamento_id,
            )));
        }

        return array(
            'entity' => $entity,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Anagrafica entity.
     *
     * @Route("/{id}/delete", name="anagrafica_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Anagrafica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anagrafica'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    public function controlloCodiceFiscale($codiceFiscale) {
        $em = $this->getDoctrine()->getEntityManager();
        $verifica = $em->getRepository("Accreditamenti\CongressiBundle\Entity\Anagrafica")->ricercaCF($codiceFiscale);
        return $verifica;
    }

    public function codiceFiscaleCheck($cf) {
         if ($cf == '')
            return false;
        if (strlen($cf) != 16)
            return false;
        $cf = strtoupper($cf);
        if (!preg_match("/[A-Z0-9]+$/", $cf))
            return false;
        $s = 0;
        for ($i = 1; $i <= 13; $i+=2) {
            $c = $cf[$i];
            if ('0' <= $c and $c <= '9')
                $s+=ord($c) - ord('0');
            else
                $s+=ord($c) - ord('A');
        }
        for ($i = 0; $i <= 14; $i+=2) {
            $c = $cf[$i];
            switch ($c) {
                case '0': $s += 1;
                    break;
                case '1': $s += 0;
                    break;
                case '2': $s += 5;
                    break;
                case '3': $s += 7;
                    break;
                case '4': $s += 9;
                    break;
                case '5': $s += 13;
                    break;
                case '6': $s += 15;
                    break;
                case '7': $s += 17;
                    break;
                case '8': $s += 19;
                    break;
                case '9': $s += 21;
                    break;
                case 'A': $s += 1;
                    break;
                case 'B': $s += 0;
                    break;
                case 'C': $s += 5;
                    break;
                case 'D': $s += 7;
                    break;
                case 'E': $s += 9;
                    break;
                case 'F': $s += 13;
                    break;
                case 'G': $s += 15;
                    break;
                case 'H': $s += 17;
                    break;
                case 'I': $s += 19;
                    break;
                case 'J': $s += 21;
                    break;
                case 'K': $s += 2;
                    break;
                case 'L': $s += 4;
                    break;
                case 'M': $s += 18;
                    break;
                case 'N': $s += 20;
                    break;
                case 'O': $s += 11;
                    break;
                case 'P': $s += 3;
                    break;
                case 'Q': $s += 6;
                    break;
                case 'R': $s += 8;
                    break;
                case 'S': $s += 12;
                    break;
                case 'T': $s += 14;
                    break;
                case 'U': $s += 16;
                    break;
                case 'V': $s += 10;
                    break;
                case 'W': $s += 22;
                    break;
                case 'X': $s += 25;
                    break;
                case 'Y': $s += 24;
                    break;
                case 'Z': $s += 23;
                    break;
            }
        }
        if (chr($s % 26 + ord('A')) != $cf[15])
            return false;
        return true;
    }

}
