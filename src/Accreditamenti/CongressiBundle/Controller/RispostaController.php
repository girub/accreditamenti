<?php

namespace Accreditamenti\CongressiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Accreditamenti\CongressiBundle\Entity\Risposta;
use Accreditamenti\CongressiBundle\Form\RispostaType;
use Accreditamenti\CongressiBundle\Form\RispostaCustomerSatisfactionType;

/**
 * Risposta controller.
 *
 * @Route("/risposta")
 */
class RispostaController extends Controller {

    /**
     * Lists all Risposta entities.
     *
     * @Route("/", name="risposta")
     * @Template()
     */
    public function indexAction($domanda_id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AccreditamentiCongressiBundle:Risposta')
                ->findAll();

        return array(
            'entities' => $entities,
            'domanda' => null
        );
    }

    /**
     * Finds and displays a Risposta entity.
     *
     * @Route("/{id}/show", name="risposta_show")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Risposta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Risposta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Risposta entity.
     *
     * @Route("/new/ecm/{domanda_id}", name="risposta_ecm_new")
     * @Template()
     */
    public function newEcmAction($domanda_id) {
        $risposta = new Risposta();

        $em = $this->getDoctrine()->getEntityManager();
        $domanda = $em->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->find($domanda_id);

        $risposta->setDomanda($domanda);

        $form = $this->createForm(new RispostaType(), $risposta);

        return array(
            'domanda_id' => $domanda_id,
            'entity' => $risposta,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to create a new Risposta entity.
     *
     * @Route("/new/cs/{domanda_id}", name="risposta_cs_new")
     * @Template()
     */
    public function newCustomerSatisfactionAction($domanda_id) {
        $risposta = new Risposta();

        $em = $this->getDoctrine()->getEntityManager();
        $domanda = $em->getRepository('AccreditamentiCongressiBundle:Domanda')
                ->find($domanda_id);

        $risposta->setDomanda($domanda);

        $form = $this->createForm(new RispostaCustomerSatisfactionType(), $risposta);

        return array(
            'domanda_id' => $domanda_id,
            'entity' => $risposta,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Risposta entity.
     *
     * @Route("/create/ecm", name="risposta_ecm_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Risposta:newEcm.html.twig")
     */
    public function createEcmAction() {
        $risposta = new Risposta();
        $request = $this->getRequest();
        $form = $this->createForm(new RispostaType(), $risposta);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($risposta);
            $em->flush();

            return $this->redirect($this->generateUrl('questionarioecm_show', array('id' => $risposta->getDomanda()->getQuestionarioecm()->getId())));
        }

        return array(
            'entity' => $risposta,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Risposta entity.
     *
     * @Route("/create/cs", name="risposta_cs_create")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Risposta:newCustomerSatisfaction.html.twig")
     */
    public function createCustomerSatisfactionAction() {
        $risposta = new Risposta();
        $request = $this->getRequest();
        $form = $this->createForm(new RispostaCustomerSatisfactionType(), $risposta);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($risposta);
            $em->flush();

            return $this->redirect($this->generateUrl('questionario_customer_satisfaction_show', array('id' => $risposta->getDomanda()->getQuestionarioCustomerSatisfaction()->getId())));
        }

        return array(
            'entity' => $risposta,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Risposta entity.
     *
     * @Route("/{id}/edit", name="risposta_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AccreditamentiCongressiBundle:Risposta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Risposta entity.');
        }

        $editForm = $this->createForm(new RispostaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Risposta entity.
     *
     * @Route("/{id}/update", name="risposta_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Risposta:edit.html.twig")
     */
    public function updateAction($id) {
        //$risposta = new Risposta();
        
        $em = $this->getDoctrine()->getEntityManager();
        $risposta = $em->getRepository('AccreditamentiCongressiBundle:Risposta')->find($id);

        if (!$risposta) {
            throw $this->createNotFoundException('Unable to find Risposta entity.');
        }
        $editForm = $this->createForm(new RispostaType(), $risposta);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($risposta);
            $em->flush();
            
             return $this->redirect($this->generateUrl('questionarioecm_show', array('id' => $risposta->getDomanda()->getQuestionarioecm()->getId())));
            //return $this->redirect($this->generateUrl('risposta_edit', array('id' => $id)));
        }

        return array(
            'entity' => $risposta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
      
        
    }

    /**
     * Deletes a Risposta entity.
     *
     * @Route("/{id}/delete", name="risposta_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AccreditamentiCongressiBundle:Risposta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Risposta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('risposta'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
