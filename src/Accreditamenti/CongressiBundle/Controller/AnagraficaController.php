<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Anagrafica;
use Accreditamenti\CongressiBundle\Form\AnagraficaType;

/**
 * Anagrafica controller.
 *
 * @Route("/anagrafica")
 */
class AnagraficaController extends Controller
{
    /**
     * Lists all Anagrafica entities.
     *
     * @Route("/", name="anagrafica")
     * @Template()
     */
    public function indexAction()
    {
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
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Anagrafica entity.
     *
     * @Route("/new", name="anagrafica_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Anagrafica();
        $form   = $this->createForm(new AnagraficaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Anagrafica entity.
     *
     * @Route("/create", name="anagrafica_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Anagrafica:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Anagrafica();
        $request = $this->getRequest();
        $form    = $this->createForm(new AnagraficaType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

             return $this->redirect($this->generateUrl('anagrafica_show', array('id' => $entity->getId())));
             
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Anagrafica entity.
     *
     * @Route("/{id}/edit", name="anagrafica_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $editForm = $this->createForm(new AnagraficaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Anagrafica entity.
     *
     * @Route("/{id}/update", name="anagrafica_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Anagrafica:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Anagrafica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Anagrafica entity.');
        }

        $editForm   = $this->createForm(new AnagraficaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anagrafica_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Anagrafica entity.
     *
     * @Route("/{id}/delete", name="anagrafica_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
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

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
