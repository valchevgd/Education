<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Part;
use AppBundle\Form\PartType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartController extends Controller
{

    /**
     * @Route("/part/add", name="add_part")
     * @param Request $request
     * @return Response
     */
    public function addAction(Request $request)
    {
        $part = new Part();
        $form = $this->createForm(PartType::class, $part);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($part);
            $em->flush();

            return $this->redirectToRoute('all_parts');
        }


        return $this->render('part/add.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/parts/all", name="all_parts")
     * @return Response
     */
    public function allAction()
    {
        $parts = $this->getDoctrine()
            ->getRepository(Part::class)
            ->findAll();

        return $this->render('part/all.html.twig',[
            'parts' => $parts
        ]);
    }

    /**
     * @Route("/part/edit/{id}", name="edit_part")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function editAction(Request $request, int $id)
    {

        $part = $this->getDoctrine()
            ->getRepository(Part::class)
            ->find($id);

        $form = $this->createFormBuilder($part)
            ->add('price', NumberType::class)
            ->add('quantity', NumberType::class)
            ->add('Edit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->merge($part);
            $em->flush();

            return $this->redirectToRoute('all_parts');
        }

        return $this->render('part/edit.html.twig', [
            'form' => $form->createView(),
            'part' => $part
        ]);

    }

    /**
     * @Route("/part/delete/{id}", name="delete_part")
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function deleteAction(Request $request, int $id)
    {
        $partRepo = $this->getDoctrine()
            ->getRepository(Part::class)
            ->findPart($id);

        $part = $this->getDoctrine()
            ->getRepository(Part::class)
            ->find($id);

        $form = $this->createFormBuilder()
            ->add('Delete', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($part);
            $em->flush();

            return $this->redirectToRoute('all_parts');
        }

        return $this->render('part/delete.html.twig', [
            'form' => $form->createView(),
            'part' => $partRepo
        ]);
    }
}
