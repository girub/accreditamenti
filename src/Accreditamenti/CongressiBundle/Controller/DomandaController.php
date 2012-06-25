<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Domanda;
use Accreditamenti\CongressiBundle\Form\DomandaType;

/**
 * Domanda controller.
 *
 * @Route("/domanda")
 */
class DomandaController extends Controller {

    /**
     * Lists all Domanda entities.
     *
     * @Route("/", name="domanda")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Domanda entity.
     *
     * @Route("/{id}/show", name="domanda_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Domanda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    //cosa
    /**
     * Displays a form to create a new Domanda entity.
     *
     * @Route("/new/{questionarioecm_id}", name="domanda_new")
     * @Template()
     */
    public function newAction($questionarioecm_id) {

        //ricevo id dalla rotta e mi carico il questionario
        $em = $this->getDoctrine()->getEntityManager();

        $questionarioEcm = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioEcm')
                ->find($questionarioecm_id);

        $domanda = new Domanda();

        $domanda->setQuestionarioEcm($questionarioEcm);

        $form = $this->createForm(new DomandaType(), $domanda);

        return array(
            'questionarioecm_id' => $questionarioecm_id,
            'entity' => $domanda,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Domanda entity.
     *
     * @Route("/create", name="domanda_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:new.html.twig")
     */
    public function createAction() {
        $entity = new Domanda();
        $request = $this->getRequest();
        $form = $this->createForm(new DomandaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('domanda_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Domanda entity.
     *
     * @Route("/{id}/edit", name="domanda_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Domanda entity.');
        }

        $editForm = $this->createForm(new DomandaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Domanda entity.
     *
     * @Route("/{id}/update", name="domanda_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Domanda entity.');
        }

        $editForm = $this->createForm(new DomandaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('domanda_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Domanda entity.
     *
     * @Route("/{id}/delete", name="domanda_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Domanda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('domanda'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
