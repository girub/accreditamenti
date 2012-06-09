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
class CongressoController extends Controller
{
    /**
     * Lists all Congresso entities.
     * 
     * @Route("/", name="congresso")
     * @Template()
     */
    public function indexAction()
    {
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
    public function mostraTuttiAction()
    {
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
    public function showAction($id)
    {
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
    public function newAction()
    {
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
    public function createAction()
    {
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
    public function editAction($id)
    {
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

    private function getCongressoUploadDirImmagini(Congresso $congresso) {
        return $_SERVER['DOCUMENT_ROOT'] . "/resource/img/" . $congresso->getId();
    }

    private function getCongressoUploadDirProgramma(Congresso $congresso) {
        return $_SERVER['DOCUMENT_ROOT'] . "/resource/prog/" . $congresso->getId();
    }

    /**
     * Modifica una entità Congresso esistente
     *
     * @Route("/{id}/update", name="congresso_update")
     * @Method("post")
     * @Template("AccreditamentiCongressiBundle:Congresso:edit.html.twig")
     */
    public function updateAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();

        $congresso = $em->getRepository('AccreditamentiCongressiBundle:Congresso')->find($id);

        if (!$congresso) {
            throw $this->createNotFoundException('Unable to find Congresso entity.');
        }

        $editForm = $this->createForm(new CongressoType(), $congresso);
        $deleteForm = $this->createDeleteForm($id);
        $editForm->bindRequest($this->getRequest());

        if ($editForm->isValid()) {

            if (!($editForm['manifesto']->getData() === NULL)) {

                // Upload manifesto
                $extension = $editForm['manifesto']->getData()->guessExtension();
                if (!$extension) {
                    // l'estensione non può essere indovinata
                    $extension = 'bin';
                }
                //cambiare
                $manifesto = rand(1, 99999) . '.' . $extension;
                $dir = $this->getCongressoUploadDirImmagini($congresso);
                @mkdir($dir, 0775);

                $filename = $manifesto;
                $editForm['manifesto']->getData()->move($dir, $filename);
                $congresso->setManifesto($filename);
            }



 if (!($editForm['path_pdf_programma']->getData() === NULL)) {
            // Upload Programma pdf
            $ext_programma = $editForm['path_pdf_programma']->getData()->guessExtension();
            if (!$ext_programma) {
                // l'estensione non può essere indovinata
                $ext_programma = 'txt';
            }

            //cambiare
            $programma = rand(1, 99999) . '.' . $ext_programma;
            //die($programma);
            $dir = $this->getCongressoUploadDirProgramma($congresso);

            @mkdir($dir, 0775);

            $filename_prog = $programma;

            $editForm['path_pdf_programma']->getData()->move($dir, $filename_prog);

            $congresso->setPathPdfProgramma($filename_prog);

 }
            //die($programma);






            $em->persist($congresso);
            $em->flush();

            return $this->redirect($this->generateUrl('congresso_edit', array(
                                'id' => $id
                            )));
        }

        return array(
            'entity' => $congresso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Congresso entity.
     *
     * @Route("/{id}/deletemanifesto", name="congresso_delete_manifesto")
     */

    public function removeManifestoAction($id) {


        $em = $this->getDoctrine()->getEntityManager();

        $congresso = $this->getDoctrine()
                ->getRepository('AccreditamentiCongressiBundle:Congresso')
                ->find($id);

        if (!$congresso) {
            throw $this->createNotFoundException('Nessun prodotto trovato per l\'id ' . $id);
        }



        unlink($this->getCongressoUploadDirImmagini($congresso) . '/' . $congresso->getManifesto());
        $congresso->setManifesto('');



        $em->persist($congresso);
        $em->flush();

        return $this->redirect($this->generateUrl('congresso_edit', array(
                            'id' => $id
                        )));
    }

    /**
     * Deletes a Congresso entity.
     *
     * @Route("/{id}/delete", name="congresso_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
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

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
