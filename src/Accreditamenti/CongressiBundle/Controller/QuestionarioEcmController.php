<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\QuestionarioEcm;
use Accreditamenti\CongressiBundle\Form\QuestionarioEcmType;

/**
 * QuestionarioEcm controller.
 *
 * @Route("/questionarioecm")
 */
class QuestionarioEcmController extends Controller {

    /**
     * Lists all QuestionarioEcm entities.
     *
     * @Route("/", name="questionarioecm")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioEcm')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a QuestionarioEcm entity.
     *
     * @Route("/{id}/show", name="questionarioecm_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $questionario = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioEcm')->find($id);
        
        $domande = $em->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->findDomandeDelQuestionario($questionario);

        if (!$questionario) {   
            throw $this->createNotFoundException('Unable to find QuestionarioEcm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $questionario,
            'domande' => $domande,
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    
 

    /**
     * Displays a form to create a new QuestionarioEcm entity.
     *
     * @Route("/new/{accreditamento_id}", name="questionarioecm_new")
     * @Template()
     */
    public function newAction($accreditamento_id) {

        //ricevo id dalla rotta e mi carico l'accreditamento
        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);


        $questionarioecm = new QuestionarioEcm();


        //In questa riga 
        $questionarioecm->setAccreditamento($accreditamento);


        $form = $this->createForm(new QuestionarioEcmType(), $questionarioecm);

        return array(
            'entity' => $questionarioecm,
            'form' => $form->createView()
        );


        /*
          $entity = new QuestionarioEcm();
          $form   = $this->createForm(new QuestionarioEcmType(), $entity);

          return array(
          'entity' => $entity,
          'form'   => $form->createView()
          );
         */
    }

    /**
     * Creates a new QuestionarioEcm entity.
     *
     * @Route("/create", name="questionarioecm_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:QuestionarioEcm:new.html.twig")
     */
    public function createAction() {
        $entity = new QuestionarioEcm();
        $request = $this->getRequest();
        $form = $this->createForm(new QuestionarioEcmType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // Imposto il flash message
            $this->get('session')->setFlash('notice', 'Questionario creato con successo');


            return $this->redirect($this->generateUrl('questionarioecm_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing QuestionarioEcm entity.
     *
     * @Route("/{id}/edit", name="questionarioecm_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioEcm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuestionarioEcm entity.');
        }

        $editForm = $this->createForm(new QuestionarioEcmType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing QuestionarioEcm entity.
     *
     * @Route("/{id}/update", name="questionarioecm_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:QuestionarioEcm:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioEcm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuestionarioEcm entity.');
        }

        $editForm = $this->createForm(new QuestionarioEcmType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('questionarioecm_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a QuestionarioEcm entity.
     *
     * @Route("/{id}/delete", name="questionarioecm_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioEcm')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find QuestionarioEcm entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionarioecm'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
