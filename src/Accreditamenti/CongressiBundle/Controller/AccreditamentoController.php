<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Form\AccreditamentoType;

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
