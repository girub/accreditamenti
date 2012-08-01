<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione;
use Accreditamenti\CongressiBundle\Form\QuestionarioValutazioneType;

/**
 * Questionario Valutazione controller.
 *
 * @Route("/questionario/valutazione")
 */
class QuestionarioValutazioneController extends Controller {

    /**
     * Lists all Questionario valutazinoe entities.
     *
     * @Route("/", name="questionario_customer_satisfaction")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioValutazione')->findAll();
        return array('entities' => $entities);
    }

    /**
     * Finds and displays a QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/{id}/show", name="questionario_valutazione_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $questionario = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioValutazione')->find($id);

        $domande = $em->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->findDomandeDelQuestionarioValutazione($questionario);

        if (!$questionario) {
            throw $this->createNotFoundException('Unable to find QuestionarioValutazione entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $questionario,
            'domande' => $domande,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new QuestionarioValutazione entity.
     *
     * @Route("/new/valutazione/{accreditamento_id}", name="questionario_valutazione_new")
     * @Template()
     */
    public function newAction($accreditamento_id) {

        //ricevo id dalla rotta e mi carico l'accreditamento
        $em = $this->getDoctrine()->getEntityManager();
        $accreditamento = $em->getRepository('AccreditamentiCongressiBundle:Accreditamento')->find($accreditamento_id);

        $questionario = new QuestionarioValutazione();
        $questionario->setAccreditamento($accreditamento);
        $QuestionarioValutazioneType = new QuestionarioValutazioneType();
        $form = $this->createForm($QuestionarioValutazioneType, $questionario);

        return array(
            'entity' => $questionario,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/create/valutazione", name="questionario_valutazione_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:QuestionarioValutazione:new.html.twig")
     */
    public function createAction() {
        $entity = new QuestionarioValutazione();
        $request = $this->getRequest();

        $form = $this->createForm(new QuestionarioValutazioneType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // Imposto il flash message
            $this->get('session')->setFlash('notice', 'Questionario VAlutazione creato con successo');


            return $this->redirect($this->generateUrl('questionario_valutazione_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing QuestionarioCustomerSatisfaction entity.
     *
     * @Route("/{id}/edit/valutazione", name="questionario_valutazione_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioValutazione')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Questionario Valutazione entity.');
        }

        $editForm = $this->createForm(new QuestionarioValutazioneType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing QuestionarioQuestionarioValutazione entity.
     *
     * @Route("/{id}/update/valutazione", name="questionario_valutazione_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:QuestionarioValutazione:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioQuestionarioValutazione')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find QuestionarioQuestionarioValutazione entity.');
        }

        $editForm = $this->createForm(new QuestionarioQuestionarioValutazioneType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('questionario_valutazione_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a QuestionarioQuestionarioValutazione entity.
     *
     * @Route("/{id}/delete/valutazione", name="questionario_valutazione_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:QuestionarioValutazione')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find QuestionarioValutazione entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('questionario_valutazione'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
