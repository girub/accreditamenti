<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Form\AccreditamentoType;
use Accreditamenti\CongressiBundle\Entity\Iscritti;

/**
 * Accreditamento controller.
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

        $entities = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->findAll();

        return array('entities' => $entities);
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
     * @Route("/{id}/login/iscritto", name="login_iscritto")
     */
    public function loginIscrittoAction($id) {

        $form = $this->createFormBuilder(null)
                ->add('codice_fiscale', 'text')
                ->getForm();

        $form->bindRequest($this->getRequest());

        if ($form->isValid()) {

            $codice_fiscale = $form['codice_fiscale']->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery(
                            'SELECT p.cognome, p.nome FROM AccreditamentiCongressiBundle:Iscritti p 
                         WHERE p.codice_fiscale = :codice_fiscale and p.accreditamento_id = :id'
                    )->setParameter('codice_fiscale', $codice_fiscale)
                    ->setParameter('id', $id);
            $iscritto = $query->getResult();

            if (!isset($iscritto[0]['nome'])) {
                $this->get('session')->setFlash('notice', 'Codice_fiscale non presente per questo accreditamento');
                return $this->redirect($this->generateUrl('form_login_iscritto', array('id' => $id)));
            }

            $user = $this->container->get('security.context')->getToken()->getUser();
            $user->addRole('ROLE_ISCRITTO');
        }

        $this->get('session')->setFlash('notice', 'Benvenuto ' . $iscritto[0]['nome'] . ' ' . $iscritto[0]['cognome'] . ' Login effettuato con successo');
        return $this->redirect($this->generateUrl('compila_anagrafica', array('id' => $id)));
    }

    /**
     * Pagina dove iscritto una volta entrato compila angrafica.
     *
     * @Route("/{id}/compila/anagrafica", name="compila_anagrafica")
     * @Template()
     */
    public function compilaAnagraficaAction($id) {

        return array();
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

}
