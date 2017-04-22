<?php

namespace Esprit\GalerieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\GalerieBundle\Entity\Artiste;
use Esprit\GalerieBundle\Form\ArtisteType;

/**
 * Artiste controller.
 *
 */
class ArtisteController extends Controller
{

    /**
     * Lists all Artiste entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritGalerieBundle:Artiste')->findAll();

        return $this->render('EspritGalerieBundle:Artiste:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Artiste entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Artiste();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('artiste_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritGalerieBundle:Artiste:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Artiste entity.
     *
     * @param Artiste $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Artiste $entity)
    {
        $form = $this->createForm(new ArtisteType(), $entity, array(
            'action' => $this->generateUrl('artiste_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Artiste entity.
     *
     */
    public function newAction()
    {
        $entity = new Artiste();
        $form   = $this->createCreateForm($entity);

        return $this->render('EspritGalerieBundle:Artiste:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Artiste entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritGalerieBundle:Artiste')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Artiste entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritGalerieBundle:Artiste:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Artiste entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritGalerieBundle:Artiste')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Artiste entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritGalerieBundle:Artiste:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Artiste entity.
    *
    * @param Artiste $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Artiste $entity)
    {
        $form = $this->createForm(new ArtisteType(), $entity, array(
            'action' => $this->generateUrl('artiste_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Artiste entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritGalerieBundle:Artiste')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Artiste entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('artiste_edit', array('id' => $id)));
        }

        return $this->render('EspritGalerieBundle:Artiste:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Artiste entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritGalerieBundle:Artiste')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Artiste entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('artiste'));
    }

    /**
     * Creates a form to delete a Artiste entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('artiste_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
