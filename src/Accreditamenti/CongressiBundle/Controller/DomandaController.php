<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Domanda;
use Accreditamenti\CongressiBundle\Form\DomandaType;
use Accreditamenti\CongressiBundle\Form\DomandaCustomerSatisfactionType;
use Accreditamenti\CongressiBundle\Form\DomandaValutazioneType;

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
     * @Route("/new/ecm/{questionarioecm_id}", name="domanda_ecm_new")
     * @Template()
     */
    public function newEcmAction($questionarioecm_id) {

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

    //cosa
    /**
     * Displays a form to create a new Domanda entity.
     *
     * @Route("/new/customer/satisfaction/{questionario_id}", name="domanda_customer_satisfaction_new")
     * @Template()
     */
    public function newCustomerSatisfactionAction($questionario_id) {

        //ricevo id dalla rotta e mi carico il questionario
        $em = $this->getDoctrine()->getEntityManager();

        $questionarioCustomerSatisfaction = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction')
                ->find($questionario_id);

        $domanda = new Domanda();

        $domanda->setQuestionarioCustomerSatisfaction($questionarioCustomerSatisfaction);

        $form = $this->createForm(new DomandaCustomerSatisfactionType(), $domanda);

        return array(
            'questionario_cs_id' => $questionario_id,
            'entity' => $domanda,
            'form' => $form->createView()
        );
    }

    //cosa
    /**
     * Displays a form to create a new Domanda entity.
     *
     * @Route("/new/valutazione/{questionario_valutazione_id}", name="domanda_valutazione_new")
     * @Template()
     */
    public function newValutazioneAction($questionario_valutazione_id) {

        //ricevo id dalla rotta e mi carico il questionario
        $em = $this->getDoctrine()->getEntityManager();

        $questionarioValutazione = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioValutazione')
                ->find($questionario_valutazione_id);

        $domanda = new Domanda();

        $domanda->setQuestionarioValutazione($questionarioValutazione);

        $form = $this->createForm(new DomandaValutazioneType(), $domanda);

        return array(
            'questionario_valutazione_id' => $questionario_valutazione_id,
            'entity' => $domanda,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Domanda entity.
     *
     * @Route("/create/ecm", name="domanda_ecm_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:new.html.twig")
     */
    public function createAction() {
        $domanda = new Domanda();
        $request = $this->getRequest();
        $form = $this->createForm(new DomandaType(), $domanda);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($domanda);
            $em->flush();

            return $this->redirect($this->generateUrl('questionarioecm_show', array('id' => $domanda->getQuestionarioecm()->getId())));
        }

        return array(
            'entity' => $domanda,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Domanda entity.
     *
     * @Route("/create/customer/satisfaction", name="domanda_customer_satisfaction_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:newCustomerSatisfacion.html.twig")
     */
    public function createCustomerSatisfactionAction() {
        $domanda = new Domanda();
        $request = $this->getRequest();
        $form = $this->createForm(new DomandaCustomerSatisfactionType(), $domanda);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($domanda);
            $em->flush();

            return $this->redirect($this->generateUrl('questionario_customer_satisfaction_show', array('id' => $domanda->getQuestionarioCustomerSatisfaction()->getId())));
        }

        return array(
            'entity' => $domanda,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Domanda entity.
     *
     * @Route("/create/valutazione", name="domanda_valutazione_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:newValutazione.html.twig")
     */
    public function createValutazioneAction() {
        $domanda = new Domanda();
        $request = $this->getRequest();
        $form = $this->createForm(new DomandaValutazioneType(), $domanda);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($domanda);
            $em->flush();

            return $this->redirect($this->generateUrl('questionario_valutazione_show', array('id' => $domanda->getQuestionarioValutazione()->getId())));
        }

        return array(
            'entity' => $domanda,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Domanda entity.
     *
     * @Route("/{id}/edit/ecm", name="domanda_ecm_edit")
     * @Template()
     */
    public function editEcmAction($id) {
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
     * Displays a form to edit an existing Domanda entity.
     *
     * @Route("/{id}/edit/customer/satisfaction", name="domanda_customer_satisfaction_edit")
     * @Template()
     */
    public function editCustomerSatisfactionAction($id) {
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
     * @Route("/{id}/update/ecm", name="domanda_ecm_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:editEcm.html.twig")
     */
    public function updateEcmAction($id) {
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

            $id = $entity->getQuestionarioecm()->getId();

            return $this->redirect($this->generateUrl('questionarioecm_show', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Domanda entity.
     *
     * @Route("/{id}/update/customer/satisfation", name="domanda_customer_satisfaction_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Domanda:edit.html.twig")
     */
    public function updateCustomerSatisfactionAction($id) {
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

            $id = $entity->getQuestionarioCustomerSatisfaction()->getId();

            return $this->redirect($this->generateUrl('questionario_customer_satisfaction_show', array('id' => $id)));
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
    public function deleteEcmAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $domanda = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->find($id);

            if (!$domanda) {
                throw $this->createNotFoundException('Unable to find Domanda entity.');
            }

            $em->remove($domanda);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionarioecm_show', array(
                            'id' => $domanda->getQuestionarioEcm()->getId())));
    }

    /**
     * Deletes a Domanda entity.
     *
     * @Route("/{id}/delete/customer/satisfaction", name="domanda_customer_satisfaction_delete")
     * @Method("post")
     */
    public function deleteCustomerSatisfactionAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $domanda = $em->getRepository('AccreditamentiCongressiBundle:Domanda')->find($id);

            if (!$domanda) {
                throw $this->createNotFoundException('Unable to find Domanda entity.');
            }

            $em->remove($domanda);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionario_customer_satisfaction_show', array(
                            'id' => $domanda->getQuestionarioCustomerSatisfaction()->getId())));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
