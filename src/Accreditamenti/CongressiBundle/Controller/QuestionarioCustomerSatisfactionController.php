<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction;
use Accreditamenti\CongressiBundle\Form\QuestionarioCustomerSatisfactionType;

/**
 * QuestionarioEcm controller.
 *
 * @Route("/questionario/customer/satisfaction")
 */
class QuestionarioCustomerSatisfactionController extends Controller {

    /**
     * Lists all QuestionarioEcm entities.
     *
     * @Route("/", name="questionario_customer_satisfaction")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/{id}/show", name="questionario_customer_satisfaction_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $questionario = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction')->find($id);

        $domande = $em->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->findDomandeDelQuestionario($questionario);

        if (!$questionario) {
            throw $this->createNotFoundException('Unable to find QuestionarioCustomerSatisfaction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $questionario,
            'domande' => $domande,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/new/{accreditamento_id}", name="questionario_customer_satisfaction_new")
     * @Template()
     */
    public function newAction($accreditamento_id) {

        //ricevo id dalla rotta e mi carico l'accreditamento
        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);

        $questionario = new QuestionarioCustomerSatisfaction();
        $questionario->setAccreditamento($accreditamento);
        $QuestionarioType = $QuestionarioType = new QuestionarioCustomerSatisfactionType();
        $form = $this->createForm($QuestionarioType, $questionario);

        return array(
            'entity' => $questionario,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/create", name="questionario_customer_satisfaction_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction:new.html.twig")
     */
    public function createAction() {
        $entity = new QuestionarioCustomerSatisfaction();
        $request = $this->getRequest();

        $form = $this->createForm(new QuestionarioCustomerSatisfactionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // Imposto il flash message
            $this->get('session')->setFlash('notice', 'Questionario creato con successo');


            return $this->redirect($this->generateUrl('questionario_customer_satisfaction_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/{id}/edit", name="questionario_customer_satisfaction_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuestionarioCustomerSatisfaction entity.');
        }

        $editForm = $this->createForm(new QuestionarioCustomerSatisfactionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/{id}/update", name="questionario_customer_satisfaction_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuestionarioCustomerSatisfaction entity.');
        }

        $editForm = $this->createForm(new QuestionarioCustomerSatisfactionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('questionario_customer_satisfaction_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/{id}/delete", name="questionario_customer_satisfaction_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioCustomerSatisfaction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find QuestionarioCustomerSatisfaction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionario_customer_satisfaction'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
