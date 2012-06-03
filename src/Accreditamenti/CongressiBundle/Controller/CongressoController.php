<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Congresso;
use Accreditamenti\CongressiBundle\Form\CongressoType;

/**
 * Congresso controller.
 *
 * @Route("/congresso")
 */
class CongressoController extends Controller {

    /**
     * Lists all Congresso entities.
     * 
     * @Route("/", name="congresso")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Lists all Congresso entities.
     * 
     * @Route("/mostraTutti", name="congresso_mostra_tutti")
     * @Template()
     */
    public function mostraTuttiAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Congresso entity.
     *
     * @Route("/mostra/{id}", name="congresso_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Congresso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    /**
     * Displays a form to create a new Congresso entity.
     *
     * @Route("/new", name="congresso_new")
     * @Template()
     */
    public function newAction() {
        $entity = new Congresso();
        $form = $this->createForm(new CongressoType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Congresso entity.
     *
     * @Route("/create", name="congresso_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Congresso:new.html.twig")
     */
    public function createAction() {
        $entity = new Congresso();
        $request = $this->getRequest();
        $form = $this->createForm(new CongressoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {

            // Salvo i dati nel db
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // Imposto il flash message
            $this->get('session')->setFlash('notice', 'Congresso creato con successo');

            // Renderizzo ...
            return $this->redirect($this->generateUrl('congresso_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Congresso entity.
     *
     * @Route("/{id}/edit", name="congresso_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Congresso entity.');
        }

        $editForm = $this->createForm(new CongressoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Congresso entity.
     *
     * @Route("/{id}/update", name="congresso_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Congresso:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Congresso entity.');
        }

        $editForm = $this->createForm(new CongressoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('congresso_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Congresso entity.
     *
     * @Route("/{id}/delete", name="congresso_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Congresso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('congresso'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
